<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:50:25
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\upload_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110162826760c218a156d8d4-00541217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31094c06a120d6a311728de58112e45cc8c4a9e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\upload_addon.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110162826760c218a156d8d4-00541217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'c_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218a15942f4_34402907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218a15942f4_34402907')) {function content_60c218a15942f4_34402907($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install_addon_text','marketplace_find_more','upload_install'));
?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<div id="addon_upload_container" class="install-addon">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="addon_upload_container" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');?>
" />
        <div class="install-addon-wrapper">
            <i class="icon-puzzle-piece install-addon-banner" width="151px" height="141px"></i>
            
            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_addon_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"addon_pack[0]"), 0);?>

            
            <div class="marketplace">
                <p class="marketplace-link"> <?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
 </p>
            </div>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload_install")), 0);?>


        </div>
    </form>
<!--addon_upload_container--></div>
<?php }} ?>
