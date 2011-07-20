<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo;
	<?php print __("Welcome"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>

	<article>
		<p class="Title">
			<?php print __("Welcome"); ?><br />
		</p>
			
		<p class="Text">
			<?php print __("Welcome to the ZanPHP version 1.0 User's Guide"); ?>.
		</p>
	</article>