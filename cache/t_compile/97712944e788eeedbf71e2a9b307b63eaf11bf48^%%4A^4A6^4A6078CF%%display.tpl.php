<?php /* Smarty version 2.6.25-dev, created on 2019-08-01 21:19:40
         compiled from plugins/plugins/generic/lensGalley/generic/lensGalley:templates//display.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/generic/lensGalley/generic/lensGalley:templates//display.tpl', 18, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['jQueryUrl']; ?>
"></script>
<script src="<?php echo $this->_tpl_vars['pluginLensPath']; ?>
/lens.js"></script>
<script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script src="<?php echo $this->_tpl_vars['pluginLensPath']; ?>
/lensAdd.js" defer></script>
<script type="text/javascript"><?php echo '

	var linkElement = document.createElement("link");
	linkElement.rel = "stylesheet";
	linkElement.href = "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pluginLensPath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '/lens.css"; //Replace here

	document.head.appendChild(linkElement);

	$(document).ready(function(){
		var app = new Lens({
			document_url: "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['xmlUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '"
		});
		app.start();
		window.app = app;
	});
'; ?>
</script>