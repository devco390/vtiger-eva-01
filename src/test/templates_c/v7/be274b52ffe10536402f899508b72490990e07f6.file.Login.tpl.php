<?php /* Smarty version Smarty-3.1.7, created on 2023-03-14 01:24:10
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:988190211640fccba3e8990-74339292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be274b52ffe10536402f899508b72490990e07f6' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/Login.tpl',
      1 => 1678756910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988190211640fccba3e8990-74339292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'SHOP_LINK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_640fccba41f95',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_640fccba41f95')) {function content_640fccba41f95($_smarty_tpl) {?>
<div class="col-lg-12">
    <div class="clearfix">
        <h4>
            <?php echo vtranslate('LBL_INSTALLER_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

        </h4>
        <hr>
    </div>
    <div class="row">
        <div class="col-lg-6" style="border-right: 1px solid #ddd;">
            <form class="form-horizontal loginForm" method="post" action="index.php">
                <input type="hidden" name="module" value="ITS4YouInstaller"/>
                <input type="hidden" name="parent" value="Settings"/>
                <input type="hidden" name="action" value="Basic"/>
                <input type="hidden" name="userAction" value="login"/>
                <input type="hidden" name="mode" value="registerAccount"/>
                <div class="form-group">
                    <span class="control-label col-sm-3 fieldLabel"></span>
                    <div class="controls col-sm-5">
                        <h5><b><?php echo vtranslate('LBL_USERLOGIN_TAB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></h5>
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label col-sm-3 fieldLabel"><?php echo vtranslate('LBL_EMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
                    <div class="controls col-sm-5">
                        <input type="text" id="emailAddress" name="emailAddress" data-rule-required="true"
                               data-rule-email="true" class="inputElement" placeholder="@">
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label fieldLabel col-sm-3"><?php echo vtranslate('LBL_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
                    <div class="controls col-sm-5">
                        <input type="password" id="password" name="password" data-rule-required="true"
                               class="inputElement" placeholder="******">
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label fieldLabel col-sm-3">&nbsp;</span>
                    <div class="controls col-sm-5">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SHOP_LINK']->value;?>
" target="_blank"><?php echo vtranslate('LBL_REGISTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
                        <?php echo vtranslate('LBL_OR','Vtiger');?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['SHOP_LINK']->value;?>
"
                           target="_blank"><?php echo vtranslate('LBL_FORGOT_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label fieldLabel col-sm-3">&nbsp;</span>
                    <div class="controls col-sm-5">
                        <button class="btn btn-success" name="userLogin" type="submit">
                            <strong><?php echo vtranslate('LBL_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <form class="form-horizontal loginKeyForm" method="post" action="index.php">
                <input type="hidden" name="module" value="ITS4YouInstaller">
                <input type="hidden" name="parent" value="Settings">
                <input type="hidden" name="action" value="Basic">
                <input type="hidden" name="userAction" value="login">
                <input type="hidden" name="mode" value="registerAccount">
                <input type="hidden" name="emailAddress" value="accesskey">
                <div class="form-group">
                    <span class="control-label col-sm-3 fieldLabel"></span>
                    <div class="controls col-sm-5">
                        <h5><b><?php echo vtranslate('LBL_KEYLOGIN_TAB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></h5>
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label col-sm-3 fieldLabel"><?php echo vtranslate('LBL_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
                    <div class="controls col-sm-5">
                        <input type="text" id="password" name="password" data-rule-required="true"
                               class="inputElement">
                    </div>
                </div>
                <div class="form-group">
                    <span class="control-label fieldLabel col-sm-3">&nbsp;</span>
                    <div class="controls col-sm-5">
                        <button class="btn btn-success" name="userLogin" type="submit">
                            <strong><?php echo vtranslate('LBL_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }} ?>