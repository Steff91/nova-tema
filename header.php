<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 1.12.2017
 * Time: 16:41
 */
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nova tema</title>
		<?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    </head>

<?php
		if( is_front_page() ):
            $nova_tema_classes = array( 'nova-tema', 'my-class' );
        else:
            $nova_tema_classes = array( 'noclass' );
        endif;
	?>

<body <?php body_class( $nova_tema_classes ); ?>>



    <header class="header">
    </header>

            <nav class="navbar navbar-default" id="navbarNav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) :
                                the_custom_logo();
                            else :
                                    echo '<a class="navbar-brand" href="' . home_url() . '">' . bloginfo( 'name' ) . '</a>';
                            endif;
                       ?>

                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
	                    <?php
	                    wp_nav_menu( array(
		                    'theme_location'    => 'primary',
		                    'depth'             => 2,
		                    'container'         => false,
		                    'menu_class'        => 'nav navbar-nav navbar-right',
		                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                    'walker'            => new WP_Bootstrap_Navwalker(),
	                    ) );
	                    ?>
                    </div>
                    <div class="col-xs-12 col-lg-3 col-lg-offset-9">
                    <div class="search-form-continer">
		                <?php get_search_form(); ?>
                    </div>
                    </div>
                </div>
            </nav>

        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

    <div class="container" id="wrapper">




