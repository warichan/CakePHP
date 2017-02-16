<h2>会員登録</h2>
<?php
echo $this->Form->create('Member');
echo $this->Form->input('username',array('label'=>'ユーザー名','placeholder'=>'example name...'));
echo $this->Form->input('pass',array('label'=>'パスワード','placeholder'=>'example password...','type'=>'password'));
echo $this->Form->end('登録');
?>
