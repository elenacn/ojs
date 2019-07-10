<?php /* Smarty version 2.6.25-dev, created on 2019-06-24 22:47:11
         compiled from controllers/tab/settings/journal/sections.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/journal/sections.tpl', 12, false),array('function', 'load_url_in_div', 'controllers/tab/settings/journal/sections.tpl', 13, false),array('modifier', 'assign', 'controllers/tab/settings/journal/sections.tpl', 12, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.sections.SectionGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sectionsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sectionsGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'sectionsGridContainer','url' => $this->_tpl_vars['sectionsGridUrl']), $this);?>
