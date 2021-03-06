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

<div class="clear"></div>


	<article>
		<p class="title"">
			<?php print __("Inflect Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/inflect.forms.php
			</p>
			
			<p class="text">
				<?php print __("The Helper inflect contains functions to inflect words"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("inflect");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">pluralize()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __(string $word); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the plural form of a Word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print pluralize("Woman"); <br /><br />
				
				//Prints: "Women" .<br />						
			</p>
			
		<p class="sub-title">singularize()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __(string $word); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the singular form of a Word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print singularize("Tomatoes"); <br /><br />
				
				//Prints: "Tomato" .<br />						
			</p>
			
	</article>		
