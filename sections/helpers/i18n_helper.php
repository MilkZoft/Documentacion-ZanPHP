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
			<?php print __("i18n Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/i18n.forms.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper i18n contains functions of Internationalization"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("i18n");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">__()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: __(string $text); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns the translation of a specific text"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print __("Translated Text"); <br /><br />
				
				//It must exist a language translation document on core/language/ <br />
				//In this case, all translations are returned by the translation() function at core/languages/language.spanish.php <br /><br />
				
				//Prints: "Texto Traducido" .<br />						
			</p>
		
		<p class="SubTitle">getXMLang()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: getXMLang(string $language, boolean $invert = FALSE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string/@bool"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns the standard XML language Abbreviation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print getXMLang("English"); <br /><br />
			
				//Prints: "en" .<br />						
			</p>
			
			<p class="Text"> 
				<?php print __("You can set the XML language Abbreviation and get the full word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print getXMLang("en", TRUE); <br /><br />			
				
				//Prints: "English" .<br />						
			</p>
			
		<p class="SubTitle">whichLanguage()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: whichLanguage(boolean $invert = FALSE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns the default Language"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print whichLanguage(); <br /><br />
			
				//Prints: "English" .<br />						
			</p>
			
			<p class="Text"> 
				<?php print __("You can also get the standard XML Abbreviation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print whichLanguage(FALSE); <br /><br />
			
				//Prints: "en" .<br />						
			</p>
		
		<p class="SubTitle">isLanguage()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: isLanguage($language); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function defines if a specific word is a standard XML language Abbrevation"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				isLanguage("en"); <br /><br />
			
				//Returns: "TRUE" .<br />						
			</p>
			
		<p class="SubTitle">getLanguage()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: getLanguage($language); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns the translation of a specific Language Word"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print getLanguage("Spanish"); <br /><br />
			
				//Returns: "Español" .<br />
				//The result depends on the default Language
			</p>
	</article>		
