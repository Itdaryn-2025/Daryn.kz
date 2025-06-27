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
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/reset.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



<!-- <div style="width: 100%; padding: 10px; background-color: #303030; color: white; display: flex; flex-direction: column; justify-content: center;">
  <p style="text-align: center;">29 қазан - Жалпыұлттық аза тұту күні</p>
  <p style="text-align: center;">29 октября - День общенационального траура</p>
</div> -->


<!-- старый вариант хедер -->
<div id="page" class="logo-page width1140" style="">

  <div class="hidden_mob">
    <a class="skip-link screen-reader-text" href="#content">
      <?php _e( 'Skip to content', 'twentysixteen' ); ?>
    </a>


    <header id="masthead" class="darin-header" role="banner">

      <div class="container" style="position:relative">
        
        <!-- мобильная версия -->
        <div class="mob_header">
          <div class="mobile-logo">
            <a href="/">
              <img src="/wp-content/uploads/2021/08/logo2025.png">
            </a>
          </div>
          <div class="mobile-org-name">
            <p>
              “ДАРЫН” РЕСПУБЛИКАЛЫҚ ҒЫЛЫМИ-ПРАКТИКАЛЫҚ ОРТАЛЫҒЫ
            </p>
          </div>
          <div class="mobile-open-menu">
            <a class="new_btn disp_block_mob"><i class="fa fa-bars" aria-hidden="true"></i></a>
          </div>
        </div>

        <!-- мобильная версия завершен -->




        <div class="site-header-top row">

          <!-- логотип дарын -->
          <div class="col1 logo_cont">
            <a class="logo_bt" href="/" style="border-radius: 50%;" >
              <img src="/wp-content/uploads/2021/08/logo2025.png" style="border-radius: 0%;">
            </a>
          </div>
          <!-- логотип дарын завершен -->

          <!-- название центра -->

          <div class="col5 organization_name">
            <p>
              “ДАРЫН” <br>РЕСПУБЛИКАЛЫҚ ҒЫЛЫМИ-ПРАКТИКАЛЫҚ ОРТАЛЫҒЫ
            </p>
            <!-- <p>
              РЕСПУБЛИКАНСКИЙ <br>НАУЧНО-ПРАКТИЧЕСКИЙ ЦЕНТР “ДАРЫН”
            </p> -->
          </div>

          <!-- название центра завершен -->


          <!-- начинается виджеты: иконки, логин, поиск -->

          <!-- иконки соцсетей -->
                             
          <div class="col2 disp_none_mob">
            <div class="social_icon">
              <a href="https://www.facebook.com/RSPCDaryn"><img src="/wp-content/uploads/2021/08/facebook-1.png" style="width: 13px; height: 13px;" /></a>
              <a href="https://www.youtube.com/channel/UCmkD3mBsTNA6dp0puOLeqBA"><img src="/wp-content/uploads/2021/08/youtube-1.png"  style="width: 19px; height: 13px;"/></a>
              <a href="https://instagram.com/rspc_daryn"><img src="/wp-content/uploads/2021/08/instagram-1.png"  style="width: 13px; height: 13px;"/></a>
              <a href="https://t.me/daryn_centre"><img src="/wp-content/uploads/2021/08/telegram-1.png"  style="width: 13px; height: 13px;"/></a>
            </div>
          </div>
          <!-- иконки соцсетей завершен-->

          <!-- виджет вход и авторизация -->
                
          <div class="col3 disp_none_mob" style="display: none;">
            <?php dynamic_sidebar( 'new_wiget' ); ?>
          </div>
          <!-- виджет вход и авторизация завершен -->

          

          <!-- поиск -->
          <div class="col2 search_wid">
            <?php dynamic_sidebar( 'header_menu_search' ); ?>
          </div>
          <!-- поиск завершен-->

          <!-- виджет язык -->

          <div class="lang_btn">
            <?php pll_the_languages(array('dropdown'=>1)); ?>
          </div>
          <!-- виджет язык завершен-->

          <!-- если авторизован -->

          <?php if(is_user_logged_in()) { ?>
          <?php } else { ?>

          <!-- если авторизован завершен -->


          <!-- мобильная версия -->

          <div class="disp_block_mob mob_auth_img">
            <a href="/reg/"><img src="/wp-content/uploads/2020/07/auth.png" /></a>
          </div>
          <!-- мобильная версия завершен-->
          <?php } ?>
              
               
        </div>

      </div>

  </div>

</div>














<div class="header_menu_nav">

  <!-- мобильная версия меню -->

    <div class="mobile_menu">
      <div class="mobile-flex">
        <div class="new_btn_close_div">
          <a class="new_btn_close"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div class="lang_btn_mobile">
              <?php pll_the_languages(array('dropdown'=>1)); ?>
            </div>
        <div class="menu_logo">
          <img style="width: 40px;" src="/wp-content/uploads/2021/08/logo-2.png" />
        </div>
      </div>
      <?php
        wp_nav_menu(
          array(
            'theme_location' =>
      'primary', 'menu_class' => 'primary-menu', ) ); ?>
      <div style="margin-top: 30px;">
        <?php dynamic_sidebar( 'new_wiget' ); ?>
      </div>
      </div>

      <div class="social_icon" style="width: 180px;">
          <a href="https://www.facebook.com/RSPCDaryn"><img src="/wp-content/uploads/2020/10/facebook.png" /></a>
          <a href="https://www.youtube.com/channel/UCmkD3mBsTNA6dp0puOLeqBA" style="margin-top: 8px;"><img src="/wp-content/uploads/2020/10/youtube.png" /></a>
          <a href="https://instagram.com/rspc_daryn" style="margin-top: 8px;"><img src="/wp-content/uploads/2020/10/instagram.png" /></a>
          <a href="https://t.me/daryn_centre" style="margin-top: 5px; margin-left: -8px;"><img
              src="/wp-content/uploads/2020/09/telegram.png" /></a>
      </div>
    </div>

    <!-- мобильная версия меню завершен -->

  <!-- начинается меню -->
    <div class="menu-mobile-not-mobile">
      <div class="site-header-menu row" style="z-index: 2">
        
        <div class="width1140 col12" style="display: flex; justify-content: center;">
          <div class="site-header-main">
            <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
            

            <div id="site-header-menu" class="site-header-menu">
              <?php if ( has_nav_menu( 'primary' ) ) : ?>
              <nav id="site-navigation" class="main-navigation" role="navigation"
                aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                <?php
                      wp_nav_menu(
                        array(
                          'theme_location' =>
                      'primary', 'menu_class' => 'primary-menu', ) ); ?>
              </nav>
              <!-- .main-navigation -->
              <?php endif; ?>

              <?php if ( has_nav_menu( 'social' ) ) : ?>
              <nav id="social-navigation" class="social-navigation" role="navigation"
                aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                <?php
                      wp_nav_menu(
                        array(
                          'theme_location' =>
                      'social', 'menu_class' => 'social-links-menu', 'depth'
                      => 1, 'link_before' => '<span class="screen-reader-text"
                        >', 'link_after' => '</span
                      >', ) ); ?>
              </nav>
              <!-- .social-navigation -->
              <?php endif; ?>
            </div>
            <!-- .site-header-menu -->
            <?php endif; ?>
          </div>
          <!-- .site-header-main -->
        </div>
        
        
      </div>
    </div>

</body>















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
</html>

<!-- .site-header -->
<div class="main_page">
  <div class="breadcrumb container" style="margin-top: 20px; font-size: 14px;">
    <?php the_breadcrumb() ?>
  </div>
  <?php dynamic_sidebar( 'site_wiget_top' ); ?>
</div>
<div id="content" class="site-content container" style="padding: 30px 0;">

 
 
<!-- мой вариант хедер -->

<!--<div class="header">

    <div class="header-logo">
      <div class="h-logo-mname-wrap">
        <div class="h-logo-container">
          <img class="h-logo-img" src="/wp-content/uploads/2021/08/logo-2.gif" alt="">
        </div>
        <?php if(pll_current_language() == "ru"): ?>
        <div class="h-mainname">Республиканский научно-практический центр «Дарын»</div>
        <?php else: ?>
        <div class="h-mainname">«Дарын» республикалық ғылыми-практикалық орталығы</div>
        <?php endif; ?>
      </div>
      <div class="h-search-lang-wrap">
        <form role="search" method="get" class="h-search-form" action="https://daryn.kz/">
          <label class="h-search-form-label">
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
                          <img src="/wp-content/themes/twentysixteen/assets/images/arrow-right.svg" alt="">
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
                          <img src="/wp-content/themes/twentysixteen/assets/images/arrow-right.svg" alt="">
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
          wp_nav_menu(
            array(
              'theme_location' => 'ownmenu',
              'menu_id'        => 'ownmenu',
              'container'      => '',
              'menu_class'     => 'h-menu-cont',
              // 'link_after'     => '<span>&rsaquo;<img src="http://wordpress.me/wp-content/themes/daryn-kz/assets/image/arrow.svg" alt=""></span>',
              'walker'         => new Daryn_Walker_Nav_Menu()
            )
          );
          ?>
          
        </div>
      </div>
    </div>

  </div>-->