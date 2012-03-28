<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head profile="http://gmpg.org/xfn/11">
	<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css"  href="<?php $this->options->themeUrl('style.css'); ?>" />
	<?php $this->header(); ?>
</head>
<body>
	<div id="header">
		<h1 id="blog-title"><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?> - <?php $this->options->description(); ?>" rel="home"><?php $this->options->title(); ?></a></h1>
		<!-- Search -->
		<div id="search">
			<form action="" method="post">
					<div id="search-input">
					<input type="text" size="13" name="s" id="s" /><input type="submit" value="OK"  id="search-submit" />
					</div>
			</form>
		</div>	
	</div><!--  #header -->
	<div id="header_nav">
		<div id="menu">
			<ul>
			<li <?php if($this->is('index')){echo 'class="current_page_item"';}?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a></li>
	    	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>
			<li <?php if($this->is('page', $pages->slug)): ?> class="cat-item" <?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>
			<li><div class="rss"><a href="<?php $this->options->feedUrl(); ?>">RSS</a></div></li> 
			</ul>
	</div><!-- #header_nav -->
	</div>
