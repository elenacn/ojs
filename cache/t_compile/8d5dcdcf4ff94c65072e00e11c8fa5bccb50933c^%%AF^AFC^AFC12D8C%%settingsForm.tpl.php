<?php /* Smarty version 2.6.25-dev, created on 2019-10-15 16:20:46
         compiled from file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 12, false),array('function', 'url', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 24, false),array('function', 'csrf', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 25, false),array('function', 'fbvElement', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 29, false),array('function', 'fbvFormButtons', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 33, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 27, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojs/plugins/generic/customHeader/templates/settingsForm.tpl', 28, false),)), $this); ?>
<div id="customHeaderSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.customHeader.manager.settings.description"), $this);?>
</div>

<div class="separator"></div>

<br />

<script>
	$(function() {
		// Attach the form handler.
		$('#customHeaderSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>
<form class="pkp_form" id="customHeaderSettingsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'manage','category' => 'generic','plugin' => $this->_tpl_vars['pluginName'],'verb' => 'settings','save' => true), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'customHeaderSettingsFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'headerContent','title' => "plugins.generic.customHeader.content")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'content','id' => 'headerContent','value' => $this->_tpl_vars['content'],'height' => $this->_tpl_vars['fbvStyles']['height']['TALL']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>