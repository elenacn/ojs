<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 17:12:13
         compiled from controllers/tab/settings/access/form/accessForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/access/form/accessForm.tpl', 19, false),array('function', 'csrf', 'controllers/tab/settings/access/form/accessForm.tpl', 20, false),array('function', 'translate', 'controllers/tab/settings/access/form/accessForm.tpl', 24, false),array('function', 'fbvElement', 'controllers/tab/settings/access/form/accessForm.tpl', 26, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/access/form/accessForm.tpl', 32, false),array('block', 'fbvFormArea', 'controllers/tab/settings/access/form/accessForm.tpl', 23, false),array('block', 'fbvFormSection', 'controllers/tab/settings/access/form/accessForm.tpl', 25, false),array('modifier', 'compare', 'controllers/tab/settings/access/form/accessForm.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#accessForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="accessForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'saveFormData','tab' => 'access'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'accessFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userRegistration','title' => "manager.setup.onlineAccessManagement")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.securitySettingsDescription"), $this);?>
</p>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "publishingMode-0",'name' => 'publishingMode','value' => @PUBLISHING_MODE_OPEN,'checked' => ((is_array($_tmp=$this->_tpl_vars['publishingMode'])) ? $this->_run_mod_handler('compare', true, $_tmp, @PUBLISHING_MODE_OPEN) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, @PUBLISHING_MODE_OPEN)),'label' => "manager.setup.openAccess"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "publishingMode-1",'name' => 'publishingMode','value' => @PUBLISHING_MODE_SUBSCRIPTION,'checked' => ((is_array($_tmp=$this->_tpl_vars['publishingMode'])) ? $this->_run_mod_handler('compare', true, $_tmp, @PUBLISHING_MODE_SUBSCRIPTION) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, @PUBLISHING_MODE_SUBSCRIPTION)),'label' => "manager.setup.subscription"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "publishingMode-2",'name' => 'publishingMode','value' => @PUBLISHING_MODE_NONE,'checked' => ((is_array($_tmp=$this->_tpl_vars['publishingMode'])) ? $this->_run_mod_handler('compare', true, $_tmp, @PUBLISHING_MODE_NONE) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, @PUBLISHING_MODE_NONE)),'label' => "manager.setup.noPublishing"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save",'hideCancel' => true), $this);?>

</form>