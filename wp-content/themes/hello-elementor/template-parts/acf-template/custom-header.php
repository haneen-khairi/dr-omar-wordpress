<?php
$custom_head_path = get_template_directory() . '/custom-head.php';
if (file_exists($custom_head_path)) {
    require_once $custom_head_path;
} else {
    echo 'Custom header file not found!';
}
?>

<header id="header" data-kira-timeline="onload">
    <div class="header-container" data-kira-item="fadeInUp.stagger.sm">
        <!-- Logo Section -->
        <div data-stagger-item>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="item-logo">
                <?php
                $logo = get_theme_mod('custom_logo'); // Fetch logo from WordPress Customizer
                if ($logo) {
                    $logo_url = wp_get_attachment_image_url($logo, 'full');
                ?>
                    <img src="<?php echo esc_url($logo_url); ?>" class="logo-img" alt="<?php bloginfo('name'); ?>" />
                <?php } else { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/homepage/logo1.png'); ?>" class="logo-img" alt="Site Logo" />
                <?php } ?>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="item-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu', // Registered menu location
                'container' => false,
                'menu_class' => 'item-menu',
                'fallback_cb' => false,
                'depth' => 2, // Support for submenus
                'walker' => new WP_Bootstrap_Navwalker(), // Optional for custom walker
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

<!-- Mobile Menu -->
<div id="mobile-menu">
    <div class="item-container container md-up-ta-c">
        <ul>
            <?php
            // Generate the mobile menu dynamically
            wp_nav_menu(array(
                'theme_location' => 'mobile_menu', // Register a new menu location for mobile
                'container' => false,
                'items_wrap' => '%3$s', // Wrap only the <li> items
                'fallback_cb' => false,
                'depth' => 2, // Support for submenus
            ));
            ?>

            <!-- Language Switcher for Mobile -->
            <li class="lang-container" data-stagger-item>
                <div class="menu-lang">
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
            </li>
        </ul>
    </div>
</div>