<?php /* Smarty version 2.6.25-dev, created on 2019-08-18 22:59:38
         compiled from plugins/plugins/generic/staticPages/generic/staticPages:templates/staticPages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'plugins/plugins/generic/staticPages/generic/staticPages:templates/staticPages.tpl', 10, false),array('function', 'load_url_in_div', 'plugins/plugins/generic/staticPages/generic/staticPages:templates/staticPages.tpl', 11, false),)), $this); ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "plugins.generic.staticPages.controllers.grid.StaticPageGridHandler",'op' => 'fetchGrid','escape' => false), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('staticPageGridUrl', ob_get_contents());ob_end_clean(); ?>
<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'staticPageGridContainer','url' => $this->_tpl_vars['staticPageGridUrl']), $this);?>
