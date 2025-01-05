<footer class="footer">
    <div class="footer__bottom">
        <div class="container">
            <div class="row jc-center">
                <div class="col-24 col-lg-20">
                    <div class="footer__section ta-c">
                        <div class="footer__title title-xxl mb-0 tt-u">
                            <?php the_field('footer_title'); ?>
                        </div>
                    </div>
                    <div class="footer__section row d-b md-up-d-f no-gutters ta-c">
                        <div class="footer__address1 title-md tt-u mb-0 col md-up-ta-l mb-sm">
                            <?php the_field('address_line1'); ?>
                        </div>
                        <div class="footer__address2 title-md tt-u mb-0 col mb-sm">
                            <?php the_field('address_line2'); ?>
                        </div>
                        <div class="footer__address3 title-md tt-u mb-0 col md-up-ta-r">
                            <?php the_field('address_line3'); ?>
                        </div>
                    </div>
                    <div class="footer__section d-b md-up-d-f ta-c jc-between row no-gutters">
                        <?php if (have_rows('footer_menus')): ?>
                            <?php while (have_rows('footer_menus')): the_row(); ?>
                                <div class="footer__menu col mb-md md-up-mb-0">
                                    <ul class="item-menu ta-c">
                                        <li class="menu-item" data-stagger-item>
                                            <a class="item-link preventDefault" href="<?php the_sub_field('menu_link'); ?>">
                                                <?php the_sub_field('menu_title'); ?>
                                            </a>
                                            <?php if (have_rows('submenu')): ?>
                                                <ul class="sub-menu">
                                                    <?php while (have_rows('submenu')): the_row(); ?>
                                                        <li class="sub-menu-item">
                                                            <a href="<?php the_sub_field('submenu_link'); ?>">
                                                                <?php the_sub_field('submenu_title'); ?>
                                                            </a>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer__section row no-gutters title-xs tt-u d-b md-up-d-f ta-c">
                        <div class="footer__date col col-md-6 md-up-ta-l mb-sm md-up-mb-0"></div>
                        <div class="footer__legal col col-md-12 d-f jc-center mb-sm md-up-mb-0">
                            &copy; <?php echo date('Y'); ?> <?php the_field('footer_legal_text'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/index.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/app2.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/regenerator-runtime.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/wp-polyfill.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/assets/js/index2.js" type="text/javascript"></script>

</body>

</html>