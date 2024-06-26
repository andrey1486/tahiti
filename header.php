<?php
/**
 * The header for our theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    
    <div class="container">
        
 <!-- MENU HEADER -->
        <nav class="navbar navbar-expand-md">
	        <?php the_custom_logo(); ?>
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo wp_get_document_title() ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav_ul collapse navbar-collapse" id="navbarCollapse">
                   
                   <?php
				    wp_nav_menu(array(
					    'theme_location' => 'menu-header',
					    'container' => false,
					    'menu_class' => '',
					    'fallback_cb' => '__return_false',
					    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0  d-flex %2$s">%3$s</ul>',
					    'depth' => 2,
					    'walker' => new bootstrap_5_wp_nav_menu_walker()
				    ));
				    ?>
                </div>
            </div>
        </nav>
    </div>

</header>

     