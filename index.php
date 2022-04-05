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
  <!-- Page-specific CSS -->
  <link rel="stylesheet" href="<?php echo $CLIENT_ROOT; ?>/css/custom/home.css" type="text/css">
  <!-- Page-specific JS -->
  <link href="<?php echo $CLIENT_ROOT; ?>/js/jquery-ui-1.12.1/jquery-ui.min.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
  <?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	<script src="<?php echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
</head>
<body id="home">
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
  <main id="innertext">
    <section id="home-hero">
      <h1>Consortium of California Herbaria Specimen Data</h1>
      <article>
        <div class="text-big">28 institutions</div>
        <div class="text-big">> 1 mi samples</div>
      </article>
      <div class="button button--secondary"><a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php">Search Our Collections</a></div>
    </section>
    <section class="grid-2">
      <article id="home-about">
        <h2>About CCH2</h2>
        <p>The California Phenology Network was originally an NSF-funded collaboration of 22 California herbaria that aimed to image 904,200 herbarium specimens by 2022.</p>
        <p>In July 2020, this network was expanded by a <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001644" target="_blank">partner-to-existing-network grant</a> to include six additional institutions and over 148,000 more specimens, for a total of over one million specimens.</p>
        <p>In this data portal we will georeference and transcribe over 320,000 specimens, making their data publicly available.</p>
      </article>
      <article id="home-tools">
        <h2>Our Tools</h2>
        <div class="grid-3">
          <article>
            <a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/outline_search_black_48dp.png" alt="Search icon - Google Material icons magnifying glass">
              <div class="text-md">Text Search</div>
            </a>
          </article>
          <article>
            <a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/outline_public_black_48dp.png" alt="Search icon - Google Material icons map">
              <div class="text-md">Map Search</div>
            </a>
          </article>
          <article>
            <a href="<?php echo $CLIENT_ROOT; ?>/checklists/index.php" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/outline_checklist_black_48dp.png" alt="Search icon - Google Material icons checklist">
              <div class="text-md">Checklists</div>
            </a>
          </article>
        </div>
      </article>
      <article class="home-data">
        <h2>Using CCH2 Data</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde possimus cum, fugit nihil nulla itaque facilis. Veniam numquam debitis vel, ea, molestias aut sint id ullam eos ipsa saepe! Corrupti!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam inventore iste tempore earum, exercitationem, et magnam illum fuga, doloremque omnis non dolores voluptatibus necessitatibus error mollitia ullam modi natus iusto.</p>
      </article>
      <article class="home-more">
        <h2>More Information</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, laudantium quis aut nesciunt officia fugit, aspernatur non tempora, praesentium quo dolor perspiciatis omnis sint quas sapiente nam voluptatem doloribus. Cupiditate.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores debitis tempore suscipit voluptas ducimus quod, delectus eaque officia nesciunt id eos aut, sapiente accusamus illum, eligendi fugit distinctio consectetur quisquam.</p>
      </article>
    </section>
    <section id="home-specimens">
      <h2>Some of our Specimens</h2>
      <p>Click the image to learn more about the sample.</p>
      <article id="home-specimens-gallery">
        <article>
          <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/random-img1.png" alt="Exsicata">
          <h4 style="font-style: italic">Taxon name</h4>
          <h5>CatalogNumber, ColCODE</h5>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer">Learn More</a>
          </p>
        </article>
        <article>
          <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/random-img2.png" alt="Exsicata">
          <h4 style="font-style: italic">Taxon name</h4>
          <h5>CatalogNumber, ColCODE</h5>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer">Learn More</a>
          </p>
        </article>
        <article>
          <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/random-img3.png" alt="Exsicata">
          <h4 style="font-style: italic">Taxon name</h4>
          <h5>CatalogNumber, ColCODE</h5>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer">Learn More</a>
          </p>
        </article>
        <article>
          <img src="<?php echo $CLIENT_ROOT; ?>/images/layout/random-img4.png" alt="Exsicata">
          <h4 style="font-style: italic">Taxon name</h4>
          <h5>CatalogNumber, ColCODE</h5>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer">Learn More</a>
          </p>
        </article>
      </article>
    </section>
  </main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>