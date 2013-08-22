<?php
class User extends AppModel {
	public $name = 'User';
	public $displayField = 'name';
	
	public $validate = array(
		'name'=>array(
			'Please enter your name.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Por favor ingrese su nombre.'
			)
		),
		'username'=>array(
			'The username must be between 5 and 15 characters.'=>array(
				'rule'=>array('between', 5, 15),
				'message'=>'El nombre de usuario debe poseer entre 5 y 15 caracteres.'
			),
			'That username has already been taken'=>array(
				'rule'=>'isUnique',
				'message'=>'El nombre de usuario ya existe.'
			)
		),
		'email'=>array(
			'Valid email'=>array(
				'rule'=>array('email'),
				'message'=>'Por favor ingrese un mail válido'
			)
		),
		'password'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty',
		        'message'=>'Por favor ingrese su contraseña'
		    ),
		    'Match passwords'=>array(
		        'rule'=>'matchPasswords',
		        'message'=>'Las contraseñas no coinciden'
		    )
		),
		'password_confirmation'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty',
		        'message'=>'Por favor confirme su contraseña'
		    )
		),
		'role' => array(
            'valid' => array(
                'rule' => array('inList', array('gerente', 'organizador','empleado','cliente')),
                'message' => 'Ingrese un rol válido',
                'allowEmpty' => false
            )
        )
	);
	
	public function matchPasswords($data) {
	    if ($data['password'] == $this->data['User']['password_confirmation']) {
	        return true;
	    }
	    $this->invalidate('password_confirmation', 'Las contraseñas no coinciden.');
	    return false;
	}
	
	public function beforeSave($option = login) {
	    if (isset($this->data['User']['password'])) {
	        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	    }
	    return true;
	}
}
?>
