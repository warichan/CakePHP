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

  public function edit($id = null) {
    $this->Post->id = $id;
    if ($this->request->is('get')){
        $this->request->data = $this->Post->read();
        //編集フォームに元々登録されていたデータの中身を入れる
    } else {
      if ($this->Post->save($this->request->data)){
          $this->Flash->set('Success!');
          $this->redirect(array('action'=>'index'));
      }else{
        $this->Flash->set('failed!');
      }
    }
  }

  public function delete($id) {
    if ($this->request->is('get')){
        throw new MethodNotAllowedException();
        //URLで/posts/delete/1のようにアクセスされた時には例外(エラー)を返す
    }
    if ($this->request->is('ajax')) {
        if($this->Post->delete($id)) {
           $this->autoRender = false;
           $this->aytoLayout = false;
           $response = array('id'=>$id);
           $this->header('Content-Type: application/json');
           echo json_encode($response);
           exit();
        }
    }
    $this->redirect(array('action'=>'index'));
  }
}

?>
