<?php get_header();?>

<div class="hero__container">
    <?php
        $hero_src = wp_get_attachment_image_src( 46, 'full' );
        $hero_srcset = wp_get_attachment_image_srcset( 46, 'full' );
        $hero_sizes = wp_get_attachment_image_sizes( 46, 'full' );
    ?>
    <img src="<?php echo esc_attr( $hero_src );?>"
        srcset="<?php echo esc_attr( $hero_srcset ); ?>"
        sizes="<?php echo esc_attr( $hero_sizes );?>"
        alt="hero__image" />
</div>

<?php
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio',
)); ?>

<div id="about-us" class="section-about">
    <h2 class="section__title">About Us</h2>
    <p class="section__paragraph">
        We provide end-to-end WordPress opportunities from strategy and planning to website design and development,
        as well as extensive security, scalability, performance and long-term guidance and maintenance.</p>
    <p class="section__paragraph">
        Our mission is to help start-ups and small to medium companies to become more successful in the digital world.
        We accomplish that by taking the time to understand your business goals,
        and by working with you to design, deliver and support high-performing web solutions that gain you significant business advantage.
    </p>
    <p class="section__paragraph">
        You are still not sure if you should work with us? Drop us a <a href="#contact" class="js-scrollTo">message</a> and get completely free consulting and approximate estimation
        from our experts.
    </p>
</div>

<?php if ($portfolio_query->have_posts()): ?>
    <div id="portfolio" class="section-portfolio">
        <h2 class="section__title">Our Latest Projects</h2>
        <div class="portfolio__feed">
            <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
                <?php $teaser_image_field = get_field('teaser_image'); ?>
                <div class="js-modalOpen portfolio__card" data-modal="<?php the_ID(); ?>">
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
                    <div class="portfolio__image__wrapper">
                        <img class="portfolio__background_image" src="<?php echo $teaser_image_field['url']; ?>" alt="<?php echo $teaser_image_field['alt']; ?>" />
                    </div>
                </div>

                <!-- Modal -->
                <div id="<?php the_ID(); ?>" class="ui longer modal">
                    <div class="header"><?php the_title(); ?></div>
                    <div class="scrolling content">
                        <p>Very long content goes here</p>
                    </div>
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
                    <div class="skills__slider__icon">
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
                    <div class="skills__slider__icon">
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
                    <div class="skills__slider__icon">
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
                    <div class="skills__slider__icon">
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
                    <div class="skills__slider__icon">
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
                    <div class="skills__slider__icon">
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
