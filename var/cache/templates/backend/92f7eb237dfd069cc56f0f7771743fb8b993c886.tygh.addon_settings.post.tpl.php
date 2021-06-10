<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:51:35
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reward_points\hooks\addons\addon_settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187870664660c218e778e5d0-22219891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f7eb237dfd069cc56f0f7771743fb8b993c886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\addons\\addon_settings.post.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187870664660c218e778e5d0-22219891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218e77adf01_86622444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218e77adf01_86622444')) {function content_60c218e77adf01_86622444($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['_addon']->value==="reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
