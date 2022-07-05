<?php get_header();?>

<main role="main">
  <div class="jumbotron custom-jumbotron">
    <div class="container">
      <h1 class="display-2">
        Faremos Palmares de novo
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi magnam laboriosam possimus, dolorem doloribus
        beatae mollitia illum voluptas veritatis ex suscipit adipisci, cumque debitis, vitae incidunt cupiditate placeat
        reprehenderit obcaecati.
        Distinctio numquam omnis corrupti repellendus eius quas odio modi quod tempora accusamus fugiat, sapiente non!
        Id molestiae repellat culpa velit commodi nobis cupiditate! Deserunt alias id aut ipsam, deleniti ea?
        Eveniet hic, distinctio corrupti quisquam veniam qui aliquid aperiam nihil nobis accusantium quibusdam ducimus
        fuga. Obcaecati distinctio libero, laudantium asperiores, cupiditate quis consequatur sint quas, cumque et
        suscipit numquam officiis!
      </p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
    </div>
  </div>

  <div class="full-container details">
    <!-- <h2 class="display-3 text-center">
      Something Goes Here
    </h2> -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/O_NkYxm_mOk" title="YouTube video player"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>

  <div class="container eixos">

    <div class="row">
      <?php 
        $args = array( 
          'post_type' => array( 'eixos'),
          'post_status' => 'publish',
          'posts_per_page' => 6,
          'orderby'=> 'title', 
          'order' => 'ASC'
        );
        $eixos = new WP_Query( $args );
        if( $eixos->have_posts(  ) ):
          while( $eixos->have_posts(  ) ): $eixos->the_post();
      ?>

      <?php get_template_part( 'template-parts/eixos' ); ?>

      <?php 
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
    </div>

    <hr>

  </div>

</main>

<?php get_footer();?>