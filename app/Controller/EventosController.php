<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 * @property PaginatorComponent $Paginator
 */
class EventosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->Paginator->paginate());
	}
	public function calendario() {
		if ($this->request->is('post')) {
			$id= $_POST['id'];
			$fecha = $_POST['fecha'];
			$fecha_t = $_POST['fecha_t'];
			if($fecha_t==null) $fecha_t = $fecha;
			$data = array('id' =>$id, 'fecha_de_inicio' => $fecha, 'fecha_de_termino' => $fecha_t); 
		 	$this->Evento->save($data);
		 }
		
		$this->set('posts', $this->Evento->find('all'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('The evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		}
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$recintos = $this->Evento->Recinto->find('list');
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$recursos = $this->Evento->Recurso->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact('eventoTipos', 'clientes', 'recintos', 'estadoEventos', 'recursos', 'empleados', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('The evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$recintos = $this->Evento->Recinto->find('list' , array(
				'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_recinto_tipos',
                        'alias' => 'eventoTipoRecintoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTipoRecintoTipo.recinto_tipo_id = Recinto.recinto_tipo_id',
                        	'eventoTipoRecintoTipo.evento_tipo_id' => $this->request->data['Evento']['evento_tipo_id']
                        )
                    )
                  ))
         );
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$recursos = $this->Evento->Recurso->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact($id));
		$this->set(compact('eventoTipos', 'clientes', 'recintos', 'estadoEventos', 'recursos', 'empleados', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evento->delete()) {
			$this->Session->setFlash(__('Evento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

	public function buscarRecinto($eventoTipo = null,  $id = null){

		$this->Evento->recursive = -1;
		if ($this->Evento->exists($id)) {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$recintos = $this->Evento->Recinto->find('list',array(             
                  'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_recinto_tipos',
                        'alias' => 'eventoTipoRecintoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTipoRecintoTipo.recinto_tipo_id = Recinto.recinto_tipo_id',
                        	'eventoTipoRecintoTipo.evento_tipo_id' => $eventoTipo )
                    )
     	  )));
		$this->set(compact('recintos'));
	}
	public function buscarActividades($eventoTipo = null,  $id = null){

		$this->Evento->recursive = -1;
		if ($this->Evento->exists($id)) {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$actividades = $this->Evento->Actividade->find('list',array(             
                  'joins' =>
                   array(
                    array(
                        'table' => 'actividades_evento_tipos',
                        'alias' => 'tabla',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('tabla.actividade_id = Actividade.id',
                        	'tabla.evento_tipo_id' => $eventoTipo )
                    )
     	  )));
		$this->set(compact('actividades'));
	}
	public function buscarRecursos($eventoTipo = null,  $id = null){
		$this->Evento->recursive = -1;
		if ($this->Evento->exists($id)) {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$recursos = $this->Evento->Recurso->find('list',array(             
                  'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_recurso_tipos',
                        'alias' => 'tabla',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('tabla.recurso_tipo_id = Recurso.recurso_tipo_id',
                        	'tabla.evento_tipo_id' => $eventoTipo )
                    )
     	  )));
		$this->set(compact('recursos'));
	}
}

