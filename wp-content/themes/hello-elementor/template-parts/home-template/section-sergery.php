<?php
// Fetch the main group field
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
                // Loop through the four surgeries
                for ($i = 1; $i <= 4; $i++):
                    $surgery_group_key = "surgeries_$i";

                    // Ensure the group exists and has data
                    if (!empty($surgeries_section[$surgery_group_key])):
                        $surgery = $surgeries_section[$surgery_group_key];

                        // Extract individual fields from the group
                        $image = $surgery['surgery_image'] ?? null;
                        $subtitle = $surgery['surgery_subtitle'] ?? '';
                        $button_text = $surgery['surgery_button_text'] ?? '';
                        $button_link = $surgery['surgery_button_link'] ?? '#';

                        // Skip if no image is provided
                        if (!is_array($image) || empty($image['url'])) continue;
                ?>
                        <div class="col-md-6 mb-md">
                            <a class="home__surgery__page d-b p-r o-h"
                                target="_blank"
                                href="<?php echo esc_url($button_link); ?>">
                                <div class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                    <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Surgery Image'); ?>"
                                        width="814"
                                        height="1300"
                                        class="lazy-image__img" />
                                </div>
                                <div class="home__surgery__metas p-a w-100">
                                    <?php if (!empty($subtitle)): ?>
                                        <h3 class="home__surgery__subtitle title-xxl mb-md">
                                            <?php echo esc_html($subtitle); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($button_text)): ?>
                                        <span class="home__surgery__link btn">
                                            <?php echo esc_html($button_text); ?>
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