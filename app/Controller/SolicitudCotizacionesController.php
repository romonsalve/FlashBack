<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudCotizaciones Controller
 *
 * @property SolicitudCotizacione $SolicitudCotizacione
 */
class SolicitudCotizacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SolicitudCotizacione->recursive = 0;
		$this->set('solicitudCotizaciones', $this->paginate());
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
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'));
			}
		}
		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list');
		$this->set(compact('estados', 'eventoTipos', 'clientes', 'recintoTipos'));
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
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->SolicitudCotizacione->find('first', $options);
		}
		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list');
		$this->set(compact('estados', 'eventoTipos', 'clientes', 'recintoTipos'));
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
			$this->Session->setFlash(__('Solicitud cotizacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitud cotizacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
