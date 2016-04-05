
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <!-- <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button> -->
    <?php
      $postslist = get_posts('numberposts=1&order=DESC&orderby=date');
      foreach ($postslist as $post) :
      setup_postdata($post);
    ?>
    <li class="orbit-slide">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array( 'class'	=> "orbit-image")); ?></a>
      <figcaption class="orbit-caption large-4 columns large-push-8">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="lead"><?php echo excerpt(20); ?></p>
      </figcaption>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
