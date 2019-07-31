<?php /* Smarty version 2.6.25-dev, created on 2019-07-30 17:49:30
         compiled from frontend/components/navigationMenus/dashboardMenuItem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/components/navigationMenus/dashboardMenuItem.tpl', 12, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['navigationMenuItem']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

<span class="task_count">
	<?php echo $this->_tpl_vars['unreadNotificationCount']; ?>

</span>