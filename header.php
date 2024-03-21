<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
</head>


<header class="header">
    <div class="container">

        <nav class="navbar navbar-expand-md">
	        <?php the_custom_logo(); ?>
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo wp_get_document_title() ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="justify-content-end" id="navbarCollapse">
                   
                   <?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-header',
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

    <!-- SLIDER -->

    <div class="container slider_content">
    <div class= "single-item">
<div class="slide"><img src = "/assets/images/welcome.jpg"></div>
<div class="slide"><?php the_sub_field('text'); ?><div>
<div class="slide">3</div>

        </div> 
       </div>
      </div>
<?php wp_head(); ?>
    
                </header>

     