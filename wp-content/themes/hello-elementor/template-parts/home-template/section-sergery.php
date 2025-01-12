<?php
$surgeries_section = get_field('home_surgery_section'); // Replace with your field name

if ($surgeries_section): ?>
    <section class="home__surgery ta-c p-r c-white">
        <div class="container">
            <?php if (!empty($surgeries_section['section_title'])): ?>
                <h2 class="home__surgery__title title-xxl tt-u mb-md md-up-mb-xl">
                    <?php echo esc_html($surgeries_section['section_title']); ?>
                </h2>
            <?php endif; ?>
            <div class="row">
                <?php for ($i = 1; $i <= 4; $i++):
                    $surgery_group_key = "surgeries_$i";
                    if (!empty($surgeries_section[$surgery_group_key])):
                        $surgery = $surgeries_section[$surgery_group_key];
                        $image = $surgery['surgery_image'] ?? null;
                        $subtitle = $surgery['surgery_subtitle'] ?? '';
                        $button_text = $surgery['surgery_button_text'] ?? 'Discover';
                        $button_link = $surgery['surgery_button_link'] ?? '#';
                ?>
                        <div class="col-md-6 mb-md">
                            <a class="home__surgery__page d-b p-r o-h" href="<?php echo esc_url($button_link); ?>" target="_blank">
                                <div id="img-<?php echo esc_attr(uniqid()); ?>" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                    <img
                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                                        data-src="<?php echo esc_url($image['url'] ?? ''); ?>"
                                        data-srcset="<?php echo esc_url($image['url'] ?? ''); ?> 814w"
                                        sizes="(max-width: 639px) 407px, 814px"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Surgery Image'); ?>"
                                        class="lazy-image__img" />
                                </div>
                                <div class="home__surgery__metas p-a w-100">
                                    <?php if (!empty($subtitle)): ?>
                                        <h3 class="home__surgery__subtitle title-xxl mb-md">
                                            <?php echo esc_html($subtitle); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <span class="home__surgery__link btn"><?php echo esc_html($button_text); ?></span>
                                </div>
                            </a>
                        </div>
                <?php endif;
                endfor; ?>
            </div>
        </div>
    </section>
<?php endif; ?>