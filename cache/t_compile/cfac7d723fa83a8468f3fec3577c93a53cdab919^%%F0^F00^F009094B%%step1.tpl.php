<?php /* Smarty version 2.6.25-dev, created on 2019-10-11 17:44:15
         compiled from submission/form/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'submission/form/step1.tpl', 10, false),array('modifier', 'array_keys', 'submission/form/step1.tpl', 16, false),array('modifier', 'array_pop', 'submission/form/step1.tpl', 16, false),array('function', 'translate', 'submission/form/step1.tpl', 11, false),array('function', 'fbvElement', 'submission/form/step1.tpl', 16, false),)), $this); ?>
<?php if (count($this->_tpl_vars['sectionOptions']) == 1): ?>
	 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.notAccepting"), $this);?>

<?php else: ?>
	<?php ob_start(); ?>
		<?php if (count($this->_tpl_vars['sectionOptions']) == 2): ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'sectionId','value' => array_pop(array_keys($this->_tpl_vars['sectionOptions']))), $this);?>

		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/section.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalFormContent2', ob_get_contents());ob_end_clean(); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/form/step1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>