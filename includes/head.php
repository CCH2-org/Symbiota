<?php
/*
** Style sheets are determined by $CSS_BASE_PATH set within config/symbini.php
** Customization can be made by modifying css files, $CSS_BASE_PATH, adding new css files below
*/
?>
<!-- Responsive viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Symbiota styles -->
<link href="<?= $CSS_BASE_PATH ?>/symbiota/reset.css" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/normalize.slim.css" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/header.css" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/footer.css" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/main.css" type="text/css" rel="stylesheet">
<link href="<?= $CSS_BASE_PATH ?>/symbiota/accessibility-controls.css" type="text/css" rel="stylesheet">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gurajada&family=Staatliches&display=swap" rel="stylesheet">
<style>
    .accessibility-button {
        font-size: 1.1em;
    }
    .welcome-text {
        margin-bottom: 0.75rem;
    }
    .accessibility-option-button {
        width: fit-content;
        padding: 10px;
        background-color: var(--link-color);
        color: var(--body-bg-color);
    }

    .accessibility-option-button:hover {
        cursor: pointer;
        background-color: var(--medium-color);
    }
    .accessibility-dialog{
        position: fixed;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 5px;
    }
    .button__item-container{
        display: flex;
        justify-content: center;
    }
    .button__item-container__item-text{
        margin-top: 0.5rem;
    }
    div.brand-name h1{
	font-family: "Staatliches", sans-serif;
	font-weight: normal;
    }
    div.brand-name h2{
	font-family: "Gurajada", sans-serif;
	font-weight: normal;
    margin-top:-0.5em;
    }

</style>
<?php 
    if($isAccessiblePreferred){
        if(isset($localSession) && strpos($localSession, "condensed.css")){
            ?>
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/accessibility-compliant.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/condensed.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >
            <?php
        }else{
            ?>
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/accessibility-compliant.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/condensed.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >
            <?php
        }
    } else{
        if(isset($localSession) && strpos($localSession, "accessibility-compliant.css")){
            ?>
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/accessibility-compliant.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/condensed.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >
            <?php
        } else{
            ?>
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/accessibility-compliant.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >
            <link href="<?php echo htmlspecialchars($CSS_BASE_PATH, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/symbiota/condensed.css?ver=6.css" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >
            <?php
        }
    }
?>
