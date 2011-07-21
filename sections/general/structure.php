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
			<?php print __("File's Structure"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("ZanPHP consists of 3 main directories, which are: Applications, core and lib. Each with different purposes. The following explains the purpose of each of these directories."); ?>
		</p>
        
        <p class="sub-title">Applications</p>
        
        <p class="text">
        	<?php print __("This directory is one that contains all the applications developed with ZanPHP."); ?>
        </p>
        
        <p class="sub-title">Core</p>

        <p class="text">
        	<?php print __("The \"core\" directory, is the most important of ZanPHP includes the configuration file of the site to develop as well as the framework classes that support the architecture itself, translations, along with the functions (helpers) that the framework we offers to do the heavy lifting."); ?>
        </p>
        
        <p class="sub-title">Lib</p>
        
        <p class="text">
        	<?php print __("In this directory you will find different types of files, among them: style sheets, external libraries, images, templates, and uploaded files for each application."); ?>
        </p>
	</article>