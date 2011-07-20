<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo; 
	<a href="index.php?lang=<?php print $lang; ?>&section=helpers" title="<?php print __("Helpers"); ?>"><?php print __("Helpers"); ?></a> &raquo; 
	<?php print __("Errors Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Browser Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.browser.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Browser allows to detect the User's Browser"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("browser");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">getBrowser()</p>

			<p class="parameters">
				<?php print __("Return"); ?>:  <?php print __("String"); ?>;
			</p>
		
			<p class="text">
				<?php print __("This function provides the Browser String given by the User Agent from User's Browser"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				getBrowser(); <br /><br />
				//If the current User Agent is from a Chrome-based Browser.<br />
				//Prints: "Chrome" .<br />
										
			</p>
			
	</article>		
