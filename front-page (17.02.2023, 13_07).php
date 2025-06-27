<?php
/** Template name: homepagekkkkkkkkkkkkkkkkkkk
 */

get_header();
?>

<?php
/*
		$base_dir = trailingslashit(get_template_directory());
		$dir = 'assets/images/header/';
		$images = glob($base_dir . $dir . "*");
		$randomImage = $images[array_rand($images)];
		$url = get_theme_file_uri($dir.basename($randomImage));
	?>
	<!--
	<header id="header" class="header wf-section" style="background-image:url(<?php echo $url?>)">
		<div class="header-wrap"><a href="#" class="logo w-nav-brand"><img
					src="<?php echo get_template_directory_uri() ?>/assets/images/62e685ebdf58573a51c8940e_logo.jpg" alt="daryn.kz logo" class="logo-image"></a>
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
	</header>
	<div class="darynnumber-wrap wf-section" id="daryn-numbers">
		<div class="container darynnumber-cont">
			<div class="conttext-name">Дарын в цифрах</div>
			<div class="number-wrap">
				<div class="number-cont">
					<div class="mainnumber">1998</div>
					<div class="numbertext">год основания</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">7</div>
					<div class="numbertext">проведенных мировых олимпиад</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">493</div>
					<div class="numbertext">медали на мировых олимпиадах</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">31</div>
					<div class="numbertext">сотрудников</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">17</div>
					<div class="numbertext">региональных центров</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">134</div>
					<div class="numbertext">специализированные школы</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">72316</div>
					<div class="numbertext">контингент учащихся СОО</div>
				</div>
				<div class="number-cont">
					<div class="mainnumber">8520</div>
					<div class="numbertext">педагоги, работающие в СОО</div>
				</div>
			</div>
		</div>
	</div>
	<div class="kuntizbe-wrap wf-section">
		<div class="container kutizbe-cont">
			<div class="context-name">Календарь</div>
			<div class="kuntizbe-wrapper">
				<?php $query = new WP_Query(array('post_type' => 'post', 'category_name' => 'kuntizbe, news', 'posts_per_page' => 9)); while ($query->have_posts()) : $query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="kuntizbe-container w-inline-block">
					<div class="k-left">
						<div class="k-data">25.7</div>
					</div>
					<div class="k-right">
						<div class="k-text-title"><?php the_title(); ?></div>
							<div class="k-text-data">Сәрсенбі, 3 тамыз</div>
						<div class="k-text-data">Сәрсенбі, 3 тамыз</div>
						<!-- <div class="k-text-adress">Тәуелсіздік көшесі, 18</div> -->
					</div>
				</a>
			<?php endwhile; wp_reset_postdata(); ?>

				
			</div>
				<a href="https://daryn.kz/kk/oqigalar-kuntizbesi/" class="all-events-text">Все мероприятия</a>
		</div>
	</div>
	<div class="container news-wrap wf-section">
		<div class="news-cont">
			<div class="context-name">Новости</div>
<div class="news-wrapper">
	<?php $postPosition = 0; ?>
	<?php $query = new WP_Query(array('post_type' => 'post', 'category_name' => 'news', 'posts_per_page' => 6)); while ($query->have_posts()) : $query->the_post(); ?>
		<?php if ($postPosition == 0 || $postPosition == 5) : ?>
			<a href="<?php the_permalink(); ?>" class="news-container-long w-inline-block">
				<?php echo get_the_post_thumbnail( get_the_ID(), 'post-custom' );?>
				<div class="n-bg"></div>
				<div class="n-text-category">
					<?php
					$cats = get_the_category();
					for ($i = 0; $i < count($cats); $i++) {
						$comma = '';
						if ($i > 0) $comma = ', ';
						echo $comma . $cats[$i]->cat_name;
					}
					?>
				</div>
				<div class="n-text-title"><?php the_title(); ?></div>
			</a>
			<?php elseif ($postPosition > 0 && $postPosition < 5) : ?>
				<?php if ($postPosition == 1 || $postPosition == 3) : ?>
					<div class="news-container-devided">
				<?php endif ?>
				<a href="<?php the_permalink(); ?>" class="news-container w-inline-block">
					<div class="n-image-wrap">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'post-custom' );?>
					</div>
					<div class="n-text-wrap">
						<div class="text-block">

							<?php
							$cats = get_the_category();
							for ($i = 0; $i < count($cats); $i++) {
								$comma = '';
								if ($i > 0) $comma = ', ';
								echo $comma . $cats[$i]->cat_name;
							}
							?>
						</div>
						<div class="text-block-2"><?php the_title(); ?></div>
					</div>
				</a>
				<?php if ($postPosition == 2 || $postPosition == 4) : ?>
					</div>
				<?php endif ?>
			<?php else: break; ?>
			<?php endif ?>
			<?php $postPosition++; ?>
		<?php endwhile ?>
		<?php if ($postPosition == 2 || $postPosition == 4) : ?>
		</div>
		<?php endif ?>
</div><a href="https://daryn.kz/kk/zhanalyqtar-baspasoz-kz/" class="all-news-text">Другие новости</a>
		</div>
	</div>
-->

<?php
get_footer();
