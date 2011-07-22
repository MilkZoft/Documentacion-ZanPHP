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
			<?php print __("Views"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("The views are responsible for showing or request data to the user. The controller is responsible for loading the view with data obtained by the models. That's how the MVC design pattern works"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("Views should be named as follows: view.myview.php and must be located in the /views of each application"); ?>.
        </p>
		
		<p class="text">
        	<?php print __("Another important aspect to mention about the directory /views, is that this can be created within the /css, /js or /images, where can be placed style sheets, scripts and images that will be used only by the application"); ?>.
        </p>
	</article>
