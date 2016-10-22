function Gallery(sSelector){
	var g = this;
	
	g.main = function(){
		g.init(sSelector);
		g.worksMenuLink = g.find(".worksMenu__link");
		g.pictures 			= g.find(".picture");//block with img
		g.img 					= g.find(".picture__image");//img
		g.pictureHover	= g.find(".picture-hover");//block hover
		g.mini 					= g.find(".miniImg");//mini img
		g.arrow 				= g.find(".preview__arrow");//arrow
		g.preview 			= g.find(".preview");// block for big img
		g.previewMini		= g.find(".preview__mini");//block with mini img
		g.arrowPrev 		= g.find(".preview__arrow_prev");
		g.arrowNext 		= g.find(".preview__arrow_next");
		g.previewImage 	= g.find(".preview__image");//img in preview block
		g.previewText 	= g.find(".preview__text");// text in preview block
		g.current 			= 0;//current img
		g.max 					= g.pictures.length;//the total number of img
		
		g.worksMenuLink.click(g.filter);//filter img
		g.pictures.mouseover(g.showPictureHover); // show hover block then mouseover
		g.pictureHover.mouseout(g.hidePictureHover);//delete hover block then mouseout
		g.pictures.click(g.showPreview);//show big photo
		g.preview.click(g.closePreview);//close photo
		$('body').bind('keyup', g.keystroke); // esc close photo +  flipping 
		g.mini.click(g.showMini);//when you click on the small picture to show big picture
		g.arrow.mouseover(g.showArrow);//show arrow
		g.arrow.mouseout(g.hideArrow);//hide arrow
		g.arrowPrev.click(g.showPrevious);//prev photo
		g.arrowNext.click(g.showNext);//next photo

		if(screen.width < 1030){
			g.previewImage.click(g.showNext);//for small screens
		}
	}
	g.filter = function(event){
		event.preventDefault();
		g.worksMenuLink.removeClass('worksMenu__link_current');
		g.worksMenuLink = $(this);
		
		g.img.each(function(){ //put an empty photo in any additional photos, so that when you select all did not show all photos
			var img = $(this);
			if(img.data('src')){
				img.attr('src', '../images/works/gallery/empty.jpg').css('display', 'block'); //display block to return  photo after display none  in g.showImage>7
			}
		});
		if($(this).data('link') !== 'all'){//for all items except "all"
			
			g.find(".picture").css("display", "none");//hire pictires blocks 
			g.find(".picture_"+$(this).data('link')+ "").fadeIn(600).css("display", "inline-block");//show pictures of the menu item
			
			g.pictures.each(function(){//substitute the data-src instead of src into an empty photo
				var img = $(this).children();
				if(img.data('src') && $(this).data('section') == g.worksMenuLink.data('link')){   
					img.attr('src',function(){return img.data('src')});
				}
			});
			$(this).addClass('worksMenu__link_current');//highlight active menu item
		}
		else{
			$(this).addClass('worksMenu__link_current');
			g.find(".picture").css("display", "none"); 
			g.find(".picture").fadeIn(600); //To make the picture blocks invisible 
		}
	}
	g.showPictureHover = function(){//add block hover
		if(screen.width > 720){
			g.pictureHoverSig = $(this).find(".picture-hover__sig"); //placeholder signature
			g.smallImage = $(this).find(".picture__image"); 
			g.pictureHoverSig.html(g.smallImage.attr("alt"));// caption in hover		
			$(this).prepend(g.pictureHover);
			g.pictureHover.css("display","block").stop().animate({"opacity":1}, 600);	//add hover
		}
	}
	g.hidePictureHover = function(){
		$(this).stop().animate({"opacity":0}, 600,function(){$(this).css("display","none");});
	}  
	g.showPreview = function(event){
		var picture = $(this);
		
		g.current = g.pictures.index(picture);
		g.display(picture);
		g.play();//flipping automatically
	}
	g.closePreview = function(event){
		if(!event||$(event.target).hasClass("preview")){
			g.previewMini.scrollTop(0);
			g.preview.removeClass("preview_shown");
			g.mini.removeClass("miniActive");
		}
		clearInterval(g.timer);
	}
	g.keystroke = function(event){
		if(g.preview.hasClass('preview_shown')){
			if(event.which == 39){
				g.showNext();}
			else if(event.which == 37){
				g.showPrevious();}
			if(event.which == 27){
				g.closePreview();}
		}
	}
	g.showImage = function(iShift){
		g.current+=iShift;
		if(g.current >= g.max){
			g.current = 0;}
		else if(g.current <0){
			g.current = g.max -1;}
		
		g.display(g.find(".picture:eq(" + g.current + ")"));
	
		if((g.current > 7) && g.img.eq(g.current).attr('src') == '../images/works/gallery/empty.jpg' ){
			g.img.eq(g.current).attr('src',function(){return g.img.eq(g.current).data('src')}).css('display', 'none');
			g.display(g.find(".picture:eq(" + g.current + ")"));}
		g.scrollMini();
	}
	g.display = function(oPicture){
		var smallImage 	= oPicture.find(".picture__image")
		,bigImageSrc 	= smallImage.attr("src").replace("small_", "");
		g.previewImage.attr("src", bigImageSrc);
		g.mini.removeClass("miniActive");//remove the last decoration for the mini photo
		g.find(".miniImg:eq(" + g.current + ")").addClass("miniActive");//add decoration for the active mini photo
		g.previewText.html(smallImage.attr("alt")); //add capture
		g.preview.addClass("preview_shown"); //show preview
		g.scrollMini();
	}
	g.scrollMini = function(){
		if(g.current > 7 && g.current < 16){
			g.previewMini.scrollTop(600);
		}
		else if(g.current >= 16){
			g.previewMini.scrollTop(1200);
		}
		else if(g.current < 8){
			g.previewMini.scrollTop(0);
		}
	}
	g.play = function(){
		g.timer	= setInterval(function(){
		g.showImage(1);
			}, 4000);
	}
	g.showPrevious = function(){
		g.showImage(-1);
	}
	g.showNext = function(){
		g.showImage(1);
	}
	g.showMini = function(){
		var mini = $(this);
		
		g.current = g.mini.index(mini);//current photo is equal to the current number of mini photo in dive
		g.mini.removeClass("miniActive");
		$(this).addClass("miniActive");
	
		if(g.current > 7 && g.img.eq(g.current).attr('src') == '../images/works/gallery/empty.jpg' ){
			g.img.eq(g.current).attr('src',function(){return g.img.eq(g.current).data('src')}).css('display', 'none');};
		
		g.display(g.find (".picture:eq(" + g.current + ")"));//show big photo
	}
	g.showArrow = function(){//show arrow
		$(this).stop().animate({"opacity":1}, 400);
	}
	g.hideArrow = function(){//hide arrow
		$(this).stop().animate({"opacity": 0}, 400);
		}
	$(document).ready(g.main);	
}
Gallery.prototype = new Component();