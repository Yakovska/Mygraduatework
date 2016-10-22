function Menu(sSelector){
	var m = this;
	
	m.main = function(){
		m.menu 						= $(sSelector);
		m.menuLink 				= m.menu.find('.menu__link');
		m.menuMobileBar		= m.menu.find('.menuMobile');
		m.menuItems	 			= m.menu.find('.menu');
		m.menuItem 				= m.menu.find('.menu__item');
		m.menuItemSubmenu = m.menu.find(".menu__item_submenu");
		m.submenuItem	 		= m.menu.find(".submenu__item");
		
		m.menuMobileBar.bind('click', m.showMenuMobile);
		m.menuItemSubmenu.mouseover(m.showSubmenu);
		m.menuItemSubmenu.mouseout(m.hideSubmenu);
		m.submenuItem.bind('click', m.hideMenu);
		m.menuItem.bind('click', m.hideMenu);

		$(window).scroll(m.showHideMenu);
	}

	m.showMenuMobile = function(){
		m.menuItems.toggleClass('menu-shown');
		m.menuMobileBar.toggleClass('fa-bars_active');

	}
	m.hideMenu = function(){
		if(screen.width < 650){
			m.menuItems.removeClass('menu-shown');
		}
	}

	m.showSubmenu = function(){
		$(this).find(".submenu").stop().css("display", "block").animate({"opacity":1}, 400);
		$(this).find(".menu__item_mobile1").stop().css("marginTop", 130)
	}
	m.hideSubmenu = function(){
		$(this).find(".submenu").stop().animate({"opacity": 0}, 400
		,function(){
			$(this) .css("display" , "none");});
	}
			
	m.showHideMenu = function(){
		clearInterval(m.timer);
		if($(window).scrollTop() > 500 && screen.width > 900){//fixed menu for big screens
			m.menu.addClass('header__menu_fixed').stop().animate({'opacity': 1}, 'slow');
			m.timer = setTimeout(function(){
				m.menu.stop().animate({'opacity': 0}, 'slow');}, 4000);}			
		else{
			m.menu.removeClass('header__menu_fixed');}
				
		m.menuLink.each(function(){//change color of current menu-item while scrolling
			var scrollPosition = $(document).scrollTop()
			,currentLink = $(this)
			,refElement = $(currentLink.attr('href'));
			if (refElement.position().top <= scrollPosition){
				m.menuLink.removeClass('menu__link_current');
				currentLink.addClass('menu__link_current');}
			else{
				currentLink.removeClass('menu__link_current');}	});
	}
	$(document).bind('ready', m.main);
}
Menu.prototype = new Component();