<?php /* Smarty version 2.6.25-dev, created on 2020-02-06 15:29:09
         compiled from frontend/objects/article_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/article_summary.tpl', 26, false),array('function', 'translate', 'frontend/objects/article_summary.tpl', 27, false),array('function', 'call_hook', 'frontend/objects/article_summary.tpl', 87, false),array('modifier', 'escape', 'frontend/objects/article_summary.tpl', 27, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/article_summary.tpl', 34, false),array('modifier', 'date_format', 'frontend/objects/article_summary.tpl', 60, false),)), $this); ?>
<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId()); ?>

<?php if (( ! $this->_tpl_vars['section']['hideAuthor'] && $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_DEFAULT ) || $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_SHOW): ?>
	<?php $this->assign('showAuthor', true); ?>
<?php endif; ?>

<div class="obj_article_summary">
	<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage()): ?>
		<div class="cover">
			<a <?php if ($this->_tpl_vars['journal']): ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php else: ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php endif; ?> class="file">
				<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['article']->getLocalizedCoverImageAltText() != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverPage.altText"), $this);?>
"<?php endif; ?>>
			</a>
		</div>
	<?php endif; ?>

	<div class="title">
		<a <?php if ($this->_tpl_vars['journal']): ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php else: ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php endif; ?>>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			<?php if ($this->_tpl_vars['article']->getLocalizedSubtitle()): ?>
				<span class="subtitle">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubtitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				</span>
			<?php endif; ?>
		</a>
	</div>

	<?php if ($this->_tpl_vars['showAuthor'] || $this->_tpl_vars['article']->getPages() || ( $this->_tpl_vars['article']->getDatePublished() && $this->_tpl_vars['showDatePublished'] )): ?>
	<div class="meta">
		<?php if ($this->_tpl_vars['showAuthor']): ?>
		<div class="authors">
			<?php echo $this->_tpl_vars['article']->getAuthorString(); ?>

		</div>
		<?php endif; ?>

				<?php if ($this->_tpl_vars['article']->getPages()): ?>
			<div class="pages">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			</div>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['showDatePublished'] && $this->_tpl_vars['article']->getDatePublished()): ?>
			<div class="published">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			</div>
		<?php endif; ?>

	</div>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['hideGalleys']): ?>
		<ul class="galleys_links">
			<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
				<?php if ($this->_tpl_vars['primaryGenreIds']): ?>
					<?php $this->assign('file', $this->_tpl_vars['galley']->getFile()); ?>
					<?php if (! $this->_tpl_vars['galley']->getRemoteUrl() && ! ( $this->_tpl_vars['file'] && in_array ( $this->_tpl_vars['file']->getGenreId() , $this->_tpl_vars['primaryGenreIds'] ) )): ?>
						<?php continue; ?>
					<?php endif; ?>
				<?php endif; ?>
				<li>
					<?php $this->assign('hasArticleAccess', $this->_tpl_vars['hasAccess']); ?>
					<?php if (( $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN )): ?>
						<?php $this->assign('hasArticleAccess', 1); ?>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'],'hasAccess' => $this->_tpl_vars['hasArticleAccess'],'purchaseFee' => $this->_tpl_vars['currentJournal']->getSetting('purchaseArticleFee'),'purchaseCurrency' => $this->_tpl_vars['currentJournal']->getSetting('currency'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Issue::Issue::Article"), $this);?>

</div>