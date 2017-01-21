<h2>
<?php
  $date = new DateTime();
  $date->sub(new DateInterval('P1D'));
  echo $date->format('Y'.'年'.'n'.'月'.'j'.'日');
?></h2>
