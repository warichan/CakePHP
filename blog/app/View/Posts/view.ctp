<?php $this->assign('title', '記事詳細'); ?>
<h2><?php echo h($post['Post']['title']); ?></h2>

<p><?php echo h($post['Post']['body']); ?></p>
