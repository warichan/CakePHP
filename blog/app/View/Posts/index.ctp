<?php $this->assign('title', '記事一覧'); ?>
<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post) : ?>
  <li><?php
  //debug($post);
  //echo h($post['Post']['title']);
  echo $this->Html->link($post['Post']['title'], '/posts/view/' .$post['Post']['id']); ?></li>
  <!--第一引数が表示する文字、第二引数がリンク先URL-->
<?php endforeach; ?>
</ul>

<h2>記事投稿</h2>
<?php echo $this->Html->link('記事投稿', array('controller'=>'posts', 'action'=> 'add')); ?>
