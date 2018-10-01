<?php get_header();?>

<div class="js-slideshow slideshow">
    <?php for ($i = 0; $i < 10; $i++): ?>
        <img class="slideshow__slide" src="https://via.placeholder.com/1920x864">
    <?php endfor; ?>
</div>

<?php
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio',
)); ?>

<?php if ($portfolio_query->have_posts()): ?>
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
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer();?>
