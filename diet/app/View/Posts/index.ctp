<h2>
  <?php
    $year = date("Y");
    $month = date("n");
    $day = date("j");
    $today = date("Y-m-j");

    echo $year."年".$month."月".$day."日";
  ?>
</h2>

<?php debug($post); ?>

<h3>朝</h3><p><?php echo h($post['Post']['morning']); ?></p>
<hr>
<h3>昼</h3><p><?php echo h($post['Post']['lunch']); ?></p>
<hr>
<h3>夜</h3><p><?php echo h($post['Post']['dinner']); ?></p>
<hr>
<h3>体重</h3><p><?php echo h($post['Post']['weight']); ?>kg</p>
<hr>
<h3>前日の体重比</h3><p><?php //echo h($post['Post']['difference']); ?>
<hr>
<p id="edit"><?php echo $this->Html->link('今日の記録を編集する', array('action'=>'edit', $post['Post']['id'])); ?></p>

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
