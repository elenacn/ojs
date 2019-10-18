<?php /* Smarty version 2.6.25-dev, created on 2019-10-11 18:30:32
         compiled from plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl', 14, false),array('modifier', 'urlencode', 'plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl', 14, false),array('function', 'url', 'plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl', 14, false),array('function', 'translate', 'plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl', 22, false),array('function', 'fbvElement', 'plugins/plugins/generic/orcidProfile/generic/orcidProfile:templates/orcidProfile.tpl', 26, false),)), $this); ?>
<script type="text/javascript">
function openORCID() {
	var oauthWindow = window.open("<?php echo ((is_array($_tmp=$this->_tpl_vars['orcidProfileOauthPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
authorize?client_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['orcidClientId'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&response_type=code&scope=/authenticate&redirect_uri=<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => 'page','page' => 'orcidapi','op' => 'orcidAuthorize','targetOp' => $this->_tpl_vars['targetOp'],'params' => $this->_tpl_vars['params'],'escape' => false), $this))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp));?>
", "_blank", "toolbar=no, scrollbars=yes, width=500, height=600, top=500, left=500");
	oauthWindow.opener = self;
	return false;
}
</script>

<button id="connect-orcid-button" class="cmp_button" onclick="return openORCID();">
	<?php echo $this->_tpl_vars['orcidIcon']; ?>

	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'plugins.generic.orcidProfile.connect'), $this);?>

</button>

<?php if ($this->_tpl_vars['targetOp'] == 'register'): ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','name' => 'orcid','id' => 'orcid','value' => $this->_tpl_vars['orcid'],'maxlength' => '37'), $this);?>

<?php endif; ?>