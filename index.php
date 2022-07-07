<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
?>

<?php get_header();?>

<main role="main">
  <div class="banner">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner.png" alt="">
  </div>

  <section id="description" class="green-bg">
    <div class="wrapper">
      <div class="description-wrapper d-flex">
        <div class="title">
          <h2>
            Um projeto <br>
            coletivo do<br>
            Movimento<br>
            Negro
          </h2>
          <p class="text-right"><a class="btn btn-primary btn-lg" href="#" role="button">saiba mais</a></p>
        </div>
        <div class="text">
          <p>
            A plataforma colaborativa Faremos Palmares De Novo se apresenta à sociedade brasileira como uma estratégia
            de
            promover a participação e mobilização social em torno da agenda política nacional da Coalizão Negra por
            Direitos encerrada pela seguinte bandeira de luta “ENQUANTO HOUVER RACISMO NÃO HAVERÁ DEMOCRACIA”. Cabe
            destacar que a pré-candidatura a deputado federal pelo estado de São Paulo Douglas Belchior é responsável
            por
            representar as ideias e proposituras depositadas nestas plataforma não apenas no processo eleitoral como
            também no Congresso Nacional, a partir de 2023.<br><br>

            A pré-candidatura Douglas Belchior,que é fundador da Uneafro-Br, faz parte da iniciativa Quilombo nos
            Parlamentos, uma ação da Coalizão Negra Por Direitos cujo interesse é a ampliação do número de
            representações
            negras vinculadas á organizações do movimento negro nos parlamentos de todo o Brasil com o objetivo de
            fortalecer a justiça social, racial, climática e de gênero no país.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="video">
    <?php echo apply_shortcodes( '[smartslider3 slider="3"]' ); ?>

  </section>

  <section id="participe" class="yellow-bg">
    <div class="wrapper">
      <div class="participe-wrapper">
        <div class="participe-heading">
          <div class="image-box">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/participe.png" alt="">
          </div>
          <div class="text-box">
            <h2>Participe!</h2>
            <p>
              faça suas<br> propostas
            </p>
          </div>
        </div>
        <div>
          <?php echo apply_shortcodes( '[smartslider3 slider="5"]' ); ?>

          <!-- <ul class="steps">
            <li class="step">
              <p class="number">1</p>
              <p>escolha um eixo</p>
            </li>
            <li>
              <p>2</p>
              <p>na pagina do eixo,<br> escolha o tema e <br> escreva sua pesquisa</p>
            </li>
            <li>
              <p>3</p>
              <p>crie quantas <br> propostas quiser</p>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper eixos">
    <h2>Escolha o eixo:</h2>

    <div class="eixos-wrapper">
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