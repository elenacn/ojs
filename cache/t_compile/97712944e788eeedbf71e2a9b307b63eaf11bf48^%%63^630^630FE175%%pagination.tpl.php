<?php /* Smarty version 2.6.25-dev, created on 2019-08-18 02:31:28
         compiled from frontend/components/pagination.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/pagination.tpl', 18, false),array('modifier', 'escape', 'frontend/components/pagination.tpl', 18, false),)), $this); ?>

<?php if ($this->_tpl_vars['prevUrl'] || $this->_tpl_vars['nextUrl']): ?>
	<div class="cmp_pagination" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pagination.label"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
		<?php if ($this->_tpl_vars['prevUrl']): ?>
			<a class="prev" href="<?php echo $this->_tpl_vars['prevUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.previous"), $this);?>
</a>
		<?php endif; ?>
		<span class="current">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pagination",'start' => $this->_tpl_vars['showingStart'],'end' => $this->_tpl_vars['showingEnd'],'total' => $this->_tpl_vars['total']), $this);?>

		</span>
		<?php if ($this->_tpl_vars['nextUrl']): ?>
			<a class="next" href="<?php echo $this->_tpl_vars['nextUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.next"), $this);?>
</a>
		<?php endif; ?>
	</div>
<?php endif; ?>