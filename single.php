<?php
get_header();
?>

	<div class="row">
		<div class="col-xs-12 col-lg-12">
			<?php

			if( have_posts() ):

				while( have_posts() ): the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">

								<?php the_title('<h1 class="entry-title">','</h1>'); ?>

						</header>

                        <small> Category: <?php the_category(' '); ?> | Tags: <?php the_tags(); ?> | <?php edit_post_link(); ?> </small>

						<div class="row">

								<?php if( has_post_thumbnail()) : ?>
										<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
								<?php endif; ?>

									<div class="col-xs-12 col-lg-8">
										<?php the_content(); ?>

						</div>
                        </div>
                            <div class="row">
								<?php
                                if(comments_open()) {
									comments_template();
								}
								?>
                            </div>
					</article>

					<hr>

				<?php
				endwhile;
			endif;
			?>
		</div>
	</div>

<?php get_footer(); ?>