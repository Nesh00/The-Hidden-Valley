<?php 
  get_header(); 
?>
    <header
      class="home--header text-white d-flex justify-content-center align-items-center"
    >
    <picture class="home--header-img">
      <source
          media="(min-width: 900px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/home_img--large.jpg"
            />
      <source
          media="(min-width: 360px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/home_img--medium.jpg"
            />
      <img class="home--header-img" src="<?php echo get_template_directory_uri(); ?>/images/home_img--small.jpg" alt="Home Image Header">
    </picture>
      <h1 class="home--header-h1 position-absolute top"><?php the_title(); ?></h1>
    </header>
   
    <?php
  
      if( have_posts() ) {

        while( have_posts() ) {

          the_post();
          get_template_part('template-parts/content', 'home');
        }

      }
    ?>
  
<?php 
  get_footer(); 
?>