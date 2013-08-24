<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
	            $this->redirect($this->Auth->redirect( array('controller' => 'pages', 'action' => 'display', $rol)));   
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
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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
		if(!$this->Auth->User('id')){
			$this->layout = 'registro';
		}
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'ferror');
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
				$rol = $this->Auth->User('role');
				if($rol=='gerente'){
					return $this->redirect(array('action' => 'index'));
				}else{
					return $this->redirect("view/".$id);
				}
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->set('user', $this->User->find('first', $options));
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
			$this->Session->setFlash(__('User deleted'), 'fexito');
			$this->redirect($this->Auth->logout());
		}
		$this->Session->setFlash(__('User was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'delete'));
	}
}