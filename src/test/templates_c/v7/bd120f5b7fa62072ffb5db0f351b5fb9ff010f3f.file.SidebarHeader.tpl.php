<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 00:50:46
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830584833640fc4e613a479-70647978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd120f5b7fa62072ffb5db0f351b5fb9ff010f3f' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830584833640fc4e613a479-70647978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fc4e61543f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fc4e61543f')) {function content_640fc4e61543f($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container extensionstore app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"> 
    <div class="row" title="<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:ExtensionStore');?>
"> 
        <span class="app-indicator-icon cursorPointer fa fa-shopping-cart"></span> 
    </div>
</div>
  
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>