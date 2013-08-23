<?php
App::uses('AppController', 'Controller');
/**
 * ParTipSolCots Controller
 *
 * @property ParTipSolCot $ParTipSolCot
 */
class ParTipSolCotsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ParTipSolCot->recursive = 0;
		$this->set('parTipSolCots', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParTipSolCot->exists($id)) {
			throw new NotFoundException(__('Invalid par tip sol cot'));
		}
		$options = array('conditions' => array('ParTipSolCot.' . $this->ParTipSolCot->primaryKey => $id));
		$this->set('parTipSolCot', $this->ParTipSolCot->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParTipSolCot->create();
			if ($this->ParTipSolCot->save($this->request->data)) {
				$this->Session->setFlash(__('The par tip sol cot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par tip sol cot could not be saved. Please, try again.'));
			}
		}
		$solicitudCotizaciones = $this->ParTipSolCot->SolicitudCotizacione->find('list');
		$participanteTipos = $this->ParTipSolCot->ParticipanteTipo->find('list');
		$this->set(compact('solicitudCotizaciones', 'participanteTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParTipSolCot->exists($id)) {
			throw new NotFoundException(__('Invalid par tip sol cot'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ParTipSolCot->save($this->request->data)) {
				$this->Session->setFlash(__('The par tip sol cot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par tip sol cot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ParTipSolCot.' . $this->ParTipSolCot->primaryKey => $id));
			$this->request->data = $this->ParTipSolCot->find('first', $options);
		}
		$solicitudCotizaciones = $this->ParTipSolCot->SolicitudCotizacione->find('list');
		$participanteTipos = $this->ParTipSolCot->ParticipanteTipo->find('list');
		$this->set(compact('solicitudCotizaciones', 'participanteTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ParTipSolCot->id = $id;
		if (!$this->ParTipSolCot->exists()) {
			throw new NotFoundException(__('Invalid par tip sol cot'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParTipSolCot->delete()) {
			$this->Session->setFlash(__('Par tip sol cot deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Par tip sol cot was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
