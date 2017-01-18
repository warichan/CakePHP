<h3>レコーディングダイエット</h3>

<h2>
  <?php
    $year = date("Y");
    $month = date("n");
    $day = date("j");

    echo $year."年".$month."月".$day."日";
  ?>
</h2>

<p><?php echo $this->Html->link('今日の記録を登録する', array('action'=>'add')); ?></p>
