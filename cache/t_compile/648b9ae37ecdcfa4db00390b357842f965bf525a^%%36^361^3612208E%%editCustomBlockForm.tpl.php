<?php /* Smarty version 2.6.25-dev, created on 2020-02-07 21:00:37
         compiled from file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 18, false),array('function', 'csrf', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 19, false),array('function', 'fbvElement', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 22, false),array('function', 'fbvFormButtons', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 28, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 20, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojs/plugins/generic/customBlockManager/editCustomBlockForm.tpl', 21, false),)), $this); ?>
<script>
	$(function() {
		// Attach the form handler.
		$('#customBlockForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="customBlockForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "plugins.generic.customBlockManager.controllers.grid.CustomBlockGridHandler",'op' => 'updateCustomBlock','existingBlockName' => $this->_tpl_vars['blockName']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'customBlocksFormArea','class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "plugins.generic.customBlockManager.blockName",'id' => 'blockName','value' => $this->_tpl_vars['blockName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "plugins.generic.customBlock.content",'for' => 'blockContent')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'blockContent','id' => 'blockContent','value' => $this->_tpl_vars['blockContent'],'rich' => true,'height' => $this->_tpl_vars['fbvStyles']['height']['TALL']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>