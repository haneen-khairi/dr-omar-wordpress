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
                <?php
                $surgery_group_key = "surgeries_1";
                if (!empty($surgeries_section[$surgery_group_key])):
                    $surgery = $surgeries_section[$surgery_group_key];
                    $image = $surgery['surgery_image_1'] ?? null;
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
                ?>
                <?php
                $surgery_group_key2 = "surgeries_2";
                if (!empty($surgeries_section[$surgery_group_key2])):
                    $surgery2 = $surgeries_section[$surgery_group_key2];
                    $image2 = $surgery2['surgery_image_2'] ?? null;
                    $subtitle2 = $surgery2['surgery_subtitle'] ?? '';
                    $button_text2 = $surgery2['surgery_button_text'] ?? 'Discover';
                    $button_link2 = $surgery2['surgery_button_link'] ?? '#';
                ?>
                    <div class="col-md-6 mb-md">
                        <a class="home__surgery__page d-b p-r o-h" href="<?php echo esc_url($button_link2); ?>" target="_blank">
                            <div id="img-<?php echo esc_attr(uniqid()); ?>" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                <img
                                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                                    data-src="<?php echo esc_url($image2['url'] ?? ''); ?>"
                                    data-srcset="<?php echo esc_url($image2['url'] ?? ''); ?> 814w"
                                    sizes="(max-width: 639px) 407px, 814px"
                                    alt="<?php echo esc_attr($image2['alt'] ?? 'Surgery Image'); ?>"
                                    class="lazy-image__img" />
                            </div>
                            <div class="home__surgery__metas p-a w-100">
                                <?php if (!empty($subtitle2)): ?>
                                    <h3 class="home__surgery__subtitle title-xxl mb-md">
                                        <?php echo esc_html($subtitle2); ?>
                                    </h3>
                                <?php endif; ?>
                                <span class="home__surgery__link btn"><?php echo esc_html($button_text2); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endif;
                ?>

                <?php
                $surgery_group_key3 = "surgeries_3";
                if (!empty($surgeries_section[$surgery_group_key3])):
                    $surgery3 = $surgeries_section[$surgery_group_key3];
                    $image3 = $surgery3['surgery_image_3'] ?? null;
                    $subtitle3 = $surgery3['surgery_subtitle'] ?? '';
                    $button_text3 = $surgery3['surgery_button_text'] ?? 'Discover';
                    $button_link3 = $surgery3['surgery_button_link'] ?? '#';
                ?>
                    <div class="col-md-6 mb-md">
                        <a class="home__surgery__page d-b p-r o-h" href="<?php echo esc_url($button_link3); ?>" target="_blank">
                            <div id="img-<?php echo esc_attr(uniqid()); ?>" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                <img
                                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                                    data-src="<?php echo esc_url($image3['url'] ?? ''); ?>"
                                    data-srcset="<?php echo esc_url($image3['url'] ?? ''); ?> 814w"
                                    sizes="(max-width: 639px) 407px, 814px"
                                    alt="<?php echo esc_attr($image3['alt'] ?? 'Surgery Image'); ?>"
                                    class="lazy-image__img" />
                            </div>
                            <div class="home__surgery__metas p-a w-100">
                                <?php if (!empty($subtitle3)): ?>
                                    <h3 class="home__surgery__subtitle title-xxl mb-md">
                                        <?php echo esc_html($subtitle3); ?>
                                    </h3>
                                <?php endif; ?>
                                <span class="home__surgery__link btn"><?php echo esc_html($button_text3); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endif;
                ?>

                <?php
                $surgery_group_key4 = "surgeries_4";
                if (!empty($surgeries_section[$surgery_group_key4])):
                    $surgery4 = $surgeries_section[$surgery_group_key4];
                    $image4 = $surgery4['surgery_image_4'] ?? null;
                    $subtitle4 = $surgery4['surgery_subtitle'] ?? '';
                    $button_text4 = $surgery4['surgery_button_text'] ?? 'Discover';
                    $button_link4 = $surgery4['surgery_button_link'] ?? '#';
                ?>
                    <div class="col-md-6 mb-md">
                        <a class="home__surgery__page d-b p-r o-h" href="<?php echo esc_url($button_link4); ?>" target="_blank">
                            <div id="img-<?php echo esc_attr(uniqid()); ?>" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                                <img
                                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                                    data-src="<?php echo esc_url($image4['url'] ?? ''); ?>"
                                    data-srcset="<?php echo esc_url($image4['url'] ?? ''); ?> 814w"
                                    sizes="(max-width: 639px) 407px, 814px"
                                    alt="<?php echo esc_attr($image4['alt'] ?? 'Surgery Image'); ?>"
                                    class="lazy-image__img" />
                            </div>
                            <div class="home__surgery__metas p-a w-100">
                                <?php if (!empty($subtitle4)): ?>
                                    <h3 class="home__surgery__subtitle title-xxl mb-md">
                                        <?php echo esc_html($subtitle4); ?>
                                    </h3>
                                <?php endif; ?>
                                <span class="home__surgery__link btn"><?php echo esc_html($button_text4); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endif;
                ?>


            </div>
        </div>
    </section>
<?php endif; ?>