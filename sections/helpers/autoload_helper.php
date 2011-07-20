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
		<p class="title">
			<?php print __("Autoload Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.autoload.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Autoload contains an implementation of the native PHP function __autoload()"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("autoload");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">__autoload()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: __autoload($class); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text">
				<?php print __("This function is automatically called in case you are trying to use a class/interface which hasn't been defined yet"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				function __autoload($class) { <br />
				&nbsp;&nbsp;&nbsp;$parts = explode("_", $class); <br /><br />

				&nbsp;&nbsp;&nbsp;if(file_exists(_core . _sh . _classes . _sh . _class . _dot . strtolower($class) . _PHP)) { <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include _core . _sh . _classes . _sh . _class . _dot . strtolower($class) . _PHP; <br />					
				&nbsp;&nbsp;&nbsp;&nbsp;} <br />
				} <br /><br />
				
				$MyObject = new myClass(); <br /><br />
				
				//If the class "myClass" is not defined, __autoload includes it if exist from the class directory of the core's Framework. <br />
				//include(core/classes/class.myclass.php);						
				
			</p>
	</article>		
