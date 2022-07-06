<?php get_header(); ?>

<section>
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
      <div class="post-content pt-5 pb-5"><?php echo get_field( 'description' ); ?></div>
    </div>
  </div>

  <section class="forms">
    <div class="container">
      <?php echo apply_shortcodes( get_field( 'formulario_de_proposta' ) ); ?>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <?php 
        $args = array( 
          'post_type' => array( get_field( 'tipo_de_post') ),
          'post_status' => 'publish',
          'posts_per_page' => 6,
        );
        $eixos = new WP_Query( $args );
        if( $eixos->have_posts(  ) ):
          while( $eixos->have_posts(  ) ): $eixos->the_post();
      ?>

      <?php get_template_part( 'template-parts/propostas' ); ?>
      <?php 
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
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