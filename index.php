<?php
include_once('config/symbini.php');
//include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = false;
	include_once($SERVER_ROOT.'/includes/head.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<link href="js/jquery-ui-1.12.1/jquery-ui.min.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
  <?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	<script src="<?PHP echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
  <main id="innertext">
    <div id="home-hero">
      <h1 class="text-huge">Consortium of California Herbaria Specimen Data</h1>
      <div class="text-big">28 institutions</div>
      <div class="text-big">> 1 mi samples</div>
      <div class="button"><a href="#">Search Our Collections</a></div>
    </div>
  </main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
