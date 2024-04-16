<?php
/**
 * The main for our theme
 */
?>

<?php get_header(); ?>
    <main class="main">

    <section class="discover" id="discover">
        <div class="container">

		<div class="title_discover d-flex">

   <?php if( get_field('title_dis_strong') ): ?>
   <p class="title_dis_strong"><?php the_field('title_dis_strong'); ?></p>
   <?php endif; ?>

   &nbsp

   <?php if( get_field('title_dis_tahiti') ): ?>
   <p class="title_dis_tahiti"><?php the_field('title_dis_tahiti'); ?></p>
   <?php endif; ?>

        </div>
        <div class="row ">
            
        <?php if( get_field('sub_title_discover') ): ?>
        <p class="sub_title_discover"><?php the_field('sub_title_discover'); ?></p>
        <?php endif; ?>

        </div>
  
        <!-- Сards of island -->
        
			<div class="row cards">
                    
                    <div class = "carusel_card  ">

                <?php
                     $args = array(
                        'post_type' => 'islands',
                        'posts_per_page' => get_field('number_of_islands'),
                        'post_status' => 'publish',
                     );

                     $p = get_posts( $args );
                     foreach ( $p as $post ) {
                        setup_postdata( $post );
                        ?>
                     
				<div class="col-xxl-3 col-xl-4 col-lg-2 col-md-1 mb-3 ">
					<div class="island-card">
						<div class="island-thumb">

                        <?php if( get_field('image_island') ): ?>
							<a target="_blank" href="<?php the_field('link_island'); ?>"><img src="<?php echo get_field('image_island')['url']; ?>"></a>
                        <?php endif; ?>

						</div>

						<div class="island-details">
							<h4><a href="#"><?php the_title(); ?></a></h4>
							<p><?php the_excerpt();?></p>
							
							</div>
							<div class="island-bottom-details d-flex justify-content-between align-items-center m-0">
								<div class="island-price d-flex">
									<small>FROM</small>

                                    <?php if( get_field('price') ): ?>
									<span class="price"><?php the_field('price'); ?></span> 
                                    <?php endif; ?>

								</div>

								<div class="island-links">

                                    <?php if( get_field('link_island') ): ?>
									<a target="_blank" href="<?php the_field('link_island'); ?>"><i class="fa fa-arrow-right" style="color: white;"></i></a>
                                    <?php endif; ?>

								</div>
						</div>
					</div>
				</div>

                <?php
             }
              wp_reset_postdata( $post );
              ?>
	
			</div>

<!-- dropdown-->

            <div class="row text-center">
                
                <?php if( get_field('text_discover') ): ?>
                <p class="text_discover"><?php the_field('text_discover'); ?></p>
                <?php endif; ?>

            </div>

            <div class="input-group mx-auto">
                <select class="form-select" id="country" required>
                <option value="">Select an island</option>
                <?php

                       
                        $args = array(
                        'post_type' => 'islands',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                     );

                     $p = get_posts( $args );
                     foreach ( $p as $post ) {
                        setup_postdata( $post );
                     ?>

                <?php if( get_field('link_island') ): ?>
                <option><a class="dropdown-item" href="<?php the_field('link_island'); ?>"><?php the_title(); ?></a></option>
                <?php endif; ?>

                <?php } wp_reset_postdata(); ?>
                      
                </select>

                <?php 
    $link_explore = get_field('link_explore');
    if( $link_explore ): 
    $link_url_explore = $link_explore['url'];
    $link_title_explore = $link_explore['title'];
    $link_target_explore = $link_explore['target'] ? $link_explore['target'] : '_self';
    ?>
    <a class="button btn_discover d-flex col-2 text-uppercase" href="<?php echo esc_url( $link_url_explore ); ?>" target="<?php echo esc_attr( $link_target_explore ); ?>"><?php echo esc_html( $link_title_explore ); ?></a>
    <?php endif; ?>

    </div>
    </div>
    </div>
	</section>
       
<section class="experience" id="experience" style=" background-image: url(<?php the_field('img_experience'); ?>);">
      <div class="container">
        <div class="title_experience d-flex">

    <?php if( get_field('title_exp_strong') ): ?>     
    <p class="title_exp_strong"><?php the_field('title_exp_strong'); ?></p>
    <?php endif; ?>

   &nbsp

   <?php if( get_field('title_exp_tahiti') ): ?> 
   <p class = "title_exp_tahiti"><?php the_field('title_exp_tahiti'); ?></p>
   <?php endif; ?> 

        </div>
        <div class="row ">

        <?php if( get_field('sub_title_experience') ): ?>     
        <p class="sub_title_experience"><?php the_field('sub_title_experience'); ?></p>
        <?php endif; ?>     

        </div>

        <div class="row text-center justify-content-center d-flex">

        <?php if( get_field('text_experience') ): ?>  
        <p class="text_experience"><?php the_field('text_experience'); ?></p>
        <?php endif; ?> 
         
        <?php 
    $link_learn = get_field('link_learn');
    if( $link_learn ): 
    $link_url_learn = $link_learn['url'];
    $link_title_learn = $link_learn['title'];
    $link_target_learn = $link_learn['target'] ? $link_learn['target'] : '_self';
    ?>
    <a class="button btn_exp d-flex col-2 text-uppercase" href="<?php echo esc_url( $link_url_learn ); ?>" target="<?php echo esc_attr( $link_target_learn ); ?>"><?php echo esc_html( $link_title_learn ); ?></a>
    <?php endif; ?>

         </div>
        </div>
</section>

             <section class="why">
             <div class="container">
             <div class="why_content d-flex  row">
             <div class="title_why d-flex justify-content-center">

             <?php if( get_field('title_why') ): ?> 
             <p class="title_why_strong"><?php the_field('title_why'); ?></p>
             <?php endif; ?> 

             &nbsp

             <?php if( get_field('title_why_island') ): ?> 
             <p class="title_why_island"><?php the_field('title_why_island'); ?></p>
             <?php endif; ?>
             </div>

             <div class="title_text justify-content-between d-flex">
             <?php if( get_field('why_text_left') ): ?>  
             <div class="col-3 text-center">
             <?php the_field('why_text_left'); ?>
             </div>
             <?php endif; ?>

             <?php if( get_field('why_text_center') ): ?>   
             <div class = "col-3 text-center">
             <?php the_field('why_text_center'); ?>
             </div>
             <?php endif; ?> 

             <?php if( get_field('why_text_right') ): ?>    
             <div class="col-3 text-center">
             <?php the_field('why_text_right'); ?>
             </div>
             <?php endif; ?> 
                         
             </div>
      
        </div>
        </div>
    </section>

    
<section class="vacations" id="vacations" style=" background-image: url(<?php the_field('img_vacations'); ?>);">
<div class="container">
   <div class="vacations_block ">
     <div class="vacations_content mx-auto text-center">

     <?php if( get_field('title_vacations') ): ?>   
     <p class="title_vacations">
     <?php the_field('title_vacations'); ?>
     </p>
     <?php endif; ?> 

     <?php if( get_field('text_vacations') ): ?> 
     <p class="text_vacations">
     <?php the_field('text_vacations'); ?>
     </p>
     <?php endif; ?> 

<?php 
    $link_vac = get_field('link_vac');
    if( $link_vac ): 
    $link_url_vac = $link_vac['url'];
    $link_title_vac = $link_vac['title'];
    $link_target_vac = $link_vac['target'] ? $link_vac['target'] : '_self';
    ?>
    <a class="button btn_vac d-flex col-2 text-uppercase" href="<?php echo esc_url( $link_url_vac ); ?>" target="<?php echo esc_attr( $link_target_vac ); ?>"><?php echo esc_html( $link_title_vac ); ?></a>
    <?php endif; ?>

 </div>
 </div>
</div>
</section>

</main>
<?php get_footer(); ?>