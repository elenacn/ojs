<?php /* Smarty version 2.6.25-dev, created on 2019-10-09 20:11:00
         compiled from controllers/tab/settings/reviewStage/form/reviewStageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 14, false),array('function', 'fbvElement', 'controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 15, false),)), $this); ?>
<?php ob_start(); ?>
	
	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.reviewOptions.reviewerAccess",'for' => 'notAnId','description' => "manager.setup.reviewOptions.reviewerAccessKeysEnabled.description",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'reviewerAccessKeysEnabled','checked' => $this->_tpl_vars['reviewerAccessKeysEnabled'],'label' => "manager.setup.reviewOptions.reviewerAccessKeysEnabled"), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'restrictReviewerFileAccess','checked' => $this->_tpl_vars['restrictReviewerFileAccess'],'label' => "manager.setup.reviewOptions.restrictReviewerFileAccess"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalReviewFormOptions', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>