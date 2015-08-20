<?php
/**
* Typecho 移植 Lofter (http://www.lofter.com) 的 “读物” 模版
* @package 读物
* @author 吟梦
* @version 1.0
* @link https://www.imim.pw/
*/
$this->need('header.php');
?>
<section id="document">
	<div class="container">
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