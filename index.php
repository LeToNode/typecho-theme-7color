<?php
/**
 * 本皮肤基于NiShuang的Wordpress同名皮肤制作.
 * 原作者网站<a href="http://nishuang.de/">NiShuang</a>
 * 皮肤预览可以参考<a href="http://nishuang.de/theme/7color/">7color</a>
 *
 * @package 7color
 * @author leton
 * @version 1.0.0
 * @link http://www.letonlife.cn
 */
include('header.php');
?>
	<div id="container">
		<div id="content">
<?php while($this->next()): ?>
			<div>
				<h2 class="entry-title"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" rel="bookmark"><?php $this->title() ?></a>
				</h2>
				<div class="entry-content">
					<div class="entry-meta">
						<div class="cat"></div>
						<span class="author vcard">由<?php $this->author(); ?> 撰写</span>
						<span class="meta-sep">&nbsp;|&nbsp;</span>
						<span class="entry-date"><?php $this->date('F jS, Y g:i A'); ?></span>
						<span class="cat-links">发表在<?php $this->category(','); ?></span>
						<span class="meta-sep">&nbsp;|&nbsp;</span>
						<span class="comments-link"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '评论(1)', '评论(%d)'); ?></a></span>
					</div>

					<div  class="entry-content-width"><?php $this->content('继续阅读 &raquo;'); ?>
					</div>
				</div>
			</div><!-- .post -->
<?php endwhile; ?>
<div id="nav-below">
<ol class="pages"><?php $this->pageNav(); ?></ol>
</div>
		</div><!-- #content -->
	</div><!-- #container -->
	<?php include('sidebar.php'); ?>
	<?php include('footer.php'); ?>