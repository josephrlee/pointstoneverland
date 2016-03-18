<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    <li class="is-active orbit-slide">
      <img class="orbit-image" src="assets/img/orbit/01.jpg" alt="Space">
      <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="assets/img/orbit/02.jpg" alt="Space">
      <figcaption class="orbit-caption">Lets Rocket!</figcaption>
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="assets/img/orbit/03.jpg" alt="Space">
      <figcaption class="orbit-caption">Encapsulating</figcaption>
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="assets/img/orbit/04.jpg" alt="Space">
      <figcaption class="orbit-caption">Outta This World</figcaption>
    </li>
  </ul>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>


<?php
global $separator;
global $parents;
global $post;
global $post_id;
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id) );  ?>
<div class="post-slides">
  <div class="post-content-position">
    <div class="post-content-right medium-4">

      <?php if($showCategory == "true") { ?>
        <div class="recentpost-categories">
          <?php echo get_the_category_list( $separator, $parents, $post_id ); ?>
        </div>
        <?php } ?>

        <h2 class="wp-post-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php if($showDate == "true" || $showAuthor == 'true')    {  ?>
          <div class="wp-post-date">
            <?php  if($showAuthor == 'true') { ?> <span><?php  esc_html_e( 'By', 'wp-responsive-recent-post-slider' ); ?>  <?php the_author(); ?></span><?php } ?>
            <?php echo ($showAuthor == 'true' && $showDate == 'true') ? '&nbsp;/&nbsp;' : '' ?>
            <?php if($showDate == "true") { echo get_the_date(); } ?>
          </div>
          <?php }   ?>

          <?php if($showContent == "true") {  ?>
            <div class="wp-post-content">
              <?php
              $customExcerpt = get_the_excerpt();
              if (has_excerpt($post->ID))  { ?>
                <p class="wp-sub-content"><?php echo $customExcerpt ; ?></p>
                <?php } else {
                  $excerpt = strip_tags(get_the_content()); ?>
                  <p class="wp-sub-content"><?php echo wprps_limit_words($excerpt,$words_limit); ?></p>
                  <?php } ?>
                </div>
                <?php } ?>
              </div>
              <div class="post-image-bg">
                <img src="<?php echo $feat_image; ?>"alt="<?php the_title(); ?>" />
              </div>
            </div>
          </div>
