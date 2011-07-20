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
			<?php print __("Router Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/router.forms.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper Router contains functions to manipulate URLs"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("router");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">execute()</p>

			<p class="Parameters">
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("Executes the run() method which is inside all application controllers"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			
		<p class="SubTitle">segment()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: __(int $segment); <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns a string containing a specific URL segment from route()"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print segment(0); <br /><br />
				
				//Prints: "en" <br />						
				//In this case the default value for segment(0) is a XML Language Abbreviation.
			</p>
	
		<p class="SubTitle">route()</p>

			<p class="Parameters">
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns an Array from \$_SERVER[\"REQUEST_URI\"] exploding each position with slashes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				var_dump(route()); <br /><br />
				
				//Prints: <br />					
				
				array(2) { <br />
				&nbsp;&nbsp;&nbsp;[0]=> <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(2) "en" <br />
				&nbsp;&nbsp;&nbsp;[1]=> <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(7) "myapp" <br />
				}<br />
			
				//The actual given URL: http://localhost/zanphp/index.php/en/myapp
			</p>
		
		<p class="SubTitle">getURL()</p>

			<p class="Parameters">
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns a URL"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print getURL(); <br /><br />
				
				//Prints: en/welcome
				//The actual given URL: http://localhost/zanphp/index.php/en/welcome
			</p>
	</article>		
