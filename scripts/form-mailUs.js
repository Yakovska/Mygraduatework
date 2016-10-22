function MailUs(sSelector){
	var m = this;
	m.main = function(){
		m.init(sSelector);
		
		m.btn 				= m.find(".mailUs__button");
		m.preview 		= m.find('.preview__mailUs');
		m.form	 			= m.find('.mailUs');
		m.x 					= ($(window).width() - m.form.width())/2;
		m.textField 	= m.find(".mailUs__textfield");
		m.name 				= m.find('.mailUs__name');
		m.email 			= m.find('.mailUs__email');
		m.tel 				= m.find('.mailUs__phone');
		m.userMessage = m.find('.mailUs__userMessage');
		m.submit			= m.find('.mailUs__submit');
		m.message 		= m.find('.mailUs__message');
		m.x.m 				= ($(window).width() - m.message.width())/2;
				
		m.btn.click(m.showForm);//show form
		m.preview.click(m.closeForm);//close form
		$("body").keyup(m.esccloseForm);//esc close form
		m.textField.blur(m.check);//valid check
		m.elem.bind('submit', m.sendMail); // ajax 
		$(document).ready(m.clearForm);//clear form if reload page
	}
	m.showForm = function(event){
		event.preventDefault();
		m.preview.addClass("preview__mailUs-active");
		m.form.css("display", "block").css("right", -m.elem.width() + "px").animate({left: m.x}, 600);
	}
	m.closeForm = function(event){
		if(!event||$(event.target).hasClass("preview__mailUs")){
			m.preview.removeClass("preview__mailUs-active");}
	}
	m.esccloseForm = function(event){
		if(event.which == 27){
			m.closeForm();}
	}
	m.check = function(event){
		event.preventDefault();
		var regexps = settings.get("regexps")// regExp from "settings"
		,inspectSel = $(this).attr('class').split(' ').splice(0, 1)
		,place = m.find("." + inspectSel + "_label");
		
		var textField = $(this)
		,re = new RegExp(regexps[textField.attr("name")])
		,textField_error = !textField.val().match(re);
		
		textField.toggleClass("textField_error", textField_error);
			if(textField_error){
				place.html("<span class=\"mailUs__fa fa fa-times\"></span>").css('color', '#e74c3c');}//invalid
			else{
				place.html("<span class=\"mailUs__fa fa fa-check\"></span>").css("color", "green");}//valid
	}
	m.clearForm = function(){
		m.textField.val('');
	}
	m.sendMail = function(event){
		event.preventDefault();
		if(m.textField.hasClass('textField_error') || m.name.val()==0 || m.email.val()==0){
			alert('Please fill in the form correctly!');}
		else{
			$.ajax({
				'url': 'templates/form-mailUs.php?t='+ new Date().getTime()//url form-mailUs.php
				,'method':'POST'
				,'dataType':'json'
				,'timeout' : 1000 /
				,'data': {
					'name'			: m.name.val() 
					,'email'		: m.email.val()
					,'tel'			: m.tel.val()
					,'userMessage'	: m.userMessage.val()
					}
				,'success' : function(jsonServerResponse){
					}
				,'error' : function(oAjax){//error
					}
				,'complete' : function(oAjax){//inquiry is over
					var serverResponse = oAjax.responseJSON;
					//responseText json
					if(oAjax.status == 200){//200 - OK
						if(serverResponse != undefined){
							m.message.html(serverResponse.message);}
						else{
							alert('response that cannot parsed as JSON:\n'+oAjax.responseText);}
						}
					else{
						alert('Totally unpredicted error.');}
				}
			}); 
			m.closeForm();
			$('span.mailUs__fa').remove();//delite valid marks when the form is submitted
			m.form[0].reset();//очистить форму
			m.message.addClass('mailUs__message_active').css("right", -m.elem.width() + "px").css('left', m.x).css('top', $(window).scrollTop()+250);//показать сообщение пользователю
			setTimeout(function(){//close message
				m.closeMessage();
			}, 6000);
			m.closeMessage = function(){
				m.message.removeClass('mailUs__message_active');}
		}
	}
	$(document).ready(m.main);
	
}
MailUs.prototype = new Component();
