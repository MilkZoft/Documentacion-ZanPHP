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
	<?php print __("Security Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="clear"></div>


	<article>
		<p class="title"">
			<?php print __("Sessions Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/sessions.security.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Sessions contains sessions and cookies related functions"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("sessions");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">unsetCookie()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: unsetCookie(string $cookie, string $URL = _webBase) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Removes a Cookie"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$URL = "www.mydomain.com" <br />
				unsetCookie("foo", $URL); <br /><br />
				//Unset the $_COOKIE["foo"] and redirects to www.mydomain.com <br />
				//It must be include the Security helper <br />
			</p>
			
		<p class="sub-title">unsetSession()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: killSessions(string $URL = _webBase) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function unsets all started session variables"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$URL = "www.mydomain.com" <br />
				unsetSessions($URL); <br /><br />
				//Unset all session variables and redirects to www.mydomain.com <br />
				//It must be include the Security helper <br />
			</p>
		
		<p class="sub-title">createCookie()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: createCookie(string $cookie, string $value, bool $redirect = FALSE, string $URL = _webBase, int $time = 604800) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function sets a cookie"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				createCookie("my_cookie", "foo", TRUE, "www.mydomain.com", 3600);<br />
				//Creates cookie: "my_cookie", with the string value: "foo", redirects to www.mydomain.com and set the live of the cookie in 1 hour <br />
				//It must be include the Security helper <br />
			</p>
		
		<p class="sub-title">createSession()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: createSession(string $session = NULL, string $value = NULL, bool $redirect = FALSE, string $URL = _webBase) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function sets a session variable"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				createSession("foo", "bar", TRUE, "www.mydomain.com");<br />
				//Sets variable session: "foo", with the string value: "bar" and redirects to www.mydomain.com<br />
				//It must be include the Security helper <br />
			</p>
		
		
		<p class="sub-title">SESSION()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: SESSION(string $session) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __('This Function returns a $_SESSION index variable value'); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$_SESSION["foo"] = "bar"; <br />
				//Assuming "foo" is a $_SESSION variable and it is set. <br /><br />
				
				SESSION("foo");<br />
				//output: "bar" <br />
			</p>
	</article>		
