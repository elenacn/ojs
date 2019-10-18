<?php /* Smarty version 2.6.25-dev, created on 2019-10-08 23:34:46
         compiled from file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 26, false),array('function', 'plugin_url', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 28, false),array('function', 'fbvElement', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 35, false),array('function', 'csrf', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 38, false),array('function', 'url', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 68, false),array('function', 'load_url_in_div', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 69, false),array('function', 'fbvFormButtons', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 114, false),array('modifier', 'escape', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 32, false),array('modifier', 'uniqid', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 75, false),array('modifier', 'compare', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 80, false),array('modifier', 'date_format', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 98, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 41, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojs/plugins/importexport/quickSubmit/templates/index.tpl', 66, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.quickSubmit.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<script src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/importexport/quickSubmit/js/QuickSubmitFormHandler.js"></script>

<script>
	$(function() {
		// Attach the form handler.
		$('#quickSubmitForm').pkpHandler('$.pkp.plugins.importexport.quickSubmit.js.QuickSubmitFormHandler');
	});
	
</script>

<div id="quickSubmitPlugin" class="pkp_page_content pkp_pageQuickSubmit"> 
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.descriptionLong"), $this);?>
</p>

	<form class="pkp_form" id="quickSubmitForm" method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'saveSubmit'), $this);?>
">
		<input type="hidden" name="reloadForm" id="reloadForm" value="0" />

		<?php if ($this->_tpl_vars['submissionId']): ?>
		    <input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php endif; ?>
		<?php if ($this->_tpl_vars['issuesPublicationDates']): ?>
		    <?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'issuesPublicationDates','value' => $this->_tpl_vars['issuesPublicationDates']), $this);?>

		<?php endif; ?>

		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'quickSubmitFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "editor.issues.coverPage",'class' => $this->_tpl_vars['wizardClass'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<div id="<?php echo $this->_tpl_vars['openCoverImageLinkAction']->getId(); ?>
" class="pkp_linkActions">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['openCoverImageLinkAction'],'contextId' => 'quickSubmitForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php if (count ( $this->_tpl_vars['supportedSubmissionLocaleNames'] ) == 1): ?>
		    <?php $_from = $this->_tpl_vars['supportedSubmissionLocaleNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['localeName']):
?>
		        <?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'locale','value' => $this->_tpl_vars['locale']), $this);?>

		    <?php endforeach; endif; unset($_from); ?>

				<?php else: ?>
		    <?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.submissionLocale",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'for' => 'locale')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		        <?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "submission.submit.submissionLocaleDescription",'required' => 'true','type' => 'select','id' => 'locale','from' => $this->_tpl_vars['supportedSubmissionLocaleNames'],'selected' => $this->_tpl_vars['locale'],'translate' => false), $this);?>

		    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/section.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionMetadataFormTitleFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'contributors')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!--  Contributors -->
			<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.author.AuthorGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorGridUrl', ob_get_contents());ob_end_clean(); ?>
			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'authorsGridContainer','url' => $this->_tpl_vars['authorGridUrl']), $this);?>


			<?php echo $this->_tpl_vars['additionalContributorsFields']; ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.articleGalleys.ArticleGalleyGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('representationsGridUrl', ob_get_contents());ob_end_clean(); ?>
		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp='formatsGridContainer')) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)),'url' => $this->_tpl_vars['representationsGridUrl']), $this);?>


				<?php if ($this->_tpl_vars['hasIssues']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'articlePublishingSection','list' => 'false')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'articleUnpublished','name' => 'articleStatus','value' => 0,'checked' => ((is_array($_tmp=$this->_tpl_vars['articleStatus'])) ? $this->_run_mod_handler('compare', true, $_tmp, false) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, false)),'label' => 'plugins.importexport.quickSubmit.unpublished','translate' => 'true'), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'articlePublished','name' => 'articleStatus','value' => 1,'checked' => ((is_array($_tmp=$this->_tpl_vars['articleStatus'])) ? $this->_run_mod_handler('compare', true, $_tmp, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, true)),'label' => 'plugins.importexport.quickSubmit.published','translate' => 'true'), $this);?>


				<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'schedulePublicationDiv','list' => 'false')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'schedulingInformation','title' => "editor.article.scheduleForPublication")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'schedule')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','required' => true,'id' => 'issueId','from' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId'],'translate' => false,'label' => "editor.article.scheduleForPublication.toBeAssigned"), $this);?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'pagesInformation','title' => "editor.issues.pages")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'customExtras')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'pages','label' => "editor.issues.pages",'value' => $this->_tpl_vars['pages'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'schedulingInformationDatePublished','title' => "editor.issues.published")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'publishedDate')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => true,'id' => 'datePublished','value' => ((is_array($_tmp=$this->_tpl_vars['datePublished'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])),'translate' => false,'label' => "editor.issues.published",'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'class' => 'datepicker'), $this);?>

						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

					<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'permissions','title' => "submission.permissions")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'licenseURL','label' => "submission.licenseURL",'value' => $this->_tpl_vars['licenseURL']), $this);?>

						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'copyrightHolder','label' => "submission.copyrightHolder",'value' => $this->_tpl_vars['copyrightHolder'],'multilingual' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'copyrightYear','label' => "submission.copyrightYear",'value' => $this->_tpl_vars['copyrightYear'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php ob_start(); ?><?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'cancelSubmit','submissionId' => ($this->_tpl_vars['submissionId'])), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('cancelUrl', ob_get_contents());ob_end_clean(); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'quickSubmit','submitText' => "common.save",'cancelUrl' => $this->_tpl_vars['cancelUrl'],'cancelUrlTarget' => '_self'), $this);?>

	</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>