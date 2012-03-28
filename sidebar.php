<div id="primary" class="sidebar">
		<ul class="xoxo">
			<li id="pages">
				<h3><?php _e('最新评论'); ?></h3>
				<ul>
<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                 <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
				</ul>
			</li>

			<li id="categories">
				<h3><?php _e('最新日志'); ?></h3>
				<ul>
<?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>

				</ul>
			</li>
			
						<li id="categories">
				<h3><?php _e('日志分类'); ?></h3>
				<ul>
  <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>

				</ul>
			</li>

			<li id="archives">
				<h3><?php _e('日志归档'); ?></h3>
				<ul>
 <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>

				</ul>
			</li>
		</ul>
	</div><!-- #primary .sidebar -->
	<div id="secondary" class="sidebar">
		<ul class="xoxo">
			<li id="meta">
				<h3><?php _e('其它'); ?></h3>
				<ul>
				<?php if($this->user->hasLogin()): ?>
					<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                <?php else: ?>
                    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                <?php endif; ?>
                <li><a title="This page validates as XHTML 1.0 Transitional" href="http://validator.w3.org/check/referer">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                <li><a href="http://www.typecho.org">Typecho</a></li>
				</ul>
			</li>
		</ul>
	</div>
