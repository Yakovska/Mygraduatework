<?
header("Content-Type: text/html;charset=UTF-8");

?>
<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
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
				{include file="form.tpl"}
			</div>
		</div>
		<div class="container__header">
			<header class="header">
				{include file="menu.tpl"}
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
					<div class="picture-hover"><!--hover block is added to each photo when you hover-->
						<div class="picture-hover__icon"><span class="picture-hover__fa fa fa-search-plus"></span></div>
						<h3 class="picture-hover__header picture-hover__sig"></h3>
						<aside class="picture-hover__filter picture-hover__sig"></aside>
					</div> 
					{foreach from=$works_data key=num item=val}
					<div class= "picture_{$val.categ} picture" data-section = "{$val.categ}">
						<img src ="images/works/gallery/small_{$num}.jpg" class="picture__image" alt="{$val.alt}">
					</div>
					{/foreach}
					<!--Empty photos are not visible on the home page-->
					{foreach from=$worksHidePhoto_data key=num1 item=val1}
					<div class="picture_{$val1.categ} picture" data-section = "{$val1.categ}">
						<img src="images/works/gallery/empty.jpg" data-src ="images/works/gallery/small_{$num1}.jpg" class="picture__image" alt="{$val1.alt}"></div>
						{/foreach}
						<div class='preview'> <!-- full screen -->
							<div class='preview__content'> <!-- block with a picture in the ctntre -->
								<div class="preview__mini scrollbar"> <!--мини картинки-->
									{section name = foo start = 1 loop = 25}
									<img src="images/works/gallery/1-{$smarty.section.foo.index}.jpg" alt="" class="miniImg">
									{/section}
								</div>
								<div class="preview__max">
									<div class='preview__text'></div>	<!-- signature of alt img	 -->	
									<div class='preview__arrow preview__arrow_prev'><span class="prev__fa fa fa-angle-left"></span></div> <!-- arrow right -->
									<img src='' class='preview__image' alt=""> <!-- фото -->
									<div class='preview__arrow preview__arrow_next'><span class="prev__fa fa fa-angle-right"></span></div> <!-- arrow left-->
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
							<!-- map from Google api -->
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
								{foreach from=$socials item=foo}
								<li class="socials__item"><a href="#" class="socials__link socials__link_{$foo}"></a></li>
								{/foreach}
							</ul>
						</nav>	
						<div class="footer__copyright">Kazi Erfan &copy; All Rights Reserved</div>
					</div>			
				</footer>
			</div>	
		</div>

		<script src = "scripts/jquery-2.2.3.min.js"></script>
		<script src = "scripts/perfect-scrollbar.jquery.min.js"></script>
		<script src="scripts/component.js"></script>
		<script src="scripts/settings.js"></script><!-- article bookmark   -->
		<script src="scripts/innit-settings.js"></script> <!-- article bookmark  -->
		<script src = "scripts/scripts.js"></script>
		<script src = "scripts/form-mailUs.js"></script>
		<script src = "scripts/menu.js"></script>
		<script src = "scripts/scroll.js"></script>
		<script src = "scripts/gallery.js"></script>
		<script>
			var  m1	= new MailUs("#mailUs") // feedback form
				,m2	= new Menu("#menu1")//submenu
				,g1 = new Gallery("#gallery1")//gallery
				,d1 = new Details(".articleDetails")//open articles
				,s1 = new ScrollTop("#scrollTop")//scroll top
				,s2 = new AboutUs("#aboutUs")//animation while scrolling
				,s3 = new Services("#services")//animation while scrolling
				,s4 = new Blog("#blog")//animation while scrolling
				,c1 = new Clock("#clock1");//clock
			</script>
		<script>//scroll for Gallery
			$(".scrollbar").perfectScrollbar({
				maxScrollbarLength: 40
			});
		</script>
		
		<script>// google mps api
			var map;
			function initMap(){
				var latlng = new google.maps.LatLng(-34.397, 150.644);
				map = new google.maps.Map(document.getElementById("map"),{
					center: latlng,					
					zoom: 8
				});
			}

		</script>
		<script 
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsYw0mmJsYeYCwGwp7sDF3lWYWqF5tlbM&callback=initMap">
	</script>


</body>
</html>