<div id="sidebar">

	<div class="separated">
		<h2>About</h2>
		<p> I hello, no!</p>
	</div>

	<div class="separated">
		<h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
	</div>

	<div class="separated">
		<h2><?php _e('Archives'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>

</div>