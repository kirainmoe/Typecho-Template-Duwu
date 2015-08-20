<!DOCTYPE HTML PUBLIC>
<html lang="zh-cn">
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeurl('src/font-awesome.css'); ?>">
	<!--如果你对你的服务器有信心或者此节点挂了的话，请用<?php $this->options->themeurl('src/jquery.js'); ?> 替换他-->
	<script type="text/javascript" src="//ajax.macg.moe/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title><?php $this->archiveTitle(array('category'  =>  _t('分类 %s 下的文章'),'search'    =>  _t('包含关键字 %s 的文章'),'tag'       =>  _t('标签 %s 下的文章'),'author'    =>  _t('%s 发布的文章')), '', ' - '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('style.css');?>">
	<?php $this->header();?>
</head>
<body>
	<section id="header">
		<div class="container">
			<h3><a class="siteTitle" href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a></h3>
			<div class="navi-item">
				<li><a href="<?php $this->options->siteurl();?>">首页</a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
					<li <?php if($this->is('page',$pages->slug)): ?> <?php endif; ?> >
						<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
					</li>
				<?php endwhile;?>
				<li><a  href="<?php $this->options->adminUrl(); ?>">后台</a></li>
				<li class="search-area">
					<form id="search" method="post" action="./" role="search">
							<input class="searcher" id="search" type="search" name="s"  value="搜索" required>
							<button type="submit"><span class="icon-search"></span></button>
					</form>
				</li>
			</div>
		</div>
	</section>