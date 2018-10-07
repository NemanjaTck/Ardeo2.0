<?php get_header();?>

<div class="js-slideshow slideshow">
    <?php for ($i = 0; $i < 10; $i++): ?>
        <div class="slideshow__slide" style="background-image: url('https://via.placeholder.com/1920x864');"></div>
    <?php endfor; ?>
</div>

<?php
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio',
)); ?>

<?php if ($portfolio_query->have_posts()): ?>
    <div id="portfolio" class="section-portfolio">
        <h2 class="section__title">Our Latest Projects</h2>
        <div class="portfolio__feed">
            <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
                <?php $teaser_image_field = get_field('teaser_image'); ?>
                <div id="post-<?php the_ID() ?>" class="portfolio__card">
                    <div class="portfolio__title">
                        <h3><?php the_title(); ?></h3>
                        <hr />
                        <div class="portfolio__intro">Four words max intro</div>
                    </div>
                    <div class="portfolio__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    <div class="portfolio__utility">
                        <ul class="portfolio__utility__list">
                            <li class="portfolio__list__item">WordPress</li>
                            <li class="portfolio__list__item">React</li>
                        </ul>
                    </div>
                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                    <img class="portfolio__background_image" src="<?php echo $teaser_image_field['url']; ?>" alt="<?php echo $teaser_image_field['alt']; ?>" />
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<div id="skills" class="section-skills">
    <h2 class="section__title">We work with</h2>
    <div class="skills__grid">
        <div class="skills__slider">
            <div class="skills__slider__wrp swiper-wrapper">
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">Why do you need</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">Why we use</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">How do we implement</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="skills__slider__pagination"></div>
        </div>
        <div class="skills__slider">
            <div class="skills__slider__wrp swiper-wrapper">
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">Why do you need</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">Why we use</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
                <div class="skills__slider__item swiper-slide">
                    <div class="skills__slider__img">
                        <?php echo wp_get_attachment_image( 25, Array('100', '100'), "", array( "class" => "icon-logo" ) ); ?>
                    </div>
                    <div class="skills__slider__content">
                        <div class="skills__slider__question">How do we implement</div>
                        <div class="skills__slider__title">React</div>
                        <div class="skills__slider__answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                        <a href="#" class="skills__slider__button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="skills__slider__pagination"></div>
        </div>
    </div>
</div>

<div id="contact" class="section-contact">
    <h2 class="section__title">Contact us</h2>
    <div class="contact__content-container">
        <div class="contact__photo">
            <?php echo wp_get_attachment_image( 25, Array('640', '480'), "", array( "class" => "img-responsive" ) ); ?>
        </div>
        <div class="contact__form">
            <?php echo do_shortcode( '[wpforms id="23" title="false" description="false"]' ); ?>
        </div>
    </div>
</div>

<?php get_footer();?>
