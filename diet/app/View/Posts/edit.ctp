<h3>今日の記録を編集する</h3>

<?php
echo $this->Form->create('Post',array('action'=>'edit'));
echo $this->Form->input('morning',array('label'=>'朝'));
echo $this->Form->input('lunch',array('label'=>'昼'));
echo $this->Form->input('dinner',array('label'=>'夜'));
echo $this->Form->input('memo',array('label'=>'メモ'));
echo $this->Form->input('weight',array('label'=>'体重'));
echo $this->Form->end('save');
?>
