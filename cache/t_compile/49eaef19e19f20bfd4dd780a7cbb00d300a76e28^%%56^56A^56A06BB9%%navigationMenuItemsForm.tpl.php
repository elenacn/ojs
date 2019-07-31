<?php /* Smarty version 2.6.25-dev, created on 2019-07-30 17:51:47
         compiled from controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 17, false),array('function', 'csrf', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 25, false),array('function', 'fbvElement', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 35, false),array('function', 'translate', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 52, false),array('modifier', 'json_encode', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 17, false),array('modifier', 'escape', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 28, false),array('modifier', 'replace', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 51, false),array('modifier', 'assign', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 51, false),array('modifier', 'concat', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 64, false),array('modifier', 'uniqid', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 64, false),array('block', 'fbvFormArea', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 27, false),array('block', 'fbvFormSection', 'controllers/grid/navigationMenus/form/navigationMenuItemsForm.tpl', 34, false),)), $this); ?>

<script>
	$(function() {
		// Attach the form handler.
		$('#navigationMenuItemsForm').pkpHandler(
			'$.pkp.controllers.grid.navigationMenus.form.NavigationMenuItemsFormHandler',
			{
				previewUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'navigationMenu','op' => 'preview'), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				itemTypeDescriptions: <?php echo $this->_tpl_vars['navigationMenuItemTypeDescriptions']; ?>
,
				itemTypeConditionalWarnings: <?php echo $this->_tpl_vars['navigationMenuItemTypeConditionalWarnings']; ?>

			});
	});
</script>

<form class="pkp_form" id="navigationMenuItemsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.navigationMenus.NavigationMenuItemsGridHandler",'op' => 'updateNavigationMenuItem'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'navigationMenuItemFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'navigationMenuItemInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<input type="hidden" name="op" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['op'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php if ($this->_tpl_vars['navigationMenuItemId']): ?>
			<input type="hidden" name="navigationMenuItemId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navigationMenuItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.navigationMenus.form.title",'for' => 'title','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','id' => 'title','value' => $this->_tpl_vars['title'],'maxlength' => '255','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'menuItemTypeSection','title' => "manager.navigationMenus.form.navigationMenuItemType",'for' => 'menuItemType')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'menuItemType','required' => true,'from' => $this->_tpl_vars['navigationMenuItemTypeTitles'],'selected' => $this->_tpl_vars['menuItemType'],'label' => "manager.navigationMenus.form.navigationMenuItemTypeMessage",'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'remoteUrlTarget','title' => "manager.navigationMenus.form.url",'for' => 'url','list' => true,'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'url','value' => $this->_tpl_vars['url'],'maxlength' => '255','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<div id="customPageOptions">
			<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'targetPath')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.navigationMenus.form.path",'for' => 'path','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'path','value' => $this->_tpl_vars['path'],'required' => 'true'), $this);?>

					<p>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'REPLACEME'), $this))) ? $this->_run_mod_handler('replace', true, $_tmp, 'REPLACEME', "%PATH%") : smarty_modifier_replace($_tmp, 'REPLACEME', "%PATH%")))) ? $this->_run_mod_handler('assign', true, $_tmp, 'exampleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'exampleUrl'));?>

						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.form.viewInstructions",'pagesPath' => $this->_tpl_vars['exampleUrl']), $this);?>

					</p>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.navigationMenus.form.content",'for' => 'content')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'content','id' => 'content','value' => $this->_tpl_vars['content'],'rich' => true,'height' => $this->_tpl_vars['fbvStyles']['height']['TALL'],'variables' => $this->_tpl_vars['allowedVariables']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'formButtons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','class' => 'submitFormButton pkp_helpers_align_left pkp_button_primary','id' => 'saveButton','label' => "common.save"), $this);?>

		<?php $this->assign('buttonId', ((is_array($_tmp=((is_array($_tmp='submitFormButton')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','class' => 'pkp_button_link','id' => 'previewButton','label' => "common.preview"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>