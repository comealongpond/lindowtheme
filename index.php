<?php get_header(); ?>

<div id="main">
	<div id="content">

		<!-- Check if the blog actually has any posts to fetch -->
		<?php 
			if (have_posts()) : while (have_posts()) : the_post(); 
		?>

		<div class="post">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<div class="show-more-link">
				<?php the_content(__('See full post &rarr;')); ?>
			</div>

			<!-- Get and display a list of tags used in the post -->
			<?php 
				$tags = array(get_the_tag_list( "<ul class='row-list left'><li>", "</li><li>", "</li></ul>" )); 
				if(!empty($tags))
				{
					echo("<p class='small-title left'> Tags: </p>");
					foreach($tags as $tag)
					{
						echo ($tag);
					}
					unset($tag);
				}
			?>

			<br />
			<!-- Display date and time of post -->
			<p class="post-desc right">Posted on <?php the_time('F jS, Y'); ?> at <?php the_time('g:i'); ?></p>
		</div>

		<?php endwhile; else: ?>

		<!-- If no post was found -->
		<p><?php _e('Sorry, no posts found. <a href="."> Go Home </a>'); ?></p><?php endif; ?>

		<?php comments_template(); ?> 

	</div>
	<?php get_sidebar(); ?>
</div>

<div id="delimiter">
</div>

<?php get_footer(); ?>