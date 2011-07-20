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
	<?php print __("Load Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Load Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.load.php
			</p>
			
			<p class="text">
				<?php print __("This class allows to load models, views, controllers, classes, libraries, helpers as well as interact directly with templates"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded in the load.php file include in the core directory"); ?>.
			</p>
		
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
				</ul>
			</div>
				
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$views = array() </span> <br />
				<?php print __("Contains the array of view"); ?>.
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$Templates</span> <br />
				<?php print __("Contains a Templates Object"); ?>
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
				<?php print __("Loads the autoload helper, the database config file and a Templates Object"); ?>.
			</p>	

		<p class="sub-title">CSS()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: CSS(string $CSS = NULL, string $application = NULL, bool $print = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a CSS file from an specific application. It works as an Interface for the CSS method from the Templates class"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//This statement loads a CSS file from a specific application directory <br />
				$this->CSS("my_css_file.css", "my_application", TRUE); 					<br />
				// Loads applications/my_application/my_css_file.css					<br /> <br />
				
				//This statement loads a CSS file from the main CSS directory <br />
				$this->CSS("slides", NULL, TRUE);										<br />
				//Loads lib/css/slides.css
			</p>
					
		<p class="sub-title">classes()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: classes(string $class = NULL, string $application = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads an specific application class from the applications/ directory"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//This statement loads /applications/my_app/classes/class.my_class.php <br />
				$this->classes("my_class", "my_app");										<br />
				//The class must be within the "classes" directory inside the specific application directory 
			</p>	
			
		
		<p class="sub-title">config()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: config(string $name, bool $application = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a configuration file"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
			
				//Loads a configuration file from core/config directory <br />
				$this->config("my_config_file", FALSE); <br /> <br />
				
				//Loads a configuration file from applications/my_app/ <br />
				$this->config("my_app", TRUE); <br />
				
			</p>
		
		
		<p class="sub-title">controller()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: controller(string $name) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a controller"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
			
				//Loads "controller.myapp.php" from the application directory: applications/application directory <br />
				$this->controller("Controller_MyApp");

			</p>	
		
		
		<p class="sub-title">core()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: core(string $class) <br />
				<?php print __("Return"); ?>:  <?php print __("@object"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Loads a core class"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
			
				//Loads "class.templates.php" from the core directory: core/ directory <br />
				$this->core("Templates");

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
