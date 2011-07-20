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
				//This statement loads a CSS file from a specific application directory <br />
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
				//This statement loads a CSS file from a specific application directory <br />
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
				//This statement loads a CSS file from a specific application directory <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				//This includes a CSS file in the header of the view  <br />
				$this->Templates->CSS("my_css_file.css", "my_application", FALSE) <br /> <br />
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
			
				//This statement loads a CSS file from a specific application directory <br />
				$this->Templates = $this->core("Templates"); 					<br /> <br />
				
				//Assuming _webTheme Constant exist and it is set  <br />
				$this->Templates->themeCSS(); <br /> <br />
				
				//The statement above loads: lib/themes/my_theme/css/style.css, but, if the <br />
				//user's browser is detected as a IE version, it loads:  lib/themes/my_theme/css/ie.style.css
			</p>			
			
			
		<p class="sub-title">footer()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a footer template"); ?>.
			</p>	
			
		
		<p class="sub-title">header()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a header template"); ?>.
			</p>	
		
		
		<p class="sub-title">helper()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: helper(string $helper, string $application = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a helper or multiple helper files"); ?>.
			</p>
			
			<p class="code">
			
				//Loads "helper.my_helper.php" from the core directory: core/helpers directory <br />
				$this->helper("my_helper"); <br /> <br />
				
				//Loads "helper.my_helper.php" from a specific application directory: applications/my_application/helpers directory <br />
				$this->helper("my_helper", "my_application"); <br /> <br />
				
				//They can be loaded many helpers using an array of helpers <br />
				$helpers = array("my_helper", "other_helper");
				$this->helper($helpers);
		
			</p>
		
		
		<p class="sub-title">hook()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: hook(string $helper, string $application = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a hook or multiple hooks files"); ?>.
			</p>
			
			<p class="code">
			
				//Loads "hook.my_hook.php" from the core directory: core/hooks directory <br />
				$this->hook("my_hook"); <br /> <br />
				
				//Loads "hook.my_hook.php" from a specific application directory: applications/my_application/hooks directory <br />
				$this->hook("my_hook", "my_application"); <br /> <br />
				
				//They can be loaded many hooks using an array of hooks <br />
				$hooks = array("my_hook", "other_hook");
				$this->hook($hooks);
		
			</p>
			
				
		<p class="sub-title">js()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: js(string $script, string $application = NULL, string $extra = NULL, bool $getJS = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets a JS file from an specific application. It works as an Interface for the js method from the Templates class"); ?>. <?php print __("Example"); ?>.
			</p>
			
			<p class="code">
				$this->js("my_script", "my_app", NULL, FALSE)
			</p>
		
		
		<p class="sub-title">language()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: js(string $language) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a language file and sets the translations"); ?>.
			</p>
			
			<p class="code">
				$this->language("Spanish");
			</p>
		
		
		
		<p class="sub-title">left()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a left template"); ?>.
			</p>
		
		
		<p class="sub-title">library()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: library(string $name, string $library = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a library"); ?>.
			</p>
			
			<p class="code">
				$this->library("My_Lib_File", "My_Lib");
			</p>
		
		
		<p class="sub-title">model()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: model(string $name) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a model"); ?>.
			</p>
			
			<p class="code">
				//Loads model.application.php from applications/application/ directory. <br />
				$this->model("Application_Model");
			</p>
		
		
		<p class="sub-title">render()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Renders and outputs templates"); ?>.
			</p>
		
		
		<p class="sub-title">right()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a right template"); ?>.
			</p>
		
		
		<p class="sub-title">templates()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: template(string $name, string $vars = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads templates"); ?>.
			</p>
		
		
		
		<p class="sub-title">theme()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: theme(string $theme) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a theme. It works as an Interface for the theme method from the Templates class"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//This statement sets a default theme <br />
				$this->theme(_webTheme);

			</p>
		
		
		<p class="sub-title">title()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: title(string $title = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a document title. It works as an Interface for the title method from the Templates class"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//This statement sets a default theme <br />
				$this->title(__("My_Title"));

			</p>
		
		
		<p class="sub-title">view()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: view(string $name, string $application = NULL, string $vars = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Loads a view"); ?>:
			</p>
			
			<p class="code">
				//This statement loads view.archive.php from applications/application/views/ directory  <br />
				$this->view("archive", "application", $vars);

			</p>
	
	
			<!-- End Public Methods -->			
	</article>		
