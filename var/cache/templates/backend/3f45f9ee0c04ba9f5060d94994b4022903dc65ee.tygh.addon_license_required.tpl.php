<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:50:23
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\addons\addon_license_required.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174007506660c2189f8bd157-37538229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f45f9ee0c04ba9f5060d94994b4022903dc65ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_license_required.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '174007506660c2189f8bd157-37538229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c2189f8f60a0_40185291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c2189f8f60a0_40185291')) {function content_60c2189f8f60a0_40185291($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php }?>
<?php }} ?>
