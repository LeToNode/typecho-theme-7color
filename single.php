<?php include('header.php');?>
	<div id="container">
		<div id="content">
			<div >
				<h2 class="entry-title"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
				<div class="entry-content">
				<div  class="entry-content-width">
						<span class="author vcard">作者:<?php $this->author(); ?></span>
						　链接地址:<a href="<?php $this->permalink(); ?>" rel="bookmark" title="<?php $this->title(); ?>" class="permalink"><?php $this->permalink(); ?></a>
					<?php $this->content(); ?>
					<div class="entry-meta">
						这篇日志由<?php $this->author(); ?>,发表在<?php $this->date('F jS, Y g:i A'); ?> ,文件归档于<?php $this->category(','); ?>,标签为and tagged <?php $this->tags(', ', true, '没有'); ?> | <a href="<?php $this->feedUrl(); ?>">订阅日志RSS源</a>
					</div>
					<hr/>
				<?php include('comments.php'); ?>	
				</div>
			</div><!-- .post -->
		</div>
		</div><!-- #content -->
	</div><!-- #container -->
<?php include('sidebar.php'); ?>	
<?php include('footer.php'); ?>
