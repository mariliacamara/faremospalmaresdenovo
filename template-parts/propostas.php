<div class="col-md-4 pt-3 text-center">
  <div class="p-3 border bg-light proposal-box">
    <div class="proposal-header">
      <h2 class="proposal-title"><?php the_title(); ?></h2>
      <h3 class="display-5">
        Enviada por <span><?php echo get_post_meta($post->ID, "your_name", true); ?></span>
      </h3>
    </div>
    <p>
      <?php
        echo mb_strimwidth(strip_tags(get_the_content()), 0, 140, "..."); 
      ?>
    </p>
    <p>
      <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>" role="button">Ver detalhes
        &raquo;</a>
    </p>
  </div>
</div>