<div class="col-md-4 text-center">
  <div class="p-3 border bg-light">
    <h2 class="proposal-title"><?php the_title(); ?></h2>
    <h3 class="display-5">Enviada por <span>
        <?php echo get_post_meta($post->ID, "your_name", true); ?></span></h3>
    <p><?php echo the_content(); ?></p>
  </div>
</div>