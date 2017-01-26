<h2>
  <?php
    $date = new DateTime();
    $date->sub(new DateInterval('P1D'));
    echo $date->format('Y'.'年'.'n'.'月'.'j'.'日');
  ?>
</h2>

<?php if($post_2) :?>
  <h3>朝</h3><p><?php echo h($post_2['Post']['morning']); ?></p>
  <hr>
  <h3>昼</h3><p><?php echo h($post_2['Post']['lunch']); ?></p>
  <hr>
  <h3>夜</h3><p><?php echo h($post_2['Post']['dinner']); ?></p>
  <hr>
  <h3>体重</h3><p><?php echo h($post_2['Post']['weight']); ?>kg</p>
  <hr>
  <h3>前日の体重比</h3>
  <p>
    <!--昨日の体重と一昨日の体重を比較して、昨日の方が体重が大きかったら体重の前に+記号を付ける-->
    <?php if (h($post_2['Post']['weight'] > $post_3['Post']['weight'])): ?>
    <?php echo '+'.h($post_2['Post']['weight'] - $post_3['Post']['weight']); ?>
    <?php else: ?>
    <?php echo h($post_2['Post']['weight'] - $post_3['Post']['weight']); ?>
    <?php endif; ?>
    kg
  </p>
<?php else :?>
  <p>データが登録されていません</p>
<?php endif; ?>
