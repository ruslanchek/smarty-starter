<?php /* Smarty version Smarty-3.1.7, created on 2012-03-27 21:14:09
         compiled from "Z:/home/loc/gps/control/templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224234f71f561606444-69367567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feae8dc55bf9a13d191bcfe7fe9b1fff9dae3a65' => 
    array (
      0 => 'Z:/home/loc/gps/control/templates\\main.tpl',
      1 => 1332868448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224234f71f561606444-69367567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f71f561660dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f71f561660dd')) {function content_4f71f561660dd($_smarty_tpl) {?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['core']->value->module['title'];?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/".($_smarty_tpl->tpl_vars['core']->value->module['name']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>