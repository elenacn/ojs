<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 17:10:41
         compiled from controllers/grid/issueGalleys/form/issueGalleyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 18, false),array('function', 'csrf', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 27, false),array('function', 'fbvElement', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 39, false),array('function', 'fbvFormButtons', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 49, false),array('modifier', 'json_encode', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 18, false),array('modifier', 'escape', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 34, false),array('modifier', 'default', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 45, false),array('block', 'fbvFormArea', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 29, false),array('block', 'fbvFormSection', 'controllers/grid/issueGalleys/form/issueGalleyForm.tpl', 30, false),)), $this); ?>
<script>
	$(function() {
		// Attach the form handler.
		$('#issueGalleyForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#pluploadgalley'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'upload','issueId' => $this->_tpl_vars['issueId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					browse_button: 'pkpIssueGalleyUploaderButton'
				}
			}
		);
	});
</script>
<form class="pkp_form" id="issueGalleyForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'update','issueId' => $this->_tpl_vars['issueId'],'issueGalleyId' => $this->_tpl_vars['issueGalleyId']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'publicationMetadataFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.issues.galley",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'pluploadgalley','browseButton' => 'pkpIssueGalleyUploaderButton')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
			<?php if ($this->_tpl_vars['issueGalley']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','issueId' => $this->_tpl_vars['issueId'],'issueGalleyId' => $this->_tpl_vars['issueGalleyId']), $this);?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['issueGalley']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.layout.galleyLabel",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','value' => $this->_tpl_vars['label'],'id' => 'label','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.layout.publicGalleyId",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','value' => $this->_tpl_vars['publicGalleyId'],'id' => 'publicGalleyId','required' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.language",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'galleyLocale','from' => $this->_tpl_vars['supportedLocales'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['galleyLocale'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['formLocale']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['formLocale'])),'translate' => false,'required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>