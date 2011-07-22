<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="../index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo;
	<?php print __("Server Requirements"); ?>
</div>

<div class="Clear"></div>

	<article>
		<p class="title">
			<?php print __("Server Requirements"); ?><br />
		</p>
			
		<p class="text">
			<ul>
				<li><?php print __("PHP 5.1.X or higher"); ?></li>
                <li><?php print __("Databases supported: MySQL, MySQLi, MsSQL, Oracle, PostgreSQL and SQLite"); ?></li>
            </ul>
		</p>

	</article>