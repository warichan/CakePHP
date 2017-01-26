<h3>今日の記録を登録する</h3>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('morning',array('label'=>'朝'));
echo $this->Form->input('lunch',array('label'=>'昼'));
echo $this->Form->input('dinner',array('label'=>'夜'));
echo $this->Form->input('weight',array('label'=>'体重'));
echo $this->Form->end('save');
?>
