<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26.12.2017
 * Time: 0:23
 */
get_header();

?>

	<div class="row">
		<div class="col-xs-12 col-lg-8">

			<?php

			if( have_posts() ):

				while( have_posts() ): the_post(); ?>

					<?php get_template_part('content', 'search');?>

				<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>