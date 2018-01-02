<?php
get_header();
?>

<div class="row">

    <div class="col-xs-12 col-lg-12">


    </div>
</div>

	<div class="row">

        <div class="col-xs-12 col-lg-12">
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



<div class="row">
    <div class="col-xs-12 col-lg-12">
        <h2 id="latest-news-headline">Latest News</h2>

        <div id="carousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
				<?php
				$args = array(
					'type' => 'post',
					'post_per_page'=> 3,
				);

				$count = 0;
				$bullet = '';

				$lastBlog = new WP_Query($args);
				if($lastBlog->have_posts() ):

					while($lastBlog-> have_posts() ): $lastBlog->the_post(); ?>
                        <div class="item <?php if($count==0): echo 'active'; endif; ?>">
							<?php the_post_thumbnail('full-size'); ?>
                            <div class="carousel-caption">
								<?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>'); ?>
                                <small><?php the_category(' '); ?></small>
                            </div>
                        </div>

						<?php
						$bullet .= '<li data-target="#carousel" data-slide-to="'.$count.'" class="';?>

						<?php if($count==0): $bullet.= 'active'; endif;
						$bullet.='"></li>'; ?>

						<?php $count++; ?>

					<?php
					endwhile;
				endif; ?>

				<?php
				wp_reset_postdata();
				?>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
				<?php echo $bullet; ?>
            </ol>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>




<?php get_footer(); ?>
