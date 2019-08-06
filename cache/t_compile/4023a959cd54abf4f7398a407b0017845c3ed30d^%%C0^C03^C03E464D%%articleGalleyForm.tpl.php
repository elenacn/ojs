<?php /* Smarty version 2.6.25-dev, created on 2019-08-06 01:31:03
         compiled from controllers/grid/articleGalleys/form/articleGalleyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 20, false),array('modifier', 'default', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 32, false),array('modifier', 'assign', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 43, false),array('function', 'url', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 25, false),array('function', 'csrf', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 26, false),array('function', 'fbvElement', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 29, false),array('function', 'load_url_in_div', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 44, false),array('function', 'fbvFormButtons', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 47, false),array('block', 'fbvFormArea', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 27, false),array('block', 'fbvFormSection', 'controllers/grid/articleGalleys/form/articleGalleyForm.tpl', 28, false),)), $this); ?>
<?php if ($this->_tpl_vars['remoteURL']): ?>
	<?php $this->assign('remoteRepresentation', true); ?>
<?php else: ?>
	<?php $this->assign('remoteRepresentation', false); ?>
<?php endif; ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#articleGalleyForm').pkpHandler('$.pkp.controllers.grid.representations.form.RepresentationFormHandler',
			{
				remoteRepresentation: <?php echo ((is_array($_tmp=$this->_tpl_vars['remoteRepresentation'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>
<form class="pkp_form" id="articleGalleyForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateGalley','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'galley')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.layout.galleyLabel",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "submission.layout.galleyLabelInstructions",'value' => $this->_tpl_vars['label'],'id' => 'label','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true,'required' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'galleyLocale','label' => "common.language",'from' => $this->_tpl_vars['supportedLocales'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['galleyLocale'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['formLocale']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['formLocale'])),'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'translate' => false,'inline' => true,'required' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'remotelyHostedContent','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "submission.layout.galley.remotelyHostedContent",'id' => 'remotelyHostedContent'), $this);?>

			<div id="remote" style="display:none">
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'remoteURL','label' => "submission.layout.galley.remoteURL",'value' => $this->_tpl_vars['remoteURL']), $this);?>

			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['articleGalleyFile'] && ( $this->_tpl_vars['articleGalleyFile']->getFileType() == 'text/html' || $this->_tpl_vars['articleGalleyFile']->getFileType() == 'application/xml' )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.dependent.DependentFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'fileId' => $this->_tpl_vars['articleGalleyFile']->getFileId(),'stageId' => @WORKFLOW_STAGE_ID_PRODUCTION,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'dependentFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'dependentFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'dependentFilesGridDiv','url' => $this->_tpl_vars['dependentFilesGridUrl']), $this);?>

	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>