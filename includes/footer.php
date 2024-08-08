<footer>
	<!--
	<dialog id="accessibility-modal" class="accessibility-dialog" aria-label="<?= $LANG['F_ACCESSIBILITY_OPTIONS']; ?>">
		<h1><?= $LANG['F_ACCESSIBILITY_OPTIONS']; ?></h1>
		<p class="bottom-breathing-room-rel"><?= $LANG['F_ACCESSIBILITY_OPTIONS_DESCRIPTION']; ?></p>
		<button type="button" class="btn btn-primary bottom-breathing-room-rel" onclick="toggleAccessibilityStyles('<?php echo $CLIENT_ROOT . '/includes' . '/' ?>', '<?php echo $CSS_BASE_PATH ?>', '<?php echo $LANG['F_TOGGLE_508_OFF'] ?>', '<?php echo $LANG['F_TOGGLE_508_ON'] ?>')" id="accessibility-button" data-accessibility="accessibility-button">
			<?= $LANG['F_TOGGLE_508_ON'] ?>
		</button>
		<form method="dialog">
			<button type="submit" class="btn btn-primary"><?= $LANG['F_CLOSE']; ?></button>
		</form>
	</dialog>
	-->
	<div class="logo-gallery">
		<!--
		<button id="accessibility-options-button" type="button" class="btn btn-primary  accessibility-option-button">
			<span class="button__item-container">
				<?= $LANG['F_ACCESSIBILITY_OPTIONS']; ?>
				<span>
					<img alt="<?= $LANG['F_ACCESSIBILITY_ICON'] ?>" src="<?= $CLIENT_ROOT ?>/images/accessibility_FILL0_wght400_GRAD0_opsz24.svg" />
				</span>
			</span>
		</button>
		-->
		<a href="https://www.nsf.gov" target="_blank" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
		</a>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
		</a>
		<a href="https://www.capturingcaliforniasflowers.org/" target="_blank" title="California Phenology Network"><img src="<?php echo $CLIENT_ROOT;?>/images/layout/CAP_network.png" style="width:90px" /></a>
		<a href="https://biokic.asu.edu" target="_blank" title="Biodiversity Knowledge Integration Center"><img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png" style="width:180px" /></a>

	</div>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>. This project made possible by National Science Foundation Awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1802301" target="_blank">1802301</a> and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1802163" target="_blank">1802163</a> and by the National Park Service.
	</p>
	<p>
		For more information about CCH2 or the California Phenology Network, email Jenn Yost <a href="mailto:jyost@calpoly.edu">jyost@calpoly.edu</a>.
	</p>
	<p>
		If you have technical questions or feedback about our site, email <a href="mailto:help@symbiota.org">help@symbiota.org</a>
	</p>
	<!--
	<script>
		let toggleOff508 = "<?= $LANG['TOGGLE_508_OFF'] ?>";
		let toggleOn508 = "<?= $LANG['TOGGLE_508_ON'] ?>";
	</script>
	<script src="<?= $CLIENT_ROOT; ?>/js/symb/accessibility.footer.js?ver=1" type="text/javascript"></script>
	-->
</footer>
