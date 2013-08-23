<?php
App::uses('AppController', 'Controller');
/**
 * ParticipanteTiposSolicitudCotizaciones Controller
 *
 * @property ParticipanteTiposSolicitudCotizacione $ParticipanteTiposSolicitudCotizacione
 * @property PaginatorComponent $Paginator
 */
class ParticipanteTiposSolicitudCotizacionesController extends AppController {

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
		$this->ParticipanteTiposSolicitudCotizacione->recursive = 0;
		$this->set('participanteTiposSolicitudCotizaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParticipanteTiposSolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid participante tipos solicitud cotizacione'));
		}
		$options = array('conditions' => array('ParticipanteTiposSolicitudCotizacione.' . $this->ParticipanteTiposSolicitudCotizacione->primaryKey => $id));
		$this->set('participanteTiposSolicitudCotizacione', $this->ParticipanteTiposSolicitudCotizacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParticipanteTiposSolicitudCotizacione->create();
			if ($this->ParticipanteTiposSolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The participante tipos solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipos solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParticipanteTiposSolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid participante tipos solicitud cotizacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ParticipanteTiposSolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The participante tipos solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipos solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('ParticipanteTiposSolicitudCotizacione.' . $this->ParticipanteTiposSolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->ParticipanteTiposSolicitudCotizacione->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ParticipanteTiposSolicitudCotizacione->id = $id;
		if (!$this->ParticipanteTiposSolicitudCotizacione->exists()) {
			throw new NotFoundException(__('Invalid participante tipos solicitud cotizacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParticipanteTiposSolicitudCotizacione->delete()) {
			$this->Session->setFlash(__('Participante tipos solicitud cotizacione deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participante tipos solicitud cotizacione was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
