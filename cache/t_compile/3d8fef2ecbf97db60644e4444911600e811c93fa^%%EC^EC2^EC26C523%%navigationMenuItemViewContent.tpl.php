<?php /* Smarty version 2.6.25-dev, created on 2019-07-30 17:49:47
         compiled from frontend/pages/navigationMenuItemViewContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/pages/navigationMenuItemViewContent.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1 class="page_title"><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h1>
<div class="page">
    <?php echo $this->_tpl_vars['content']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>