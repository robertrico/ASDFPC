<?php class PostsController extends AppController {
	public $helpers = array('Html','Form');
	public function index(){
		$this->set('posts',$this->Post->find('all'));
	}
	public function view($id=null){
		if(!$id){
			throw new NotFoundException(__('Not Found'));
		}
		$post = $this->Post->findById($id);
		if (!$post){
			throw new NotFoundException(__('Not Found'));
		}
		$this->set('post',$post);
	}
	public function add() {
		if ($this->request->is('post')) {
		//Added this line
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		}
}
	public function edit($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid Post'));
		}
		
		$post = $this->Post->findById($id);
		if (!$post){
			throw new NotFoundException(__('Invalid Post'));
		}
		
		if($this->request->is(array('post', 'put'))){
			$this->Post->id = $id;
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Post not saved'));
		}
		if (!$this->request->data){
			$this->request->data = $post;
		}
	}
	public function delete($id){
		if ($this->request->is('get')){
			throw new MethodNotAllowed();
		}
		if ($this->Post->delete($id)){
			$this->Session->setFlash(__('Post %s has been deleted'),h($id));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
	public function isAuthorized($user){
		if($this->action==='add'){
			return true;
		}
		
		if (in_array($this->action,array('edit','delete'))){
			$postId = (int) $this->request->params['pass'][0];
			if ($this->Post->isOwnedBy($postId, $user['id'])){
				return true;
			}
		}
		return parent::isAuthorized($user);
	}

}
?>