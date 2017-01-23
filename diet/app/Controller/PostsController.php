<?php

class PostsController extends AppController{
  public function index(){
    $date = new DateTime();
    $today = $date->format('Y'.'-'.'m'.'-'.'d');

    $params = array(
      'conditions'=>array(
        'created BETWEEN ? AND ?'=>array($today.' 00:00:00',$today.' 23:59:59')
      )
    );
    $this->set('post',$this->Post->find('first',$params));
    //今日(00:00:00〜23:59:59)のデータを取得してpostsに渡している
    $this->log($this->Post->getDataSource()->getLog(), LOG_DEBUG);


    /*以下、体重比を計算する為の昨日のデータを取得するコード*/


    $date = new DateTime();
    $date->sub(new DateInterval('P1D'));
    $yesterday = $date->format('Y'.'-'.'m'.'-'.'d');

    $params = array(
      'conditions'=>array(
        'created BETWEEN ? AND ?'=>array($yesterday.' 00:00:00',$yesterday.' 23:59:59')
      )
    );
    $this->set('post_2',$this->Post->find('first',$params));
    //昨日(00:00:00〜23:59:59)のデータを取得してpostsに渡している
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

  public function yesterday(){
    $date = new DateTime();
    $date->sub(new DateInterval('P1D'));
    $yesterday = $date->format('Y'.'-'.'m'.'-'.'d');

    $params = array(
      'conditions'=>array(
        'created BETWEEN ? AND ?'=>array($yesterday.' 00:00:00',$yesterday.' 23:59:59')
      )
    );
    $this->set('post',$this->Post->find('first',$params));
    //昨日(00:00:00〜23:59:59)のデータを取得してpostsに渡している
  }
}


?>
