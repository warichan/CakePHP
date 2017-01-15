<?php $this->assign('title', '記事詳細'); ?>
<h2><?php echo h($post['Post']['title']); ?></h2>

<p><?php echo h($post['Post']['body']); ?></p>

<h2>コメント</h2>

<ul>
  <?php if($post['Comment']): ?>
  <?php foreach ($post['Comment'] as $comment): ?>
    <!-- association(Postモデルで$hasMany)する事で、PostsControllerの$this->set('post)の中にcommentの情報も入ってきている -->
  <li id="comment_<?php echo h($comment['id']); ?>" class="comment_count">
    <?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?>　<?php echo $this->Html->link('削除', '#', array('class'=>'delete', 'data-comment-id'=>$comment['id'])); ?>
</li>
  <?php endforeach; ?>
  </li>
<?php else: ?>
  <li><?php echo('コメントはありません'); ?></li>
<?php endif; ?>
</ul>

<h2>コメントを残す</h2>

<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden', 'value'=>$post['Post']['id']));
echo $this->Form->end('save');
?>

<script>
$(function() {
  $('a.delete').click(function(e) {
    if (confirm('削除して宜しいでしょうか？')) {
      $.post('http://localhost:8000/comments/delete/'+$(this).data('comment-id'), {}, function(res) {
        $('#comment_'+res.id).fadeOut().remove();
        if($('[class="comment_count"]').length ==0){
          $("ul").append("<li>コメントはありません</li>");
        }
      }, "json");
    }
    return false;
  });
});
</script>
