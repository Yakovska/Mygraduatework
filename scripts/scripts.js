function Details(sSelector){
	var d = this;
	
	d.main = function(){
		d.init(sSelector);
		d.submenuItem 							= d.find(".submenu__item");//submenu item
		d.servicesArticleNameLink 	= d.find(".servicesArticle__name");// article header
		d.servicesArticleIcon 			= d.find(".servicesArticle__icon");// article icon
		d.details 									= d.find(".services__details");//full screen
		d.headers 									= d.find(".detailsMenu__item");//item services articles menu in block
		d.articles 									= d.find(".details__articles");//place for article
		d.articlesContent 					= settings.get("detailsMenu");// text from "settings"
		d.close 										= d.find(".fa-times");// close icon
		
		d.submenuItem.click(d.showDetails);//open article
		d.servicesArticleNameLink.click(d.showDetails);//open article
		d.servicesArticleIcon.click(d.showDetails);//open article
		d.details.click(d.closeDetails);//close article
		$("body").keyup(d.esccloseDetails);//esc close article
		d.headers.click(d.changeArticles);//change the article when you click on the menu items
		d.close.bind('click', d.closeDetails);//close article
	}
	d.showDetails = function(event){
		event.preventDefault();
		
		var articleClass = $(this).attr("class").split(" ").splice(0,1);
		d.details.addClass("services__details-shown");
		d.insertToHtml(d.articlesContent[articleClass]);//substitute method
		d.details.find(".details_"+articleClass).addClass("detailsMenu__item-active");//active class for the current menu item
	}
	d.closeDetails = function(event){
		if(!event||$(event.target).hasClass("services__details") || !event||$(event.target).hasClass("fa-times") ){
			d.headers.removeClass("detailsMenu__item-active");
			d.details.removeClass("services__details-shown");}
	}
	d.esccloseDetails = function(event){
		if(event.which == 27){
			d.closeDetails();}
	}
	d.changeArticles = function(){
		d.headers.removeClass("detailsMenu__item-active");
		d.insertToHtml(d.articlesContent[$(this).attr("class").split(" ").splice(0,1).join(";").split("_").splice(1,1)]);//reads the first class in li  and inserts the key into the "innit_settings"
		$(this).addClass("detailsMenu__item-active");
	}
	d.insertToHtml = function(sArticles){
		$(".details__articles").html(sArticles);
	}
		
	$(document).bind('ready', d.main);
}
Details.prototype = new Component();

function Clock(sSelector){
	var c = this;
	
	c.main = function(){
		
		c.init(sSelector);
		c.finishDate = new Date(2017, 1, 1, 00, 00);
		
		window.setInterval(c.setTimeLeft, 1000);
	}
		
	c.setTimeLeft = function(){
		
		var today = new Date()
		,secLeft = Math.round((c.finishDate - today)/1000);
		var displayDays = Math.floor(secLeft/86400);
		c.displayTimeLeft('.days', displayDays);
		secLeft -= displayDays*86400;
		var displayHours = Math.floor(secLeft/3600);
		c.displayTimeLeft('.hours', displayHours);
		secLeft -= displayHours*3600;
		var displayMin = Math.floor(secLeft/60);
		c.displayTimeLeft('.min', displayMin);
		secLeft -= displayMin*60;
		c.displayTimeLeft('.sec', secLeft);
	}
	
	c.displayTimeLeft = function(timeClass, time){
		timeTag = c.find(timeClass);
		timeTag.html(time < 10? '0' + String(time) : time);
	}
	
	$(document).ready(c.main);

}
Clock.prototype = new Component();





























