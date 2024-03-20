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
  
  
        <?php
              if( have_rows('social_media', 'option') ):
	echo '<div class="container social my-4">';
	echo '<p class="follow mb-0 align-middle">Follow us</p>';
	echo '<ul class="nav align-middle">';
	while ( have_rows('social_media', 'option') ) : the_row();
		$socialchannel = get_sub_field('social_channel', 'option');
		$socialurl = get_sub_field('social_url', 'option');
		echo '<li class="nav-item">';
		echo '<a class="nav-link" rel="nofollow noopener noreferrer" href="' . $socialurl . '" target="_blank">';
		echo '<i class="fa fa-' . $socialchannel . '" aria-hidden="true"></i>';
		echo '<span class="sr-only hidden">' . ucfirst($socialchannel) . '</span>';
		echo '</a></li>';
	endwhile;
	echo '</ul>';
	echo '</div>';
endif;

?> 
        
   
   


</footer>
    


<?php wp_footer(); ?>
