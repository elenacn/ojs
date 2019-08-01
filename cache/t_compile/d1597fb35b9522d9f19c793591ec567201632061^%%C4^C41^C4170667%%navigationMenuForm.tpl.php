<?php /* Smarty version 2.6.25-dev, created on 2019-07-31 19:30:03
         compiled from controllers/grid/navigationMenus/form/navigationMenuForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 16, false),array('function', 'url', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 26, false),array('function', 'csrf', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 27, false),array('function', 'fbvElement', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 34, false),array('function', 'fbvFormButtons', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 148, false),array('modifier', 'json_encode', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 16, false),array('modifier', 'escape', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 31, false),array('block', 'fbvFormArea', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 29, false),array('block', 'fbvFormSection', 'controllers/grid/navigationMenus/form/navigationMenuForm.tpl', 33, false),)), $this); ?>

<script>
	$(function() {
		// Attach the form handler.
		$('#navigationMenuForm').pkpHandler('$.pkp.controllers.grid.navigationMenus.form.NavigationMenuFormHandler',
			{
				submenuWarning: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.form.submenuWarning"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				itemTypeConditionalWarnings: <?php echo $this->_tpl_vars['navigationMenuItemTypeConditionalWarnings']; ?>
,
				okButton: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ok"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				warningModalTitle: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.notice"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);

	});
</script>

<form class="pkp_form" id="navigationMenuForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.navigationMenus.NavigationMenusGridHandler",'op' => 'updateNavigationMenu'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'navigationMenuFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'navigationMenuInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['navigationMenuId']): ?>
			<input type="hidden" name="navigationMenuId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navigationMenuId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.navigationMenus.form.title",'for' => 'title','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'title','value' => $this->_tpl_vars['title'],'maxlength' => '255','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.navigationMenus.form.navigationMenuArea",'for' => 'areaName')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'areaName','from' => $this->_tpl_vars['activeThemeNavigationAreas'],'selected' => $this->_tpl_vars['navigationMenuArea'],'label' => "manager.navigationMenus.form.navigationMenuAreaMessage",'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'navigationMenuItems')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="pkpNavManagement" class="pkp_nav_management">
			<div class="pkp_nav_assigned">
				<div class="pkp_nav_management_header">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.assignedMenuItems"), $this);?>

				</div>
				<ul id="pkpNavAssigned">
					<?php $_from = $this->_tpl_vars['menuTree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['assignment']):
?>
						<?php $this->assign('itemType', $this->_tpl_vars['assignment']->navigationMenuItem->getType()); ?>
						<?php if (! empty ( $this->_tpl_vars['navigationMenuItemTypes'][$this->_tpl_vars['itemType']]['conditionalWarning'] )): ?>
							<?php $this->assign('hasConditionalDisplay', true); ?>
						<?php else: ?>
							<?php $this->assign('hasConditionalDisplay', false); ?>
						<?php endif; ?>
						<li data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getMenuItemId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" data-type="<?php echo ((is_array($_tmp=$this->_tpl_vars['itemType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
							<div class="item">
								<div class="item_title">
									<span class="fa fa-sort"></span>
									<?php echo $this->_tpl_vars['assignment']->navigationMenuItem->getLocalizedTitle(); ?>

								</div>
								<div class="item_buttons">
									<?php if ($this->_tpl_vars['hasConditionalDisplay']): ?>
										<button class="btnConditionalDisplay">
											<span class="fa fa-eye-slash"></span>
											<span class="-screenReader">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.form.conditionalDisplay"), $this);?>

											</span>
										</button>
									<?php endif; ?>
								</div>
							</div>
							<?php if (! empty ( $this->_tpl_vars['assignment']->children )): ?>
								<ul>
									<?php $_from = $this->_tpl_vars['assignment']->children; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['childAssignment']):
?>
										<?php $this->assign('itemType', $this->_tpl_vars['childAssignment']->navigationMenuItem->getType()); ?>
										<?php if (! empty ( $this->_tpl_vars['navigationMenuItemTypes'][$this->_tpl_vars['itemType']]['conditionalWarning'] )): ?>
											<?php $this->assign('hasConditionalDisplay', true); ?>
										<?php else: ?>
											<?php $this->assign('hasConditionalDisplay', false); ?>
										<?php endif; ?>
										<li data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['childAssignment']->getMenuItemId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" data-type="<?php echo ((is_array($_tmp=$this->_tpl_vars['itemType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
											<div class="item">
												<div class="item_title">
													<span class="fa fa-sort"></span>
													<?php echo $this->_tpl_vars['childAssignment']->navigationMenuItem->getLocalizedTitle(); ?>

												</div>
												<div class="item_buttons">
													<?php if ($this->_tpl_vars['hasConditionalDisplay']): ?>
														<button class="btnConditionalDisplay">
															<span class="fa fa-eye-slash"></span>
															<span class="-screenReader">
																<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.form.conditionalDisplay"), $this);?>

															</span>
														</button>
													<?php endif; ?>
												</div>
											</div>
										</li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="pkp_nav_unassigned">
				<div class="pkp_nav_management_header">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.unassignedMenuItems"), $this);?>

				</div>
				<ul id="pkpNavUnassigned">
					<?php $_from = $this->_tpl_vars['unassignedItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['unassignedItem']):
?>
						<?php $this->assign('itemType', $this->_tpl_vars['unassignedItem']->getType()); ?>
						<?php if (! empty ( $this->_tpl_vars['navigationMenuItemTypes'][$this->_tpl_vars['itemType']]['conditionalWarning'] )): ?>
							<?php $this->assign('hasConditionalDisplay', true); ?>
						<?php else: ?>
							<?php $this->assign('hasConditionalDisplay', false); ?>
						<?php endif; ?>
						<li data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['unassignedItem']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" data-type="<?php echo ((is_array($_tmp=$this->_tpl_vars['itemType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
							<div class="item">
								<div class="item_title">
									<span class="fa fa-sort"></span>
									<?php echo $this->_tpl_vars['unassignedItem']->getLocalizedTitle(); ?>

								</div>
								<div class="item_buttons">
									<?php if ($this->_tpl_vars['hasConditionalDisplay']): ?>
										<button class="btnConditionalDisplay">
											<span class="fa fa-eye-slash"></span>
											<span class="-screenReader">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.navigationMenus.form.conditionalDisplay"), $this);?>

											</span>
										</button>
									<?php endif; ?>
								</div>
							</div>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<?php $_from = $this->_tpl_vars['menuTree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['assignment']):
?>
				<input type="hidden" name="menuTree[<?php echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getMenuItemId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][seq]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['assignment']->getSequence())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
				<?php $_from = $this->_tpl_vars['assignment']->children; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['childAssignment']):
?>
					<input type="hidden" name="menuTree[<?php echo ((is_array($_tmp=$this->_tpl_vars['childAssignment']->getMenuItemId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][seq]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['childAssignment']->getSequence())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
					<input type="hidden" name="menuTree[<?php echo ((is_array($_tmp=$this->_tpl_vars['childAssignment']->getMenuItemId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][parentId]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['childAssignment']->getParentId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'navigationMenuFormSubmit','submitText' => "common.save"), $this);?>

</form>