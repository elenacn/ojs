<?php /* Smarty version 2.6.25-dev, created on 2019-10-09 16:34:12
         compiled from workflow/editorialLinkActions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'workflow/editorialLinkActions.tpl', 16, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['editorActions'] )): ?>
	<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
		<ul class="pkp_workflow_decisions">
			<?php if ($this->_tpl_vars['allRecommendations']): ?>
				<li>
					<div class="pkp_workflow_recommendations">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.allRecommendations.display",'recommendations' => $this->_tpl_vars['allRecommendations']), $this);?>

					</div>
				</li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['lastRecommendation']): ?>
				<li>
					<div class="pkp_workflow_recommendations">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.recommendation.display",'recommendation' => $this->_tpl_vars['lastRecommendation']), $this);?>

					</div>
				</li>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['editorActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['contextId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>
<?php elseif (! $this->_tpl_vars['editorsAssigned'] && array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
	<div class="pkp_no_workflow_decisions">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.decision.noDecisionsAvailable"), $this);?>

	</div>
<?php endif; ?>