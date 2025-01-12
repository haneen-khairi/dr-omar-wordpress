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
                    // Check if the surgery group exists
                    if (!empty($surgeries_section["surgeries_$i"])):
                        $surgery_group = $surgeries_section["surgeries_$i"]; ?>

                        <div class="col-md-6 mb-md">
                            <a class="home__surgery__page d-b p-r o-h"
                                target="_blank"
                                href="<?php echo esc_url($surgery_group['surgery_button_link'] ?? '#'); ?>">
                                <div class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                    <?php
                                    // Check if the group data exists and is valid
                                    if (isset($surgery_group['surgery_image']) && is_array($surgery_group['surgery_image'])) {
                                        $image = $surgery_group['surgery_image'];
                                    ?>
                                        <img
                                            src="<?php echo esc_url($image['url'] ?? ''); ?>"
                                            data-src="<?php echo esc_url($image['url'] ?? ''); ?>"
                                            alt="<?php echo esc_attr($image['alt'] ?? 'Surgery Image'); ?>"
                                            width="814"
                                            height="1300"
                                            class="lazy-image__img entered loaded" />
                                    <?php } else { ?>
                                        <p>No image available for this surgery.</p>
                                    <?php } ?>

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