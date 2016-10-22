<?
define("SMARTY_DIR", "Smarty-3.1.29/libs/");
include(SMARTY_DIR."Smarty.class.php");
$smarty = new Smarty();

include("templates/vars.php");//для переменных меню

$smarty->assign("title", $title);
$smarty->assign("menu_data", $menu_data);
$smarty->assign("worksMenu_data", $worksMenu_data);
$smarty->assign("works_data", $works_data);
$smarty->assign("worksHidePhoto_data", $worksHidePhoto_data);
$smarty->assign("socials", $socials);

$smarty->display("templates/main.tpl");

	
?>