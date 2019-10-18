<?php /* Smarty version 2.6.25-dev, created on 2019-10-11 17:44:57
         compiled from plugins/plugins/generic/texture/generic/texture:templates/editor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/generic/texture/generic/texture:templates/editor.tpl', 14, false),array('function', 'translate', 'plugins/plugins/generic/texture/generic/texture:templates/editor.tpl', 30, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="jobId" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['documentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">

				<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/texture.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/texture-reset.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/substance/dist/substance.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/texture-pagestyle.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/katex/katex.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

				<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['texturePluginUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/editor.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="toolbar">
			<div id="feedback" class="save-feedback"></div>
			<input class="save-btn" type="button" id="saveDocument" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" />
		</div>

		<div id="editor"></div>
	
				<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/substance/dist/substance.js"></script>
		<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/katex/katex.min.js"></script>
		<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/texture.js"></script>
		<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['textureUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/vfs.js"></script>

		<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/lib/pkp/lib/components/jquery/jquery.min.js"></script>

				<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['texturePluginUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/editor.js"></script>
		<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['texturePluginUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
/app.js"></script>
	</body>
</html>