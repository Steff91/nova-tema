<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26.12.2017
 * Time: 0:27
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php the_title('<h1 class="entry-title">','</h1>'); ?>

	</header>

	<small> Category: <?php the_category(' '); ?> | Tags: <?php the_tags(); ?> | <?php edit_post_link(); ?> </small>

	<div class="row">

		<?php if( has_post_thumbnail()) : ?>
			<div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div>
		<?php endif; ?>

		<div class="col-xs-12 col-lg-8">
			<?php the_excerpt(); ?>

		</div>

</article>