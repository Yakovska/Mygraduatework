<?php
/* Smarty version 3.1.29, created on 2016-10-22 16:43:45
  from "/var/www/irayakovskaya1/data/www/yakovska.in.ua/mygraduatework/templates/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580b6d11e4ec74_24114590',
  'file_dependency' => 
  array (
    'bc55d7148c76f2c5232c32a2bd8ceab37ed4697b' => 
    array (
      0 => '/var/www/irayakovskaya1/data/www/yakovska.in.ua/mygraduatework/templates/main.tpl',
      1 => 1477143821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_580b6d11e4ec74_24114590 ($_smarty_tpl) {
echo '<?
';?>header("Content-Type: text/html;charset=UTF-8");

<?php echo '?>';?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="icon" href="images/bino-favicon.ico" type="image/x-icon">
	<meta charset="utf-8" name = "viewport" content ="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type = "text/css" href="stylesheets/main.css">
	<link rel="stylesheet" type = "text/css" href="stylesheets/media.css">
	<link rel="stylesheet" type = "text/css" href="stylesheets/perfect-scrollbar.css">
	<link rel="stylesheet" type = "text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body id = "top">
	<div class="container">
		<div class="container__mailUs" id='mailUs'>
			<a href="#" class='mailUs__button'>Feedback</a>
			<div class="mailUs__message"></div>
			<div class='preview__mailUs'>
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
		</div>
		<div class="container__header">
			<header class="header">
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="container__wrap">
					<div class="header__HeaderInfo">
						<div class="HeaderInfo">
							<div class="HeaderInfo__description">Our Clients Are Our First Priority</div>
							<h1 class="HeaderInfo__heading">welcome to bino</h1>
							<div class="container__design">
								<div class="design">
									<div class="design__line"></div>
									<div class = "design__circle"></div>
									<div class = "design__line"></div>
								</div>
							</div>
							<p class="HeaderInfo__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="#aboutUs" class="HeaderInfo__btn">learn more</a>							
						</div>
					</div>
				</div>
			</header>
		</div>
		<div class="container__aboutUs" id = "aboutUs">
			<section class="aboutUs">
				<div class="container__wrap">
					<div class="aboutUs__aboutUs-article">
						<article class="aboutUs-article">
							<div class="aboutUs-article__icon"><span class="aboutUs-article__fa fa fa-graduation-cap"></span></div>
							<h2 class="aboutUs-article__heading">sleek design</h2>
							<div class="line"></div>
							<p class="aboutUs-article__description">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
						</article>
					</div>
					<div class="aboutUs__aboutUs-article">
						<article class="aboutUs-article">
							<div class="aboutUs-article__icon"><span class="aboutUs-article__fa fa fa-heart-o"></span></div>
							<h2 class="aboutUs-article__heading">clean code</h2>
							<div class="line"></div>
							<p class="aboutUs-article__description">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
						</article>
					</div>
					<div class="aboutUs__aboutUs-article">
						<article class="aboutUs-article">
							<div class="aboutUs-article__icon"><span class="aboutUs-article__fa fa fa-lightbulb-o"></span></div>
							<h2 class="aboutUs-article__heading">creative ideas</h2>
							<div class="line"></div>
							<p class="aboutUs-article__description">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
						</article>
					</div>
					<div class="aboutUs__aboutUs-article">
						<article class="aboutUs-article">
							<div class="aboutUs-article__icon"><span class="aboutUs-article__fa fa fa-comments-o"></span></div>
							<h2 class="aboutUs-article__heading">free support</h2>
							<div class="line"></div>
							<p class="aboutUs-article__description">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
						</article>
					</div>
				</div>
			</section>
		</div>
		<div class="container__services articleDetails" id = "services">
			<div class="services">
				<div class="services__servicesInfo">
					<div class="servicesInfo__wrap">
						<section class="servicesInfo">
							<h2 class="servicesInfo__heading">our services</h2>
							<div class="servicesInfo__servicesArticle ">
								<div class="webDesign servicesArticle__icon"><span class="servicesArticle__fa fa fa-desktop"></span></div>
								<article class="servicesArticle">
									<h3 class="webDesign servicesArticle__name">web design</h3>
									<p class="servicesArticle__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
								</article>
							</div>
							<div class="servicesInfo__servicesArticle">
								<div class="printDesign servicesArticle__icon"><span class="servicesArticle__fa fa fa-paint-brush"></span></div>
								<article class="servicesArticle">
									<h3 class="printDesign servicesArticle__name">print design</h3>
									<p class="servicesArticle__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
								</article>
							</div>
							<div class="servicesInfo__servicesArticle">
								<div class="photography servicesArticle__icon"><span class="servicesArticle__fa fa fa-camera"></span></div>
								<article class="servicesArticle">
									<h3 class="photography servicesArticle__name">photography</h3>
									<p class="servicesArticle__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
								</article>
							</div>
						</section>
					</div>
				</div>	
				<div class="services__servicesPhoto">
					<div class="servicesPhoto"></div>
				</div>
				<div class='services__details'> 
					<div class='details'> 
						<ul class="detailsMenu">
							<li class="details_webDesign detailsMenu__item">web design</li>
							<li class="detailsMenu__item">/</li>
							<li class="details_printDesign detailsMenu__item">print design</li>
							<li class="detailsMenu__item">/</li>
							<li class="details_photography detailsMenu__item">photography</li>
							<i class="fa fa-times"></i>
						</ul>
						<div class="details__articles"></div>					
					</div>
				</div> 
			</div>
		</div>
		<div class="container__works" id = "works">
			<section class="works">
				<h2 class="block__heading">resent works</h2>
				<aside class="block__description">It has survived not only five centuries, but also the leap scrambled it to make a type.</aside>
				<div class="container__design">
					<div class="design">
						<div class="design__line"></div>
						<div class = "design__circle"></div>
						<div class = "design__line"></div>
					</div>
				</div>
				<div class="worksGallery" id = "gallery1">
					<nav class="works__worksMenu" id = "menu2">


						<ul class="worksMenu">
							<li class="worksMenu__item"><a href="#" class="worksMenu__link_current worksMenu__link" data-link = "all">all</a></li>
							<li class="worksMenu__item">/</li>
							<li class="worksMenu__item"><a href="#" class="worksMenu__link" data-link = "print">print design</a></li>
							<li class="worksMenu__item">/</li>
							<li class="worksMenu__item"><a href="#" class="worksMenu__link" data-link = "web">web design</a></li>
							<li class="worksMenu__item">/</li>
							<li class="worksMenu__item"><a href="#" class="worksMenu__link" data-link = "photo">photography</a></li>
						</ul>
					</nav>
					<div class="picture-hover"><!--блок hover подставляется на каждое фото при наведении, см. скрипт-->
						<div class="picture-hover__icon"><span class="picture-hover__fa fa fa-search-plus"></span></div>
						<h3 class="picture-hover__header picture-hover__sig"></h3>
						<aside class="picture-hover__filter picture-hover__sig"></aside>
					</div> 
					<?php
$_from = $_smarty_tpl->tpl_vars['works_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
					<div class= "picture_<?php echo $_smarty_tpl->tpl_vars['val']->value['categ'];?>
 picture" data-section = "<?php echo $_smarty_tpl->tpl_vars['val']->value['categ'];?>
">
						<img src ="images/works/gallery/small_<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
.jpg" class="picture__image" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['alt'];?>
">
					</div>
					<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
if ($__foreach_val_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_val_0_saved_key;
}
?>
					<!--далее идут пустые фото, не видные на начальном экране-->
					<?php
$_from = $_smarty_tpl->tpl_vars['worksHidePhoto_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val1_1_saved_item = isset($_smarty_tpl->tpl_vars['val1']) ? $_smarty_tpl->tpl_vars['val1'] : false;
$__foreach_val1_1_saved_key = isset($_smarty_tpl->tpl_vars['num1']) ? $_smarty_tpl->tpl_vars['num1'] : false;
$_smarty_tpl->tpl_vars['val1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num1']->value => $_smarty_tpl->tpl_vars['val1']->value) {
$_smarty_tpl->tpl_vars['val1']->_loop = true;
$__foreach_val1_1_saved_local_item = $_smarty_tpl->tpl_vars['val1'];
?>
					<div class="picture_<?php echo $_smarty_tpl->tpl_vars['val1']->value['categ'];?>
 picture" data-section = "<?php echo $_smarty_tpl->tpl_vars['val1']->value['categ'];?>
">
						<img src="images/works/gallery/empty.jpg" data-src ="images/works/gallery/small_<?php echo $_smarty_tpl->tpl_vars['num1']->value;?>
.jpg" class="picture__image" alt="<?php echo $_smarty_tpl->tpl_vars['val1']->value['alt'];?>
"></div>
						<?php
$_smarty_tpl->tpl_vars['val1'] = $__foreach_val1_1_saved_local_item;
}
if ($__foreach_val1_1_saved_item) {
$_smarty_tpl->tpl_vars['val1'] = $__foreach_val1_1_saved_item;
}
if ($__foreach_val1_1_saved_key) {
$_smarty_tpl->tpl_vars['num1'] = $__foreach_val1_1_saved_key;
}
?>
						<div class='preview'> <!-- весь экран полностью -->
							<div class='preview__content'> <!-- блок с картинкой по центру -->
								<div class="preview__mini scrollbar"> <!--мини картинки-->
									<?php
$__section_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_foo']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 1; $__section_foo_0_iteration <= 24; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
									<img src="images/works/gallery/1-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null);?>
.jpg" alt="" class="miniImg">
									<?php
}
}
if ($__section_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = $__section_foo_0_saved;
}
?>
								</div>
								<div class="preview__max">
									<div class='preview__text'></div>	<!-- здесь отображаются подписи из alt img	 -->	
									<div class='preview__arrow preview__arrow_prev'><span class="prev__fa fa fa-angle-left"></span></div> <!-- стрелка вправо -->
									<img src='' class='preview__image' alt=""> <!-- фото -->
									<div class='preview__arrow preview__arrow_next'><span class="prev__fa fa fa-angle-right"></span></div> <!-- стрелка влево -->
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="container__blog" id = "blog">
				<div class="blog">
					<h2 class="block__heading">our blog</h2>
					<aside class="block__description">Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio.</aside>
					<div class="container__design">
						<div class="design">
							<div class="design__line"></div>
							<div class = "design__circle"></div>
							<div class = "design__line"></div>
						</div>
					</div>
					<div class="blog__blogArticles">
						<div class="blogArticles">
							<div class="blogArticles__article">
								<div class="article">
									<img src="images/content/blog/1.jpg" alt ="" class="article__img">
									<div class="article__articleDescription">
										<div class="articleDescription">
											<div class="arrow-left"></div>
											<aside class="articleDescription__aside">art / web-design</aside>
											<h3 class="articleDescription__header">web design</h3>
											<div class="articleDescription__border"></div>
											<p class="articleDescription__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
											<a href="#" class="articleDescription__link">Read More<span class="articleDescription__fa fa fa-angle-double-right"></span></a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="blogArticles__article">
								<div class="article">
									<img src="images/content/blog/2.jpg" alt="" class="article__img">
									<div class="article__articleDescription">
										<div class="articleDescription">
											<div class="arrow-left"></div>
											<aside class="articleDescription__aside">art / t-shirt</aside>
											<h3 class="articleDescription__header">t-shirt design</h3>
											<div class="articleDescription__border"></div>
											<p class="articleDescription__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
											<a href="#" class="articleDescription__link">Read More<span class="articleDescription__fa fa fa-angle-double-right"></span></a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="blogArticles__article">
								<div class="article">
									<img src="images/content/blog/3.jpg" alt="" class="article__img article__img_bottom">
									<div class="article__articleDescription article__articleDescription_bottom">
										<div class="articleDescription">
											<div class="arrow-right"></div>
											<aside class="articleDescription__aside">art / photography</aside>
											<h3 class="articleDescription__header">photography</h3>
											<div class="articleDescription__border"></div>
											<p class="articleDescription__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
											<a href="#" class="articleDescription__link">Read More<span class="articleDescription__fa fa fa-angle-double-right"></span></a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="blogArticles__article">
								<div class="article">
									<img src="images/content/blog/4.jpg" alt="" class="article__img article__img_bottom">
									<div class="article__articleDescription article__articleDescription_bottom">
										<div class="articleDescription">
											<div class="arrow-right"></div>
											<aside class="articleDescription__aside">art / video</aside>
											<h3 class="articleDescription__header">video</h3>
											<div class="articleDescription__border"></div>
											<p class="articleDescription__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
											<a href="#" class="articleDescription__link">Read More<span class="articleDescription__fa fa fa-angle-double-right"></span></a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container__contact" id = "contact">
				<div class="contact">
					<div class="container__wrap">
						<h2 class="block__heading">keep in touch</h2>
						<aside class="block__description">Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. </aside>
						<div class="container__design">
							<div class="design">
								<div class="design__line"></div>
								<div class = "design__circle"></div>
								<div class = "design__line"></div>
							</div>
						</div>
						<div class="contact__OurContact">
							<div class="OurContact">
								<h2 class="contact__wariant">our adress</h2>
								<p class="contact__value">House #13, Streat road, Sydney 2310 Australia</p>
								<h2 class="contact__wariant">call us</h2>
								<p class="contact__value">+ 880 168 109 1425</p>
								<p class="contact__value">+ 0216809142</p>
								<h2 class="contact__wariant">email us</h2>
								<p class="contact__value">contactus@email.com</p>
								
							</div>
						</div>
						<div class="contact__map" id="map">
							
						</div>
					</div>
				</div>
			</div>
			<div class="container__clock">
				<div class="clock" id = "clock1">
					<div class="container__wrap">
						<h2 class="clock__heading">Time before the New Year</h2>
						<ul class = "clockTimer">
							<li class="time days "></li>
							<li class="point">:</li>
							<li class="hours time"></li>
							<li class="point">:</li>
							<li class="min time"></li>
							<li class="point">:</li>
							<li class="sec time"></li>
							<li class="sign">Days</li>
							<li class="point"></li>
							<li class="sign">Hours</li>
							<li class="point"></li>
							<li class="sign">Minutes</li>
							<li class="point"></li>
							<li class="sign">Seconds</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container__footer">
				<footer class="footer">
					<div id = "scrollTop" class="scroll__topBtn"> <!-- скролл наверх -->
						<a href="#" class="topBtn"><span class="top__fa fa fa-angle-up"></span></a> 
					</div>
					<div class="container__wrap">
						<nav class="footer__socials">
							<ul class="socials">
								<?php
$_from = $_smarty_tpl->tpl_vars['socials']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_2_saved_item = isset($_smarty_tpl->tpl_vars['foo']) ? $_smarty_tpl->tpl_vars['foo'] : false;
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$__foreach_foo_2_saved_local_item = $_smarty_tpl->tpl_vars['foo'];
?>
								<li class="socials__item"><a href="#" class="socials__link socials__link_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"></a></li>
								<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_2_saved_local_item;
}
if ($__foreach_foo_2_saved_item) {
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_2_saved_item;
}
?>
							</ul>
						</nav>	
						<div class="footer__copyright">Kazi Erfan &copy; All Rights Reserved</div>
					</div>			
				</footer>
			</div>	
		</div>

		<?php echo '<script'; ?>
 src = "scripts/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src = "scripts/perfect-scrollbar.jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="scripts/component.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="scripts/settings.js"><?php echo '</script'; ?>
><!-- для закладок из статей   -->
		<?php echo '<script'; ?>
 src="scripts/innit-settings.js"><?php echo '</script'; ?>
> <!-- для закладок из статей   -->
		<?php echo '<script'; ?>
 src = "scripts/scripts.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src = "scripts/form-mailUs.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src = "scripts/menu.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src = "scripts/scroll.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src = "scripts/gallery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			var  m1	= new MailUs("#mailUs") // форма обратной связи
				,m2	= new Menu("#menu1")//подменю
				,g1 = new Gallery("#gallery1")//галерея
				,d1 = new Details(".articleDetails")//открыть окно статей
				,s1 = new ScrollTop("#scrollTop")//скролл наверх
				,s2 = new AboutUs("#aboutUs")//анимация при скролл
				,s3 = new Services("#services")//анимация при скролл
				,s4 = new Blog("#blog")//анимация при скролл
				,c1 = new Clock("#clock1");
			<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>//скролл для галереи
			$(".scrollbar").perfectScrollbar({
				maxScrollbarLength: 40
			});
		<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
>
			var map;
			function initMap(){
				var latlng = new google.maps.LatLng(-34.397, 150.644);
				map = new google.maps.Map(document.getElementById("map"),{
					center: latlng,					
					zoom: 8
				});
			}

		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsYw0mmJsYeYCwGwp7sDF3lWYWqF5tlbM&callback=initMap">
	<?php echo '</script'; ?>
>


</body>
</html><?php }
}
