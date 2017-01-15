<?php

class CommentsController extends AppController{
  public $helper = array('Html', 'Form');

  public function add() {
    if ($this->request->is('post')){
      if ($this->Comment->save($this->request->data)){
          $this->Flash->set('Success!');
          $this->redirect(array('controller'=>'posts', 'action'=>'view', $this->data['Comment']['post_id']));
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
        if($this->Comment->delete($id)) {
           $this->autoRender = false;
           $this->aytoLayout = false;
           $response = array('id'=>$id);
           $this->header('Content-Type: application/json');
           echo json_encode($response);
           exit();
        }
    }
    $this->redirect(array('controller'=>'posts','action'=>'index'));
  }
}

?>
