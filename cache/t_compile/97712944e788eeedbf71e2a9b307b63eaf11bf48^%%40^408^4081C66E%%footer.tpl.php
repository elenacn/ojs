<?php /* Smarty version 2.6.25-dev, created on 2020-02-06 15:29:09
         compiled from frontend/components/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/components/footer.tpl', 19, false),array('function', 'translate', 'frontend/components/footer.tpl', 21, false),array('function', 'url', 'frontend/components/footer.tpl', 39, false),array('function', 'load_script', 'frontend/components/footer.tpl', 63, false),array('modifier', 'assign', 'frontend/components/footer.tpl', 19, false),array('modifier', 'escape', 'frontend/components/footer.tpl', 21, false),)), $this); ?>

	</div><!-- pkp_structure_main -->

		<?php if (empty ( $this->_tpl_vars['isFullWidth'] )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Sidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sidebarCode'));?>

		<?php if ($this->_tpl_vars['sidebarCode']): ?>
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
				<?php echo $this->_tpl_vars['sidebarCode']; ?>

			</div><!-- pkp_sidebar.left -->
		<?php endif; ?>
	<?php endif; ?>
</div><!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		<?php if ($this->_tpl_vars['pageFooter']): ?>
			<div class="pkp_footer_content">
				<?php echo $this->_tpl_vars['pageFooter']; ?>

			</div>
		<?php endif; ?>

		<!--<div class="pkp_brand_footer" role="complementary">
			<!--<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'aboutThisPublishingSystem'), $this);?>
">
				<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['brandImage']; ?>
">
			</a>-->
            <!-- <a href="https://twitter.com/?lang=es" target="_blank">
            <img src="/ojs/templates/images/icono-twitter.png">
            </a>
            <a href="https://es-la.facebook.com/" target="_blank">
            <img src="/ojs/templates/images/icono-facebook.png">
            </a>
            <a href="https://creativecommons.org/licenses/by-nc/4.0/deed.es" target="_blank">
            <img src="/ojs/templates/images/Cc-by-nc_icon.png">
            </a>
            <a href="https://www.acatlan.unam.mx/" target="_blank">
            <img src="/ojs/templates/images/logoFESA-blanco-F-45px.png">
            </a>
            <a href="https://www.unam.mx/" target="_blank">
            <img src="/ojs/templates/images/logoUNAM-blanco-F-50px.png">
            </a>-->
		</div>
	</div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend'), $this);?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</body>
</html>