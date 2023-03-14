<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 01:32:03
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/ITS4YouInstaller/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906416855640fcc54ee4349-50492697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562232cc5005f4c8d197a6a5efee177e66d9605c' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/ITS4YouInstaller/Footer.tpl',
      1 => 1678757516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906416855640fcc54ee4349-50492697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fcc54f04be',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fcc54f04be')) {function content_640fcc54f04be($_smarty_tpl) {?>

<br><div class="small" style="color: rgb(153, 153, 153);text-align: center;"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo ITS4YouInstaller_Version_Helper::$version;?>
 <?php echo vtranslate("COPYRIGHT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Footer.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>