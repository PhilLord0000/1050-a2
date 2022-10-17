<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Cardinal theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link href="./images/Index/rrLogo.png" rel="icon" type="image/icon" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />

</head>
<body id="<?php get_page_slug(); ?>" >
<?php get_component('navBar');	?>

    <body>
        <?php
            $xmlpath = GSDATAPAGESPATH."/products/".$_GET["name"].".xml";
            $root = simplexml_load_file($xmlpath);
            echo "<h1>" . $root->getName() . "</h1>";
        ?>
    </body>


<?php get_component('footer');	?>
</body>
</html>
