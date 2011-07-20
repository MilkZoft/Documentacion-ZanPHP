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
	<?php print __("Templates Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Templates Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.templates.php
			</p>
			
			<p class="text">
				<?php print __("This class allows to control design templates"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>.
			</p>
			
			<p class="code">
				$this->core("Templates");
			</p>
		
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Templates</li>
					</ul>
				</ul>
			</div>
				
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$theme = NULL</span> <br />
				<?php print __("Contains the name of the current theme"); ?>
			</p>
		
			<p class="code">
				@var public <span style="color: #F00">$themePath</span> <br />
				<?php print __("Contains the theme's path"); ?>
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$vars = array()</span> <br />
				<?php print __("Contains the array of vars"); ?>
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$title</span> <br />
				<?php print __("Contains the the header's template title"); ?>
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$CSS</span> <br />
				<?php print __("Contains the CSS's file from an specific application"); ?>
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$js</span> <br />
				<?php print __("Contains the JavaScript's file from an specific application"); ?>
			</p>		
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Load Class <?php print __("has not Public Attributes"); ?>. 
			</p>
			<!-- End Public Attributes -->			
			
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
			
			<p class="code">
				ZP_Load Class <?php print __("has not Private Methods"); ?>. 
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Methods -->
			<p class="text">
				<?php print __("Public Methods"); ?>:
			</p>				
		
		<p class="sub-title">__construct()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads helpers: array, browser, debugging, forms, html and web"); ?>.
			</p>	

		<p class="sub-title">theme()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: theme(string $theme) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets the current theme"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				$this->Templates->theme = _webTheme;
				//This statement sets the default theme <br />
			</p>
					
		<p class="sub-title">vars()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: vars(array $vars) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets vars"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				//Assuming $data is a SQL query and there is records on it  <br />
				$this->Templates->vars["data"] = $data; 					<br /> <br />
			</p>	
			
		
		<p class="sub-title">getCSS()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets the CSS. It must be included into the header's file from the theme current theme"); ?>. <?php print __("Example"); ?>:
			</p>
		
		
		<p class="sub-title">CSS()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: CSS(string $CSS = NULL, string $application = NULL, bool $print = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets and loads a CSS's file"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				//This includes a CSS file in the header of the view  <br />
				$this->Templates->CSS("my_css_file", "my_application", FALSE) <br /> <br />
			</p>	
		
		
		<p class="sub-title">themeCSS()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: themeCSS(string $theme = _webTheme) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets the theme's main CSS file"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
			
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				//Assuming _webTheme Constant exist and it is set  <br />
				$this->Templates->themeCSS(); <br /> <br />
				
				//The statement above loads: lib/themes/my_theme/css/style.css, but, if the <br />
				//user's browser is detected as a IE version, it loads:  lib/themes/my_theme/css/ie.style.css
			</p>			
			
			
		<p class="sub-title">getJs()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets Javascript files. It must be included into the footer file from the theme current theme"); ?>.
			</p>	
			
		
		<p class="sub-title">js()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: js(string $js, string $application = NULL, string $extra = NULL, bool $getJs = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets and loads a js's file"); ?>.
			</p>	
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); <br /><br />

				//This includes a JS file in the footer of the view <br />
				$this->Templates->js("my_js_file", "my_application", NULL, TRUE) 
			</p>
		
		<p class="sub-title">getTitle()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets header's title"); ?>.
			</p>
				
		<p class="sub-title">title()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: title(string $title) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a hook or multiple hooks files"); ?>.
			</p>
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); <br /><br />

				//This includes a JS file in the footer of the view <br />
				$this->Templates->title("my_title"); 
			</p>
		
		
		<p class="sub-title">title()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: title(string $title) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a hook or multiple hooks files"); ?>.
			</p>
			
			<p class="code">
				//Instancing the Template Class <br />
				$this->Templates = $this->core("Templates"); <br /><br />

				//This includes a JS file in the footer of the view <br />
				$this->Templates->title("my_title"); 
			</p>

			<!-- End Public Methods -->			
	</article>		
