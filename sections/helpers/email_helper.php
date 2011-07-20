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
	<?php print __("Email Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="Title">
			<?php print __("Email Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/helper.email.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper Email allows you to send an Email"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("email");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">send()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: bool send(string $to, string $name, string $from, string $subject,  string $message) <br />
				<?php print __("Return"); ?>:  <?php print __("bool"); ?>;
			</p>
		
			<p class="Text">
				<?php print __("This function sets and sends the Email"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				send("foo@domain.com", "Bar", "bar@domain.com", "the subject", "the message"); <br />
				//Returns TRUE if the email was successfully accepted for delivery.
			</p>
			
	</article>		
