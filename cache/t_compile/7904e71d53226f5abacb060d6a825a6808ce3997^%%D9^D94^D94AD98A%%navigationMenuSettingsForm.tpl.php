<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 17:04:26
         compiled from controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl', 23, false),array('function', 'load_url_in_div', 'controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl', 27, false),array('modifier', 'assign', 'controllers/tab/settings/navigationMenus/form/navigationMenuSettingsForm.tpl', 26, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'website','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#navigationMenuSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form id="navigationMenuSettingsForm" class="pkp_form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'saveFormData','tab' => 'navigationMenus'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'navigationMenuSettingsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.navigationMenus.NavigationMenusGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'navigationMenusGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'navigationMenusGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'navigationMenuGridContainer','url' => $this->_tpl_vars['navigationMenusGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.navigationMenus.NavigationMenuItemsGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'navigationMenuItemsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'navigationMenuItemsGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'navigationMenuItemsGridContainer','url' => $this->_tpl_vars['navigationMenuItemsGridUrl']), $this);?>


</form>