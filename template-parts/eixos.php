<div class="col-md-4 text-center">
  <div class="p-3 border bg-light">
    <h2><?php the_title(); ?></h2>
    <p><?php echo get_field( 'resume' ); ?> </p>
    <p><a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>" role="button">Ver detalhes
        &raquo;</a></p>
  </div>
</div>