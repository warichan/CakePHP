<h2>
<?php
  $date = new DateTime();
  $date->sub(new DateInterval('P1D'));
  echo $date->format('Y'.'年'.'n'.'月'.'j'.'日');
?></h2>

<?php foreach($posts as $post): ?>

  <h3>朝</h3><p><?php echo h($post['Post']['morning']); ?></p>
  <hr>
  <h3>昼</h3><p><?php echo h($post['Post']['lunch']); ?></p>
  <hr>
  <h3>夜</h3><p><?php echo h($post['Post']['dinner']); ?></p>
  <hr>
  <h3>体重</h3><p><?php echo h($post['Post']['weight']); ?>kg</p>
  <hr>
  <h3>前日の体重比</h3><p><?php //echo h($post['Post']['difference']); ?>
<?php endforeach; ?>
