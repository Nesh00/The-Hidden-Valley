<?php 
  get_header(); 
?>
<header
      class="blog--header text-white d-flex justify-content-center align-items-center"
    >
    <picture class="blog--header-img">
      <source
          media="(min-width: 900px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/blog--large.jpg"
            />
      <source
          media="(min-width: 360px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/blog--medium.jpg"
            />
      <img class="blog--header-img" src="<?php echo get_template_directory_uri(); ?>/images/blog--small.jpg" alt="Home Image Header">
    </picture>
      <h1 class="blog--header-h1 position-absolute top">Blog</h1>
    </header>

<main class="blog--main d-flex">
  <section class="col-12 col-lg-8 me-lg-5">
   
  <?php
  
    if( have_posts() ) {

      while( have_posts() ) {

        the_post();
          
        get_template_part('template-parts/content', 'blog');
      }

    }
   ?>
   
   <?php
    the_posts_pagination();
   ?>

    <nav aria-label="Page navigation example">
      <ul class="pagination pagination-lg justify-content-center mt-4">
        <li class="page-item" aria-current="page">
          <span class="page-link">1</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </nav>
  </section>

  <aside class="col-12 col-lg-3 ms-lg-5 d-none d-lg-block">
        <ul class="list-group list-group-flush border-bottom border-1 fs-4">
          <li class="list-group-item">
            <a class="text-decoration-none text-success" href=""
              >Post Category One</a
            >
          </li>
          <li class="list-group-item">
            <a class="text-decoration-none text-success" href=""
              >Post Category Two</a
            >
          </li>
          <li class="list-group-item">
            <a class="text-decoration-none text-success" href=""
              >Post Category Three</a
            >
          </li>
          <li class="list-group-item">
            <a class="text-decoration-none text-success" href=""
              >Post Category Four</a
            >
          </li>
        </ul>
  </aside>
</main>

<?php 
  get_footer(); 
?>