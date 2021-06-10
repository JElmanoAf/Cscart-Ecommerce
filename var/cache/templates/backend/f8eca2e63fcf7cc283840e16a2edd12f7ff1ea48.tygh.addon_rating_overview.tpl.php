<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 16:51:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\rating\addon_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76649212060c218e80bfa10-88418809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8eca2e63fcf7cc283840e16a2edd12f7ff1ea48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\rating\\addon_rating_overview.tpl',
      1 => 1623227800,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76649212060c218e80bfa10-88418809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_addon_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c218e80e7cb5_14027952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c218e80e7cb5_14027952')) {function content_60c218e80e7cb5_14027952($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }} ?>
