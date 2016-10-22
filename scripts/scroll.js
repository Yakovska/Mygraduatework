function ScrollTop(sSelector){
	var s = this;
	
	s.showHideTopBtn = function(){
		if($(window).scrollTop() > 300){
			s.topBtn.fadeIn();
		}
		else{
			s.topBtn.fadeOut();
		}
	}
	s.slowScroll = function(event){
		event.preventDefault();
		$('html, body').stop().animate({scrollTop: 0}, 'slow');
	}
	s.main = function(){
		s.init(sSelector);
		s.topBtn = s.find('.topBtn'); //btn for scroll
		
		$(window).scroll(s.showHideTopBtn);
		s.topBtn.bind('click', s.slowScroll);//scroll top
	}
	$(document).ready(s.main);	
}
ScrollTop.prototype = new Component();

function AboutUs(sSelector){
	var s = this;
	
	s.showArticle = function(){
		var scrollPosition = $(document).scrollTop();
		
		if((s.blockArticle.position().top - 300) <= scrollPosition){
			s.article.each(function(i) {
			$(this).delay((i++) * 500).fadeTo(1000, 1); });
		}
	}
	s.main = function(){
		s.init(sSelector);
		s.blockArticle = s.find('.aboutUs__aboutUs-article');//block with articles
		s.article = s.find('.aboutUs-article');// one article
		
		$(window).bind('scroll', s.showArticle);
	}
	$(document).ready(s.main);	
	
}
AboutUs.prototype = new Component();

function Services(sSelector){
	var s = this;
	
	s.showServices = function(){
		var scrollPosition = $(document).scrollTop();
		if((s.services.position().top - 400) <= scrollPosition){//show icons
			s.servicesHead.stop().animate({opacity: 1}, 600);
			s.servicesInfo.each(function(i){
				$(this).delay((i++) * 500).fadeTo(1000, 1).animate({left: 0}, 'slow'); });
		}
	}
	s.main = function(){
		s.init(sSelector);
		s.services 				= s.find('.services');
		s.servicesHead 		= s.find('.servicesInfo__heading');
		s.servicesInfo 		= s.find('.servicesInfo__servicesArticle')//s.icon + s.servicesArticle
		s.icon 						= s.find('.servicesArticle__icon');
		s.servicesArticle = s.find('.servicesArticle');
						
		$(window).bind('scroll', s.showServices);
	}
	
	$(document).ready(s.main);
}
Services.prototype = new Component();

function Blog(sSelector){
	var s = this;
	
	s.showBlogImg = function(){
		var scrollPosition = $(document).scrollTop();
		if((s.blog.position().top - 200) <= scrollPosition){
		s.img.each(function(i){
			$(this).delay((i++) * 500).fadeTo(1000, 1); });
		}	
	}
	s.main = function(){
		s.init(sSelector);
		s.blog 	= s.find('.blog');
		s.img 	= s.find('.article__img');
		
		$(window).bind('scroll', s.showBlogImg);
	}
	
	$(document).ready(s.main);
}
Blog.prototype = new Component();
