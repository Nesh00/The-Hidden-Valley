<?php 
  get_header(); 
?>
  <header
      class="about--header text-white d-flex justify-content-center align-items-center"
    >
    <picture class="about--header-img">
      <source
          media="(min-width: 900px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/about--large.jpg"
            />
      <source
          media="(min-width: 360px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/about--medium.jpg"
            />
      <img class="about--header-img" src="<?php echo get_template_directory_uri(); ?>/images/about--small.jpg" alt="Home Image Header">
    </picture>
      <h1 class="about--header-h1 position-absolute top"><?php the_title(); ?></h1>
    </header>
   
    <?php
  
      if( have_posts() ) {

        while( have_posts() ) {

          the_post();

          get_template_part('template-parts/content', 'about');
          
        }
      }
     ?>
  
<?php 
  get_footer(); 
?>