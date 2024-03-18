

<?php get_header(); ?>
    <main class="main">
<div class="container">
    <div class="experience" style=" background-image: url(<?php the_field('img_experience'); ?>);">
        <div class="row">
   <h2><?php the_field('title_exp_strong'); ?></h2>
   <h3><?php the_field('title_exp_tahiti'); ?></h3>
        </div>
        <div class="row">
        <p><?php the_field('sub_title_experience'); ?></p>
        </div>
        <div class="row text-center">
        <p><?php the_field('text_experience'); ?></p>
          </div>
          
            <button  class="btn_exp col-2 text-uppercase " type="button">learn more</button>
          
    </div>
    
</div>

    </main>
<?php get_footer(); ?>