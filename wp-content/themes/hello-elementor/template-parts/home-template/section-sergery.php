<?php
// Fetch the "Home Surgery Section" group field
$surgeries_section = get_field('home_surgery_section'); // Replace with your group field name

if ($surgeries_section): ?>
    <section class="home__surgery ta-c p-r c-white">
        <div class="container">
            <?php if (!empty($surgeries_section['section_title'])): ?>
                <h2 class="home__surgery__title title-xxl tt-u mb-md md-up-mb-xl">
                    <?php echo esc_html($surgeries_section['section_title']); ?>
                </h2>
            <?php endif; ?>
            <div class="row">
                <?php
                // Loop through possible surgeries (assuming 1 to 4)
                for ($i = 1; $i <= 4; $i++):
                    // Check if the surgery group exists and is an array
                    if (!empty($surgeries_section["surgeries_$i"]) && is_array($surgeries_section["surgeries_$i"])):
                        $surgery_group = $surgeries_section["surgeries_$i"];

                        // Extract image data safely
                        $image = $surgery_group['surgery_image'] ?? null;

                        // Skip to the next iteration if the image is not valid
                        if (!is_array($image) || empty($image['url'])) continue;
                ?>
                        <div class="col-md-6 mb-md">
                            <a class="home__surgery__page d-b p-r o-h"
                                target="_blank"
                                href="<?php echo esc_url($surgery_group['surgery_button_link'] ?? '#'); ?>">
                                <div class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                    <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        data-src="<?php echo esc_url($image['url']); ?>"
                                        data-srcset="<?php echo esc_url($image['url']); ?> 407w, <?php echo esc_url($image['url']); ?> 814w"
                                        sizes="(max-width: 639px) 407px, 814px"
                                        width="814"
                                        height="1300"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Surgery Image'); ?>"
                                        class="lazy-image__img entered loaded"
                                        data-ll-status="loaded"
                                        srcset="<?php echo esc_url($image['url']); ?> 407w, <?php echo esc_url($image['url']); ?> 814w" />
                                </div>
                                <div class="home__surgery__metas p-a w-100">
                                    <?php if (!empty($surgery_group['surgery_subtitle'])): ?>
                                        <h3 class="home__surgery__subtitle title-xxl mb-md">
                                            <?php echo esc_html($surgery_group['surgery_subtitle']); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($surgery_group['surgery_button_text'])): ?>
                                        <span class="home__surgery__link btn">
                                            <?php echo esc_html($surgery_group['surgery_button_text']); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                <?php endif;
                endfor; ?>
            </div>
        </div>
    </section>
<?php endif; ?>