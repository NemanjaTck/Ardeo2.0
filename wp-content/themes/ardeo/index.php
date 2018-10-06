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
    <div id="section-portfolio">
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
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<div id="section-contact">
    <div class="contact__photo">
        <?php echo wp_get_attachment_image( 21, Array('640', '480'), "", array( "class" => "img-responsive" ) ); ?> 
    </div>
    <div class="contact__form">
        <?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form"]' ); ?>  
    </div>
</div>

<?php get_footer();?>
