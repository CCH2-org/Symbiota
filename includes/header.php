<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/header.' . $LANG_TAG . '.php')) include_once($SERVER_ROOT . '/content/lang/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/header.' . $LANG_TAG . '.php');
include_once($SERVER_ROOT . '/includes/head.php');

include_once($SERVER_ROOT . '/classes/ProfileManager.php');
$pHandler = new ProfileManager();
$isAccessiblePreferred = $pHandler->getAccessibilityPreference($SYMB_UID);
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel" style="color: var(--light-color); font-size:1.5rem; text-decoration: none;">
						<?= (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome') . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap; padding: 0.8rem; font-size:1.5rem; border:2px solid var(--light-color);" class="button button-tertiary bottom-breathing-room-rel">
						<a style="font-size: 1.1em;" href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile') ?></a>
					</span>
					<span style="white-space: nowrap; padding: 0.8rem; font-size:1.5rem; background-color: var(--light-color)" class="button button-secondary bottom-breathing-room-rel">
						<a style="font-size: 1.1em;" href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Sign Out') ?></a>
					</span>
					<?php
				} else {
					?>
					<span style="white-space: nowrap; padding: 0.8rem; font-size:1.5rem; background-color: var(--light-color); " class="button button-secondary bottom-breathing-room-rel">
						<a style="font-size: 1.1em;" href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login') ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="https://symbiota.org">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/CCH.png" alt="CCH2 logo">
					</div>
				</a>
				<div class="brand-name">
					<h1>CCH2</h1>
					<h2 style="font-size:1.5em">Specimen data from the Consortium of California Herbarium</h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/search/index.php" >Search Collections</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/checklists/index.php">Checklists</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Image Search</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php">Data Use Policy</a>
                                        </li>
                                        <li>
                                                <a href="http://ucjeps.berkeley.edu/consortium/about.html" target="_blank">About CCH</a>
                                        </li>
                                        <li>
                                                <a href="https://www.capturingcaliforniasflowers.org/symbiota.html" target="_blank">Help & Resources</a>
                                        </li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/sitemap.php">Sitemap</a>
                                        </li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
