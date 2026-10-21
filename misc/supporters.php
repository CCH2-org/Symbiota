<?php
include_once('../config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load(['templates/index','templates/supporters']);

header("Content-Type: text/html; charset=" . $CHARSET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $DEFAULT_TITLE . ' | ' . $LANG['SUPPORTERS_TITLE']?></title>
    <?php
    include_once($SERVER_ROOT . '/includes/head.php');
    ?>
    <link href="<?= $CSS_BASE_PATH ?>/symbiota/supporters.css?ver=<?= $CSS_VERSION ?>" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
    $displayLeftMenu = true;
    include($SERVER_ROOT . '/includes/header.php');
    ?>
    <div class="navpath">
        <a href="<?php echo htmlspecialchars($CLIENT_ROOT, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/index.php"><?php echo $LANG['HOME']; ?></a> &gt;&gt;
        <b><?php echo $LANG['SUPPORTERS_TITLE']; ?></b>
    </div>
    <!-- This is inner text! -->
    <div role="main" id="innertext">
        <h1 class="page-heading"><?= $LANG['SUPPORTERS_TITLE'] ?></h1>
        <p><?= $LANG['SUPPORTERS_MESSAGE'] ?></p>
        <div class="support-tiers">
            <!-- Tier 1 -->
            <h2 id="tier-1-heading"></h2>
            <ul name="support_tier_1" class="tier-1 table-view" aria-labelledby="tier-1-heading">
                <li>
                    <img src="<?= $CLIENT_ROOT ?>/images/layout/rsa.png" alt="">
                    <p>California Botanic Garden</p>
                </li>
                 <li>
                    <img src="<?= $CLIENT_ROOT ?>/images/layout/ucjeps.jpeg" alt="">
                    <p>University and Jepson Herbaria, University of California, Berkeley</p>
                </li>
                <li>
                    <a href="https://symbiota.org">
                    <img src="<?= $CLIENT_ROOT ?>/images/layout/ucr.png" alt="">
                    <p>University of California, Riverside</p></a>
                </li>
            </ul>
            <!-- Tier 2 -->
            <ul name="support_tier_2" class="tier-2 table-view" aria-labelledby="tier-2-heading">
                <li>
                    <p>University of California, Davis Center for Plant Diversity</p></a>
                </li>
                <li>
                    <p>Kenneth S. Norris Center for Natural History, University of California Santa Cruz</p></a>
                </li>
                <li>
                    <p>Robert F. Hoover Herbarium, Cal Poly State University</p></a>
                </li>
                <li>
                    <p>SD Herbarium, San Diego Natural History Museum</p></a>
                </li>
                <li>
                    <p>Michael Simpson</p></a>
                </li>
            </ul>
            <!-- Tier 3 -->
            <ul id="support_tier_3" name="support_tier_3" class="tier-3 bullet-view" aria-labelledby="tier-3-heading"><!-- change bullet-view to table-view if desired -->
                <li>
                    <p>University of California, Irvine Herbarium</p>
                </li>
                <li>
                    <p>University of California, Los Angeles Herbarium</p>
                </li>
                <li>
                    <p>Cal Poly Humboldt Herbarium</p>
                </li>
                <li>
                    <p>Fresno State University</p>
                </li>
                <li>
                    <p>San Diego State University Herbarium</p></a>
                </li>
                <li>
                    <p>Dr. Jenn Yost</p></a>
                </li>
                <li>
                    <p>David L. Magney</p></a>
                </li>
                <li>
                    <p>Lawrence Janeway</p></a>
                </li>
            </ul>
        </div>
    </div>
    <?php
    include($SERVER_ROOT . '/includes/footer.php');
    ?>
</body>

</html>
