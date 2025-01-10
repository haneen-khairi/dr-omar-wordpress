<?php
// Fetch the entire 'home_hero_section' field group
$home_hero_section = get_field('home_hero_section');

if ($home_hero_section) :
    // Extract and sanitize fields with validation and fallbacks
    $background_image = isset($home_hero_section['background_image']) && is_array($home_hero_section['background_image'])
        ? esc_url($home_hero_section['background_image']['url']) // Get URL from array
        : esc_url($home_hero_section['background_image'] ?? ''); // Use string or fallback to empty string

    $hero_title = esc_html($home_hero_section['hero_title'] ?? '');
    $hero_description = esc_html($home_hero_section['hero_description'] ?? '');
    $button_link = esc_url($home_hero_section['button_link'] ?? '#'); // Default to "#" if link is empty
    $button_text = esc_html($home_hero_section['button_text'] ?? 'Learn More'); // Default button text
?>
    <section class="home__hero c-white hero p-r">
        <!-- Background Image -->
        <div class="home__hero__bg hero__bg bg-img absolute-full" data-kira-item="parallaxTop"
            data-bg="<?php echo $background_image; ?>"
            data-bg-hidpi="<?php echo $background_image; ?>"></div>

        <!-- Hero Top Section -->
        <div class="home__hero__top hero__top hero__section d-f ai-center jc-center p-r ta-c" data-kira-timeline="onload">
            <div class="container">
                <h1 class="home__hero__title title-xxl tt-u mb-lg" data-kira-item="splitline"
                    data-splittext="lines, words, chars" data-start="0.2">
                    <?php echo $hero_title; ?>
                </h1>
                <p class="home__hero__text hero__text fs-md md-up-fs-lg lh-md mb-md md-up-mb-xl" data-kira-item="fadeInUp" data-start="-=1">
                    <?php echo $hero_description; ?>
                </p>
                <a class="home__hero__link btn" href="<?php echo $button_link; ?>" data-kira-item="fadeInUp" data-start="-=1.15">
                    <?php echo $button_text; ?>
                </a>
            </div>
        </div>
    </section>
<?php
endif;
?>