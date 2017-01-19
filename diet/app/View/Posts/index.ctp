<h2>
  <?php
    $year = date("Y");
    $month = date("n");
    $day = date("j");

    echo $year."年".$month."月".$day."日";
  ?>
</h2>

<?php foreach($posts as $post): ?>

  <h3>朝</h3><?php echo h($post['Post']['morning']); ?>
  <hr>
  <h3>昼</h3><?php echo h($post['Post']['lunch']); ?>
  <hr>
  <h3>夜</h3><?php echo h($post['Post']['dinner']); ?>
  <hr>
  <h3>体重</h3><?php echo h($post['Post']['weigth']); ?>
  <hr>
  <h3>前日の体重比</h3>
  <hr>
<?php endforeach; ?>

<p><?php echo $this->Html->link('今日の記録を登録する', array('action'=>'add')); ?></p>
<p><?php echo $this->Html->link('編集',array('action'=>'edit')); ?></p>
