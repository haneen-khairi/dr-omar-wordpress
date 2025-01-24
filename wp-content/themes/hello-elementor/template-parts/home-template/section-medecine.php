<section class="home__medicine p-r o-h" data-kira-timeline>
    <div class="container ta-c">
        <h2 class="home__medicine__title title-xxl tt-u mb-md md-up-mb-xl">
            <?php
            // Retrieve title field
            $title = get_field('title', 'section_home_medicine');
            if ($title) {
                echo esc_html($title); // Display title if found
            } else {
                echo 'Title not found'; // Fallback if no title
            }
            ?>
        </h2>
    </div>

    <?php if ($repeater_sentences = get_field('repeater_sentences', 'section_home_medicine')): ?>
        <div class="home__medicine__marquee home__medicine__marquee--top marquee">
            <div class="marquee__inner d-f ai-center">
                <?php foreach ($repeater_sentences as $sentence): ?>
                    <div class="marquee__sentence">
                        <?php if (!empty($sentence['repeater_words'])): ?>
                            <?php foreach ($sentence['repeater_words'] as $word): ?>
                                <span class="marquee__word">
                                    <?php echo esc_html($word['word']); ?>
                                </span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="home__medicine__top container">
        <div class="row h-100 no-gutters">
            <!-- Left Section -->
            <div class="home__medicine__pushTop home__medicine__pushTop--left col-md-12 col-xl-9 bg-beige p-r">
                <div class="home__medicine__pushTopInner d-f fd-column h-100 p-r">
                    <h3 class="title-xl tt-u">
                        <?php echo esc_html(get_field('left_title', 'section_home_medicine')); ?>
                    </h3>
                    <div class="mt-auto">
                        <a target="_blank" href="<?php echo esc_url(get_field('left_link', 'section_home_medicine')); ?>" class="btn">
                            Discover
                        </a>
                    </div>
                </div>
            </div>

            <!-- Left Image Section -->
            <div class="home__medicine__img col-md-8 md-up-d-none xl-up-d-b o-h p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut"
                    style="background-image: url('<?php echo esc_url(get_field('left_image', 'section_home_medicine')); ?>');">
                </div>
            </div>

            <!-- Right Section -->
            <div class="home__medicine__pushTop home__medicine__pushTop--right col-md-12 col-xl-7 h-100 bg-black c-white p-r">
                <div class="bg-cover absolute-full" data-kira-item="zoomOut"
                    style="background-image: url('<?php echo esc_url(get_field('right_image', 'section_home_medicine')); ?>');">
                </div>
            </div>
        </div>
    </div>

    <?php if ($repeater_sentences_bottom = get_field('repeater_sentences_bottom', 'section_home_medicine')): ?>
        <div class="home__medicine__marquee home__medicine__marquee--bottom marquee" data-direction="1">
            <div class="marquee__inner d-f ai-center">
                <?php foreach ($repeater_sentences_bottom as $sentence): ?>
                    <div class="marquee__sentence">
                        <?php if (!empty($sentence['repeater_words'])): ?>
                            <?php foreach ($sentence['repeater_words'] as $word): ?>
                                <span class="marquee__word">
                                    <?php echo esc_html($word['word']); ?>
                                </span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="home__medicine__bottom container p-r">
        <?php if ($bottom_sections = get_field('bottom_sections', 'section_home_medicine')): ?>
            <?php foreach ($bottom_sections as $section): ?>
                <div class="home__medicine__bottomItem row">
                    <div class="home__medicine__bottomItemText col-md-8">
                        <h4 class="title-lg tt-u">
                            <?php echo esc_html($section['bottom_title']); ?>
                        </h4>
                        <a target="_blank" href="<?php echo esc_url($section['bottom_link']); ?>" class="btn">
                            Discover
                        </a>
                    </div>
                    <div class="home__medicine__bottomItemImg col-md-4">
                        <div class="bg-cover absolute-full"
                            style="background-image: url('<?php echo esc_url($section['bottom_image']); ?>');">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>