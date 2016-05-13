<div class="orbit" role="region" aria-label="Featured Post" data-orbit>
  <ul class="orbit-container">
    <li class="orbit-slide">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array( 'class'	=> "orbit-image")); ?></a>
      <figcaption class="orbit-caption large-5 columns large-push-7">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </figcaption>
    </li>
  </ul>
</div>
