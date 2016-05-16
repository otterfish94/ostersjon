<?php get_header(); ?>
<div id="main">
<div id="content">
<h1>Main Area</h1>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<div id="delimiter">
</div>
<?php get_footer(); ?>
<?php get_style(); ?>