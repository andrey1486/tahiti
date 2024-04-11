<?php
/**
 * The footer for our theme
 */
?>

<footer class="footer" id="about">

<div class="container">
<div class="row">
	
        <nav class="navbar-footer d-flex navbar-expand-md ">
	        <?php the_custom_logo(); ?>
            
                <a class="navbar-brand" href="#"><?php echo wp_get_document_title() ?>
			</a>
                <div class="collapse justify-content-end navbar-collapse  id="navbarCollapse">
				                    
                <?php if( have_rows('social') ):

	echo '<div class="d-flex flex-row mb-2 social" >';
	echo '<ul class= "social_nav  d-flex">';
	while ( have_rows('social' ) ) : the_row();
		$socialchannel = get_sub_field('social_channel');
		$socialurl = get_sub_field('social_url' );
		$color_social = get_sub_field('color_social' );
		echo '<li class="social_item d-flex ms-4">';
		echo '<a class="social_link" rel="nofollow noopener noreferrer" href="' . $socialurl . '" target="_blank">';
		echo '<i class="fa-brands fa-' . $socialchannel . '" style="font-size:2.5rem; color: ' . $color_social . '";></i>';
		echo '<span class="sr-only hidden">' . ucfirst($socialchannel) . '</span>';
		echo '</a></li>';
	endwhile;
	echo '</ul>';
	echo '</div>';
endif;

?> 
    </div>

</div>
			
			
      <div class="container">
	        <div class="footer_links row row-cols-1  row-cols-md-5  justify-content-md-center">
				<div class="col-4 ">
					<?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-footer-col-left',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class="list-unstyled fo fs-1 %2$s">%3$s</ul>',
					    'depth' => 1,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
					</div>
			
					<div class="col-4 justify-content-right">
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
		
				<div class="col-4">
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
