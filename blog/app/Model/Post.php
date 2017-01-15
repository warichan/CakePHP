<?php

class Post extends AppModel{
  public $hasMany = 'Comment';
  //Postは沢山のCommentを持っている

  public $validate = array(
    'title' => array(
      'rule' => 'notEmpty'
    ),
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
}

?>
