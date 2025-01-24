<section class="home__medicine p-r o-h" data-kira-timeline>
    <div class="container ta-c">
        <h2 class="home__medicine__title title-xxl tt-u mb-md md-up-mb-xl">
            <?php the_field('title', 'section_home_medicine'); // Dynamic title 
            ?>
        </h2>
    </div>

    <?php if (have_rows('repeater_sentences', 'section_home_medicine')): ?>
        <div class="home__medicine__marquee home__medicine__marquee--top marquee">
            <div class="marquee__inner d-f ai-center">
                <?php while (have_rows('repeater_sentences', 'section_home_medicine')): the_row(); ?>
                    <div class="marquee__sentence">
                        <?php if (have_rows('repeater_words')): ?>
                            <?php while (have_rows('repeater_words')): the_row(); ?>
                                <span class="marquee__word">
                                    <?php the_sub_field('word'); // Dynamic word 
                                    ?>
                                </span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="home__medicine__top container">
        <div class="row h-100 no-gutters">
            <div class="home__medicine__pushTop home__medicine__pushTop--left col-md-12 col-xl-9 bg-beige p-r">
                <div class="home__medicine__pushTopInner d-f fd-column h-100 p-r">
                    <h3 class="title-xl tt-u">
                        <?php the_field('left_title', 'section_home_medicine'); // Dynamic left title 
                        ?>
                    </h3>
                    <div class="mt-auto">
                        <a target="_blank" href="<?php the_field('left_link', 'section_home_medicine'); ?>" class="btn">
                            Discover
                        </a>
                    </div>
                </div>
            </div>
            <div class="home__medicine__img col-md-8 md-up-d-none xl-up-d-b o-h p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut"
                    style="background-image: url('<?php the_field('left_image', 'section_home_medicine'); ?>');">
                </div>
            </div>
            <div
                class="home__medicine__pushTop home__medicine__pushTop--right col-md-12 col-xl-7 h-100 bg-black c-white p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut"
                    style="background-image: url('<?php the_field('right_image', 'section_home_medicine'); ?>');">
                </div>
            </div>
        </div>
    </div>

    <?php if (have_rows('repeater_sentences_bottom', 'section_home_medicine')): ?>
        <div class="home__medicine__marquee home__medicine__marquee--bottom marquee" data-direction="1">
            <div class="marquee__inner d-f ai-center">
                <?php while (have_rows('repeater_sentences_bottom', 'section_home_medicine')): the_row(); ?>
                    <div class="marquee__sentence">
                        <?php if (have_rows('repeater_words')): ?>
                            <?php while (have_rows('repeater_words')): the_row(); ?>
                                <span class="marquee__word">
                                    <?php the_sub_field('word'); // Dynamic word 
                                    ?>
                                </span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="home__medicine__bottom container p-r">
        <?php if (have_rows('bottom_sections', 'section_home_medicine')): ?>
            <?php while (have_rows('bottom_sections', 'section_home_medicine')): the_row(); ?>
                <div class="home__medicine__pushBottom row no-gutters <?php the_sub_field('text_color'); ?>">
                    <div class="col-left px-0 p-r">
                        <div class="home__medicine__pushBottomInner p-r d-f fd-column h-100">
                            <h3 class="title-xl tt-u">
                                <?php the_sub_field('bottom_title'); // Dynamic bottom title 
                                ?>
                            </h3>
                            <div class="mt-auto">
                                <a target="_blank" href="<?php the_sub_field('bottom_link'); ?>" class="btn">
                                    Discover
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-right p-0 p-r">
                        <div class="home__medicine__pushBottomImg p-r o-h">
                            <div class="bg-cover absolute-full" data-kira-item="zoomOut"
                                style="background-image: url('<?php the_sub_field('bottom_image'); ?>');">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>