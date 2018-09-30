<?php get_header();?>

<?php 
/* Custom portfolio posts query */
  $portfolio_query = new WP_Query( array( 'post_type' => 'portfolio') ); ?>

<?php if ( $portfolio_query->have_posts() ) : ?>
    <div class="portfolio__feed">
        <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
        <?php $teaser_field = get_field('teaser_image'); ?>
            <article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
                <div class="portfolio__title">
                  <h2><?php the_title(); ?></h2>
                </div>
                <img class="portfolio__background_image" src="<?php echo $teaser_field['url']; ?>" alt="<?php echo $teaser_field['alt']; ?>" />
            </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
	  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>
