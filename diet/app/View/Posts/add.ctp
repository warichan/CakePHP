<h3>今日の記録を登録する</h3>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('morning');
echo $this->Form->input('lunch');
echo $this->Form->input('dinner');
echo $this->Form->input('weight');
echo $this->Form->end('save');
?>
