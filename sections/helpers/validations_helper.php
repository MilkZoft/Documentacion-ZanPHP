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
	<?php print __("Validation Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Validations Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.validations.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Validations contains validation functions related"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("validations");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">isEmail()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: isEmail(string $email) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Validates if a strings as an email"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$goodMailString = "foo@example.com";<br />
				$badMailString  = "#$%&/.com@"<br /><br />
				
				isEmail($goodMailString); #Returns TRUE <br />
				isEmail($badMailString);  #Returns FALSE <br />		
			</p>
		
		<p class="sub-title">isInjection()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: isInjection(string $text, integer $count) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Validates if a strings as a HTML injection"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "&lt;script&gt;alert('Foo')&lt;/script&gt;";<br /><br />
			
				isInjection($text, 0); #Returns TRUE	
			</p>
		
		
		<p class="sub-title">isSPAM()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: isSPAM(string $content, integer $count = 2) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Validates if a strings contents SPAM"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$content = "buy cheap viagra at example.com";<br /><br />
			
				isSPAM($content, 2); #Returns TRUE	
			</p>
		
		<p class="sub-title">isVulgar()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: isVulgar(string $content, integer $count = 1)  <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Validates if a strings contents vulgar expressions"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$content = "get the fuck off bitch";<br /><br />
			
				isVulgar($content, 1); #Returns TRUE	
			</p>
	</article>		
