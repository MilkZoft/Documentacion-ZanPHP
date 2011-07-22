<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="../index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo;
	<?php print __("Welcome"); ?>
</div>

<div class="Clear"></div>

	<article>
		<p class="title">
			<?php print __("Controllers"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("The controllers are very important in ZanPHP they are indispensable for the use of MVC. It is important that each application must have a controller, a model and the views can vary"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("However, this section will analyze the structure that a controller must have for proper operation"); ?>:
        </p>
        
        
        <p class="Code">
			class MyApplication_Controller extends ZP_Load { <br /><br />
				
				&nbsp;&nbsp;&nbsp;&nbsp;public function __construct() { <br />
									 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->Templates   = $this->core("Templates");<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->MyApplication_Model = $this->model("MyApplication_Model");<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$helpers = array("router", "security", "sessions", "time"); <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->helper($helpers); <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->application = "MyApplicationName";<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->Templates->theme(_webTheme);<br />
				&nbsp;&nbsp;&nbsp;&nbsp;} <br /><br />
				
				&nbsp;&nbsp;&nbsp;&nbsp;public function run() { <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->someFunction();<br />
				&nbsp;&nbsp;&nbsp;&nbsp;} <br /><br />
			} <br />
		</p>
		
		<p class="text">
        	<?php print __("This is the basic structure that any controller should have and fulfill for the proper functioning of the framework"); ?>.
        </p>
	</article>
