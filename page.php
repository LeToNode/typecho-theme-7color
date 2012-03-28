<?php include('header.php'); ?>
	<div id="container">
		<div id="content">
			<div>
				<h2 class="entry-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<div class="entry-content">
				<div  class="entry-content-width"><?php $this->content(); ?></div>
<hr/><?php include('comments.php'); ?>				
</div>
			</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- #container -->

	<?php include('sidebar.php'); ?>
	<?php include('footer.php'); ?>