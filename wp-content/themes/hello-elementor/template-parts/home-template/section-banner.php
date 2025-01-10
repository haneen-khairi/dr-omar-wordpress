<?php
// Fetch the entire 'home_hero_section' field group
$home_hero_section = get_field('home_hero_section');

if ($home_hero_section) :
    // Ensure 'background_image' returns a URL
    $background_image = is_array($home_hero_section['background_image'])
        ? $home_hero_section['background_image']['url'] // Fetch URL from array
        : $home_hero_section['background_image']; // Already a URL
?>
    <section class="home__hero c-white hero p-r">
        <div class="home__hero__bg hero__bg bg-img absolute-full" data-kira-item="parallaxTop"
            data-bg="<?php echo esc_url($background_image); ?>"
            data-bg-hidpi="<?php echo esc_url($background_image); ?>"></div>
        <div class="home__hero__top hero__top hero__section d-f ai-center jc-center p-r ta-c"
            data-kira-timeline="onload">
            <div class="container">
                <h1 class="home__hero__title title-xxl tt-u mb-lg" data-kira-item="splitline"
                    data-splittext="lines, words, chars" data-start="0.2">
                    <?php echo esc_html($home_hero_section['hero_title']); ?>
                </h1>
                <p class="home__hero__text hero__text fs-md md-up-fs-lg lh-md mb-md md-up-mb-xl"
                    data-kira-item="fadeInUp" data-start="-=1">
                    <?php echo esc_html($home_hero_section['hero_description']); ?>
                </p>
                <a class="home__hero__link btn" href="<?php echo esc_url($home_hero_section['button_link']); ?>"
                    data-kira-item="fadeInUp" data-start="-=1.15">
                    <?php echo esc_html($home_hero_section['button_text']); ?>
                </a>
            </div>
        </div>
    </section>
<?php
endif;
?>