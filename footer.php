<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?>

<!-- мой вариант хедер -->

<!-- <div class="header">

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

  </div> -->


</div>
<footer id="colophon" class="site-footer" role="contentinfo">

<?php if ( has_nav_menu( 'social' ) ) : ?>
<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
<?php
wp_nav_menu(
array(
'theme_location' => 'social',
'menu_class'     => 'social-links-menu',
'depth'          => 1,
'link_before'    => '<span class="screen-reader-text">',
'link_after'     => '</span>',
)
);
?>
</nav>
<?php endif; ?>

<div class="site-info" style="font-size:0.8em">
<?php
/**
* Fires before the twentysixteen footer text for footer customization.
*
* @since Twenty Sixteen 1.0
*/
do_action( 'twentysixteen_credits' );
?>

<div class="row foot_new">
<div class="col6 disp_none_mob">
        <?php
if(pll_current_language() == 'kk') {
echo '© 2025 “Дарын” Республикалық ғылыми-практикалық орталығы';
} else if(pll_current_language() == 'ru') {
echo '© 2025 Республиканский научно-практический центр "Дарын"';
}
?>
</div>
<div class="col6 foot_menu">
<div class="menu-%d1%80%d1%83%d1%81%d1%81%d0%ba%d0%be%d0%b5-%d0%bc%d0%b5%d0%bd%d1%8e-container"><ul id="menu-%d1%80%d1%83%d1%81%d1%81%d0%ba%d0%be%d0%b5-%d0%bc%d0%b5%d0%bd%d1%8e-2" class="primary-menu">
<?php
if(pll_current_language() == 'kk') {
echo '

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-415"><a href="http://daryn.kz/">Главная</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-239"><a href="http://daryn.kz/kk/%d0%be%d1%80%d1%82%d0%b0%d0%bb%d1%8b%d2%9b-%d1%82%d1%83%d1%80%d0%b0%d0%bb%d1%8b/">Біз туралы</a>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-666"><a href="http://daryn.kz/kk/%d0%be%d2%9b%d1%83%d1%88%d1%8b%d0%bb%d0%b0%d1%80%d2%93%d0%b0/">Оқушыларға</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-665"><a href="http://daryn.kz/kk/%d0%bc%d2%b1%d2%93%d0%b0%d0%bb%d1%96%d0%bc%d0%b4%d0%b5%d1%80%d0%b3%d0%b5/">Мұғалімдерге</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-672"><a href="#">Қашықтан оқыту</a>
</li>


';
} else if(pll_current_language() == 'ru') {
echo '
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-415"><a href="http://daryn.kz/">Главная</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-239"><a href="http://daryn.kz/%d0%be-%d1%86%d0%b5%d0%bd%d1%82%d1%80%d0%b5/">О нас</a>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-666"><a href="http://daryn.kz/%d1%88%d0%ba%d0%be%d0%bb%d1%8c%d0%bd%d0%b8%d0%ba%d0%b0%d0%bc/">Школьникам</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-665"><a href="http://daryn.kz/%d1%83%d1%87%d0%b8%d1%82%d0%b5%d0%bb%d1%8f%d0%bc/">Учителям</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-672"><a href="#">Дистанционное образование</a>

</li>

';
}
?>
</ul></div>
</div>

<div class="col12">
    <div class="social_icon">
        <a href="https://www.facebook.com/RSPCDaryn"><img src="/wp-content/uploads/2020/07/fac_g.png" /></a>
        <a href="https://www.youtube.com/channel/UCmkD3mBsTNA6dp0puOLeqBA" style="padding-top:8px"><img src="/wp-content/uploads/2020/07/you_g.png" /></a>
        <a href="https://instagram.com/rspc_daryn" style="padding-top:5px"><img src="/wp-content/uploads/2020/07/inst_g.png" /></a>
        <a href="https://t.me/daryn_centre"><img src="/wp-content/uploads/2020/09/telegram_g.png" /></a>
    </div>
</div>
<div class="col6 disp_block_mob" style="    margin: 20px 0;    font-size: 10px;">
    © 2025 Республиканский научно-практичесвкий центр дарын
</div>

</div>

</div>
<a id="button"><i class="fas fa-angle-up"></i></a>
</footer>
</div>
</div>
<?php wp_footer(); ?>

<script src="/wp-content/themes/twentysixteen/js/script.js"></script>
<script src="/wp-content/themes/twentysixteen/js/new_scripts2020.js"></script>
<script src="/wp-content/themes/twentysixteen/js/archive_olimp.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
if($(".swiper-container").length > 0){
var swiper = new Swiper('.swiper-container', {
spaceBetween: 30,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
}
</script>
<script async src="/wp-content/themes/twentysixteen/js/popper.min.js" ></script>
<!-- <script async src="/wp-content/themes/twentysixteen/js/jquery.flipster.min.js"></script>
<script type="text/javascript">
    var coverflow = $("#coverflow").flipster();
    var carousel = $("carousel").flipster({
        style:'carousel',
        spacing: -0.5,
        nav: true,
        button:true,
    });
</script> -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(67537822, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>


<noscript><div><img src="https://mc.yandex.ru/watch/67537822" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>