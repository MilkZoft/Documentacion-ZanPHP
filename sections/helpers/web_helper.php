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
	<?php print __("Web Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Web Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.web.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Web contains Web functions related"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("web");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">getMetatags()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getMetatags(string $type = "Web", string $title = NULL, string $description = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Gets and prints default meta tags"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				getMetatags("Web", "Foo", "Bar");<br /> <br />
				//Prints:<br />
				&lt;meta http-equiv="content-type" content="text/html; charset=utf-8" /&gt;<br />
				&lt;meta name="title" content="Foo" /&gt;<br />
				&lt;meta name="author" content="MilkZoft" /&gt;<br />
				&lt;meta name="description" content="Bar" /&gt;<br /><br />
		
				//Assuming _webLanguage is set<br />
				&lt;meta name="language" content="es" /&gt;<br /><br />
			
				&lt;meta name="revisit" content="1 day" /&gt;<br />
				&lt;meta name="distribution" content="global" /&gt;<br />
				&lt;meta name="robots" content="All" /&gt;
			</p>
		
		
		<p class="sub-title">getFavicon()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getFavicon($type = "Web", $theme = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Gets and prints default meta tags"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$type  = "Web";<br />
				$theme = "my_theme";<br /><br />
				
				getFavicon($type, $theme);<br /> <br />
				
				
				//Note: the path to the theme is set this way: _webURL . _sh . _lib . _sh . _themes  . _sh . $theme . _sh;<br /><br />
				
				//Prints:<br />
				&lt;link rev="shortcut icon" rel="shortcut icon" href="mydomain/lib/themes/my_theme/Icon.ico" /&gt;
	
			</p>
		
		<p class="sub-title">compressScript()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: compressScript(string $script) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Compresses a Script file"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
		
				//file.html content: <br /><br />
				&lt;html&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title> My Title&lt;/title&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&gt;Hello World&lt;/a&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />
				&lt;/html&gt;<br /><br />
				
			
				$script = path/to/file.html;<br />
				compressScript($script);<br /><br />
				
				//Prints: <br />
				
				&lt;html&gt;&lt;head&gt;&lt;title&gt;My Title&lt;/title&gt;&lt;/head&gt;&lt;body&gt;&lt;a&gt;Hello World&lt;/a&gt;&lt;/body&gt;&lt;/html&gt;
			</p>
		
	</article>		
