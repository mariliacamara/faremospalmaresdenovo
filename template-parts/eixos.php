<div class="box">
  <div class="border eixo-box" style="background-color: <?php the_field( 'color' ) ?>;">
    <div>
      <h2 class="text-center"><?php the_title(); ?></h2>
      <p class="pt-3"><?php echo get_field( 'resume' ); ?> </p>
    </div>
    <p class="text-right"><a href="<?php echo esc_url( get_permalink() ); ?>" role="button">Ver detalhes
        &raquo;</a></p>
  </div>
</div>