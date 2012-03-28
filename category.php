<?php include('header.php'); ?>
	<div id="container">
		<div id="content">
			<div class="info"></div>
			<h2 class="page-title"><?php _e( 'Blog Archives') ?></h2>
			<?php while($this->next()): ?>
			<div>
				<h2 class="entry-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<div class="entry-content">
					<div class="entry-meta"><p class="entry_data">
						<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
						<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
						<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
					</div>
					<div  class="entry-content-width"><?php $this->content('阅读剩余部分...'); ?></div>
				</div>
			</div><!-- .post -->
			<?php endwhile; ?>
<div id="nav-below">
<ol class="pages"><?php $this->pageNav(); ?></ol>
</div>
		</div><!-- #content .hfeed -->
	</div><!-- #container -->
	<?php include('sidebar.php'); ?>
	<?php include('footer.php'); ?>