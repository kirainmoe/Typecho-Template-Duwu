<?php
$this->need('header.php');
?>
<section id="document">
	<div class="container">
		<div class="doc-body">
			<div class="content">
				<a class="article-title" href="<?php $this->permalink() ?>"><?php $this->title();?></a>
				<div class="article-content">
					<?php $this->content(); ?>
				</div>
			</div>
			<div class="detail">
				<a><span class="icon-time"> </span> <?php $this->date('Y-m-d'); ?></a>
				<a href="<?php $this->permalink() ?>#comments"><span class=" icon-reply"> </span> <?php $this->commentsNum('沙发可用！', '还有板凳!', '%d 条评论'); ?></a>
			</div>
		</div>
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<?php $this->need('footer.php'); ?>