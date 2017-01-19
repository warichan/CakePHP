<?php

class PostsController extends AppController{
  public function index(){
    $this->set('posts', $this->Post->find('all'));
  }

  public function add() {
    if ($this->request->is('post')){
      if ($this->Post->save($this->request->data)){
        $this->Flash->set('登録完了！');
        $this->redirect(array('action'=>'index'));
      }else{
        $this->Flash->set('登録できませんでした…');
      }
    }
  }

  public function edit($id = null) {
      $this->Post->id = $id;
      if ($this->request->is('get')) {
          $this->request->data = $this->Post->read();
      } else {
          if ($this->Post->save($this->request->data)) {
              $this->Flash->set('編集完了！');
              $this->redirect(array('action'=>'index'));
          } else {
              $this->Flash->set('編集できませんでした…');
        }
      }
  }
}

?>
