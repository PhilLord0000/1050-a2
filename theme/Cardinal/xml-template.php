<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php get_page_clean_title(); ?></title>
        <link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
    </head>
    <body>
        <?php

/*$xmlpath = GSDATAPAGESPATH."/content/".$_GET["name"].".xml";*/
		echo "<p>test</p>";
		$xmlpath ="airports.xml";
		echo "<p>test</p>";
           	$root = simplexml_load_file($xmlpath);
		echo "<p>test</p>";
		echo $root;
            	echo "<h1>" . $root->getName() . "</h1>";
		echo "<p>test</p>";
	 ?>
    </body>
</html>

