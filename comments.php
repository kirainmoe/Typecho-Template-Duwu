<?php 
define('__TYPECHO_GRAVATAR_PREFIX__','https://secure.gravatar.com/avatar/'); 
?>
<section id="comments">
	<?php $this->comments()->to($comments); ?>
	<?php if ($comments->have()): ?>
		<p><?php $this->commentsNum(_t('看，沙发！'), _t('还有板凳！'), _t('已有 %d 条评论')); ?></p>
		<br/>
		<?php $comments->listComments(array('replyWord'=>'回复',)); ?>
		<?php $comments->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination','currentClass'=>'active')); ?>
	<?php endif; ?>
	<?php if($this->allow('comment')): ?>
		<div id="<?php $this->respondId(); ?>" class="respond">
			<div class="cancel-comment-reply">
				<?php $comments->cancelReply(); ?>
			</div>
			<br/>
			<hr/>
			<p id="response">评论</p><br/>
			<form method="post" action="<?php $this->commentUrl(); ?>" id="comment-form" role="form" class="form-horizontal">
				<?php if($this->user->hasLogin()): ?>
					<p>您已登录，亲爱的<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
				<?php else: ?>
					<div class="input-area">
						昵称<input type="text" name="author" id="author"  class="form-control text" value="<?php $this->remember('author'); ?>" required />
						邮箱<input type="email" name="mail" id="mail" class="form-control text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
						网址<input type="url" name="url" id="url"  class="form-control text" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
					</div>
				<?php endif; ?>
				<div class="input-field">
					<textarea name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
					<p style="text-align:right;"><button id="postcomment" type="submit" class="btn">发布</button></p>
				</div>
			</form>
		</div>
	<?php else: ?>
		<p>果咩，po主已经关闭了评论哦。</p>
	<?php endif; ?> 
</section>