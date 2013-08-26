<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

     public $components = array(
        'Session',
        'Auth' => array(
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        	)
        );
     public function rol(){
     	$user = $this->Session->read('Auth.User');
     	return $user['role'];	 
     }
     public function estaAutorizado($rol, $controller, $action){
        $gerenteAutorizado = array(
       	/*controladores*/
        	'actividades' => array('index','view','add','edit','delete','noAutorizado'),
        	'actividadeseventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'bitacoras' => array('index','view','add','edit','delete','noAutorizado'),
	        'clientetipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'clientes' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleadotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleados' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleadoseventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'estados' => array('index','view','add','edit','delete','noAutorizado'),
	        'eventotipos' => array('index','view','add','edit','delete','noAutorizado'), 
	        'eventos' => array('calendario','index','view','add','edit','delete','calendario','noAutorizado'),
	        'eventosrecursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'itinerarioparticipantes' => array('index','view','add','edit','delete','noAutorizado'),
	        'medidas' => array('index','view','add','edit','delete','noAutorizado'),
	        'participantetipossolicitudcotizaciones' => array('index','view','add','edit','delete','noAutorizado'),
	        'participantes' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedades' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedadesrecursotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedadesrecursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'proveedores' => array('index','view','add','edit','delete','noAutorizado'),
	        'proveedoresrecursotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recintotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recintos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recursotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'solicitudcotizaciones' => array('index','view','edit','delete','noAutorizado'),
	        'vehiculotipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'vehiculos' => array('index','view','add','edit','delete','noAutorizado'),
	        'users' => array('index','view','add','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display')
        );
        /***************************************************************************************************/
        $organizadorAutorizado = array(
        	'actividades' => array('index','view','noAutorizado'),
        	'actividades_eventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'bitacoras' => array('index','view','add','edit','delete','noAutorizado'),
	        'cliente_tipos' => array('noAutorizado'),
	        'clientes' => array('index','view','noAutorizado'),
	        'empleado_tipos' => array('index','view','noAutorizado'),
	        'empleados' => array('index','view','noAutorizado'),
	        'empleados_eventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'estados' => array('index','view','noAutorizado'),
	        'evento_tipos' => array('index','view','noAutorizado'),
	        'eventos' => array('calendario','index','view','edit','calendario','noAutorizado'),
	        'eventos_recursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'itinerario_participantes' => array('index','view','add','edit','delete','noAutorizado'),
	        'medidas' => array('index','view','noAutorizado'),
	        'participante_tipos_solicitud_cotizaciones' => array('index','view','noAutorizado'),
	        'participantes' => array('index','view','noAutorizado'),
	        'propiedades' => array('index','view','noAutorizado'),
	        'propiedades_recurso_tipos' => array('noAutorizado'),
	        'propiedades_recursos' => array('noAutorizado'),
	        'proveedores' => array('index','view','noAutorizado'),
	        'proveedores_recurso_tipos' => array('noAutorizado'),
	        'recinto_tipos' => array('index','view','noAutorizado'),
	        'recintos' => array('index','view','noAutorizado'),
	        'recursos_tipos' => array('index','view','noAutorizado'),
	        'recursos' => array('index','view','noAutorizado'),
	        'solicitud_cotizaciones' => array('index','view','noAutorizado'),
	        'vehiculo_tipos' => array('index','view','noAutorizado'),
	        'vehiculos' => array('index','view','noAutorizado'),
	        'users' => array('view','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display','organizador')
        );
        /***************************************************************************************************/
        $empleadoAutorizado = array(
        	'actividades' => array('index','view','noAutorizado'),
        	'actividadeseventos' => array('index','view','noAutorizado'),
	        'bitacoras' => array('noAutorizado'),
	        'clientetipos' => array('noAutorizado'),
	        'clientes' => array('noAutorizado'),
	        'empleadotipos' => array('index','view','noAutorizado'),
	        'empleados' => array('index','view','edit','noAutorizado'),
	        'empleadoseventos' => array('index','view','noAutorizado'),
	        'estados' => array('noAutorizado'),
	        'eventotipos' => array('noAutorizado'),
	        'eventos' => array('calendario','index','view','noAutorizado'),
	        'eventosrecursos' => array('noAutorizado'),
	        'itinerarioparticipantes' => array('noAutorizado'),
	        'medidas' => array('noAutorizado'),
	        'participantetipossolicitudcotizaciones' => array('noAutorizado'),
	        'participantes' => array('noAutorizado'),
	        'propiedades' => array('noAutorizado'),
	        'propiedadesrecursotipos' => array('noAutorizado'),
	        'propiedadesrecursos' => array('noAutorizado'),
	        'proveedores' => array('noAutorizado'),
	        'proveedoresrecursotipos' => array('noAutorizado'),
	        'recintotipos' => array('noAutorizado'),
	        'recintos' => array('noAutorizado'),
	        'recursostipos' => array('noAutorizado'),
	        'recursos' => array('noAutorizado'),
	        'solicitudcotizaciones' => array('noAutorizado'),
	        'vehiculotipos' => array('noAutorizado'),
	        'vehiculos' => array('noAutorizado'),
	        'users' => array('view','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display','empleado')
        );
        /***************************************************************************************************/
        $clienteAutorizado = array(
        	'actividades' => array('noAutorizado'),
        	'actividadeseventos' => array('noAutorizado'),
	        'bitacoras' => array('noAutorizado'),
	        'clientetipos' => array('index','view','noAutorizado'),
	        'clientes' => array('index','view','edit','noAutorizado'),
	        'empleadotipos' => array('index','view','noAutorizado'),
	        'empleados' => array('noAutorizado'),
	        'empleadoseventos' => array('noAutorizado'),
	        'estados' => array('index','view','noAutorizado'),
	        'eventotipos' => array('noAutorizado'),
	        'eventos' => array('index','view','noAutorizado'),
	        'eventosrecursos' => array('noAutorizado'),
	        'itinerarioparticipantes' => array('noAutorizado'),
	        'medidas' => array('noAutorizado'),
	        'participantetipossolicitudcotizaciones' => array('noAutorizado'),
	        'participantes' => array('noAutorizado'),
	        'propiedades' => array('noAutorizado'),
	        'propiedadesrecursotipos' => array('noAutorizado'),
	        'propiedadesrecursos' => array('noAutorizado'),
	        'proveedores' => array('noAutorizado'),
	        'proveedoresrecursotipos' => array('noAutorizado'),
	        'recintotipos' => array('noAutorizado'),
	        'recintos' => array('noAutorizado'),
	        'recursostipos' => array('noAutorizado'),
	        'recursos' => array('noAutorizado'),
	        'solicitudcotizaciones' => array('index','view','add','edit','delete','noAutorizado'),
	        'vehiculotipos' => array('noAutorizado'),
	        'vehiculos' => array('noAutorizado'),
	        'users' => array('view','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display','cliente')
        );
        /***************************************************************************************************/
        $controller = strtolower($controller);
        $controller = str_replace('_','', $controller);


        $action = strtolower($action);
        $action = str_replace('_','', $action);
        if($rol == 'gerente'){
//        if($rol == 'gerente' && isset($gerenteAutorizado[$controller]) && in_array($action, $gerenteAutorizado[$controller]) ||
  //      	strpos($action, 'busca')!==false ){
 	    	$this->layout = 'gerente';
            return true;
        }else if($rol == 'organizador' && isset($organizadorAutorizado[$controller]) && in_array($action, $organizadorAutorizado[$controller]) ||
        	strpos($action, 'busca')!==false ){
 			$this->layout = 'organizador';
 			return true;
        }else if($rol == 'empleado' && isset($empleadoAutorizado[$controller]) && in_array($action, $empleadoAutorizado[$controller]) ||
        	strpos($action, 'busca')!==false ){
            $this->layout = 'empleado';
            return true;
        }else if($rol == 'cliente' && isset($clienteAutorizado[$controller]) && in_array($action, $clienteAutorizado[$controller]) ||
        	strpos($action, 'busca')!==false ){
        	$this->loadModel('Cliente');
        	/*****************************/
        	$user = $this->Session->read('Auth.User');
        	$options = array('conditions' => array('Cliente.user_id'=>$user['id']));
        	$this->set('cl', $this->Cliente->find('first', $options));
        	//debug($this->request->data);
        	/******************************/
        	$this->layout = 'cliente';
            return true;
        }
        else{
        	$this->layout = 'error';
        }
    }
    public function beforeFilter() {
    	$this->set('rol', $this->rol());
    	$rol = $this->Auth->User('role');
    	$this->Auth->allow('login');
        if(!$this->estaAutorizado($rol, $this->request['controller'], $this->request['action'])){
        	if($rol!=null){
            	$this->redirect(array('controller' => 'pages', 'action' => 'noAutorizado'));
       		}
    	}
    }
}
