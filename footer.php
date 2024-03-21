<footer class="footer">

<div class="container">
<div class="row">
	
        <nav class="navbar navbar-expand-md mb-4">
	        <?php the_custom_logo(); ?>

            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo wp_get_document_title() ?>
			</a>
                <div class="collapse navbar-collapse  id="navbarCollapse">
				
	 
                    
                   <?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0  d-flex %2$s">%3$s</ul>',
					    'depth' => 1,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>

<?php
              if( have_rows('social') ):
	echo '<div class="d-flex flex-row mb-3 social my-4">';
	echo '<ul class="social_nav  d-flex align-middle">';
	while ( have_rows('social' ) ) : the_row();
		$socialchannel = get_sub_field('social_channel');
		$socialurl = get_sub_field('social_url' );
		echo '<li class="social_item">';
		echo '<a class="social_link" rel="nofollow noopener noreferrer" href="' . $socialurl . '" target="_blank">';
		echo '<i class="fa fa-' . $socialchannel . '" aria-hidden="true"></i>';
		echo '<span class="sr-only hidden">' . ucfirst($socialchannel) . '</span>';
			echo '</a></li>';
	endwhile;
	echo '</ul>';
	echo '</div>';
endif;

?> 
                </div>
				</div>
				</div>
				</div>

				
				
                <div class="container">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5  justify-content-md-center">
   
                <div class="col-3 mb-4">
					<?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer-col-left',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class="list-unstyled %2$s">%3$s</ul>',
					    'depth' => 1,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
					</div>
			
					<div class="col-3">
					<?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer-col-center',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class=" list-unstyled %2$s">%3$s</ul>',
					    'depth' => 1,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
					</div>
		
				<div class="col-3">
					<?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer-col-right',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class ="list-unstyled %2$s">%3$s</ul>',
					    'depth' => 1,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
					</div>
				</div>
				</div>
            </div>
        </nav>
        </div>
      
    

</div>

</footer>
    


<?php wp_footer(); ?>
