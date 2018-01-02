<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>'); ?>
    </header>

    <small class="posted">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in: <?php the_category(' '); ?></small>

    <div class="row">

        <?php if( has_post_thumbnail()) : ?>
            <div class="col-xs-12 col-lg-4">
                <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
            </div>
            <div class="col-xs-12 col-lg-8">
                <?php the_content('Read more'); ?>
            </div>

        <?php else: ?>
            <div class="col-xs-12 col-lg-12">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</article>

