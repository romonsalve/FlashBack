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

     public function estaAutorizado($rol, $controller, $action){
        $gerenteAutorizado = array(
       	/*controladores*/
        	'actividades' => array('index','view','add','edit','delete','noAutorizado'),
        	'actividades_eventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'bitacoras' => array('index','view','add','edit','delete','noAutorizado'),
	        'cliente_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'clientes' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleado_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleados' => array('index','view','add','edit','delete','noAutorizado'),
	        'empleados_eventos' => array('index','view','add','edit','delete','noAutorizado'),
	        'estados' => array('index','view','add','edit','delete','noAutorizado'),
	        'evento_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'eventos' => array('index','view','add','edit','delete','calendario','noAutorizado'),
	        'eventos_recursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'itinerario_participantes' => array('index','view','add','edit','delete','noAutorizado'),
	        'medidas' => array('index','view','add','edit','delete','noAutorizado'),
	        'participante_tipos_solicitud_cotizaciones' => array('index','view','add','edit','delete','noAutorizado'),
	        'participantes' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedades' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedades_recurso_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'propiedades_recursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'proveedores' => array('index','view','add','edit','delete','noAutorizado'),
	        'proveedores_recurso_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recinto_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recintos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recursos_tipos' => array('index','view','add','edit','delete','noAutorizado'),
	        'recursos' => array('index','view','add','edit','delete','noAutorizado'),
	        'solicitud_cotizaciones' => array('index','view','add','edit','delete','noAutorizado'),
	        'vehiculo_tipos' => array('index','view','add','edit','delete','noAutorizado'),
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
	        'eventos' => array('index','view','edit','calendario','noAutorizado'),
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
        	'actividades_eventos' => array('index','view','noAutorizado'),
	        'bitacoras' => array('noAutorizado'),
	        'cliente_tipos' => array('noAutorizado'),
	        'clientes' => array('noAutorizado'),
	        'empleado_tipos' => array('index','view','noAutorizado'),
	        'empleados' => array('index','view','edit','noAutorizado'),
	        'empleados_eventos' => array('index','view','noAutorizado'),
	        'estados' => array('noAutorizado'),
	        'evento_tipos' => array('noAutorizado'),
	        'eventos' => array('index','view','noAutorizado'),
	        'eventos_recursos' => array('noAutorizado'),
	        'itinerario_participantes' => array('noAutorizado'),
	        'medidas' => array('noAutorizado'),
	        'participante_tipos_solicitud_cotizaciones' => array('noAutorizado'),
	        'participantes' => array('noAutorizado'),
	        'propiedades' => array('noAutorizado'),
	        'propiedades_recurso_tipos' => array('noAutorizado'),
	        'propiedades_recursos' => array('noAutorizado'),
	        'proveedores' => array('noAutorizado'),
	        'proveedores_recurso_tipos' => array('noAutorizado'),
	        'recinto_tipos' => array('noAutorizado'),
	        'recintos' => array('noAutorizado'),
	        'recursos_tipos' => array('noAutorizado'),
	        'recursos' => array('noAutorizado'),
	        'solicitud_cotizaciones' => array('noAutorizado'),
	        'vehiculo_tipos' => array('noAutorizado'),
	        'vehiculos' => array('noAutorizado'),
	        'users' => array('view','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display','empleado')
        );
        /***************************************************************************************************/
        $clienteAutorizado = array(
        	'actividades' => array('noAutorizado'),
        	'actividades_eventos' => array('noAutorizado'),
	        'bitacoras' => array('noAutorizado'),
	        'cliente_tipos' => array('index','view','noAutorizado'),
	        'clientes' => array('index','view','edit','noAutorizado'),
	        'empleado_tipos' => array('index','view','noAutorizado'),
	        'empleados' => array('noAutorizado'),
	        'empleados_eventos' => array('noAutorizado'),
	        'estados' => array('index','view','noAutorizado'),
	        'evento_tipos' => array('noAutorizado'),
	        'eventos' => array('index','view','noAutorizado'),
	        'eventos_recursos' => array('noAutorizado'),
	        'itinerario_participantes' => array('noAutorizado'),
	        'medidas' => array('noAutorizado'),
	        'participante_tipos_solicitud_cotizaciones' => array('noAutorizado'),
	        'participantes' => array('noAutorizado'),
	        'propiedades' => array('noAutorizado'),
	        'propiedades_recurso_tipos' => array('noAutorizado'),
	        'propiedades_recursos' => array('noAutorizado'),
	        'proveedores' => array('noAutorizado'),
	        'proveedores_recurso_tipos' => array('noAutorizado'),
	        'recinto_tipos' => array('noAutorizado'),
	        'recintos' => array('noAutorizado'),
	        'recursos_tipos' => array('noAutorizado'),
	        'recursos' => array('noAutorizado'),
	        'solicitud_cotizaciones' => array('index','view','add','edit','delete','noAutorizado'),
	        'vehiculo_tipos' => array('noAutorizado'),
	        'vehiculos' => array('noAutorizado'),
	        'users' => array('view','edit','delete','login','logout','noAutorizado'),
	        'pages' => array('action' => 'display','cliente')
        );
        /***************************************************************************************************/
        $controller = strtolower($controller);
        $action = strtolower($action);
        if($rol == 'gerente' && isset($gerenteAutorizado[$controller]) && in_array($action, $gerenteAutorizado[$controller])){
        	$this->layout = 'gerente';
            return true;
        }else if($rol == 'organizador' && isset($organizadorAutorizado[$controller]) && in_array($action, $organizadorAutorizado[$controller])){
 			$this->layout = 'organizador';
 			return true;
        }else if($rol == 'empleado' && isset($empleadoAutorizado[$controller]) && in_array($action, $empleadoAutorizado[$controller])){
            $this->layout = 'empleado';
            return true;
        }else if($rol == 'cliente' && isset($clienteAutorizado[$controller]) && in_array($action, $clienteAutorizado[$controller])){
        	$this->layout = 'cliente';
            return true;
        }
    }
    public function beforeFilter() {
    	$rol = $this->Auth->User('role');
    	$this->Auth->allow('login');
        if(!$this->estaAutorizado($rol, $this->request['controller'], $this->request['action'])){
        	if($rol!=null){
            	$this->redirect(array('controller' => 'pages', 'action' => 'noAutorizado'));
       		}
    	}
    }
}
