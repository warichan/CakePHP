<?php $this->assign('title', '記事一覧'); ?>
<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post) : ?>
<li id="post_<?php echo h($post['Post']['id']); ?>">
  <?php
  //debug($post);
  //echo h($post['Post']['title']);
    echo $this->Html->link($post['Post']['title'], '/posts/view/' .$post['Post']['id']);
  ?>
  <?php echo $this->Html->link('編集', array('action'=>'edit', $post['Post']['id'])); ?>
  <?php echo $this->Html->link('削除', '#', array('class'=>'delete', 'data-post-id'=>$post['Post']['id'])); ?>
</li>
  <!--第一引数が表示する文字、第二引数がリンク先URL-->
<?php endforeach; ?>
</ul>

<h2>記事投稿</h2>
<?php echo $this->Html->link('記事投稿', array('controller'=>'posts', 'action'=> 'add')); ?>

<script>
  $(function() {
    $('a.delete').click(function(e) {
      <!--削除をクリックされたら以下を実行する-->
        if (confirm('削除して宜しいでしょうか？')) {
          $.post('http://localhost:8000/posts/delete/' + $(this).data('post-id'), {}, function(res) {
            //$.はjQueryという意味と同義
              $('#post_'+res.id).fadeOut();
          }, "json");
      }
      return false;
    });
  });
</script>
