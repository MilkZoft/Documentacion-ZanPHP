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
			<?php print __("Applications"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("Create an application with ZanPHP is very easy, you just need to create a directory within /applications, the directory must take the application name in lowercase. Note that the directory name that is the same with which you will access the application from the website"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("Other aspects to consider, is that within the application directory 2 files should be mandatory, as well as a directory, which are: controller.application.php, model.application.php and /views"); ?>.
        </p>
        
        <p class="text">
        	<?php print __("The contents of these files and the directory will be explained in the subsequent topics"); ?>.
        </p>
	</article>
