<!doctype html>
<html class='no-js' lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=$title . $title_append?></title>

<div id='wrapper'>

<?php if ($this->views->hasContent('navbar')) :?>
<div id='navbar'><?php $this->views->render('navbar')?></div>
<?php endif; ?>

<?php if ($this->views->hasContent('flash')) :?>
<div id='flash'><?php $this->views->render('flash')?></div>
<?php endif; ?>

<?php  if ($this->views->hasContent('featured-1', 'featured-2', 'featured-3')) : ?>
<div id='wrap-featured'>
	<div id='featured-1'><?php $this->views->render('featured-1')?></div>
	<div id='featured-2'><?php $this->views->render('featured-2')?></div>
	<div id='featured-3'><?php $this->views->render('featured-3')?></div>
</div>
<?php endif; ?>

<?php  if ($this->views->hasContent('main', 'sidebar')) : ?>
<div id='wrap-main'>
	<div id='main'><?php $this->views->render('main')?></div>
	<div id='sidebar'><?php $this->views->render('sidebar')?></div>
</div>
<?php endif; ?>

<?php  if ($this->views->hasContent('triptych-1', 'triptych-2', 'triptych-3')) : ?>
<div id='wrap-triptych'>
	<div id='triptych-1'><?php $this->views->render('triptych-1')?></div>
	<div id='triptych-2'><?php $this->views->render('triptych-2')?></div>
	<div id='triptych-3'><?php $this->views->render('triptych-3')?></div>
</div>
<?php endif; ?>

<?php  if ($this->views->hasContent('footer-col-1', 'footer-col-2', 'footer-col-3', 'footer-col-4')) : ?>
<div id='wrap-footer-col'>
	<div id='footer-col-1'><?php $this->views->render('footer-col-1')?></div>
	<div id='footer-col-2'><?php $this->views->render('footer-col-2')?></div>
	<div id='footer-col-3'><?php $this->views->render('footer-col-3')?></div>
	<div id='footer-col-4'><?php $this->views->render('footer-col-4')?></div>
</div>
<?php endif; ?>

<?php if ($this->views->hasContent('footer')) :?>
<div id='footer'><?php $this->views->render('footer')?></div>
<?php endif; ?>

</div>

</head>
</html>