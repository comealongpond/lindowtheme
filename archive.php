<h1>1</h1>
<?php get_header(); ?>
<h1>2</h1>

	<?php 
	$args = array(	
	'type'    		  => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '<div class="archive-block">',
	'after'           => '</div>',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC');
	wp_get_archives( $args ); ?>


<div id="delimiter">
</div>

<?php get_footer(); ?>