<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo; 
	<a href="index.php?lang=<?php print $lang; ?>&section=helpers" title="<?php print __("Classes"); ?>"><?php print __("Classes"); ?></a> &raquo; 
	<?php print __("Email Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Email Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.email.php
			</p>
			
			<p class="text">
				<?php print __("This class allows to manipulate emails"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Email");
			</p>
			
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Email</li>
					</ul>
				</ul>
			</div>
			
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Email Class <?php print __("has not Private Attributes"); ?>
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fromName</span> <br />
				Contains the name of the email sender.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fromEmail</span> <br />
				Contains the email string of the email sender.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$email</span> <br />
				Contains the email string to send.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$subject</span> <br />
				Contains the string with the subject.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$message</span> <br />
				Contains the string with the email message.
			</p>
			<!-- End Public Attributes -->
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
			
			<p class="code">
				ZP_Email Class <?php print __("has not Private Methods"); ?>.
			</p>
			<!-- End Private Methods -->
			
			<!-- Begin Public Methods -->
			<p class="text">
				<?php print __("Public Methods"); ?>:
			</p>				
		
		<p class="sub-title">setLibrary()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: setLibrary(string $library = "native"); <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets the way the email will be send"); ?>.
			</p>	

		<p class="sub-title">send()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sends an Email"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
				$this->Email = $this->core("Email"); <br />
				//Instances the Email Class          <br /> <br />
				
				$this->Email->setLibrary("native");          <br />
				$this->Email->fromName    = "Joe Doe"; 	     <br />
				$this->Email->fromEmail   = "me@example.com";  <br />
				$this->Email->email       = "for@example.com"; <br />
				$this->Email->subject     = "This is a Subject"; <br />
				$this->Email->message     = "This is the Message (able to contain HTML)"; <br />
				
				$this->Email->send(); <br />
			</p>	
			
	</article>		
