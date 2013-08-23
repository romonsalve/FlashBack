<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudCotizaciones Controller
 *
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property PaginatorComponent $Paginator
 */
class SolicitudCotizacionesController extends AppController {

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
	public function index($estado = null) {
		$this->SolicitudCotizacione->recursive = 0;
		if($estado != null){
			$this->paginate = array(
				'conditions' => array('SolicitudCotizacione.estado_id' => $estado),
				'limit' => 10
			    );
			$this->set('solicitudCotizaciones', $this->Paginator->paginate());

		}else{
			$this->set('solicitudCotizaciones', $this->Paginator->paginate());
		}	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
		$this->set('solicitudCotizacione', $this->SolicitudCotizacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudCotizacione->create();
			if ($this->SolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		}
		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list');
		$participanteTipos = $this->SolicitudCotizacione->ParticipanteTipo->find('list');
		$actividades = $this->SolicitudCotizacione->Actividade->find('list');
		$this->set(compact('estados', 'eventoTipos', 'clientes', 'recintoTipos', 'participanteTipos', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->SolicitudCotizacione->find('first', $options);
		}
		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list');
		$participanteTipos = $this->SolicitudCotizacione->ParticipanteTipo->find('list');
		$actividades = $this->SolicitudCotizacione->Actividade->find('list');
		$this->set(compact('estados', 'eventoTipos', 'clientes', 'recintoTipos', 'participanteTipos', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SolicitudCotizacione->id = $id;
		if (!$this->SolicitudCotizacione->exists()) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SolicitudCotizacione->delete()) {
			$this->Session->setFlash(__('Solicitud cotizacione deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitud cotizacione was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
