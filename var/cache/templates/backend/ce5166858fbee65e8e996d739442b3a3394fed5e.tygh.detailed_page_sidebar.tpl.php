<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:51:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\detailed_page\sidebar\detailed_page_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44885100460c218e82f40d3-48619062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce5166858fbee65e8e996d739442b3a3394fed5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\detailed_page_sidebar.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '44885100460c218e82f40d3-48619062',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218e83163f0_05041845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218e83163f0_05041845')) {function content_60c218e83163f0_05041845($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons_detailed:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/enjoy_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_market_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
