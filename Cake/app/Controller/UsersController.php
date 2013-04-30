<?php
	class UsersController extends AppController {

    public function beforeFilter() {
        $this->Auth->autoRedirect = true;
        parent::beforeFilter();
        $this->Auth->allow('add','contact');
	$this->set('facebookUser', $this->Connect->user());
        $this->set('facebook_id', $this->Connect->user('id'));
	$this->set('author', $this->Connect->user('role'));
        $this->set('username', $this->Connect->user('username'));
    } 
    
function beforeFacebookSave(){
    $this->Connect->authUser['User']['username'] = $this->Connect->user('username');
    $this->Connect->authUser['User']['role'] = 'author';
return true; //Must return true or will not save.
}
function afterFacebookLogin(){
    //Logic to happen after successful facebook login.
    $this->redirect($this->Auth->redirect('posts/user'));
}

    public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
        	if($this->Auth->user('role') == 'admin'){
        	return $this->redirect($this->Auth->redirect('posts/home'));
       }else{
       return $this->redirect($this->Auth->redirect('posts/user'));
       }
       
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
}

public function logout() {
	 
	    $this->Session->destroy();
        $this->redirect($this->Auth->logout());	
} 

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        $this->Session->destroy();

        
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect($this->Auth->redirect('posts/home'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	public function contact($user_id=null) {
		if(is_numeric($user_id)){
			if(!$this->Auth->user('id')){
				$this->redirect(array('action'=>'login'));
			}
			$this->User->id=$user_id;
			if(!$this->User->exists()){
			   throw new NotFoundException(__('Invalid user'));
			}
			$reported_user=$this->User->field('username');
			$this->set(compact('reported_user'));
		}
		if($this->request->is('post')){
					if(isset($reported_user)){$this->request->data['Contact']['message'].="\r\n Report User: {$reported_user}";}

					if(empty($this->request->data['Contact']['email']) || empty($this->request->data['Contact']['name']) || empty($this->request->data['Contact']['message'])){
					$this->Session->setFlash(__('Please Fill In All The Fields'),'default');
					return false;
}
			App::uses('CakeEmail', 'Network/Email');
			$Email = new CakeEmail();

			

if(   $Email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['name']))
    			->to('hereiam133@gmail.com')
    			->subject('Contact Form Request')
    			->send($this->request->data['Contact']['message'])
    			
   ){	 
	 $this->Session->setFlash(__('Contact form sent successfully!'),'default',array('class'=>'success'));}
else{
		$this->Session->setFlash(__('Contact form was Not Submitted.'),'default');
}



		}
	}
	
}
?>