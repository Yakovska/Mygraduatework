<?php
/* Smarty version 3.1.29, created on 2016-10-22 13:39:58
  from "/var/www/irayakovskaya1/data/www/yakovska.in.ua/mygraduatework/templates/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580b41fe397611_02606140',
  'file_dependency' => 
  array (
    'c97e3ea5ddb984ed3d3176fe93535a58ff9245b6' => 
    array (
      0 => '/var/www/irayakovskaya1/data/www/yakovska.in.ua/mygraduatework/templates/form.tpl',
      1 => 1477125458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580b41fe397611_02606140 ($_smarty_tpl) {
?>
<form class='mailUs'>
	<h2 class='mailUs__header'>Feedback</h2>
	<label class='mailUs__name_label'></label>
	<input type='text' name='name' placeholder='Name' class='mailUs__name mailUs__textfield'>
	<label class='mailUs__email_label'></label>
	<input type='text' name= 'email' placeholder='E-mail' class='mailUs__email mailUs__textfield'>
	<!-- <label class='mailUs__сall_label'></label>
	<input type='checkbox' name= 'call' class='mailUs__call'> -->
	<label class='mailUs__phone_label'></label>
	<input type='text' name= 'tel' placeholder = '(xxx) xxx-xx-xx' class='mailUs__phone mailUs__textfield'>
	<textarea name='message' placeholder='Message' class='mailUs__userMessage'></textarea>
	<input type='submit' value='Send' class='mailUs__submit'>
</form><?php }
}
