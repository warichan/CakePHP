<?php

class PostsController extends AppController{
  public $helper = array('Html', 'Form');

  public function index() {
    $this->set('posts', $this->Post->find('all'));
    //posts変数にPostのデータを全て入れる
  }

  public function view($id = null) {
    $this->Post->id = $id;
    $this->set('post', $this->Post->read());
    //$idを$this->Post->idに代入したものが$this->Postに入って、readで読み込まれる
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
}

?>
