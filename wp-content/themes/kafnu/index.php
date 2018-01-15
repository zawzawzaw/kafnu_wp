<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="page-default-content-section">

    <div class="space100"></div>


    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-12 col-md-push-0 col-sm-10 col-sm-push-1 col-xs-12 col-xs-push-0">

          <div class="page-default-title">

            <h1><?php echo get_the_title(); ?></h1>

          </div>

          <div class="default-copy">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
      
    </div>
  </article> <!-- page-default-content-section -->

<?php endwhile; else : ?>

  <article id="page-default-content-section">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-12">

          <div class="default-copy">
            <h1>Post not found.</h1>
          </div> <!-- default-copy -->

        </div>
      </div>
    </div>
  </article>

<?php endif; ?>

<?php get_footer(); ?>