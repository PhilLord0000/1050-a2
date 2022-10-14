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
	<?php //get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link rel="icon" href="../../data/images/Index/rrLogo.png" type="image/icon">
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />

</head>
<body id="<?php get_page_slug(); ?>" >
<?php get_component('navBar');	?>
<?php get_page_slug(); ?>
<?php get_page_content(); ?>
<?php get_component('footer');	?>
	
	<?php //get_footer(); ?>
	
</div><!-- end wrapper -->
</body>
</html>
