<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
?>

<?php get_header(); ?>

<section id="single-pillar">
  <?php 
    if( have_posts() ):
    while( have_posts() ): the_post();
  ?>
  <div class="container">
    <div class="post-inner ml-5 mr-5">
      <h1 class="post-title"
        style="color:  <?php the_field( 'color' ) ?>; border-top: 5px solid  <?php the_field( 'color' ) ?>">
        <?php echo get_field( 'pillar_title' ); ?>
      </h1>
      <div class="post-content pt-5 pb-5">
        <?php echo get_field( 'description' ); ?>
      </div>
    </div>
  </div>

  <section id="proposal-forms">
    <div class="container">
      <?php echo apply_shortcodes( get_field( 'proposal_form_type' ) ); ?>
    </div>
  </section>

  <section id="proposals">
    <h3>Veja aqui as propostas já recebidas</h3>
    <div class="container">
      <div class="row">
        <?php 
          $args = array( 
            'post_type' => array( get_field( 'pillar_post_type') ),
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
  </section>

  <style>
  #proposals .proposal-header {
    background-color: <?php the_field('color') ?>;
  }

  #proposals .proposal-footer a {
    color: <?php the_field('color') ?>;
  }
  </style>

  <?php 
    endwhile;
    else:
  ?>
</section>


<p>There's nothing yet to be displayed...</p>

<?php endif; ?>

<?php get_footer(); ?>