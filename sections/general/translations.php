<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="../index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo;
	<?php print __("Welcome"); ?>
</div>

<div class="Clear"></div>

	<article>
		<p class="title">
			<?php print __("Translations"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("ZanPHP a user-friendly translations system, you only need to use a function and a file where you place the translations"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("The function is used as follows"); ?>:
        </p>
		
		<p class="code">
			__("Some text to translate");
		</p>
		
		<p class="text">
        	<?php print __("To complete the translation process, you must add the translation in the following file /core/languages/language.spanish.php, you must add as follows"); ?>:
        </p>
        
        <p class="code">
			function translation($text) { <br /><br />
			&nbsp;&nbsp;&nbsp;&nbsp;switch($text) { <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case "Some text to translate": return "Algún texto para traducir"; break; <br />
			&nbsp;&nbsp;&nbsp;&nbsp;} <br /><br />
			&nbsp;&nbsp;&nbsp;&nbsp;return $text; <br /><br />
			}
        </p>
	</article>
