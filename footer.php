<footer class="footer">

<div class="container">

        <nav class="navbar navbar-expand-md mb-4">
	        <?php the_custom_logo(); ?>
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo wp_get_document_title() ?></a>
                <div class="collapse navbar-collapse id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    </ul>
                   <?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0  d-flex %2$s">%3$s</ul>',
					    'depth' => 2,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
                </div>
            </div>
        </nav>
    </div>
                    
</footer>

<?php wp_footer(); ?>
