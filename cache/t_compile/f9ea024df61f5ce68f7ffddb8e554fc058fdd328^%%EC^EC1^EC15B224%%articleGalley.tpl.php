<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 00:28:36
         compiled from plugins/plugins/generic/lensGalley/generic/lensGalley:templates//articleGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/generic/lensGalley/generic/lensGalley:templates//articleGalley.tpl', 10, false),array('modifier', 'to_array', 'plugins/plugins/generic/lensGalley/generic/lensGalley:templates//articleGalley.tpl', 13, false),array('function', 'url', 'plugins/plugins/generic/lensGalley/generic/lensGalley:templates//articleGalley.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page">
	<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']))),'escape' => false), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('xmlUrl', ob_get_contents());ob_end_clean(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pluginTemplatePath'])."/display.tpl", 'smarty_include_vars' => array('xmlUrl' => $this->_tpl_vars['xmlUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>