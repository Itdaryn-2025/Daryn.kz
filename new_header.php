<?php 
/* 
 * Template Name: New Header
 */ 

?>

<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
wp_head();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script async  src="/wp-content/themes/twentysixteen/js/jquery.min.js"></script>
  <script async  src="/wp-content/themes/twentysixteen/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/style.css?v=15435112312312312">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/reset.css?v=15435112312312312">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/css/jquery.flipster.min.css">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) );  ?>" />
  <?php endif; ?>
  <?php wp_head(); ?>
      <link rel="stylesheet" href="/wp-content/themes/twentysixteen/css/dist/jquery.flipster.min.css">

      <script src="/wp-content/themes/twentysixteen/js/jquery.min.js"></script>
      <script src="/wp-content/themes/twentysixteen/js/jquery.flipster.min.js"></script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <div class="header">

    <div class="header-logo">
      <div class="h-logo-mname-wrap">
        <div class="h-logo-container">
          <img class="h-logo-img" src="logo-2.gif" alt="">
        </div>
        <?php if(pll_current_language() == "ru"): ?>
        <div class="h-mainname">Республиканский научно-практический центр «Дарын»</div>
        <?php else: ?>
        <div class="h-mainname">«Дарын» республикалық ғылыми-практикалық орталығы</div>
        <?php endif; ?>
      </div>
      <div class="h-search-lang-wrap">
        <form role="search" method="get" class="h-search-form" action="https://daryn.kz/">
          <label>
            <input type="search" class="h-search-field" placeholder="" value="" name="s">
          </label>
          <button type="submit" class="h-search-submit"></button>

        </form>
        <div class="h-lang">
          <?php pll_the_languages(array('dropdown'=>1)); ?>
        </div>
      </div>
    </div>
    <div class="header-menu-wrap">
      <div class="header-menu">
        <div class="h-region-set-wrap">

          <div class="h-region-set">
            <?php if(pll_current_language() == "ru") {
              $regionNetwork = "Региональная сеть";
              $regionCenters = "Региональная центры";
              $schoolNetwork = "Сеть школ для одаренных детей";
              $goTo = "Пройти на сайт";
              $director = "Директор";
              $deputy = "Заместитель директора";
              $adress = "Адрес";
              $fullSchoolName = "Полное наименование школы";
              $schoolAdress = "Адрес школы";
              $contactInfo = "Телефон, электронный адрес школы";
              $entryGrade = "С какого класса ведется прием в школу";
              $lang_suffix = "_ru";
            } else {
              $regionNetwork = "Региональная сеть";
              $regionCenters = "Региональная центры";
              $schoolNetwork = "Сеть школ для одаренных детей";
              $goTo = "Пройти на сайт";
              $director = "Директор";
              $deputy = "Заместитель директора";
              $adress = "Адрес";
              $fullSchoolName = "Полное наименование школы";
              $schoolAdress = "Адрес школы";
              $contactInfo = "Телефон, электронный адрес школы";
              $entryGrade = "С какого класса ведется прием в школу";
              $lang_suffix = "_kz";
            }

            global $wpdb;
            $centers = $wpdb->get_results("SELECT name{$lang_suffix} as name, link, director, director_phone, director_email, deputy, deputy_phone, deputy_email, adress{$lang_suffix} as adress, adress_phone, adress_email FROM network_centers where visible = 1");
            ?>
            <p class="h-region-set-p"><?= $regionNetwork ?></p>
            <div class="wrapper">
              <div class="tabs">
                <div class="tabs__nav tabs-nav">
                  <div class="tabs-nav__item is-active" data-tab-name="tab-1">Региональная центры</div>
                  <div class="tabs-nav__item" data-tab-name="tab-2">Сеть школ для одаренных детей</div>
                </div>
                <div class="tabs__content">
                  <div class="tab is-active tab-1"> 
                    <div class="h-r-s-content-bottom">
                      <? foreach ($centers as $ind => $center): ?>
                      <div class="h-r-s-mainname-wrap">
                        <div class="h-r-s-left">
                          <p class="h-r-s-mainname"><?= $center->name ?></p>
                          <img src="image/arrow-right.svg" alt="">
                        </div>

                        <? if($ind == 0): ?>
                        <div class="h-r-s-content-right-absulute">
                          
                        </div>
                        <? endif; ?>
                        <div class="h-r-s-content-right">
                          <p class="h-r-s-r-mainname"><?= $center->name ?></p>
                          <a href="<?= $center->link ?>">Пройти на сайт</a>
                          <p class="h-r-s-r-director">Директор</p>
                          <p class="h-r-s-r-text"><?= $center->director ?></p>
                          <p class="h-r-s-r-text"><?= $center->director_phone ?></p>
                          <p class="h-r-s-r-text"><?= $center->director_email ?></p>
                          <p class="h-r-s-r-director">Заместитель директора</p>
                          <p class="h-r-s-r-text"><?= $center->deputy ?></p>
                          <p class="h-r-s-r-text"><?= $center->deputy_phone ?></p>
                          <p class="h-r-s-r-text"><?= $center->deputy_email ?></p>
                          <p class="h-r-s-r-director">Адрес</p>
                          <p class="h-r-s-r-text"><?= $center->adress ?></p>
                          <p class="h-r-s-r-text"><?= $center->deputy_phone ?></p>
                          <p class="h-r-s-r-text"><?= $center->deputy_email ?></p>
                        </div>
                      </div>
                      <? endforeach; ?>
                    
                    </div>
                  </div>
                  <div class="tab tab-2">

                    <div class="h-r-s-content-bottom">
                      <?
                      $schools_results = $wpdb->get_results("SELECT s.name{$lang_suffix} as school_name, s.adress{$lang_suffix} as adress, r.name{$lang_suffix} as region, s.contact as contact, s.entry_grade as entry_grade from network_schools as s left join network_regions as r on s.region = r.id");
                      $schools = array();
                      foreach ($schools_results as $val) {
                        $schools[$val->region][] = (array)$val;
                      }
                      $region_ind = 0;
                      ?>
                      <? foreach ($schools as $region => $region_schools): ?>
                        <div class="h-r-s-mainname-wrap">
                        <div class="h-r-school-left">
                          <p class="h-r-school-mainname"><?=$region?></p>
                          <img src="image/arrow-right.svg" alt="">
                        </div>
                        <? if($region_ind == 0): ?>
                        <div class="h-r-school-content-right-absulute">
                          
                        </div>
                        <? $region_ind = 1; ?>
                        <? endif; ?>
                        <div class="h-r-school-content-right">
                          <p class="h-r-s-r-mainname"><?=$region ?></p>
                          <div class="h-r-school-table-text-cont">
                            <div class="h-r-school-table-text-wrap">
                              <div class="h-r-school-table-mtext"><?=$fullSchoolName ?></div>
                              <div class="h-r-school-table-mtext"><?=$schoolAdress ?></div>
                              <div class="h-r-school-table-mtext"><?=$contactInfo ?></div>
                              <div class="h-r-school-table-mtext"><?=$entryGrade ?></div>
                            </div>
                            <? foreach ($region_schools as $region_school) :?>
                            <div class="h-r-school-table-text-wrap">
                              <div class="h-r-school-table-text"><?=$region_school['school_name'] ?></div>
                              <div class="h-r-school-table-text"><?=$region_school["adress"] ?></div>
                              <div class="h-r-school-table-text"><?=$region_school["contact"] ?></div>
                              <div class="h-r-school-table-text"><?=$region_school["entry_grade"] ?></div>
                            </div>
                          <? endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <? endforeach; ?>                      
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>  
          
        </div>
        <div class="h-menu-line"></div>
        <div class="h-menu-wrap">
          <?php
            if (has_nav_menu('primary')) {
             //          wp_nav_menu(
             //            array(
             //              'theme_location' => 'primary',
             //              'container'       => 'ul',
             // 'container_class' => '',
             // 'container_id'    => '',
             // 'menu_class'      => '',
             // 'menu_id'         => '',
             //              'walker' => new Daryn_Walker_Nav_Menu()
             //            ));


            }
          ?>
        </div>
      </div>
    </div>
  </div>
  
</div>






























<?php if ( get_header_image() ) : ?>
<?php
/**
* Filter the default twentysixteen custom header sizes attribute.
*
* @since Twenty Sixteen 1.0
*
* @param string $custom_header_sizes sizes attribute
* for Custom Header. Default '(max-width: 709px) 85vw,
* (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
*/
$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
?>
<div class="header-image">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img src="<?php header_image(); ?>"
      srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>"
      sizes="<?php echo esc_attr( $custom_header_sizes ); ?>"
      width="<?php echo esc_attr( get_custom_header()->width ); ?>"
      height="<?php echo esc_attr( get_custom_header()->height ); ?>"
      alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
  </a>
</div>
<!-- .header-image -->
<?php endif; // End header image check. ?>
</header>

<!-- .site-header -->
<div class="main_page">
  <div class="breadcrumb container" style="margin-top: 20px; font-size: 14px;">
    <?php the_breadcrumb() ?>
  </div>
  <?php dynamic_sidebar( 'site_wiget_top' ); ?>
</div>
<div id="content" class="site-content container" style="padding: 30px 0;">


<?php get_sidebar(); ?>
<?php get_footer(); ?>
