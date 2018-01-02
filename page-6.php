<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 6.12.2017
 * Time: 2:33
 */
get_header();
?>
<div class="row video">
	<div class="col-xs-12 col-lg-8 col-lg-offset-2">
		<?php

		if( have_posts() ):

			while( have_posts() ): the_post(); ?>

				<?php get_template_part('content', get_post_format());?>

			<?php
			endwhile;
		endif;
		?>
	</div>
	</div>

<?php get_footer(); ?>