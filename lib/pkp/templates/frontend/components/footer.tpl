{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</div><!-- pkp_structure_main -->

	{* Sidebars *}
	{if empty($isFullWidth)}
		{call_hook|assign:"sidebarCode" name="Templates::Common::Sidebar"}
		{if $sidebarCode}
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</div><!-- pkp_sidebar.left -->
		{/if}
	{/if}
</div><!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		{if $pageFooter}
			<div class="pkp_footer_content">
				{$pageFooter}
			</div>
		{/if}

		<!--<div class="pkp_brand_footer" role="complementary">
			<!--<a href="{url page="about" op="aboutThisPublishingSystem"}">
				<img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">
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

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
