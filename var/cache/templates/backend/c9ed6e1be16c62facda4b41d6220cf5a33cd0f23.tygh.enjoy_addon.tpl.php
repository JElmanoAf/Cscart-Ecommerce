<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:51:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\detailed_page\sidebar\enjoy_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211571146260c218e870b960-87113687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ed6e1be16c62facda4b41d6220cf5a33cd0f23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\enjoy_addon.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '211571146260c218e870b960-87113687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'personal_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218e8723556_53380441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218e8723556_53380441')) {function content_60c218e8723556_53380441($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"addons_write_review_sidebar"), 0);?>

    </div>
<?php }?>
<?php }} ?>
