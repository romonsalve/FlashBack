<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {
	/********************************************************/
	public function beforeFilter() {
	    parent::beforeFilter();
		/*antes de filtrar los usuarios está permitido agregar*/
		$this->Auth->allow('add');
	}
	/**********************************************************/
	public function isAuthorized($user) {
	    if ($user['role'] == 'gerente') {
	        return true;
	    }
	    if (in_array($this->action, array('edit', 'delete'))) {
	        if ($user['id'] != $this->request->params['pass'][0]) {
	            return false;
	        }
	    }
	    return true;
	}
	/**********************************************************/
	public function login() {
		$this->layout = 'simple';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
				$rol = $this->Auth->User('role');
				/*si inicia sesion, ontiene su rol y lo manda a la vista correspondiente*/
	            $this->redirect($this->Auth->redirect("pages/home"));   
	        } else {
	            $this->Session->setFlash('Usuario/Contraseña inválidos');
	        }
	    }
	}
	/*********************************************************/
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}
	/*********************************************************/
	public $components = array('Paginator');
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
