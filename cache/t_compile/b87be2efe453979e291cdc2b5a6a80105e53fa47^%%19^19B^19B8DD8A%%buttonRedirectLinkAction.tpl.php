<?php /* Smarty version 2.6.25-dev, created on 2019-10-08 23:34:46
         compiled from linkAction/buttonRedirectLinkAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linkAction/buttonRedirectLinkAction.tpl', 19, false),array('modifier', 'json_encode', 'linkAction/buttonRedirectLinkAction.tpl', 24, false),)), $this); ?>

<script>
	$(function() {
		$('<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonSelector'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				{
					actionRequest: '$.pkp.classes.linkAction.RedirectRequest',
					actionRequestOptions: {
						url: <?php echo ((is_array($_tmp=$this->_tpl_vars['cancelUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
						name: <?php echo ((is_array($_tmp=$this->_tpl_vars['cancelUrlTarget'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

					},
			});
	});
</script>