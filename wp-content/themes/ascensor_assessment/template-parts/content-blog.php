<a href="<?php  the_permalink();?>" class="bg-light d-flex flex-column flex-lg-row p-3 text-center text-lg-start text-decoration-none 
      text-body rounded mb-3">
      <img
            class="blog--main-img me-lg-3 mb-3 mb-lg-0"
            src="<?php the_post_thumbnail_url('thumbnail'); ?>"
            alt="Post Image"
          />
      <div>
      <h3><?php the_title(); ?></h3>
      <p><?php the_date(); ?></p>
      <p><?php the_content(); ?></p>
  </div>
</a>