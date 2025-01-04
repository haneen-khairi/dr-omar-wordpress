<header id="header" data-kira-timeline="onload">
    <div class="header-container" data-kira-item="fadeInUp.stagger.sm">
        <!-- Logo Section -->
        <div data-stagger-item>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="item-logo">

            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="item-nav">
            <?php
            // Check the current language (assuming you are using Polylang)
            $current_lang = pll_current_language();

            // Set the menu location based on the language
            if ($current_lang == 'ar') {
                // Arabic Menu
                $menu_location = 'main_menu_ar'; // Set the menu location for Arabic
            } else {
                // English Menu
                $menu_location = 'main_menu_en'; // Set the menu location for English
            }

            // Output the menu based on the language
            wp_nav_menu(array(
                'theme_location' => $menu_location, // Dynamic menu location
                'container' => false,
                'menu_class' => 'item-menu',
                'fallback_cb' => false,
                'depth' => 2, // Support for submenus
                // No custom walker for Bootstrap here
            ));
            ?>
        </nav>



        <!-- Language Switcher -->
        <div class="lang-container" data-stagger-item>
            <div class="menu-lang">
                <?php
                $current_lang = pll_current_language();
                $languages = pll_the_languages(array('raw' => 1));
                ?>
                <span class="active menu-lang__current"><?php echo strtoupper($current_lang); ?></span>
                <ul>
                    <?php foreach ($languages as $lang): ?>
                        <?php if (!$lang['current_lang']): ?>
                            <li>
                                <a class="menu-lang__item" href="<?php echo esc_url($lang['url']); ?>">
                                    <?php echo strtoupper($lang['slug']); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="btn-menu" aria-label="Menu" data-stagger-item>
            <span class="item-burger">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</header>