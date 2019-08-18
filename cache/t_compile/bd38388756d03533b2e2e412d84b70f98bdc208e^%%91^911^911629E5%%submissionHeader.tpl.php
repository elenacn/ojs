<?php /* Smarty version 2.6.25-dev, created on 2019-08-12 20:34:49
         compiled from workflow/submissionHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'workflow/submissionHeader.tpl', 12, false),array('function', 'url', 'workflow/submissionHeader.tpl', 30, false),array('function', 'load_url_in_div', 'workflow/submissionHeader.tpl', 31, false),array('modifier', 'assign', 'workflow/submissionHeader.tpl', 30, false),)), $this); ?>
<div class="pkp_page_title">
	<h1 class="pkp_submission_title">
		<span class="pkp_screen_reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submissionTitle"), $this);?>
</span>
		<?php echo $this->_tpl_vars['submission']->getLocalizedTitle(); ?>

	</h1>
	<div class="pkp_submission_author">
		<span class="pkp_screen_reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author_s"), $this);?>
</span>
		<?php echo $this->_tpl_vars['submission']->getAuthorString(); ?>

	</div>
	<ul class="pkp_submission_actions">
		<?php if ($this->_tpl_vars['submissionEntryAction']): ?>
			<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['submissionEntryAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['submissionInformationCenterAction']): ?>
			<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['submissionInformationCenterAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
		<?php endif; ?>
		<li><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['submissionLibraryAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
	</ul>
</div>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionProgressBar','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionProgressBarUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionProgressBarUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionProgressBarDiv','url' => $this->_tpl_vars['submissionProgressBarUrl']), $this);?>
