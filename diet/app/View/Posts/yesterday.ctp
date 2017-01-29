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
  <h3>メモ</h3><p><?php echo h($post_2['Post']['memo']); ?><p>
  <hr>
  <h3>体重</h3><p><?php echo h($post_2['Post']['weight']); ?>kg</p>
  <hr>
  <h3>前日の体重比</h3>
  <p>
    <?php if(!($post_3)): ?>
      <p>一昨日の記録がないため、比較ができません</p>
    <!--昨日の体重と一昨日の体重を比較して、昨日の方が体重が大きかったら体重の前に+記号を付ける-->
    <?php elseif (h($post_2['Post']['weight'] > $post_3['Post']['weight'])): ?>
      <?php echo '+'.h($post_2['Post']['weight'] - $post_3['Post']['weight']); ?>kg
    <?php else: ?>
      <?php echo h($post_2['Post']['weight'] - $post_3['Post']['weight']); ?>kg
    <?php endif; ?>
  </p>
<?php else :?>
  <p>データが登録されていません</p>
<?php endif; ?>
