<?php
/*
Template Name: Popular Cards
*/
?>

<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">

    <main id="main" class="large-12 medium-12 columns" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

          <header class="article-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </header> <!-- end article header -->

          <section class="entry-content" itemprop="articleBody">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
          </section> <!-- end article section -->


          <?php if( have_rows('credit_card_entry') ): ?>
            <?php while( have_rows('credit_card_entry') ): the_row();
            // vars
            $card_name = get_sub_field('card_name');
            $image = get_sub_field('card_image');
            $kind = get_sub_field('what_kind_of_points');
            $bonus = get_sub_field('sign_up_bonus');
            $fee = get_sub_field('annual_fee');
            $earn_points = get_sub_field('how_to_earn_points');
            $point_value = get_sub_field('point_value');
            $spend_points = get_sub_field('how_to_spend_points');
            $favorite_use = get_sub_field('our_favorite_use');
            $url = get_sub_field('post_link');
            $apply = get_sub_field('apply');

            ?>
            <table class="card stack">
              <thead>
                <tr>
                  <th colspan="2" class="card-name">
                    <h3><?php echo $card_name; ?></h3>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="card-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    <?php if( $apply ): ?><p><a href="<?php echo $apply; ?>" title="Read More" class="button ">Apply Now</a></p><?php endif; ?>
                      <?php if( $url ): ?><p><a href="<?php echo $url; ?>" title="Read More" class="button">Read Review</a></p><?php endif; ?>
                  </td>
                  <td class="card-details">
                    <ul>
                      <li><strong>What kind of points</strong>: <?php echo $kind; ?></li>
                      <li><strong>Sign Up Bonus</strong>: <?php echo $bonus; ?></li>
                      <li><strong>Annual Fee</strong>: $<?php echo $fee; ?></li>
                      <li><strong>How to Earn Points</strong>: <?php echo $earn_points; ?></li>
                      <li><strong>Value of a Point</strong>: <?php echo $point_value; ?> cents</li>
                      <li><strong>How to Spend Points</strong>: <?php echo $spend_points; ?></li>
                      <li><strong>Our favorite Use</strong>: <?php echo $favorite_use; ?></li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          <?php endwhile; ?>
        <?php endif; ?>

      </article> <!-- end article -->

    <?php endwhile; endif; ?>

  </main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
