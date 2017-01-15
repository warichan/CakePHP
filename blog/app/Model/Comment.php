<?php

class Comment extends AppModel{
  public $belongsTo = 'Post';
  //CommentはPostに属している
}

?>
