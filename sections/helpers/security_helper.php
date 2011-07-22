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
			<?php print __("Security Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.security.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Security contains security related functions"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("security");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">code()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __(int $max, boolen $uppercase = TRUE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Generates and returns a unique code based on a timestamp"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				
				print code() . "&lt;br /&gt;"; <br />
				//Prints: 6A7444D4E4 <br />
					
			</p>
			
			<p class="text"> 
				<?php print __("You can define the large of the returned string -no longer than a md5 hash- and if it is uppercased"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				
				print code(12,FALSE) . "&lt;br /&gt;"; <br />
				//Prints: f64b159b6da0 <br />
					
			</p>
			
			
		<p class="sub-title">escape()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __(int $segment); <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function escapes potentially harmful string fragments in a string to avoid SQL Injections"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				$string = "'OR'1'='1"; <br />
				print escape($string); <br />

				//Prints: "1=1" <br />						
				//This is a common SQL Injection.
			</p>
		
		<p class="sub-title">encripting()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: encripting(string $password = NULL, int $strong = 3, bool $key = TRUE, bool $uppercase = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns an encripted string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				$pass = "my_pass"; <br />
				print encripting($pass, 1, TRUE, TRUE); <br /><br />
				
				//Prints: "0F9B54A15E8FE458B2E1ED77DE7CC84F" <br />
				//If $key parameter is set as TRUE, the returned string is encripted using a timestamp, <br />
				//in the other hand, if set as FALSE, it is encripted with a default external key.
				   			
			</p>
			
			<p class="text"> 
				<?php print __("You can define the encripting strong"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				$pass = "my_pass"; <br />
				print encripting($pass, 3, TRUE, TRUE); <br /><br />
				
				//Prints: "8274FE3BC002381FD8698795929B05B1AC412CA3" <br />			
				//There is three encripting levels.<br />   			
			</p>
			
		<p class="sub-title">getIP()</p>

			<p class="parameters">
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the User's IP"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print getIP(); <br /><br />
				
				//Prints: 127.0.0.1
			</p>
		
		<p class="sub-title">ping()</p>

			<p class="parameters">
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function pings a URL"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				if(ping("www.mydomain.com") === TRUE){ <br />
				&nbsp;&nbsp;&nbsp;print "Success"; <br />
				} else { <br />
				&nbsp;&nbsp;&nbsp;print "ping Failed" <br />
				}
			
			</p>
		
		<p class="sub-title">redirect()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: redirect(string $URL, mixed $time = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function redirect to a URL"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				redirect("www.mydomain.com", 1);
				
			</p>
	</article>		
