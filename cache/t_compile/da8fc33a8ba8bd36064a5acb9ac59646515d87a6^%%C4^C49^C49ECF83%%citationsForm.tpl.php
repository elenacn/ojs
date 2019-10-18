<?php /* Smarty version 2.6.25-dev, created on 2019-10-16 22:25:40
         compiled from controllers/tab/publicationEntry/form/citationsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 20, false),array('function', 'csrf', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 27, false),array('function', 'fbvElement', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 30, false),array('function', 'fbvFormButtons', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 41, false),array('modifier', 'escape', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 22, false),array('modifier', 'strip_unsafe_html', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 36, false),array('block', 'fbvFormSection', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 29, false),array('block', 'iterate', 'controllers/tab/publicationEntry/form/citationsForm.tpl', 35, false),)), $this); ?>
<script>
	$(function() {
		// Attach the form handler.
		$('#citationsForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<form class="pkp_form" id="citationsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'updateCitations'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'publicationIdentifiersFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="tabPos" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tabPos'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="citations" />
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.citations",'description' => "submission.citations.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'citations','value' => $this->_tpl_vars['citations'],'disabled' => $this->_tpl_vars['readOnly'],'required' => $this->_tpl_vars['citationsRequired']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['parsedCitations']->getCount()): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.parsedCitations",'description' => "submission.parsedCitations.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'parsedCitations','item' => 'parsedCitation')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['parsedCitation']->getCitationWithLinks())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
</p>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "submission.parsedAndSaveCitations",'cancelText' => "common.cancel"), $this);?>

</form>