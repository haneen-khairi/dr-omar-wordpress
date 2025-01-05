<?php if (have_rows('home_hero_section')) : while (have_rows('home_hero_section')) : the_row(); ?>
        <section class="home__hero c-white hero p-r">
            <div class="home__hero__bg hero__bg bg-img absolute-full" data-kira-item="parallaxTop"
                data-bg="<?php the_field('background_image'); ?>"
                data-bg-hidpi="<?php the_field('background_image'); ?>"></div>
            <div class="home__hero__top hero__top hero__section d-f ai-center jc-center p-r ta-c"
                data-kira-timeline="onload">
                <div class="container">
                    <h1 class="home__hero__title title-xxl tt-u mb-lg" data-kira-item="splitline"
                        data-splittext="lines, words, chars" data-start="0.2">
                        <?php the_field('hero_title'); ?>
                    </h1>
                    <p class="home__hero__text hero__text fs-md md-up-fs-lg lh-md mb-md md-up-mb-xl"
                        data-kira-item="fadeInUp" data-start="-=1">
                        <?php the_field('hero_description'); ?>
                    </p>
                    <a class="home__hero__link btn" href="<?php the_field('button_link'); ?>" data-kira-item="fadeInUp"
                        data-start="-=1.15"><?php the_field('button_text'); ?></a>
                </div>
            </div>
            <div class="home__hero__bottom hero__section d-f ai-center jc-center" data-kira-timeline>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-hd-8 offset-hd-1">
                            <h2 class="home__hero__subtitle title-xxl tt-u" data-kira-item="splitline"
                                data-splittext="lines, words, chars" data-start="0.2">
                                <?php the_field('biography_title'); ?>
                            </h2>
                        </div>
                        <div class="col-lg-14 col-xl-13 offset-lg-1">
                            <p class="home__hero__subtext fs-lg fw-100 letter-xl" data-kira-item="fadeInUp"
                                data-start="-=1">
                                <?php the_field('biography_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>