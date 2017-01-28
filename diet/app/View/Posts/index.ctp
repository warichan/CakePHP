<h2>
  <?php
    $year = date("Y");
    $month = date("n");
    $day = date("j");
    $today = date("Y-m-j");

    echo $year."年".$month."月".$day."日";
  ?>
</h2>

<?php if($post): ?>
  <h3>朝</h3><p><?php echo h($post['Post']['morning']); ?></p>
  <hr>
  <h3>昼</h3><p><?php echo h($post['Post']['lunch']); ?></p>
  <hr>
  <h3>夜</h3><p><?php echo h($post['Post']['dinner']); ?></p>
  <hr>
  <h3>メモ</h3><p><?php echo h($post['Post']['memo']); ?><p>
  <hr>
  <h3>体重</h3><p><?php echo h($post['Post']['weight']); ?>kg</p>
  <hr>
  <h3>前日の体重比</h3>
  <p>
    <?php if (!($post_2)):?>
      <p>昨日の記録がないため、比較ができません</p>
    <!--今日の体重と昨日の体重を比較して、今日の方が体重が大きかったら体重の前に+記号を付ける-->
    <?php elseif (h($post['Post']['weight'] > $post_2['Post']['weight'])): ?>
      <?php echo '+'.h($post['Post']['weight'] - $post_2['Post']['weight']); ?>kg
    <?php else: ?>
      <?php echo h($post['Post']['weight'] - $post_2['Post']['weight']); ?>kg
    <?php endif; ?>
  </p>
  <hr>
  <p id="edit"><?php echo $this->Html->link('今日の記録を編集する', array('action'=>'edit', $post['Post']['id'])); ?></p>
<?php endif; ?>

<h2>■メニュー</h2>

<p id="add"><?php echo $this->Html->link('今日の記録を登録する', array('action'=>'add')); ?></p>
<p><?php echo $this->Html->link('昨日の記録を確認する', array('action' => 'yesterday')); ?></p>

<script>
  $(function(){
    if($('#edit').length){
      $('#add').hide();
      //edit(編集リンク)がある時は、add(登録リンク)を非表示
    }
  });

  $(function(){
    $('#flashMessage').fadeOut(1000);
  })
</script>
