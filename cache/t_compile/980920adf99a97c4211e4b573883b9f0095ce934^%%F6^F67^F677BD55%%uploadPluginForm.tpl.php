<?php /* Smarty version 2.6.25-dev, created on 2019-08-01 20:48:13
         compiled from controllers/grid/plugins/form/uploadPluginForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 18, false),array('function', 'csrf', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 26, false),array('function', 'translate', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 31, false),array('function', 'fbvElement', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 36, false),array('function', 'fbvFormButtons', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 42, false),array('modifier', 'json_encode', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 18, false),array('block', 'fbvFormArea', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 29, false),array('block', 'fbvFormSection', 'controllers/grid/plugins/form/uploadPluginForm.tpl', 35, false),)), $this); ?>
<script>
	$(function() {
		// Attach the upload form handler.
		$('#uploadPluginForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'uploadPluginFile','function' => $this->_tpl_vars['function'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

				}
			});
	});
</script>

<form class="pkp_form" id="uploadPluginForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveUploadPlugin','function' => $this->_tpl_vars['function'],'category' => $this->_tpl_vars['category'],'plugin' => $this->_tpl_vars['plugin']), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'uploadPluginNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['function'] == 'install'): ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.plugins.uploadDescription"), $this);?>
</p>
		<?php elseif ($this->_tpl_vars['function'] == 'upgrade'): ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.plugins.upgradeDescription"), $this);?>
</p>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.plugins.uploadPluginDir",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'temporaryFileId','value' => ""), $this);?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'mastheadFormSubmit','submitText' => "common.save"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>