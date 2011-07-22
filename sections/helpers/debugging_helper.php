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
	<?php print __("Debugging Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="clear"></div>


	<article>
		<p class="title"">
			<?php print __("Debugging Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.debugging.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Debugging contains functions for debugging PHP code"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("debugging");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">___()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: ___($text); <br />
				<?php print __("Return"); ?>:  <?php print __("void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("This function is equals to PHP function die()"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$a = "1"; <br /><br />
				
				//Prints 1 and truncate the script.<br />
				___($a); <br /><br />
				
				$b = "2";						
			</p>
			
		<p class="sub-title">____()</p>
		
			<p class="parameters">
				<?php print __("Parameters"); ?>: ____($var, $dump = TRUE, $exit = TRUE); <br />
				<?php print __("Return"); ?>: <?php print __("void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("This function is equals to <strong>die(var_dump(\$var))</strong> functions with <strong>&lt;pre&gt;</strong> tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$array = array("One" => 1, "Two" => 2, "Three" => 3, "4"); <br /><br />
				
				____($array);<br /><br />
				
				//This line of code will be truncated.<br />
				print "<?php print _zanphp; ?>"; <br /><br />
				
				/*  <br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;Returns. <br />
				 	<br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;array(4) { <br />
				     &nbsp;&nbsp;&nbsp;&nbsp;["One"]=> <br />
				 	 &nbsp;&nbsp;&nbsp;&nbsp; int(1) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;["Two"]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;int(2) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;["Three"]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;int(3) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;[0]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;string(1) "4" <br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;} <br />
				 */		
			</p>	
			
			<p class="text">
				<?php print __("If you want use print_r() function and did not truncate the script, You need to change some extra values on the parameters"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				$array = array("One" => 1, "Two" => 2, "Three" => 3, "4"); <br /><br />
				
				____($array, FALSE, FALSE);<br /><br />
				
				print "This is <?php print _zanphp; ?> :)";<br /><br />
				
				/*  <br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;Returns. <br />
				 	<br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;array(4) { <br />
				     &nbsp;&nbsp;&nbsp;&nbsp;["One"]=> <br />
				 	 &nbsp;&nbsp;&nbsp;&nbsp; int(1) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;["Two"]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;int(2) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;["Three"]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;int(3) <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;[0]=> <br />
				 	  &nbsp;&nbsp;&nbsp;&nbsp;string(1) "4" <br />
				 	&nbsp;&nbsp;&nbsp;&nbsp;} <br /><br />
					
					&nbsp;&nbsp;&nbsp;&nbsp;This is <?php print _zanphp; ?> :)<br />
				 */	
			</p>
	</article>		
