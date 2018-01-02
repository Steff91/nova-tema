
</div><!-- end container -->
	<footer id="footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-lg-3">
		<?php
        wp_nav_menu(array(
                'theme_location'=>'secondary',
                'menu_class' => 'footer-nav',
        ));
        ?>
                </div>
        <div class="col-xs-4 col-lg-2 pull-right">
            <a href="https://www.facebook.com/stefan.momirov.1" class="fa-a"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
            <a href="#" class="fa-a"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
            <a href="#" class="fa-a"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
        </div>
        </div>
        </div>
	</footer>


<?php wp_footer(); ?>

	</body>
</html>
