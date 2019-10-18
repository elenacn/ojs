<?php /* Smarty version 2.6.25-dev, created on 2019-10-08 23:34:46
         compiled from form/keywordInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/keywordInput.tpl', 10, false),array('modifier', 'escape', 'form/keywordInput.tpl', 10, false),array('modifier', 'json_encode', 'form/keywordInput.tpl', 30, false),)), $this); ?>
<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['FBV_uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<?php if ($this->_tpl_vars['FBV_multilingual'] && count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['formLocales'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['formLocales']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
        $this->_foreach['formLocales']['iteration']++;
?>
		<script>
			$(document).ready(function(){
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'jqselector') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jqselector')); ?>
-<?php echo $this->_tpl_vars['FBV_id']; ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").tagit({
					fieldName: "keywords[<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][]",
					<?php if ($this->_tpl_vars['thisFormLocale'] != $this->_tpl_vars['formLocale'] && empty ( $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['thisFormLocale']] )): ?>placeholderText: "<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
",<?php endif; ?>
					allowSpaces: true,
					<?php if ($this->_tpl_vars['FBV_sourceUrl'] && ! $this->_tpl_vars['FBV_disabled']): ?>
						tagSource: function(search, showChoices) {
							$.ajax({
								url: "<?php echo $this->_tpl_vars['FBV_sourceUrl']; ?>
", 								data: search,
								success: function(choices) {
									showChoices(choices);
								}
							});
						}
					<?php else: ?>
						availableTags: <?php echo json_encode($this->_tpl_vars['FBV_availableKeywords'][$this->_tpl_vars['thisFormLocale']]); ?>

					<?php endif; ?>
				});

								<?php if ($this->_tpl_vars['FBV_disabled']): ?>
					$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'jqselector') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jqselector')); ?>
-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
").find('.tagit-close, .tagit-new').remove();
				<?php endif; ?>
			});
		</script>
	<?php endforeach; endif; unset($_from); ?>

	<script>
		$(function() {
			$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
').pkpHandler(
				'$.pkp.controllers.form.MultilingualInputHandler'
				);
		});
		</script>
				<span id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
" class="localization_popover_container localization_popover_container_focus_forced pkpTagit">
			<ul class="localizable <?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['currentLocale']): ?> flag flag_<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
">
				<?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?>
			</ul>
			<?php if ($this->_tpl_vars['FBV_label_content']): ?><span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span><?php endif; ?>
			<div class="localization_popover">
				<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['thisFormLocale']): ?>
					<ul class="multilingual_extra flag flag_<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="<?php echo $this->_tpl_vars['thisFormLocale']; ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
">
						<?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['thisFormLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?>
					</ul>
				<?php endif; ?><?php endforeach; endif; unset($_from); ?>
			</div>
		</span>

<?php else: ?> 	<script>
		$(document).ready(function(){
			$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'jqselector') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jqselector')); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").tagit({
				fieldName: "keywords[<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][]",
				allowSpaces: true,
				<?php if ($this->_tpl_vars['FBV_sourceUrl'] && ! $this->_tpl_vars['FBV_disabled']): ?>
					tagSource: function(search, showChoices) {
						$.ajax({
							url: "<?php echo $this->_tpl_vars['FBV_sourceUrl']; ?>
", 							data: search,
							success: function(choices) {
								showChoices(choices);
							}
						});
					}
				<?php else: ?>
					availableTags: <?php echo json_encode($this->_tpl_vars['FBV_availableKeywords'][$this->_tpl_vars['formLocale']]); ?>

				<?php endif; ?>
			});

						<?php if ($this->_tpl_vars['FBV_disabled']): ?>
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
").find('.tagit-close, .tagit-new').remove();
				$("#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
:empty").removeClass('tagit');
			<?php endif; ?>
		});
	</script>

	<!-- The container which will be processed by tag-it.js as the interests widget -->
	<ul id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"><?php if ($this->_tpl_vars['FBV_currentKeywords']): ?><?php $_from = $this->_tpl_vars['FBV_currentKeywords'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currentKeyword']):
?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['currentKeyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</li><?php endforeach; endif; unset($_from); ?><?php endif; ?></ul>
	<?php if ($this->_tpl_vars['FBV_label_content']): ?><span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span><?php endif; ?>
<?php endif; ?>