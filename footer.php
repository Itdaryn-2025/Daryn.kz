<?php
echo '<style>
  #colophon.site-footer {
    background: #fff;
    padding: 20px 0;
    border-top: 1px solid #ccc;
    margin-top: -10px;
  }
  #colophon .site-info {
    margin-top: -10px;
  }
  #colophon .social_icon img,
  #colophon .primary-menu li {
    margin-bottom: 0;
  }
  @media (max-width: 768px) {
  #colophon.site-footer {
    padding: 20px 10px;
    text-align: center;
  }

  #colophon .site-info {
    margin-top: 0;
  }

  div[style*="background-color: #252f54"] {
    flex-direction: column;
    align-items: center !important;
    padding: 20px 10px !important;
  }

  /* Левая колонка */
  div[style*="margin-left: 130px"] {
    margin-left: 0 !important;
    text-align: center;
  }

  /* Центральная колонка */
  div[style*="margin-left: 150px"] {
    margin-left: 0 !important;
    margin-top: 30px !important;
    text-align: center;
  }

  /* Правая колонка */
  div[style*="margin-right: 150px"] {
    margin-left: 0 !important;
    margin-right: 0 !important;
    margin-top: 30px !important;
    text-align: center;
  }

  div[style*="margin-top: 25px; display: flex"] {
    justify-content: center !important;
    flex-wrap: wrap;
  }
  div[style*="margin-top: 25px; display: flex"] a {
    margin: 5px;
  }
}

</style>';

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after
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
        <?php if (pll_current_language() == "ru"): ?>
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
          <?php pll_the_languages(array('dropdown' => 1)); ?>
        </div>
      </div>
    </div>
    <div class="header-menu-wrap">
      <div class="header-menu">
        <div class="h-region-set-wrap">

          <div class="h-region-set">
            <?php if (pll_current_language() == "ru") {
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

                        <? if ($ind == 0): ?>
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
                          <p class="h-r-school-mainname"><?= $region ?></p>
                          <img src="/wp-content/themes/twentysixteen/assets/images/arrow-right.svg" alt="">
                        </div>
                        <? if ($region_ind == 0): ?>
                        <div class="h-r-school-content-right-absulute">

                        </div>
                        <? $region_ind = 1; ?>
                        <? endif; ?>
                        <div class="h-r-school-content-right">
                          <p class="h-r-s-r-mainname"><?= $region ?></p>
                          <div class="h-r-school-table-text-cont">
                            <div class="h-r-school-table-text-wrap">
                              <div class="h-r-school-table-mtext"><?= $fullSchoolName ?></div>
                              <div class="h-r-school-table-mtext"><?= $schoolAdress ?></div>
                              <div class="h-r-school-table-mtext"><?= $contactInfo ?></div>
                              <div class="h-r-school-table-mtext"><?= $entryGrade ?></div>
                            </div>
                            <? foreach ($region_schools as $region_school) : ?>
                            <div class="h-r-school-table-text-wrap">
                              <div class="h-r-school-table-text"><?= $region_school['school_name'] ?></div>
                              <div class="h-r-school-table-text"><?= $region_school["adress"] ?></div>
                              <div class="h-r-school-table-text"><?= $region_school["contact"] ?></div>
                              <div class="h-r-school-table-text"><?= $region_school["entry_grade"] ?></div>
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
        'menu_id' => 'ownmenu',
        'container' => '',
        'menu_class' => 'h-menu-cont',
        // 'link_after'     => '<span>&rsaquo;<img src="http://wordpress.me/wp-content/themes/daryn-kz/assets/image/arrow.svg" alt=""></span>',
        'walker' => new Daryn_Walker_Nav_Menu()
    )
);
?>
        </div>
      </div>
    </div>
  </div> -->

</div>
<!-- 205-315 -->



<div style="background-color: #252f54; color: white; padding: 30px 10px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; font-family: Arial, sans-serif; font-size: 14px;">
    <!-- Левая колонка -->
    <div style="flex: 1 1 0px; min-width: 280px; margin-left: 130px;">
        <a href="#" style="display: inline-block; margin-bottom: 10px; margin-left: 0px">
            <div style="width: 140px; height: 60px; align-items-center;"><img src="https://daryn.kz/wp-content/uploads/2021/08/white-logo-daryn.png" alt=""></div>
        </a>
        <?php if (pll_current_language() == 'kk') : ?>
            <p style="line-height: 1.6;">«Дарын» республикалық ғылыми-практикалық орталығының миссиясы – Қазақстанның    дарынды балалары мен дарынды жастарын анықтау, дамыту және кәсіби қолдау болып табылады</p>
        <?php elseif (pll_current_language() == 'ru') : ?>
            <p style="line-height: 1.6;">Миссией Республиканского научно-практического центра «Дарын» является выявление, развитие и профессиональная поддержка одаренных детей и талантливой молодежи Казахстана</p>
        <?php else : ?>
            <p style="line-height: 1.6;">Our mission - identification, development and professional support of gifted children and talented youth in Kazakhstan</p>
        <?php endif; ?>

        <div style="margin-top: 25px; display: flex; justify-content: space-around;">
            <a href="https://www.facebook.com/RSPCDaryn" target="_blank" style="margin-right: 10px;">
                <img src="/wp-content/uploads/2021/08/facebook-2025.png" alt="Facebook" style="width: 40px;">
            </a>
            <a href="https://www.youtube.com/channel/UCmkD3mBsTNA6dp0puOLeqBA" target="_blank" style="margin-right: 10px;">
                <img src="/wp-content/uploads/2021/08/youtube-2025.png" alt="YouTube" style="width: 40px;">
            </a>
            <a href="https://instagram.com/rspc_daryn" target="_blank" style="margin-right: 10px;">
                <img src="/wp-content/uploads/2021/08/instagram-2025.png" alt="Instagram" style="width: 40px;">
            </a>
            <a href="https://t.me/daryn_centre" target="_blank">
                <img src="/wp-content/uploads/2021/08/telegram-2025.png" alt="Telegram" style="width: 40px;">
            </a>
            <a href="https://www.linkedin.com/company/republican-scientific-and-practical-center-daryn/" target="_blank">
                <img src="wp-content/uploads/2021/08/linkedin-2025.png" alt="LinkedIn" style="width: 40px;">
            </a>
            <a href="https://kk.wikipedia.org/wiki/%D0%94%D0%B0%D1%80%D1%8B%D0%BD_%D1%80%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0%D0%BB%D1%8B%D2%9B_%D2%93%D1%8B%D0%BB%D1%8B%D0%BC%D0%B8-%D0%BF%D1%80%D0%B0%D0%BA%D1%82%D0%B8%D0%BA%D0%B0%D0%BB%D1%8B%D2%9B_%D0%BE%D1%80%D1%82%D0%B0%D0%BB%D1%8B%D2%93%D1%8B" target="_blank">
                <img src="/wp-content/uploads/2021/08/wikipedia-2025.png" alt="Wikipedia" style="width: 40px;">
            </a>
        </div>
    </div>


    <!-- Центральная колонка -->
    <div style="min-width: 280px; margin-top: 70px; margin-left: 150px">
        <ul style="list-style: none; padding: 0; margin: 0;">
            <?php
            if (pll_current_language() == 'kk') {
                echo '
            <li style="margin-bottom: 8px;"><a href="http://daryn.kz/" style="color: white; text-decoration: underline;">Басты бет</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/kk/%d0%be%d1%80%d1%82%d0%b0%d0%bb%d1%8b%d2%9b-%d1%82%d1%83%d1%80%d0%b0%d0%bb%d1%8b/" style="color: white; text-decoration: underline;">Біз туралы</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/kk/pravila-i-polozhenie-meropriyatii-kz/" style="color: white; text-decoration: underline;">Оқушыларға</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/kk/мұғалімдерге-арналған-олимпиадалар/" style="color: white; text-decoration: underline;">Мұғалімдерге</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/kk/plan-raboty-kz/" style="color: white; text-decoration: underline;">Жұмыс жоспары</a></li>
          ';
            } else if (pll_current_language() == 'ru') {
                echo '
            <li style="margin-bottom: 8px;"><a href="http://daryn.kz/" style="color: white; text-decoration: underline;">Главная</a></li>
            <li style="margin-bottom: 8px;"><a href="http://daryn.kz/о-центре/" style="color: white; text-decoration: underline;">О нас</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/pravila-i-polozhenie-meropriyatii/" style="color: white; text-decoration: underline;">Школьникам</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/правила-и-положения-олимпиад-и-конкур/" style="color: white; text-decoration: underline;">Учителям</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/plan-raboty/" style="color: white; text-decoration: underline;">План работы</a></li>
          ';
            } else {
                echo '
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/en/" style="color: white; text-decoration: none;">Main page</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/en/about-center/" style="color: white; text-decoration: underline;">About us</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/en/schedule-of-events/" style="color: white; text-decoration: underline;">For students</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/en/schedule-of-events/" style="color: white; text-decoration: underline;">For teachers</a></li>
            <li style="margin-bottom: 8px;"><a href="https://daryn.kz/plan-raboty/" style="color: white; text-decoration: underline;">Work plan</a></li>
            <!-- <li style="margin-bottom: 8px;"><a href="https://daryn.kz/en/contacts/" style="color: white; text-decoration: none;">Contacts</a></li>
          -->
          ';
            }
            ?>
        </ul>
    </div>


    <!-- Правая колонка, где контакты -->
    <div style="min-width: 0px; margin-top: 70px; margin-left: 30px; margin-right: 150px">
        <ul style="list-style: none; padding: 0; margin: 0;">
            <?php
            if (pll_current_language() == 'kk') {
                echo '
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">Сұрақтарыңыз болса:</a></li>
            <li style="margin-bottom: 8px;"><a href="https://2gis.kz/astana/firm/70000001019219385?m=71.439256%2C51.127615%2F17&utm_source=details&utm_medium=widget&utm_campaign=firmsonmap" style="color: white; text-decoration: underline;">📍Мекен-жайымыз</a></li>
            <li style="margin-bottom: 8px;"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#search/info%40daryn.kz?compose=new" style="color: white; text-decoration: underline;">E-mail: info@daryn.kz</a></li>
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">Телефон: +7 7172 57 65 56</a></li>
          ';
            } else if (pll_current_language() == 'ru') {
                echo '
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">Если имеются вопросы:</a></li>
            <li style="margin-bottom: 8px;"><a href="https://2gis.kz/astana/firm/70000001019219385?m=71.439256%2C51.127615%2F17&utm_source=details&utm_medium=widget&utm_campaign=firmsonmap" style="color: white; text-decoration: underline;">📍Наше местоположение</a></li>
            <li style="margin-bottom: 8px;"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#search/info%40daryn.kz?compose=new" style="color: white; text-decoration: underline;">E-mail: info@daryn.kz</a></li>
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">Телефон: +7 7172 57 65 56</a></li>
          ';
            } else {
                echo '
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">If you have questions:</a></li>
            <li style="margin-bottom: 8px;"><a href="https://2gis.kz/astana/firm/70000001019219385?m=71.439256%2C51.127615%2F17&utm_source=details&utm_medium=widget&utm_campaign=firmsonmap" style="color: white; text-decoration: underline;">📍Our location</a></li>
            <li style="margin-bottom: 8px;"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#search/info%40daryn.kz?compose=new" style="color: white; text-decoration: underline;">E-mail: info@daryn.kz</a></li>
            <li style="margin-bottom: 8px;"><a href="" style="color: white; text-decoration: none;">Телефон: +7 7172 57 65 56</a></li>
          ';
            }
            ?>
        </ul>
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
    if ($(".swiper-container").length > 0) {
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }
</script>
<script async src="/wp-content/themes/twentysixteen/js/popper.min.js"></script>
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
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(67537822, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>


<noscript>
    <div><img src="https://mc.yandex.ru/watch/67537822" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>