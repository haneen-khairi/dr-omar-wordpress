<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php
        if (function_exists('yoast_wpseo_title')) {
            echo yoast_wpseo_title();
        } else {
            bloginfo('name');
            wp_title('|', true, 'left');
        }
        ?>
    </title>

    <!-- Alternate Links -->
    <link rel="alternate" href="<?php echo esc_url(get_field('alternate_link_ar')); ?>" hreflang="AR" />
    <link rel="alternate" href="<?php echo esc_url(get_field('alternate_link_en')); ?>" hreflang="en" />
    <link rel="alternate" href="<?php echo esc_url(get_field('alternate_link_default')); ?>" hreflang="x-default" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_field('favicon') ?: 'assets/assets/img/fav.png'; ?>" type="image/x-icon" />

    <!-- Preloads -->
    <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/assets/css/app.css" as="style" />
    <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/assets/js/app.js" as="script" />

    <!-- Canonical Link -->
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />


    <!-- CSS Links -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/assets/css/index.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/assets/css/style.css" />

    <!-- Theme Colors -->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />

    <?php wp_head(); ?>
</head>

<body
    class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-9"
    data-barba="wrapper">
    <div class="layer-transition d-f jc-center ai-center ta-c c-white container-fluid">
        <div class="layer-transition__title title-xxl tt-u">Dr. Omar Yousef</div>
    </div>
    <div data-barba="container" data-barba-namespace="templates_home">
        <div id="page-loader" class="page-loader container-fluid">
            <script>
                if (sessionStorage.getItem("loaded_once") === null) {
                    document.getElementById("page-loader").classList.add("active");
                }
            </script>
            <div class="item-content">
                <div class="mb-lg title-xxl tt-u">Dr. Omar Yousef</div>
                <div class="item-loadbar">
                    <div class="item-loadbar-inner"></div>
                </div>
            </div>
        </div>
        <div class="site-container">