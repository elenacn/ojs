<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 00:03:12
         compiled from controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 21, false),array('function', 'fbvElement', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 26, false),array('function', 'csrf', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 34, false),array('function', 'fbvFormButtons', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 45, false),array('modifier', 'escape', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 25, false),)), $this); ?>
 <script>
	$(function() {
		// Attach the form handler.
		$('#assignPublicIdentifierForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<?php if ($this->_tpl_vars['pubObject'] instanceof Issue): ?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.issues.FutureIssueGridHandler",'op' => 'publishIssue','escape' => false), $this);?>
">
		<input type="hidden" name="issueId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<input type="hidden" name="confirmed" value=true />
		<?php $this->assign('hideCancel', false); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'sendIssueNotification','list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'sendIssueNotification','id' => 'sendIssueNotification','checked' => true,'label' => "notification.sendNotificationConfirmation",'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>		
<?php elseif ($this->_tpl_vars['pubObject'] instanceof Article): ?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.issueEntry.IssueEntryTabHandler",'op' => 'assignPubIds','escape' => false), $this);?>
">
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php $this->assign('hideCancel', true); ?>
<?php endif; ?>
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php if ($this->_tpl_vars['confirmationText']): ?>
	<p><?php echo $this->_tpl_vars['confirmationText']; ?>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['approval']): ?>
	<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
		<?php $this->assign('pubIdAssignFile', $this->_tpl_vars['pubIdPlugin']->getPubIdAssignFile()); ?>
		<?php $this->assign('canBeAssigned', $this->_tpl_vars['pubIdPlugin']->canBeAssigned($this->_tpl_vars['pubObject'])); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdAssignFile']), 'smarty_include_vars' => array('pubIdPlugin' => $this->_tpl_vars['pubIdPlugin'],'pubObject' => $this->_tpl_vars['pubObject'],'canBeAssigned' => $this->_tpl_vars['canBeAssigned'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'assignPublicIdentifierForm','submitText' => "common.ok",'hideCancel' => $this->_tpl_vars['hideCancel']), $this);?>

</form>