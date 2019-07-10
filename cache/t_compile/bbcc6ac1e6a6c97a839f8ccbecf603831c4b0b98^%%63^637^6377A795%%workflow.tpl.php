<?php /* Smarty version 2.6.25-dev, created on 2019-06-25 16:59:41
         compiled from management/settings/workflow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'management/settings/workflow.tpl', 25, false),array('function', 'translate', 'management/settings/workflow.tpl', 25, false),array('function', 'call_hook', 'management/settings/workflow.tpl', 30, false),)), $this); ?>

<?php echo ''; ?><?php $this->assign('pageTitle', "manager.workflow.title"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#publicationTabs').pkpHandler(
				'$.pkp.controllers.TabHandler');
	});
</script>
<div id="publicationTabs">
	<ul>
		<li><a name="genres" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'showTab','tab' => 'genres'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.genres.title.short"), $this);?>
</a></li>
		<li><a name="submissionStage" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'showTab','tab' => 'submissionStage'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.publication.submissionStage"), $this);?>
</a></li>
		<li><a name="reviewStage" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'showTab','tab' => 'reviewStage'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.publication.reviewStage"), $this);?>
</a></li>
		<li><a name="publicationLibrary" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'showTab','tab' => 'library'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.publication.library"), $this);?>
</a></li>
		<li><a name="emails" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'showTab','tab' => 'emailTemplates'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.publication.emails"), $this);?>
</a></li>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Management::Settings::workflow"), $this);?>

	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>