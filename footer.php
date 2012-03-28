<div id="footer-border"></div>
	<div id="footer">
	<div id="footer-3rd">
			<ul class="footer-bar">
			<li id="wkc_most_commented" class="widget widget_wkc_most_commented"> 
			<h3 class="widgettitle"><?php _e('最新评论'); ?></h3> 
			<ul>
			<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                 <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>" title="<?php $comments->author('','0'); ?>"><?php $comments->title(); ?></a></li>
            <?php endwhile; ?>
			</ul></li>
		</ul>
			<ul class="footer-bar">
			<li id="wkc_most_commented" class="widget widget_wkc_most_commented"> 
			<h3 class="widgettitle"><?php _e('最新文章'); ?></h3> 
			<ul>
<?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>

			</ul></li>
			</ul>
			<div ID="footer-text">
			&copy;Copyright 2006 - 2009 &nbsp;<?php $this->options->title(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Theme by  <a href="http://nishuang.de/theme/7color/" target="_blank">Nishuang.de</a> and <a href="http://www.letonlife.cn" target="_blank">leton.life</a>
			</div>

		</div><!-- #footer-3rd -->
	</div><!-- #footer -->
	<?php
if ($this->is('single')) {
    Helper::threadedCommentsScript();
}
?>

<!--<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/leton2008.json?callback=twitterCallback2&amp;count=5"></script>-->
</body>
</html>