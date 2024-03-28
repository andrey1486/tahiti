

<?php get_header(); ?>
    <main class="main">

    <section class="discover">
        <div class="container">

		<div class="title_discover d-flex">
   <p class="title_dis_strong"><?php the_field('title_dis_strong'); ?></p>
   &nbsp
   <p class="title_dis_tahiti"><?php the_field('title_dis_tahiti'); ?></p>
        </div>
        <div class="row ">
        <p class="sub_title_discover"><?php the_field('sub_title_discover'); ?></p>
        </div>

			<div class="row cards">
                <?php
                     $args = array(
                        'post_type' => 'islands',
                        'posts_per_page' => 10,
                     );

                     $p = get_posts($args);
                     foreach ($p as $posts) {
                        setup_postdata($post);
                        ?>


				<div class="col-lg-3 col-sm-6 mb-3">
					<div class="island-card">
						<div class="island-thumb">
							<a href="#"><img src="<?php echo get_field('image_island')['url']; ?>"></a>
						</div>
						<div class="island-details">
							<h4><a href="#"><?php the_title(); ?></a></h4>
							<p>Surrounded by sand-fringed motus  and a turquoise lagoon protected by a coral reef, Bora Bora is known...</p>
							
							</div>
							<div class="island-bottom-details d-flex justify-content-between align-items-center m-0">
								<div class="island-price d-flex">
									<small>FROM</small>
									<span class="price"><?php the_field('price'); ?></span> 
								</div>
								<div class="island-links">
									<a href="#"><i class="fa fa-arrow-right" style="color: white;"></i></a>
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
                <p class="text_discover">
                <?php the_field('text_discover'); ?>
                </p>
            </div>

            <div class="input-group mx-auto">
                <select class="form-select" id="country" required>
                <option value="">Select an island</option>
                <option>Bora</option>
                <option>Bora</option>
                <option>Bora</option>
              </select>

              <button  class="btn_discover col-2 text-uppercase" type="button">explore</button>
            </div>
            </div>

		</div>
	</section>
       
</section>
 


    <section class="experience" style=" background-image: url(<?php the_field('img_experience'); ?>);">
    <div class="container">
        <div class="title_experience d-flex">
   <p class="title_exp_strong"><?php the_field('title_exp_strong'); ?></p>
   &nbsp
   <p class = "title_exp_tahiti"><?php the_field('title_exp_tahiti'); ?></p>
        </div>
        <div class="row ">
        <p class="sub_title_experience"><?php the_field('sub_title_experience'); ?></p>
        </div>
        <div class="row text-center justify-content-center d-flex">
        <p class="text_experience"><?php the_field('text_experience'); ?></p>
        <button  class="btn_exp col-2 text-uppercase " type="button">learn more</button>
          </div>
          
            
          
    </div>
</section>

             <section class="why">
             <div class="container">
             <div class="why_content d-flex  row">
             <p class="title_why_strong d-flex justify-content-center"><?php the_field('title_why'); ?></p>
             <div class="title_text justify-content-between d-flex">
             <div class="col-3 text-center">
             <?php the_field('why_text_left'); ?>
             </div>
             <div class = "col-3 text-center">
             <?php the_field('why_text_center'); ?>
             </div>
             <div class="col-3 text-center">
             <?php the_field('why_text_right'); ?>
             </div>
             </div>
      
        </div>
    </section>

    
<section class="vacations" style=" background-image: url(<?php the_field('img_vacations'); ?>);">
<div class="container">
   <div class="vacations_block ">
     <div class="vacations_content mx-auto text-center alighn-center ">
<p class="title_vacations">
     <?php the_field('title_vacations'); ?>
</p>
<p class="text_vacations">
     <?php the_field('text_vacations'); ?>
</p>

     <button  class="btn_vac col-2 text-uppercase " type="button">book now</button>

   </div>
 </div>
</div>
</section>

</main>
<?php get_footer(); ?>