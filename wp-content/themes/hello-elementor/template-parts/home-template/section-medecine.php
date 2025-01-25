<section class="home__medecine p-r o-h" data-kira-timeline>
    <div class="container ta-c">
        <h2 class="home__medecine__title title-xxl tt-u mb-md md-up-mb-xl">
            <?php the_field('title'); ?>
        </h2>
    </div>
    <div class="home__medecine__marquee home__medecine__marquee--top marquee">
        <div class="marquee__inner d-f ai-center">
            <?php if( have_rows('repeater_sentences') ): ?>
                <?php while( have_rows('repeater_sentences') ): the_row(); ?>
                    <div class="marquee__sentence">
                        <?php if( have_rows('repeater_words') ): ?>
                            <?php while( have_rows('repeater_words') ): the_row(); ?>
                                <span class="marquee__word"><?php the_sub_field('word'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="home__medecine__top container">
        <div class="row h-100 no-gutters">
            <div class="home__medecine__pushTop home__medecine__pushTop--left col-md-12 col-xl-9 bg-beige p-r">
                <div class="home__medecine__pushTopInner d-f fd-column h-100 p-r">
                    <h3 class="title-xl tt-u"><?php the_field('left_title'); ?></h3>
                    <div class="mt-auto">
                        <a target="_blank" href="<?php the_field('leftlink'); ?>" class="btn">Discover</a>
                    </div>
                </div>
            </div>
            <div class="home__medecine__img col-md-8 md-up-d-none xl-up-d-b o-h p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut" data-bg="assets/img/homepage/homepage6.jpg"></div>
            </div>
            <div class="home__medecine__pushTop home__medecine__pushTop--right col-md-12 col-xl-7 h-100 bg-black c-white p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut" data-bg="assets/img/homepage/homepage6.jpg"></div>
            </div>
        </div>
    </div>
    <div class="home__medecine__marquee home__medecine__marquee--bottom marquee" data-direction="1">
        <div class="marquee__inner d-f ai-center">
            <?php if( have_rows('repeater_sentences') ): ?>
                <?php while( have_rows('repeater_sentences') ): the_row(); ?>
                    <div class="marquee__sentence">
                        <?php if( have_rows('repeater_words') ): ?>
                            <?php while( have_rows('repeater_words') ): the_row(); ?>
                                <span class="marquee__word"><?php the_sub_field('word'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="home__medecine__bottom container p-r">
        <div class="home__medecine__pushBottom row no-gutters c-white">
            <div class="col-left px-0 p-r">
                <div class="home__medecine__pushBottomInner p-r d-f fd-column h-100">
                    <h3 class="title-xl tt-u">Mesotherapy</h3>
                    <div class="mt-auto">
                        <a target="_blank" href="#" class="btn">Discover</a>
                    </div>
                </div>
            </div>
            <div class="col-right p-0 p-r">
                <div class="home__medecine__pushBottomImg p-r o-h">
                    <div class="bg-cover absolute-full" data-kira-item="zoomOut" data-bg="assets/img/homepage/homepage7.jpg"></div>
                </div>
            </div>
        </div>
        <div class="home__medecine__pushBottom row no-gutters c-black">
            <div class="col-left px-0 p-r">
                <div class="home__medecine__pushBottomInner p-r d-f fd-column h-100">
                    <h3 class="title-xl tt-u">Peeling</h3>
                    <div class="mt-auto">
                        <a target="_blank" href="#" class="btn">Discover</a>
                    </div>
                </div>
            </div>
            <div class="col-right p-0 p-r">
                <div class="home__medecine__pushBottomImg p-r o-h">
                    <div class="bg-cover absolute-full" data-kira-item="zoomOut" data-bg="assets/img/homepage/homepage8.jpg"></div>
                </div>
            </div>
        </div>
    </div>
</section>
