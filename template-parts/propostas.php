<div class="col-md-6 col-lg-4 pt-3 text-center">
  <div class="proposal-box">
    <div class="proposal-header">
      <h4 class="proposal-title">
        <?php
          echo mb_strimwidth(strip_tags(get_the_title()), 0, 55, "..."); 
        ?>
      </h4>
      <p>
        <?php
          $fullname = get_post_meta($post->ID, "name", true);
          $name = explode(" ", $fullname)[0];
        ?>
        Por: <span><?= $name; ?></span>
      </p>
    </div>
    <div class="proposal-footer">
      <p class="proposal-description">
        <?= mb_strimwidth(strip_tags(get_the_content()), 0, 130, "..."); 
        ?>
      </p>
      <p>
        <a href="<?php echo esc_url( get_permalink() ); ?>" role="button">veja a proposta
          &raquo;</a>
      </p>
    </div>
  </div>
</div>