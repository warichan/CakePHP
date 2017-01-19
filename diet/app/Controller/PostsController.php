<?php

class PostsController extends AppController{
  public function index(){
    $this->set('posts', $this->Post->find('all'));
  }

  public function add() {
    if ($this->request->is('post')){
      if ($this->Post->save($this->request->data)){
        $this->Flash->set('Success!');
        $this->redirect(array('action'=>'index'));
      }else{
        $this->Flash->set('failed!');
      }
    }
  }
  public function edit(){
    
  }
}

?>
