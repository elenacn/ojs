<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 17:12:14
         compiled from controllers/tab/settings/permissions/form/permissionSettingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 13, false),array('function', 'fbvElement', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 14, false),array('modifier', 'compare', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 14, false),)), $this); ?>
<?php ob_start(); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.subscriptionPolicies.authorSelfArchiveDescription",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableAuthorSelfArchive','name' => 'enableAuthorSelfArchive','value' => 1,'checked' => $this->_tpl_vars['enableAuthorSelfArchive'],'label' => "manager.subscriptionPolicies.authorSelfArchive",'disabled' => ((is_array($_tmp=$this->_tpl_vars['scheduledTasksEnabled'])) ? $this->_run_mod_handler('compare', true, $_tmp, 0) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 0))), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'authorSelfArchivePolicy','value' => $this->_tpl_vars['authorSelfArchivePolicy'],'rich' => true,'multilingual' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true,'title' => "manager.setup.copyrightYearBasis")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "copyrightYearBasis-issue",'name' => 'copyrightYearBasis','value' => 'issue','checked' => ((is_array($_tmp=$this->_tpl_vars['copyrightYearBasis'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'issue') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'issue')),'label' => "manager.setup.copyrightYearBasis.issue"), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "copyrightYearBasis-submission",'name' => 'copyrightYearBasis','value' => 'submission','checked' => ((is_array($_tmp=$this->_tpl_vars['copyrightYearBasis'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'submission') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'submission')),'label' => "manager.setup.copyrightYearBasis.article"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalFormContent', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/tab/settings/permissions/form/permissionSettingsForm.tpl", 'smarty_include_vars' => array('additionalFormContent' => $this->_tpl_vars['additionalFormContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>