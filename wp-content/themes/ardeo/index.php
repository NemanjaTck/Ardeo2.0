<?php get_header();?>

<?php 
  $portfolio_query = new WP_Query( array( 'post_type' => 'portfolio') ); ?>
  
<?php if ( $portfolio_query->have_posts() ) : ?>
    <div class="portfolio-feed">
        <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
            <article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
                <h2><?php the_title(); ?></h2>
            </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
	  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>
