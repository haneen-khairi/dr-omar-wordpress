<?php

/**
 * Template Name: Home Page
 * Description: A custom template for the home page with ACF integration.
 */
?>
<!-- custom header -->
<?php
$custom_head_path = get_template_directory() . '/template-parts/acf-template/custom-header.php';
if (file_exists($custom_head_path)) {
   require_once $custom_head_path;
} else {
   echo 'Custom header file not found!';
}
?>
<!-- end custom header -->

<main id="page-home" class="home">
   <?php
   $custom_banner_path = get_template_directory() . '/template-parts/home-template/section-banner.php';
   if (file_exists($custom_banner_path)) {
      require_once $custom_banner_path;
   } else {
      echo 'Custom home banner file not found!';
   }
   ?>
   <?php
   $custom_sergery_path = get_template_directory() . '/template-parts/home-template/section-sergery.php';
   if (file_exists($custom_sergery_path)) {
      require_once $custom_sergery_path;
   } else {
      echo 'Custom home banner file not found!';
   }
   ?>
   <?php
   $home__medecine = get_template_directory() . '/template-parts/home-template/section-medecine.php';
   if (file_exists($home__medecine)) {
      require_once $home__medecine;
   } else {
      echo 'Custom home banner file not found!';
   }
   ?>
   <h3>haneen</h3>
   <section class="home__blog">
      <div class="container">
         <h2 class="title-xxl tt-u ta-c mb-md md-up-mb-lg">
            Our latest news
         </h2>
         <div class="row">
            <div class="col-md-6 mb-md">
               <a class="home__surgery__page d-b p-r o-h" target="_blank" href="#">
                  <div id="img-15702" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                     <img
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                        data-src="assets/img/homepage/news.jpg"
                        data-srcset="assets/img/homepage/news.jpg 407w, assets/img/homepage/news.jpg 814w"
                        sizes="(max-width: 639px) 407px, 814px" width="814" height="1300" alt=""
                        class="lazy-image__img" />
                  </div>
                  <div class="home__surgery__metas p-a w-100">
                     <h3 class="home__surgery__subtitle title-xxl mb-md">
                        Face
                     </h3>
                     <span class="home__surgery__link btn">Discover</span>
                  </div>
               </a>
            </div>
            <div class="col-md-6 mb-md">
               <a class="home__surgery__page d-b p-r o-h" target="_blank" href="#">
                  <div id="img-15702" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                     <img
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                        data-src="assets/img/homepage/news2.jpg"
                        data-srcset="assets/img/homepage/news2.jpg 407w, assets/img/homepage/news2.jpg 814w"
                        sizes="(max-width: 639px) 407px, 814px" width="814" height="1300" alt=""
                        class="lazy-image__img" />
                  </div>
                  <div class="home__surgery__metas p-a w-100">
                     <h3 class="home__surgery__subtitle title-xxl mb-md">
                        loerm
                     </h3>
                     <span class="home__surgery__link btn">Discover</span>
                  </div>
               </a>
            </div>
            <div class="col-md-6 mb-md">
               <a class="home__surgery__page d-b p-r o-h" target="_blank" href="#">
                  <div id="img-281059" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                     <img
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                        data-src="assets/img/homepage/new3.jpg"
                        data-srcset="assets/img/homepage/new3.jpg 407w, assets/img/homepage/new3.jpg 814w"
                        sizes="(max-width: 639px) 407px, 814px" width="814" height="1300" alt=""
                        class="lazy-image__img" />
                  </div>
                  <div class="home__surgery__metas p-a w-100">
                     <h3 class="home__surgery__subtitle title-xxl mb-md">
                        Corps
                     </h3>
                     <span class="home__surgery__link btn">Discover</span>
                  </div>
               </a>
            </div>
            <div class="col-md-6 mb-md">
               <a class="home__surgery__page d-b p-r o-h" target="_blank" href="#">
                  <div id="img-601434" class="lazy-image home__surgery__img" style="padding-bottom: 160%">
                     <img
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 814 1300'%3E%3C/svg%3E"
                        data-src="assets/img/homepage/new4.jpg"
                        data-srcset="assets/img/homepage/new4.jpg 407w, assets/img/homepage/new4.jpg 814w"
                        sizes="(max-width: 639px) 407px, 814px" width="814" height="1300" alt=""
                        class="lazy-image__img" />
                  </div>
                  <div class="home__surgery__metas p-a w-100">
                     <h3 class="home__surgery__subtitle title-xxl mb-md">
                        Body
                     </h3>
                     <span class="home__surgery__link btn">Discover</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
</main>
<!-- custom footer -->

<?php
$custom_footer_path = get_template_directory() . '/template-parts/acf-template/custom-footer.php';
if (file_exists($custom_footer_path)) {
   require_once $custom_footer_path;
} else {
   echo 'Custom footer file not found!';
}
?>
<!-- end custom footer -->