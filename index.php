<?php
define("_domain", FALSE);
define("_modRewrite", FALSE);

	include "helpers/helper.router.php";
	
	$route = route();
	
	if(count($route) > 0 and $route[0] === "es") { 
		define("_language", "Spanish");	
		$language = "Translate to English";
		$image    = "tablacontent_es.png";
		
		if(count($route) > 2 and isset($route[1])) {
			$URL  	= "index.php/es";
			$URLang = "index.php/en/" . $route[1] . "/". $route[2];			
		} else {
			$URL	= "index.php/es";
			$URLang = "index.php/en";	
		}
	} else {
		define("_language", "English");
		$language = "Traducir al Espa&ntilde;ol";
		$image    = "tablacontent.png";
		
		if(count($route) > 2 and isset($route[1])) {
			$URL	= "index.php/en";
			$URLang = "index.php/es/" . $route[1] . "/". $route[2];	
		} else {
			$URL	= "index.php/en";
			$URLang = "index.php/es";	
		}
	}
		
	define("_access", TRUE);
	define("_zanphp", "ZanPHP v.1.0");
	define("_base", "http://localhost/documentacion/");
	
	include "helpers/helper.i18n.php";
	$URL	= _base . $URL;
	$URLang = _base . $URLang;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php print __("ZanPHP User Guide Version 1.0"); ?></title>
		<style media="all" type="text/css">
			@import "<?php print _base; ?>css/style.css";

			.TableContent {
				background-image:url("<?php print _base; ?>images/<?php print $image; ?>");
			}			
		</style>
	</head>

	<body>
		<div id="Container">
			<header>
				<div id="Languages">
					<a href="<?php print $URLang; ?>" title="<?php print $language; ?>"><?php print $language; ?></a>
				</div>
				
				<div id="TopTitle">
					<h1><?php print __("ZanPHP User Guide Version 1.0"); ?></h1>
				</div>
			</header>
			
			<div id="Sidebar">
				<div id="Menu2">
					<ul>
						<li class="ListMenu"><?php print __("Basic Info"); ?></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>"><?php print __("ZanPHP v.1.0"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/basic/server_requirements"><?php print __("Server Requirements"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/basic/licence"><?php print __("License Agreement"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/basic/credits"><?php print __("Credits"); ?></a></li>
						<li class="ListMenu"><?php print __("Download"); ?></li>
							<li class="ListSMenu"><a href="https://github.com/MilkZoft/ZanPHP" target="_blank"><?php print __("Downloading ZanPHP v.1.0"); ?></a></li>
						<li class="ListMenu"><?php print __("Introduction"); ?></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/introduction/"><?php print __("Getting Started"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/introduction/supported_features"><?php print __("Supported Features"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/introduction/mvc"><?php print __("Model View Controller"); ?></a></li>
						<li class="ListMenu"><?php print __("General Topics"); ?></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/structure"><?php print __("Structure"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/configuration"><?php print __("Configuration"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/databases"><?php print __("Databases"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/applications"><?php print __("Applications"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/controllers"><?php print __("Controllers"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/views"><?php print __("Views"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/models"><?php print __("Models"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/translations"><?php print __("Translations"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/debugging"><?php print __("Debugging"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/libraries"><?php print __("Libraries"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/scripts"><?php print __("Scripts"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/templates"><?php print __("Templates"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/style_sheets"><?php print __("Style Sheets"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/general/themes"><?php print __("Themes"); ?></a></li>
						<li class="ListMenu"><?php print __("Classes Reference"); ?></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/database_class"><?php print __("Database Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/db_class"><?php print __("Db Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/email_class"><?php print __("Email Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/files_class"><?php print __("Files Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/images_class"><?php print __("Images Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/load_class"><?php print __("Load Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/pagination_class"><?php print __("Pagination Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/singleton_class"><?php print __("Singleton Class"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/classes/templates_class"><?php print __("Templates Class"); ?></a></li>
						<li class="ListMenu"><?php print __("Helpers Reference"); ?></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/alerts_helper"><?php print __("Alerts Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/array_helper"><?php print __("Array Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/autoload_helper"><?php print __("Autoload Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/benchmark_helper"><?php print __("Benchmark Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/browser_helper"><?php print __("Browser Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/debugging_helper"><?php print __("Debugging Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/forms_helper"><?php print __("Forms Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/html_helper"><?php print __("HTML Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/i18n_helper"><?php print __("il8n Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/inflect_helper"><?php print __("Inflect Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/router_helper"><?php print __("Router Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/security_helper"><?php print __("Security Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/sessions_helper"><?php print __("Sessions Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/string_helper"><?php print __("String Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/time_helper"><?php print __("Time Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/validations_helper"><?php print __("Validations Helper"); ?></a></li>
							<li class="ListSMenu"><a href="<?php print $URL; ?>/helpers/web_helper"><?php print __("Web Helper"); ?></a></li>
					</ul>
				</div>
			</div>						
			
			<section id="Content">			
				<?php
					if(count($route) > 2) {
						$categoria = $route[1];
						$seccion   = $route[2];
						
						if(file_exists("sections/" .$categoria . "/" . $seccion . ".php")) {
							include "sections/" . $categoria . "/" . $seccion . ".php";
						} else {
							include "sections/welcome.php";	
						}
					} else {
						include "sections/welcome.php";
					}
				?>
			</section>
		</div>
		
		<div class="Clear"></div>
		
		<footer>
			<a href="http://www.zanphp.com" title="<?php print _zanphp; ?>"><?php print _zanphp; ?></a> - <?php print __("Copyright &copy;"); ?> - 2011 - <?php print __("Powered by"); ?> <a href="http://www.milkzoft.com" title="MilkZoft">MilkZoft</a>
		</footer>
		
		<script type="text/javascript" src="<?php print _base; ?>js/jquery-1.4.3-min.js"></script>
		<script type="text/javascript" src="<?php print _base; ?>js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php print _base; ?>js/nav.js"></script>
	</body>
</html>
