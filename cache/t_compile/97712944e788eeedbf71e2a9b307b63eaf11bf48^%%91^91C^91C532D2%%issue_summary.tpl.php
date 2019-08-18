<?php /* Smarty version 2.6.25-dev, created on 2019-08-18 02:31:28
         compiled from frontend/objects/issue_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/issue_summary.tpl', 21, false),array('modifier', 'escape', 'frontend/objects/issue_summary.tpl', 22, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/issue_summary.tpl', 40, false),)), $this); ?>
<?php if ($this->_tpl_vars['issue']->getShowTitle()): ?>
<?php $this->assign('issueTitle', $this->_tpl_vars['issue']->getLocalizedTitle()); ?>
<?php endif; ?>
<?php $this->assign('issueSeries', $this->_tpl_vars['issue']->getIssueSeries()); ?>
<?php $this->assign('issueCover', $this->_tpl_vars['issue']->getLocalizedCoverImageUrl()); ?>

<div class="obj_issue_summary">

	<?php if ($this->_tpl_vars['issueCover']): ?>
		<a class="cover" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
			<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['issueCover'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImageAltText() != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
		</a>
	<?php endif; ?>

	<a class="title" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
		<?php if ($this->_tpl_vars['issueTitle']): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['issueTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['issueSeries'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		<?php endif; ?>
	</a>
	<?php if ($this->_tpl_vars['issueTitle'] && $this->_tpl_vars['issueSeries']): ?>
		<div class="series">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['issueSeries'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		</div>
	<?php endif; ?>

	<div class="description">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

	</div>
</div><!-- .obj_issue_summary -->