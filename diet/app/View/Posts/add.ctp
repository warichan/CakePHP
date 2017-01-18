<?php
echo $this->Form->create('Post');
echo $this->Form->input('morning');
echo $this->Form->input('lunch');
echo $this->Form->input('dinner');
echo $this->Form->input('weight');
echo $this->Form->end('save');
?>
