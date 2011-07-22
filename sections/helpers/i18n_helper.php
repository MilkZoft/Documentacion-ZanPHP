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
			<?php print __("i18n Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/i18n.forms.php
			</p>
			
			<p class="text">
				<?php print __("The Helper i18n contains functions of Internationalization"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("i18n");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">__()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __(string $text); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the translation of a specific text"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print __("Translated Text"); <br /><br />
				
				//It must exist a language translation document on core/language/ <br />
				//In this case, all translations are returned by the translation() function at core/languages/language.spanish.php <br /><br />
				
				//Prints: "Texto Traducido" .<br />						
			</p>
		
		<p class="sub-title">getXMLang()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getXMLang(string $language, boolean $invert = FALSE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string/@bool"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the standard XML language Abbreviation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print getXMLang("English"); <br /><br />
			
				//Prints: "en" .<br />						
			</p>
			
			<p class="text"> 
				<?php print __("You can set the XML language Abbreviation and get the full word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print getXMLang("en", TRUE); <br /><br />			
				
				//Prints: "English" .<br />						
			</p>
			
		<p class="sub-title">whichLanguage()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: whichLanguage(boolean $invert = FALSE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the default Language"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print whichLanguage(); <br /><br />
			
				//Prints: "English" .<br />						
			</p>
			
			<p class="text"> 
				<?php print __("You can also get the standard XML Abbreviation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print whichLanguage(FALSE); <br /><br />
			
				//Prints: "en" .<br />						
			</p>
		
		<p class="sub-title">isLanguage()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: isLanguage($language); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function defines if a specific word is a standard XML language Abbrevation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				isLanguage("en"); <br /><br />
			
				//Returns: "TRUE" .<br />						
			</p>
			
		<p class="sub-title">getLanguage()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getLanguage($language); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the translation of a specific Language Word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print getLanguage("Spanish"); <br /><br />
			
				//Returns: "Español" .<br />
				//The result depends on the default Language
			</p>
	</article>		
