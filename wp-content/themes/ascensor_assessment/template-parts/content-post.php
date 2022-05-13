<header
      class="post--header text-white d-flex justify-content-center align-items-center"
    >
    <picture class="post--header-img">
      <source
          media="(min-width: 900px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/post--large.jpg"
            />
      <source
          media="(min-width: 360px)"
          srcset="<?php echo get_template_directory_uri(); ?>/images/post--medium.jpg"
            />
      <img class="post--header-img" src="<?php echo get_template_directory_uri(); ?>/images/post--small.jpg" alt="Home Image Header">
    </picture>
      <h1 class="post--header-h1 position-absolute top"><?php the_title(); ?></h1>
    </header>

<?php
  
  dynamic_sidebar('custom-post');

?>

<main class="container d-flex flex-lg-row text-center text-lg-start my-5">
      <section>
        <h2 class="about--main-header mb-5 text-center">Post Title</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
          tempora nesciunt ratione aliquid amet nulla vitae eius adipisci
          expedita. Eum sit, debitis voluptatem dolor fuga maiores tenetur
          placeat porro commodi ea ut? Aspernatur placeat nisi nobis, beatae
          sapiente a necessitatibus?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus fuga
          architecto itaque distinctio vel, iure officia sed magni, quas tenetur
          quo alias nihil. Dolores, animi?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eveniet
          quia, quidem necessitatibus est consequatur consequuntur facere totam
          ipsa illum delectus. Repellat est a deserunt optio provident, ullam
          maxime quaerat magni ut sequi sed, odit accusamus obcaecati
          perspiciatis iusto alias?
        </p>
        <div class="d-flex flex-column flex-lg-row gap-4 mt-5">
        <div class="bg-light faqs--accordion w-100 rounded">
          <h3 class="bg-success text-white p-2 rounded"">FAQ Question One?</h3>
          <div class="p-3">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga tempora non dolor amet quos adipisci consequuntur voluptatibus consectetur impedit illo ipsum placeat soluta quis magni molestias excepturi rem voluptate, iure laborum assumenda libero id ducimus?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus natus nobis iusto numquam quod iste, reiciendis voluptates, ipsa error id expedita rerum recusandae tempore amet tempora nisi, facilis sunt reprehenderit.</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut modi quas ex quo id, cum dicta! Provident ut laboriosam quasi, illo ullam architecto, eos vero tempore nesciunt, obcaecati culpa voluptatem corporis quam vel qui unde quas itaque dolorum voluptate deserunt?</p>
        </div>
        </div>
        <div class="bg-light faqs--accordion w-100 rounded">
          <h3 class="bg-success text-white p-2 rounded"">FAQ Question Two?</h3>
          <div class="p-3">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga tempora non dolor amet quos adipisci consequuntur voluptatibus consectetur impedit illo ipsum placeat soluta quis magni molestias excepturi rem voluptate, iure laborum assumenda libero id ducimus?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus natus nobis iusto numquam quod iste, reiciendis voluptates, ipsa error id expedita rerum recusandae tempore amet tempora nisi, facilis sunt reprehenderit.</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut modi quas ex quo id, cum dicta! Provident ut laboriosam quasi, illo ullam architecto, eos vero tempore nesciunt, obcaecati culpa voluptatem corporis quam vel qui unde quas itaque dolorum voluptate deserunt?</p>
        </div>
        </div>
      </div>
      </section>

      <!-- ASIDE -->
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