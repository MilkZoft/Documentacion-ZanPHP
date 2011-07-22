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
			<?php print __("Models"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("Models are a fundamental part of an application, since they are in charge of interacting with the database, model, classify and to organize data"); ?>.
		</p>
        
        <p class="text">
        	<?php print __("Like the controllers, models have a basic structure that must be met to work correctly with ZanPHP"); ?>:
        </p>
        
        
        <p class="code">
			class MyApplication_Model extends ZP_Load { <br /><br />
	
			&nbsp;&nbsp;&nbsp;&nbsp;public function __construct() { <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->Db = $this->core("Db"); <br />	
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->helper(array("time", "alerts", "router")); <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->table = "mytable"; <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->primaryKey = $this->Db->table($this->table); <br />
			&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />
			} <br />
		</p>
		
		<p class="text">
        	<?php print __("This is the basic structure that any controller should have and fulfill for the proper functioning of the framework"); ?>.
        </p>
	</article>
