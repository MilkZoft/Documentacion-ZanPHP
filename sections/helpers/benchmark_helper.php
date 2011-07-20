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
			<?php print __("BenchMark Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/helper.benchmark.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper BenchMark allows benchmarking testing over Applications"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("benchmark");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle"> benchMarkStart()</p>

			<p class="Parameters">
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="Text">
				<?php print __("This function sets the Benchmark Start Time"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				benchMarkStart();
			</p>
			
		<p class="SubTitle"> benchMarkEnd()</p>

			<p class="Parameters">
				<?php print __("Return"); ?>:  <?php print __("@float"); ?>;
			</p>
		
			<p class="Text">
				<?php print __("This function returns the Benchmark Final Time"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
			
				benchMarkStart(); <br /> <br />
					
				$bar = 0; <br />
				for($foo=1;$foo&lt;=1000000;$foo++) { <br />
				&nbsp;&nbsp;&nbsp;++$bar; <br />
				} <br /><br />
					
				usleep(1000000); <br />
				//This function Delay execute time for 1sec = 1'000,000 microsec (1microsec = 0.000001 sec)<br /> <br />
				
				print benchMarkEnd();<br />
				//Output a Float Value: 1.0910620689392. This value might vary.
			</p>
			
	</article>		
