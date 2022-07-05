<?php get_header(); ?>

<section id="post_reportagem">
  <?php 
    if( have_posts() ):
    while( have_posts() ): the_post();
  ?>
  <div class="post-image">
    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
  </div>
  <div class="container">
    <div class="post-inner ml-5 mr-5">
      <h1 class="post-title"><?php the_title( ) ?></h1>
      <div class="post-content pt-5 pb-5"><?php the_content( ) ?></div>
    </div>
  </div>
  <?php 
    endwhile;
    else:
  ?>
</section>

<p>There's nothing yet to be displayed...</p>

<?php endif; ?>

<?php get_footer(); ?>