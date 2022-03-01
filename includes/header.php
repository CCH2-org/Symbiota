<div class="header__wrapper">
  <header>
    <div id="top-brand">
      <img src="./images/layout/CCH_logo_filled.png" alt="site logo">
      <div class="brand-name">
        <h1>CCH2 Specimen Data</h1>
        <div>
          <h2>Consortium of</h2>
          <h2>California Herbaria</h2>
        </div>
      </div>
    </div>
    <nav id="top-login">
      <?php
      if($USER_DISPLAY_NAME){
        ?>
        <span>
          Welcome <?php echo $USER_DISPLAY_NAME; ?>!
        </span>
        <span>
          <a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
        </span>
        <span>
          <a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
        </span>
        <?php
      }
      else{
        ?>
        <span>
          <a href="#">
            Contact Us
          </a>
        </span>
        <!-- <span>
          <a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
            New Account
          </a>
        </span> -->
        <span>
          <a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME']."?".htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
            Log In
          </a>
        </span>
        <?php
      }
      ?>
      <!-- <span style="margin-left:5px;margin-right:5px;">
        <a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
      </span> -->

    </nav>
    <nav id="top-menu">
      <ul>
        <li>
          <a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
        </li>
        <li>
          <a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
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
      </ul>
    </nav>
  </header>
</div>
