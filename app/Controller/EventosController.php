<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 */
class EventosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->paginate());
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
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		}
		$recintos = $this->Evento->Recinto->find('list');
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact('recintos', 'eventoTipos', 'estadoEventos', 'clientes', 'empleados', 'actividades'));
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
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$recintos = $this->Evento->Recinto->find('list');
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact('recintos', 'eventoTipos', 'estadoEventos', 'clientes', 'empleados', 'actividades'));
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
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
