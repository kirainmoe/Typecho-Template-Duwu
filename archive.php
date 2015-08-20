<?php
$this->need('header.php');
?>
<section id="document">
	<div class="container">
		<?php $this->archiveTitle(array(
			'category'  =>  _t('这是归类在 <span class="label label-success">%s</span> 下的文章'),
			'search'    =>  _t('包含了你要的关键字 <span class="label label-success">%s</span> 的文章'),
			'tag'       =>  _t('你要找的标签 <span class="label label-success">%s</span> 下的文章'),
			'author'    =>  _t('作者<span class="label label-success">%s</span> 发布的文章')
			), '<h3 style="text-align:center;font-weight:normal;">', '</h3><br/>'); ?>
		<?php while($this->next()): ?>
			<div class="doc-body">
				<div class="content">
					<a class="article-title" href="<?php $this->permalink() ?>"><?php $this->title();?></a>
					<div class="article-content">
						<?php $this->excerpt(400, '...'); ?>
					</div>
				</div>
				<div class="detail">
					<a><span class="icon-time"> </span> <?php $this->date('Y-m-d'); ?></a>
					<a href="<?php $this->permalink() ?>#comments"><span class=" icon-reply"> </span> <?php $this->commentsNum('沙发可用！', '还有板凳!', '%d 条评论'); ?></a>
					<a href="<?php $this->permalink(); ?>"><span class="icon-external-link"> </span> 查看全文</a>
				</div>
			</div>
		<?php endwhile;?>
		<?php $this->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination','currentClass'=>'active')); ?>
	</div>
</section>
<?php $this->need('footer.php'); ?>