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
            <table class="card hover">
              <tbody>
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

                ?>

                <tr>
                  <td class="card-name">
                    <h4><strong><?php echo $card_name; ?></strong></h4>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
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
              <?php endwhile; ?>
            </tbody>
          </table>


        <?php endif; ?>


        <footer class="article-footer">

        </footer> <!-- end article footer -->

        <?php comments_template(); ?>

      </article> <!-- end article -->

    <?php endwhile; endif; ?>

  </main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>