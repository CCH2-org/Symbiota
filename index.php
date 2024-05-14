<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
        <title><?php echo $DEFAULT_TITLE; ?> Home</title>
        <?php
        include_once($SERVER_ROOT . '/includes/head.php');
        include_once($SERVER_ROOT . '/includes/googleanalytics.php');
        ?>
</head>
<body>
        <?php
        include($SERVER_ROOT . '/includes/header.php');
        ?>
        <div class="navpath"></div>
        <main id="innertext">
		<div style="float:right;margin-left:15px">
			<!--
			<div>
				//<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1.
				$ssId = 1;
				//Enter number of images to be included in slideshow (minimum 5, maximum 10)
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 350;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				//$clid = '1279';
				$clid = '39';
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = 'specimen';
				//Enter number of days of most recent images that should be included
				$numDays = 30;

				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				//ini_set('max_execution_time', 120);
				//include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				//$pluginManager = new PluginsManager();
				//echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval,$interval);
				//?>
			//---------------------------END SLIDESHOW SETTINGS---------------------------------------
		</div>
			-->
		</div>
		<div style="padding: 0px 10px">
			<h1>Welcome to the CCH2 data portal</h1>
			<p>
				<b>CCH2</b> serves data from specimens housed in member herbaria of the <b>Consortium of California Herbaria (CCH)</b>. This portal has a worldwide scope and a broad taxonomic basis including vascular plants, bryophytes, algae, fungi, and lichens.
			</p>
			<p>
				These data are currently growing due to the work of the <b>California Phenology Thematic Collections Network</b> (<b>CAP-TCN;</b> <a href="https://www.capturingcaliforniasflowers.org" target="_blank">https://www.capturingcaliforniasflowers.org</a>).
				This collaboration of 28 universities, research stations, natural history collections, and botanical gardens aims to capture images, label data, and phenological (i.e., flowering time)
				data from nearly 1 million herbarium specimens by 2022. Data contained in the CCH2 portal
				will continue to grow even after this time through the activities of the CCH member institutions.
			</p>
			<p>
				The CCH2 portal is managed by UC Berkeley and Cal Poly, San Luis Obispo.
			</p>
			<div style="float:right"><img src="images/layout/UC1278733_small.jpg" style="width:200px;margin:0px 90px" /></div>
            <div>
            <h3>Using CCH2 data:</h3>
            </div>
				<p>
				Please refer to our <a href="http://cch2.org/portal/includes/usagepolicy.php">Data Use Policy</a>. The Consortium of California Herbaria asks that users not redistribute data obtained from this site.
				However, links or references to this site may be freely posted. If you have any questions about this policy,
				please contact Jason Alexander (<a href="mailto:jason_alexander@berkeley.edu">jason_alexander@berkeley.edu</a>) and Katie Pearson (<a href="mailto:kdpearso@asu.edu">kdpearso@asu.edu</a>).
				</p>
            			<p>
				<b>More California specimen data may be found at the following portals:</b>
				<ul>
                    			<li>Only California vascular plants, linked to the statewide Jepson eFlora project: <a href="http://ucjeps.berkeley.edu/consortium/" target="_blank">CCH1 Portal</a></li>
					<li>Bryophytes: <a href="https://bryophyteportal.org/portal/" target="_blank">Consortium of North American Bryophyte Herbaria</a></li>
					<li>Fungi: <a href="http://mycoportal.org" target="_blank">Mycology Collections Portal (MyCoPortal)</a></li>
					<li>Lichens: <a href="https://lichenportal.org/cnalh/" target="_blank">Consortium of North American Lichen Herbaria</a></li>
					<li>Macroalgae: <a href="http://macroalgae.org" targert="_blank">Macroalgal Herbarium Consortium</a></li>
					<li>Pteridophytes: <a href="http://www.pteridoportal.org/portal/" target="_blank">Pteridophyte Collections Consortium</a></li>
				</ul>
				</p>
		</div>
 </main>
        <?php
        include($SERVER_ROOT . '/includes/footer.php');
        ?>
</body>
</html>
