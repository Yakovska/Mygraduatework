<?
$smarty = new Smarty();
$title = "Welcome to Bino";
$menu_data = Array(
		"#home" 		=> "home"
		,"#aboutUs" 	=> "about us"
		,"#services" 	=> "services"
		,"#portfolio" 	=> "portfolio"
		,"#blog" 		=> "blog"
		,"#contact" 	=> "contact"
		);
$worksMenu_data = Array(
		'all' 		=> 'all'
		,'print' 	=> 'print design'
		,'web' 		=> 'web design'
		,'photo' 	=> 'photography'
		);
$works_data = Array(
		 1 => array('categ' => 'print',	'alt' 	=> 'print-design')
		,2 => array('categ' => 'photo',	'alt' 	=> 'photography')
		,3 => array('categ' => 'web',	'alt' 	=> 'web-design')
		,4 => array('categ' => 'print',	'alt' 	=> 'print-design')
		,5 => array('categ' => 'photo',	'alt' 	=> 'photography')
		,6 => array('categ' => 'web',	'alt' 	=> 'web-design')
		,7 => array('categ' => 'print',	'alt' 	=> 'print-design')
		,8 => array('categ' => 'web',	'alt' 	=> 'web-design')
		);

$worksHidePhoto_data = Array(
		 9 	=> array('categ' => 'print', 'alt' 	=> 'print-design')
		,10 => array('categ' => 'print', 'alt' 	=> 'print-design')
		,11 => array('categ' => 'web',   'alt' 	=> 'web-design')
		,12 => array('categ' => 'web',   'alt' 	=> 'web-design')
		,13 => array('categ' => 'photo', 'alt' 	=> 'photography')
		,14 => array('categ' => 'print', 'alt' 	=> 'print-design')
		,15 => array('categ' => 'print', 'alt' 	=> 'print-design')
		,16 => array('categ' => 'web',   'alt' 	=> 'web-design')
		,17 => array('categ' => 'photo', 'alt' 	=> 'photography')
		,18 => array('categ' => 'photo', 'alt' 	=> 'photography')
		,19 => array('categ' => 'web',   'alt' 	=> 'web-design')
		,20 => array('categ' => 'print', 'alt' 	=> 'print-design')
		,21 => array('categ' => 'web',   'alt' 	=> 'web-design')
		,22 => array('categ' => 'photo', 'alt' 	=> 'photography')
		,23 => array('categ' => 'photo', 'alt' 	=> 'photography')
		,24 => array('categ' => 'photo', 'alt' 	=> 'photography')
		);

$socials = Array(fb, tw, rss, google, ln, skype, vimeo, tumblr);

?>
