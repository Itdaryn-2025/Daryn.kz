<?php
/** Template name: kalendar full ru
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"] } });</script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="kalendar-header-wrapper">
			<div class="kalendar-header-wrap">
				<a href="#" class="main-logo w-nav-brand">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/62e685ebdf58573a51c8940e_logo.jpg" alt="daryn.kz logo" class="main-logo-image">
				</a>
				<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease"
					data-easing2="ease" role="banner" class="navbar w-nav">
					<div class="navbar-container">
						<nav role="navigation" class="nav-menu w-nav-menu">
							<div class="nav-menu-block"><a href="#" class="logo-mobile w-nav-brand"><img
										src="images/62e685ebdf58573a51c8940e_logo.jpg" loading="eager"
										srcset="images/62e685ebdf58573a51c8940e_logo-p-500.jpg 500w, images/62e685ebdf58573a51c8940e_logo-p-800.jpg 800w, images/62e685ebdf58573a51c8940e_logo-p-1080.jpg 1080w, images/62e685ebdf58573a51c8940e_logo-p-1600.jpg 1600w, images/62e685ebdf58573a51c8940e_logo.jpg 1774w"
										sizes="100vw" alt="daryn.kz logo" class="logo-image-mobile"></a>
								<div class="lang-cont">
									<a href="/" class="lang-link">Қазақша</a>
									<a href="/glavnaya/" class="lang-link">Русский</a>
									<a href="#" class="lang-link">English</a>
								</div>
									<?php
									wp_nav_menu(
									array(
									'theme_location' => 'mainmenu',
									'menu_id'        => 'header-menu',
									)
									);
									?>
							</div>
						</nav>
						<div class="menu-button w-nav-button">
							<div class="menu-btn-icon w-icon-nav-menu"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mainimage-wrap">
			<div class="mainimage" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/2.png)">
				<div class="maintext-cont">
					<p class="maintext">Список мероприятии</p>
					<p class="maintext">на 2022-2023 учебный год</p>
				</div>
			</div>

			
		</div>
	</header>
	<section class="kalendar-wrap">
		<div class="kalendar-title-wrap">
			<div class="tabs">
				<div class="tabs__nav tabs-nav">
					<div class="tabs-nav__item is-active" data-tab-name="tab-1">Мероприятие</div>
					<div class="tabs-nav__item" data-tab-name="tab-2">Прошедшие</div>
				</div>
				<div class="kalendar-filtr-wrap">
					<div class="kalendary-filtr-cont">
						<select class="filtr">
							<option>Месяцы</option>
							<option>Январь</option>
							<option>Февраль</option>
							<option>Март</option>
							<option>Апрель</option>
							<option>Май</option>
							<option>Июнь</option>
							<option>Июль</option>
							<option>Август</option>
							<option>Сентябрь</option>
							<option>Октябрь</option>
							<option>Ноябрь</option>
							<option>Декабрь</option>
						</select>
						<select  class="filtr">
							<option>Категории</option>
							<option>Предмет1</option>
							<option>Предмет2</option>
							<option>Предмет3</option>
							<option>Предмет4</option>
							<option>Предмет5</option>
							<option>Предмет6</option>
							<option>Предмет7</option>
							<option>Предмет8</option>
							<option>Предмет9</option>
							<option>Предмет10</option>
						</select>
						<select  class="filtr">
							<option>Организаторы</option>
							<option>г.Астана</option>
							<option>г.Алматы</option>
							<option>г.Шымкент</option>
							<option>Абайская область</option>
							<option>Акмолинская область</option>
							<option>Актюбинская область</option>
							<option>Алматинская область</option>
							<option>Атырауская область</option>
							<option>Восточно-Казахстанская область</option>
							<option>Жамбылская область</option>
							<option>Жетысуская область</option>
							<option>Западно-Казахстанская область</option>
							<option>Карагандинская область</option>
							<option>Костанайская область</option>
							<option>Кызылординская область</option>
							<option>Мангистауская область</option>
							<option>Павлодарская область</option>
							<option>Северо-Казахстанская область</option>
							<option>Туркестанская область</option>
							<option>Улытауская область</option>
						</select>
						<select  class="filtr">
							<option>Участники</option>
							<option>Педагоги</option>
							<option>Школьники</option>
						</select>
					</div>
					<div class="kalendar-search">
						<input type="text" name="search" class="ks-input">
						<button class="ks-btn">
							<svg class="search-img">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/search.svg#search-img" />
							</svg>
						</button>
					</div>
				</div>
				<div class="kalendar-line"></div>
				<div class="tabs__content">
					<div class="tab is-active tab-1"> 
						<div class="kalendar-view-wrap">
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Математика ждшодшло лдрплорлорло</span><span>Математика</span><span>Математика</span><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>
							<a href="" class="kv-link">
								<div class="kalendar-view-cont">
									<div class="kv-image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/2.jpg">
									</div>
									<div class="kv-discription-cont">
										<p class="kv-date"><span class="kv-date-number">15</span><span>сентября</span></p>
										<p class="kv-discription">Регистрация работ обучающихся для участия в Республиканском конкурсе научных проектов по общеобразовательным предметам для 8-11(12) классов на 2022-2023 учебный год</p>
										<p class="kv-subject-place"><span>Математика</span><span>Нур-Султан</span></p>
									</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="tab tab-2">Содержание таба 2</div>
				</div>
			</div>
		</div>
	</section>






	<?php
get_footer();