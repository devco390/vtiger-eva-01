<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 01:32:03
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/rows/Language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2092523724640fcc54dbeb81-21815342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2333c6471218d871e8e5c40dcb55c054b7732f9d' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/rows/Language.tpl',
      1 => 1678757516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092523724640fcc54dbeb81-21815342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fcc54dd8c4',
  'variables' => 
  array (
    'LANGUAGE' => 0,
    'QUALIFIED_MODULE' => 0,
    'LANG_KEY' => 0,
    'ALL_LANGUAGES' => 0,
    'IS_AUTH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fcc54dd8c4')) {function content_640fcc54dd8c4($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['LANGUAGE']->value->isVtigerCompatible()&&!$_smarty_tpl->tpl_vars['LANGUAGE']->value->isAlreadyExists()&&($_smarty_tpl->tpl_vars['LANGUAGE']->value->get('price')=='Free'||$_smarty_tpl->tpl_vars['LANGUAGE']->value->get('price')==0||$_smarty_tpl->tpl_vars['LANGUAGE']->value->get('available')==1)){?>
    <tr class="" data-cfmid="1">
        <td style="border-left:none;border-right:none;"><?php echo vtranslate($_smarty_tpl->tpl_vars['LANGUAGE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
        <td colspan="2" style="border-left:none;border-right:none;"><?php echo vtranslate($_smarty_tpl->tpl_vars['LANGUAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
        <td style="border-left:none;border-right:none;">
            <span class="extension_container">
                <input type="hidden" name="extensionName" value="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value->get('name');?>
"/>
                <input type="hidden" name="extensionUrl" value="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value->get('downloadURL');?>
"/>
                <input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value->get('id');?>
"/>
                <input type="hidden" name="moduleMode" value="oneClickInstall"/>
                <span class="pull-left">
                    <?php if ($_smarty_tpl->tpl_vars['LANGUAGE']->value->get('website')!=''){?>
                        <button class="btn installExtension addButton" style="margin-right:5px;" data-url="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value->get('website');?>
"><?php echo vtranslate('LBL_MORE_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['LANG_KEY'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANGUAGE']->value->get('name'), null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['ALL_LANGUAGES']->value[$_smarty_tpl->tpl_vars['LANG_KEY']->value]!=''){?>
                        <?php if ($_smarty_tpl->tpl_vars['LANGUAGE']->value->isUpgradableLanguage()){?>
                        <input type="hidden" name="moduleAction" value="Update"/>
                        <button class="oneClickInstall isUpdateBtn btn btn-success <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
                        <?php }?>
                    <?php }else{ ?>
                        <input type="hidden" name="moduleAction" value="Install"/>
                        <button class="oneClickInstall btn btn-primary <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
                    <?php }?>
                </span>
            </span>
        </td>
    </tr>
<?php }?><?php }} ?>