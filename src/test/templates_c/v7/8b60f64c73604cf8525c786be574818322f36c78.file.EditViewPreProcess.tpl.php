<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 01:36:38
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/PDFMaker/EditViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536561887640fcfa6566dc4-23016885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b60f64c73604cf8525c786be574818322f36c78' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/PDFMaker/EditViewPreProcess.tpl',
      1 => 1678757545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536561887640fcfa6566dc4-23016885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fcfa65b539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fcfa65b539')) {function content_640fcfa65b539($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
     <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<?php }} ?>