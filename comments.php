<?php function threadedComments($comments) {?>
<li id="<?php $comments->theId(); ?>"> 
<div class="comment-author_vcard">
	<?php $comments->gravatar(32, 'X', '', 'avatar'); ?>
	<span class="fn_n"><a href='<?php $comments->url(); ?>' rel='external nofollow' class='url url'><?php $comments->author(); ?></a></span>
</div> 
<div class="comment-meta"> 
评论发表于:<?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>&nbsp;|&nbsp;<a href='<?php $comments->permalink(); ?>'>永久链接</a>|<?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?>
</div>
<div class="comment-content"> 
<p><?php $comments->content(); ?></p>
                        <?php $comments->threadedComments('<ol>', '</ol>'); ?>
</div> 
</li>
<?php } ?>


<div  class="comments">
	<?php $this->commentsNum(_t(''), _t('<h4 id="responses">1 条评论</h4>'), _t('<h4 id="responses">%d 条评论</h4>')); ?>
	<ol id="comments-list">
	<?php $this->comments()->to($comments); ?>
	<?php while($comments->next()): ?>
		<li id="<?php $comments->theId(); ?>">
			<div class="comment-author_vcard">
				<?php $comments->gravatar(32, 'X', '', 'avatar'); ?>
				<span class="fn_n">
					<a href='<?php $comments->url(); ?>' rel='external nofollow' class='url url'><?php $comments->author(); ?></a>
				</span>
			</div> 
			<div class="comment-meta"> 
			评论发表于:<?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>&nbsp;|&nbsp;<a href='<?php $comments->permalink(); ?>'>永久链接</a>|<?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?>
			</div>
			<div class="comment-content"> 
				<p><?php $comments->content(); ?></p>
					<?php $comments->threadedComments('<ol>', '</ol>'); ?>
			</div> 
</li>
<?php endwhile; ?>
</ol>
</div><!-- #comments -->
<?php if($this->allow('comment')): ?>
				<div id="respond">
					<h3><?php _e('发表评论'); ?><span class="cancel-comment-reply"><?php Helper::cancleCommentReplyLink('点此取消发布评论', 'respond'); ?></span></h3>
					<div class="formcontainer">	
						<form id="commentform" action="<?php $this->commentUrl() ?>" method="post">
							<?php if($this->user->hasLogin()): ?>
							<p id="login">Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a></p>
							<?php else : ?>
							<div class="form-label"><label for="author"><?php _e('昵称 ( * )'); ?></label></div>
							<div class="form-input"><input id="author" name="author" class="text required" type="text" value="<?php $this->remember('author'); ?>" size="30" maxlength="50" tabindex="3" /></div>
							<div class="form-label"><label for="mail"><?php _e('电邮 ( * )'); ?></label></div>
							<div class="form-input"><input id="mail" name="mail" class="text required" type="text" value="<?php $this->remember('mail'); ?>" size="30" maxlength="50" tabindex="4" /></div>
							<div class="form-label"><label for="url"><?php _e('网站'); ?></label></div>
							<div class="form-input"><input id="url" name="url" class="text" type="text" value="<?php $this->remember('url'); ?>" size="30" maxlength="50" tabindex="5" /></div>
							<?php endif // REFERENCE: * if ( $user_ID ) ?>
							<div class="form-label"><label for="text"><?php _e( '评论', 'sandbox' ) ?></label></div>
							<div class="form-textarea"><textarea id="text" name="text" class="text required" cols="45" rows="8" tabindex="6"><?php $this->remember('text'); ?></textarea></div>
							<div class="form-submit"><input id="submit" name="submit" class="button" type="submit" value="<?php _e( '发表评论') ?>" tabindex="7" /></div>
							<div class="form-option"></div>
						</form><!-- #commentform -->
					</div><!-- .formcontainer -->
				</div><!-- #respond -->
<?php endif // REFERENCE: if ( 'open' == $post->comment_status ) ?>
 
 