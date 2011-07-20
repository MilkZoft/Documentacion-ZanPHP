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
	<?php print __("Array Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="Title">
			<?php print __("Array Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/helper.array.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper Array contains functions for manipulating arrays"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("array");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">isMultiArray()</p>
		
			<p class="Parameters">
				<?php print __("Parameters"); ?>: isMultiArray($multiArray); <br />
				<?php print __("Return"); ?>: @boolean;
			</p>
		
			<p class="Text">
				<?php print __("Returns true if the array is a double array, false if only is a simple array"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$array = array(1, 2, 3); <br /><br />
				
				//Returns false. <br />
				if(isMultiArray($array)) { <br />
					&nbsp;&nbsp;&nbsp;&nbsp;print "Returns true"; <br />
				} else { <br />
					&nbsp;&nbsp;&nbsp;&nbsp;print "Returns false"; <br />
				} <br /><br />
				
				$array = array(1 => array(1, 2, 3)); <br /><br />
				
				//Returns true. <br />
				if(isMultiArray($array)) { <br />
					&nbsp;&nbsp;&nbsp;&nbsp;print "Returns true"; <br />
				} else { <br />
					&nbsp;&nbsp;&nbsp;&nbsp;print "Returns false"; <br />
				}						
			</p>	
	</article>		
