<?php /* Smarty version 2.6.25-dev, created on 2020-02-07 19:11:15
         compiled from controllers/informationCenter/notes.tpl */ ?>
<script type="text/javascript">
	// Attach the Notes handler.
	$(function() {
		$('#informationCenterNotes').pkpHandler(
			'$.pkp.controllers.informationCenter.NotesHandler' );
	});
</script>

<div id="informationCenterNotes">

	<?php echo $this->_tpl_vars['notesList']; ?>


	<?php if ($this->_tpl_vars['showEarlierEntries']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'showPastNotesLink','moreDetailsText' => "informationCenter.pastNotes",'lessDetailsText' => "informationCenter.pastNotes",'extraContent' => $this->_tpl_vars['pastNotesList'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['newNoteFormTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>