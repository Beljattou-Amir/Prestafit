<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-21 00:16:05
  from 'C:\xampp\htdocs\Prestashop\admin\themes\default\template\controllers\modules\filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607f52a5823722_46135839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c783212cf6271b70df4f807f331f109faa5a9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin\\themes\\default\\template\\controllers\\modules\\filters.tpl',
      1 => 1616429400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f52a5823722_46135839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--start filter module-->
<form method="post" class="form-inline">
<div class="row">
	<div class="col-lg-8">
		<div class="form-group">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter by'),$_smarty_tpl ) );?>
</label>
			<select name="module_install" id="module_install_filter" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['showInstalledModules']->value) && $_smarty_tpl->tpl_vars['showInstalledModules']->value && $_smarty_tpl->tpl_vars['showInstalledModules']->value != 'installedUninstalled') {?>active<?php }?>">
				<option value="installedUninstalled" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'installedUninstalled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed & Not Installed'),$_smarty_tpl ) );?>
</option>
				<option value="installed" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'installed') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed Modules'),$_smarty_tpl ) );?>
</option>
				<option value="uninstalled" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'uninstalled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules Not Installed '),$_smarty_tpl ) );?>
</option>
			</select>
		</div>

		<div class="form-group">
			<select name="module_status" id="module_status_filter" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['showEnabledModules']->value) && $_smarty_tpl->tpl_vars['showEnabledModules']->value && $_smarty_tpl->tpl_vars['showEnabledModules']->value != 'enabledDisabled') {?>active<?php }?>">
				<option value="enabledDisabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'enabledDisabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled & Disabled'),$_smarty_tpl ) );?>
</option>
				<option value="enabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'enabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled Modules'),$_smarty_tpl ) );?>
</option>
				<option value="disabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'disabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled Modules'),$_smarty_tpl ) );?>
</option>
			</select>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authors'),$_smarty_tpl ) );?>
</label>
			<select class="filter <?php if (isset($_smarty_tpl->tpl_vars['showTypeModules']->value) && $_smarty_tpl->tpl_vars['showTypeModules']->value && $_smarty_tpl->tpl_vars['showTypeModules']->value != 'allModules') {?>active<?php }?>" name="module_type" id="module_type_filter">
				<!-- <option value="allModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'allModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Modules'),$_smarty_tpl ) );?>
</option>
				<option value="nativeModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'nativeModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Modules'),$_smarty_tpl ) );?>
</option>
				<option value="partnerModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'partnerModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partner Modules (Free)'),$_smarty_tpl ) );?>
</option>
				<option value="mustHaveModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'mustHaveModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Must Have'),$_smarty_tpl ) );?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['logged_on_addons']->value)) {?><option value="addonsModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'addonsModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules purchased on Addons'),$_smarty_tpl ) );?>
</option><?php }?> -->
				<option value="allModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'allModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All authors'),$_smarty_tpl ) );?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_modules_authors']->value, 'status', false, 'module_author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module_author']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
					<option value="authorModules[<?php echo $_smarty_tpl->tpl_vars['module_author']->value;?>
]" <?php if ($_smarty_tpl->tpl_vars['status']->value == "selected") {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_author']->value,20,'...' ));?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<!-- <option value="otherModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'otherModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other Modules'),$_smarty_tpl ) );?>
</option> -->
			</select>
		</div>
	</div>
</div>
	<!-- <span>
		<select class="filter fixed-width-lg" name="country_module_value" id="country_module_value_filter">
			<option value="0" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All countries'),$_smarty_tpl ) );?>
</option>
			<option value="1" <?php if ($_smarty_tpl->tpl_vars['showCountryModules']->value == 1) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current country:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['nameCountryDefault']->value;?>
</option>
		</select>
	</span> -->
	<!-- <span class="pull-right">
		<button class="btn btn-default " type="submit" name="resetFilterModules">
			<i class="icon-eraser"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset'),$_smarty_tpl ) );?>

		</button>
		<button class="btn btn-default " name="filterModules" id="filterModulesButton" type="submit">
			<i class="icon-filter"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

		</button>
	</span> -->
</form>
<!--end filter module-->
<?php }
}
