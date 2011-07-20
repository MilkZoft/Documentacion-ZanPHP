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
		<p class="Title">
			<?php print __("Alerts Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/helper.alerts.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper Alerts contains the Standard errors and confirmations from the Framework to use over the applications"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("alerts");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">getAlert()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: getAlert($message, $type = "Error", $URL = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text">
				<?php print __("This function shows an Alert to Notify an Event"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print getAlert("Error"); <br /><br />
				
				//Prints: &lt;div class="flashdata error"&gt; Error &lt;/div&gt; <br />						
			</p>
			
			
			<p class="Text">
				<?php print __("You are able to embed the message returned into a URL"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print getAlert("Success!", "Success" "http://mydomain.com/success"); <br /><br />
				
				//Prints: &lt;a rev="External" href="mydomain.com/success"&gt;Success!&lt;/a&gt; .<br />						
				//Note: The Alert type "Success", unsets $_POST by default.
			</p>
			
	</article>		
