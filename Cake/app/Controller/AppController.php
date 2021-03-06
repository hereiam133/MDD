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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
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
		
	public $helpers = array('Session', 'Facebook.Facebook');

	public $components = array(
        
        'Session',
        'Cookie',
	
        'Auth' => array(
     
           /* 'loginRedirect' => array('controller' => 'posts', 'action' => 'user'), */
            'logoutRedirect' => array('controller' => 'posts', 'action' => 'index'),
            'authorize' => array('Controller'),
	     'authorizedActions' => array('index','view')
        ),
	'Facebook.Connect' => array('model' => 'User')
        
   
        
    );
    
    public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
}


    public function beforeFilter() {
        
        $this->set('facebookUser', $this->Connect->user());
        $this->set('facebook_id', $this->Connect->user('id'));
	$this->set('author', $this->Connect->user('role'));
        $this->set('username', $this->Connect->user('username'));
	 $this->Auth->allow('logout');
	  $this->Auth->allow('posts', 'faq');
	$this->Auth->logoutRedirect = '/';
        $this->Auth->allow('login');
	$this->Auth->allow('terms');
        $this->Auth->allow('index', 'view');
        
        if($this->Auth->user('role') == 'admin'){
     $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'home');
}else{
     $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'user');
}
    }
}
