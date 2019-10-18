<?php /* Smarty version 2.6.25-dev, created on 2019-10-11 17:47:08
         compiled from controllers/grid/articleGalleys/editFormat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/articleGalleys/editFormat.tpl', 18, false),array('function', 'translate', 'controllers/grid/articleGalleys/editFormat.tpl', 18, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editArticleGalleyMetadataTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="editArticleGalleyMetadataTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'editGalleyTab','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.action.editMetadata"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'identifiers','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.identifiers"), $this);?>
</a></li>
	</ul>
</div>