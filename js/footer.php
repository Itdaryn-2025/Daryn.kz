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
echo '© 2020 “Дарын” Республикалық ғылыми-практикалық орталығы';
} else if(pll_current_language() == 'ru') {
echo '© 2020 Республиканский научно-практический центр "Дарын"'; 
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
    © 2020 Республиканский научно-практичесвкий центр дарын
</div>
</div>

</div>
<a id="button"><i class="fas fa-angle-up"></i></a>
</footer>
</div>
</div>
<?php wp_footer(); ?>

<script src="/wp-content/themes/twentysixteen/js/new_scripts2020.js"></script>
<script src="/wp-content/themes/twentysixteen/js/archive_olimp.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
spaceBetween: 30,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
</script>
 
<script src="/wp-content/themes/twentysixteen/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

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