

<?php get_header(); ?>
    <main class="main">

    <div class="discover">
        <div class="container">
            <div class="row">
                   <p>DISCOVER tahiti</p> 
                   <p>Just pick your destination. Our travel experts will take care of the rest.</p> 
            </div>
            <div class="row">
                <div class="col-3">
                <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BORA BORA</h5>
    <p class="card-text">Surrounded by sand-fringed motus  and a turquoise lagoon protected by a coral reef, Bora Bora is known...</p>
    <a href="#" class="btn btn-primary">From</a>
  </div>
</div>
 
</div>
</div>  
        </div>
</div>
 


    <div class="experience" style=" background-image: url(<?php the_field('img_experience'); ?>);">
    <div class="container">
        <div class="title_experience d-flex">
   <p class="title_exp_strong"><?php the_field('title_exp_strong'); ?></p>
   &nbsp
   <p class = "title_exp_tahiti"><?php the_field('title_exp_tahiti'); ?></p>
        </div>
        <div class="row ">
        <p class="sub_title_experience"><?php the_field('sub_title_experience'); ?></p>
        </div>
        <div class="row text-center">
        <p class="text_experience"><?php the_field('text_experience'); ?></p>
          </div>
          
            <button  class="btn_exp col-2 text-uppercase " type="button">learn more</button>
          
    </div>
</div>

    

        <div class="why">
        <div class="container">
            <div class="why_content">
            <div class="title_why d-flex"><?php the_field('title_why'); ?></div>
            <div class="title_text row">
             <div class="col-3">
             <?php the_field('why_text_left'); ?>
             </div>
             <div class = "col-3">
             <?php the_field('why_text_center'); ?>
            </div>
            <div class="col-3">
            <?php the_field('why_text_right'); ?>
            </div>
            </div>
        </div>
        </div>
    </div>

    
<div class="vacations" style=" background-image: url(<?php the_field('img_vacations'); ?>);">
<div class="container">
   <div class="vacations_block">
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

</div>

</main>
<?php get_footer(); ?>