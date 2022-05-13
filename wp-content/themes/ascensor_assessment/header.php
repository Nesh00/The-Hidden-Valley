<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <?php 
      wp_head(); 
    ?>
  </head>
    <nav
      class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark px-lg-5 fs-5"
    >
      <div class="container-fluid d-flex align-items-center">
        
      <?php

        if(function_exists('the_custom_logo')) {
          
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id)[0];
        }

      ?>

        <img class="d-lg-none logo" src="<?php echo($logo) ?>" alt="Logo" />
        <a href="#" class=" navbar-brand">
          <?php 

            if(get_bloginfo('name')) {
              echo get_bloginfo('name');
            } else {
              echo 'The Hidden Valley';
            } 
            
          ?>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto text-center">
            <?php
                
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['primary'];
                $primaryNav = wp_get_nav_menu_items($menuID);
                $pagename = get_page_template();

                foreach ( $primaryNav as $navItem ) {

                  echo '<li class="nav-item"><a href="'.$navItem->url.'" title="'.$navItem->title.'" class="nav-link">'.$navItem->title.'</a></li>';
              
                }
            ?>
            </ul>
        </div>
      </div>
    </nav>