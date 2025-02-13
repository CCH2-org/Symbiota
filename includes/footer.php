<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
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
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>. This project made possible by U.S. National Science Foundation Awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1802301" target="_blank">1802301</a> and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1802163" target="_blank">1802163</a> and by the National Park Service.
	</p>
	<p>
		For more information about CCH2 or the California Phenology Network, email Jenn Yost <a href="mailto:jyost@calpoly.edu">jyost@calpoly.edu</a>.
	</p>
	<p>
		If you have technical questions or feedback about our site, email <a href="mailto:help@symbiota.org">help@symbiota.org</a>
	</p>
</footer>
