<?php /* Smarty version 2.6.25-dev, created on 2019-10-14 22:15:05
         compiled from plugins/plugins/generic/pdfJsViewer/generic/pdfJsViewer:templates//articleGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'plugins/plugins/generic/pdfJsViewer/generic/pdfJsViewer:templates//articleGalley.tpl', 10, false),array('modifier', 'to_array', 'plugins/plugins/generic/pdfJsViewer/generic/pdfJsViewer:templates//articleGalley.tpl', 10, false),)), $this); ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']), $this->_tpl_vars['galleyFile']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']), $this->_tpl_vars['galleyFile']->getId())),'escape' => false), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('pdfUrl', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('parentUrl', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pluginTemplatePath'])."/display.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['article']->getLocalizedTitle(),'parentUrl' => $this->_tpl_vars['parentUrl'],'pdfUrl' => $this->_tpl_vars['pdfUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>