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
	<?php print __("Singleton Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Singleton Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.singleton.php
			</p>
			
			<p class="text">
				<?php print __("This class implements the Singleton Design Pattern for PHP5, to avoid Object Cloning"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Singleton");
			</p>
			
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				@var private static <span style="color: #F00">$instances = array();</span> <br />
				Contains the count of records
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Singleton <?php print __("has not Public Attributes"); ?>.
			</p>
			<!-- End Public Attributes -->
			
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
			
			<p class="sub-title">__construct()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Constructor"); ?>.
			</p>	
			<!-- End Private Methods -->
							
			<p class="text">
				<?php print __("Public Methods"); ?>:
			</p>	
			
			<p class="sub-title">public static instance()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: instance(string $class). <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Prevents Object cloning or Class re-instancing"); ?>.
			</p>	
			
	</article>		
