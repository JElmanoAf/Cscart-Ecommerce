<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:51:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\addons\addon_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121628589960c218e8157657-34229064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62bd55f4b126d9828518203b3f3707af18e2305b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_reviews.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '121628589960c218e8157657-34229064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews_displayed_number' => 0,
    'reviews' => 0,
    'addon_key' => 0,
    'addon_review' => 0,
    'total_addon_reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218e81f8c67_24182108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218e81f8c67_24182108')) {function content_60c218e81f8c67_24182108($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.show_all_reviews','addons.hide_all_reviews','no_data'));
?>
<?php $_smarty_tpl->tpl_vars['reviews_displayed_number'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['reviews_displayed_number']->value)===null||$tmp==='' ? 3 : $tmp), null, 0);?>

<div class="addons-addon-reviews">

    <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
        <div class="addons-addon-reviews__grid">
            <?php  $_smarty_tpl->tpl_vars['addon_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon_review']->_loop = false;
 $_smarty_tpl->tpl_vars['addon_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon_review']->key => $_smarty_tpl->tpl_vars['addon_review']->value) {
$_smarty_tpl->tpl_vars['addon_review']->_loop = true;
 $_smarty_tpl->tpl_vars['addon_key']->value = $_smarty_tpl->tpl_vars['addon_review']->key;
?>

                <?php if ($_smarty_tpl->tpl_vars['addon_key']->value===$_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>
                    <?php break 1;?>
                <?php }?>

                <div class="addons-addon-reviews__item">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating_value'=>$_smarty_tpl->tpl_vars['addon_review']->value['rating_value'],'message'=>$_smarty_tpl->tpl_vars['addon_review']->value['message'],'timestamp'=>$_smarty_tpl->tpl_vars['addon_review']->value['timestamp'],'user_data'=>array('name'=>$_smarty_tpl->tpl_vars['addon_review']->value['name'])), 0);?>

                </div>

            <?php } ?>
        </div>


        <?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value>$_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>

            <div>
                
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("addons.show_all_reviews"),'but_role'=>"action",'but_id'=>"on_addon_reviews_grid",'but_meta'=>"cm-combination"), 0);?>


                <div id="addon_reviews_grid" name="addon_reviews_grid" class="hidden">

                    <div class="addons-addon-reviews__grid">

                        <?php  $_smarty_tpl->tpl_vars['addon_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon_review']->_loop = false;
 $_smarty_tpl->tpl_vars['addon_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon_review']->key => $_smarty_tpl->tpl_vars['addon_review']->value) {
$_smarty_tpl->tpl_vars['addon_review']->_loop = true;
 $_smarty_tpl->tpl_vars['addon_key']->value = $_smarty_tpl->tpl_vars['addon_review']->key;
?>

                            <?php if ($_smarty_tpl->tpl_vars['addon_key']->value<$_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>
                                <?php continue 1;?>
                            <?php }?>

                            <div class="addons-addon-reviews__item">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating_value'=>$_smarty_tpl->tpl_vars['addon_review']->value['rating_value'],'message'=>$_smarty_tpl->tpl_vars['addon_review']->value['message'],'timestamp'=>$_smarty_tpl->tpl_vars['addon_review']->value['timestamp'],'user_data'=>array('name'=>$_smarty_tpl->tpl_vars['addon_review']->value['name'])), 0);?>

                            </div>

                        <?php } ?>

                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("addons.hide_all_reviews"),'but_role'=>"action",'but_id'=>"off_addon_reviews_grid",'but_meta'=>"cm-combination"), 0);?>


                </div>
            </div>
        <?php }?>

    <?php } else { ?>

        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>

    <?php }?>

</div>
<?php }} ?>
