<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:50:23
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\addons\addon_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6202877160c2189fa16374-91022840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef2436f229e95a0a65bb9385be457318c114a6c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_supplier.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6202877160c2189fa16374-91022840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c2189fa37121_50887922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c2189fa37121_50887922')) {function content_60c2189fa37121_50887922($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <i class="icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo $_smarty_tpl->__("verified_developer");?>
"
            ></i>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <i class="icon-comment addons-addon-supplier__has-admin-review"
                title="<?php echo $_smarty_tpl->__("addon_has_admin_review");?>
"
            ></i>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
