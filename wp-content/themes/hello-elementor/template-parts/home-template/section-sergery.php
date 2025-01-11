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
                // Loop through each surgery group
                for ($i = 1; $i <= 4; $i++):
                    $surgery_group = $surgeries_section["surgeries_$i"]; // Access each group dynamically
                    if (!empty($surgery_group['surgery_image'])): ?>
                        <div class="col-md-6 mb-md">
                            <a class="home__surgery__page d-b p-r o-h"
                                target="_blank"
                                href="<?php echo esc_url($surgery_group['surgery_button_link']); ?>">
                                <div class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                    <img
                                        src="<?php echo esc_url($surgery_group['surgery_image']['url']); ?>"
                                        alt="<?php echo esc_attr($surgery_group['surgery_image']['alt'] ?: 'Surgery Image'); ?>"
                                        class="lazy-image__img"
                                        width="814"
                                        height="1300" />
                                </div>
                                <div class="home__surgery__metas p-a w-100">
                                    <h3 class="home__surgery__subtitle title-xxl mb-md">
                                        <?php echo esc_html($surgery_group['surgery_subtitle']); ?>
                                    </h3>
                                    <span class="home__surgery__link btn">
                                        <?php echo esc_html($surgery_group['surgery_button_text']); ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                <?php endif;
                endfor; ?>
            </div>
        </div>
    </section>
<?php endif; ?>