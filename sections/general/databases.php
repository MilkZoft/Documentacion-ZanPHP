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
			<?php print __("Databases"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("Thanks to the design patterns implemented by ZanPHP, you can use more than one driver database on the websites, this means that we can work on a website under MySQL, MSSQL Server and PostgreSQL"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("For this, it is only necessary, modify the constant _dbController located in the file"); ?>: /core/config/config.database.php
        </p>
	</article>
