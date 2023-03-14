<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 01:32:00
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:742821420640fcc49e84a59-49595692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66453c60208d3234688e230c627d32ddcdb1a80d' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/SettingsMenuStart.tpl',
      1 => 1678757516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '742821420640fcc49e84a59-49595692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fcc49ee59f',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'FIELDS_INFO' => 0,
    'USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fcc49ee59f')) {function content_640fcc49ee59f($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>
<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-300' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value!=null){?>
	<script type="text/javascript">
		var uimeta = (function() {
			var fieldInfo  = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;
			return {
				field: {
					get: function(name, property) {
						if(name && property === undefined) {
							return fieldInfo[name];
						}
						if(name && property) {
							return fieldInfo[name][property]
						}
					},
					isMandatory : function(name){
						if(fieldInfo[name]) {
							return fieldInfo[name].mandatory;
						}
						return false;
					},
					getType : function(name){
						if(fieldInfo[name]) {
							return fieldInfo[name].type
						}
						return false;
					}
				},
			};
		})();
	</script>
<?php }?>
<div class="main-container clearfix">
	<?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
	<div class="module-nav clearfix settingsNav" id="modnavigator">
		<div class="hidden-xs hidden-sm height100Per">
			<?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/Sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
	<div class="settingsPageDiv content-area clearfix">

<?php }} ?>