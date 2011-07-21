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
			<?php print __("Configuration"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("ZanPHP requires slightly configuration to make it work properly for it, you have to edit 2 files in /core/config, these are: config.constants.php and config.database.php"); ?>
		</p>
        
        <p class="text">
        	<?php print __("Note that the configuration is based on PHP constants, and according to these values ​​is set as the operation of the framework."); ?>
        </p>

        <p class="text">
        	<?php print __("The first configuration file to analyze is: config.database.php, once the file is open you can see that this is the configuration needed to connect to the database to be used by the site. This file allows us to modify the constants for 2 areas of work, local work, or working remotely. The constants are:"); ?>
        </p>
        
        <p class="text">
        	<ul>
            	<li><?php print __("<strong>_dbController:</strong> allows us to specify the database driver to use."); ?></li>
                <li><?php print __("<strong>_dbHost:</strong> allows us to configure the host where the database server (usually localhost)."); ?></li>
                <li><?php print __("<strong>_dbUser:</strong> the user to connect to the database."); ?></li>
                <li><?php print __("<strong>_dbPwd:</strong> password to connect to the database."); ?></li>
                <li><?php print __("<strong>_dbName:</strong> the name of the database to which we will connect."); ?></li>
                <li><?php print __("<strong>_dbPort:</strong> database port."); ?></li>
                <li><?php print __("<strong>_dbPfx:</strong> the prefix our tables have."); ?></li>
            </ul>
        </p>
        
        <p class="text">
        	<?php print __("The second configuration file, will all those config.constants.php constant for the operation of our site, that is general constant, noting that there are some important constants configured for the proper functioning of the site and the framework, these include:"); ?>
        </p>
	</article>