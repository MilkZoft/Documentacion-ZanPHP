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
		<p class="title">
			<?php print __("Welcome to ZanPHP"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("ZanPHP is an agile Web application development framework written in PHP5 that uses different design patterns and best practices to create applications more quickly with good quality code"); ?>.
		</p>
        
        <p class="sub-title"><?php print __("Some of the advantages of ZanPHP are:"); ?></p>
        
        <p class="text">
        	<ul>
            	<li><?php print __("Easy to install and configure"); ?></li>
                <li><?php print __("Easy to learn"); ?></li>
                <li><?php print __("You can create almost any type of Web applications"); ?></li>
                <li><?php print __("Compatible with different platforms"); ?></li>
                <li><?php print __("Object oriented"); ?></li>
                <li><?php print __("Use lots of design patterns and best practices to produce higher quality code"); ?></li>
                <li><?php print __("Scalable applications and easy to maintain"); ?></li>
                <li><?php print __("Documentation in English and Spanish"); ?></li>
                <li><?php print __("Integration with jQuery and jQuery Mobile, Ajax and other new technologies"); ?></li>
                <li><?php print __("It is free software"); ?></li>
            </ul>
        </p>
	</article>