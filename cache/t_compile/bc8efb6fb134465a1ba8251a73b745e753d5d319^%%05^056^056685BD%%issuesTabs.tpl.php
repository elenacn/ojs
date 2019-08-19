<?php /* Smarty version 2.6.25-dev, created on 2019-08-18 21:28:57
         compiled from manageIssues/issuesTabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manageIssues/issuesTabs.tpl', 19, false),array('function', 'help', 'manageIssues/issuesTabs.tpl', 23, false),array('function', 'url', 'manageIssues/issuesTabs.tpl', 24, false),array('function', 'load_url_in_div', 'manageIssues/issuesTabs.tpl', 25, false),array('modifier', 'assign', 'manageIssues/issuesTabs.tpl', 24, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#issuesTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="issuesTabs">
	<ul>
		<li><a name="futureIssues" href="#futureIssuesDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
		<li><a name="backIssues" href="#backIssuesDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
	</ul>
	<div id="futureIssuesDiv">
		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "issue-management.md",'class' => 'pkp_help_tab'), $this);?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.issues.FutureIssueGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'futureIssuesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'futureIssuesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'futureIssuesGridContainer','url' => $this->_tpl_vars['futureIssuesGridUrl']), $this);?>

	</div>
	<div id="backIssuesDiv">
		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "issue-management.md",'class' => 'pkp_help_tab'), $this);?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.issues.BackIssueGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'backIssuesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'backIssuesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'backIssuesGridContainer','url' => $this->_tpl_vars['backIssuesGridUrl']), $this);?>

	</div>
</div>
