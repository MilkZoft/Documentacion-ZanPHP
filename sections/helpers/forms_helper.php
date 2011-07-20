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
			<?php print __("Forms Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/helper.forms.php
			</p>
			
			<p class="text">
				<?php print __("The Helper Forms contains functions to manipulate HTML form elements with PHP"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("forms");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">formCheckbox()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: checkbox(array $attributes = FALSE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function sets a specific &lt;input /&gt; type Checkbox tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$attributes = array("id" => "Op1", "name" => "option1", "value" => "1", "type" => "checkbox", "onclick" => "alert('Option 1 selected');", "checked" => "checked", "text" => "Option 1"); <br /> <br />
				
				print formCheckbox($attributes); <br /><br />
				
				//Prints: "Option 1 &lt;input id="Op1" name="option1" value="1" type="checkbox" onclick="alert('Option 1 selected');" checked="checked" /&gt; " .<br />						
			</p>
			
		<p class="sub-title">formField()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formField($a = NULL, $text, $raquo = TRUE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets a &lt;p&gt; tag to label a field from a form"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$attributes = array();
				print formField(NULL, "Field Name", $raquo = TRUE); <br /><br />
				
				//Prints: &lt;p class="Field"&gt; &raquo; Field Name &lt;/p&gt; .<br />	
				//The parameter $raquo outputs the HTML Entity &amp;raquo; if it is set up as TRUE.					
			</p>
			
			<p class="text">
				<?php print __("You can set an anchor to the Field Name"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print field("Top", "Field Name", $raquo = TRUE); <br /><br />
				
				//Prints: &lt;p class="Field"&gt; &lt;a name="Top"&gt; &raquo; Field Name &lt;/a&gt; &lt;/p&gt; .<br />						
			</p>
		
		<p class="sub-title">formInput()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formInput($p = "Yes", $text = NULL, $name = NULL, $value = NULL, $class = "Input", $type = "text", $ID = NULL, $events = NULL, $src = NULL, $raquo = "Yes") <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets a &lt;input /&gt; tag with a custom attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
				$attributes = array("onclick" => "alert('My Alert')", "name" => "Bar", "value" = "Lorem", "class" => "Input", "type" => "text", "id" => "my_ID"); <br /><br />
				
				print formInput($attributes); <br />			
				//Prints: &lt;input onclick="alert('My Alert')" name="Bar" value="Lorem" class="Input" type="text" id="my_ID" /&gt;
									
			</p>
	
		<p class="sub-title">formLabel()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: label(string $for, string $text, boolean $br = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets a simple &lt;label&gt; tag and its -for- attribute"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print formLabel("foo", "Bar", TRUE); <br /><br />
				
				//Prints: &lt;label for="foo"&gt;Bar: &lt;/label&gt;<br />						
			</p>
		
		<p class="sub-title">formRadio()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formRadio(array $attributes) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets an &lt;input /&gt; type Radio tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$attributes = array("text" => "Foo", "position" => "Right", "name" => "Bar", "value" => "1", "id" => "my-ID", "checked" => "checked"); <br /><br />
				
				print formRadio($attributes); <br /><br />
				
				
				//Prints: &lt;input name="Bar" value="1" id="my-ID" title="foo" id="myID" checked="checked" /&gt; Foo <br />						
			</p>
		
		<p class="sub-title">formSelect()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formSelect(array $attributes, array $options, bool $select = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets a &lt;select&gt; tag, its attributes and its &lt;option&gt; tags"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$attributes = array("name" => "bar", "class" => "select", "id" => "foo"); <br />
				$select     = TRUE;	<br /><br />
				 
				// You can set &lt;option&gt; tags (for passing to $options parameter) this way: <br />
				$options[0]["option"]   = "Foo"; <br />
				$options[0]["selected"] = TRUE;  <br />
				$options[0]["value"]    = 1;     <br /> <br />
					
				//Here is another way: <br />
				$options[1] = array("option" => "Bar", "selected" => FALSE, "value" => 2); <br /> <br />
					
				print formSelect($attributes, $options, $select); <br /> <br />					
				
				//Prints: <br />
				&lt;select id="foo" name="bar" class="select"&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;option value="1" selected="selected">Foo&lt;/option&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;option value="2">Bar&lt;/option&gt; <br />
				&lt;/select&gt;<br />
				

			</p>
				
		<p class="sub-title">formTextarea()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formTextarea(boolean $p = TRUE, string $text, string $name, string $value = NULL, string $class = "Textarea", string $ID = NULL, int $rows = 25, int $cols = 90, boolean $raquo = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("This function sets a &lt;textarea&gt; tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print formTextarea(TRUE, "Foo", "bar", "Default Text", "textarea", "unique-id", 25, 90, TRUE); <br /> <br />
				
				&lt;p class="Field"&gt; <br />
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt;<br />		
				&nbsp;&nbsp;&nbsp;&lt;textarea id="unique-id" title="bar" name="bar" rows="25" cols="90" class="Textarea"&gt; Default Text &lt;/textarea&gt; <br />
				&lt;/p&gt;

			</p>
		
		<p class="sub-title">formOpen() and formClose()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: formOpen(string $ID = NULL, string $text = NULL, string $action, string $class = "Forms", string $method = "post", string $enctype = "multipart/form-data") <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("These functions Set a Basic Form Structure"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print formOpen("foo", "Form", "bar.php", "Forms", "post", "multipart/form-data");<br />
				&nbsp;&nbsp;&nbsp;//Your form elements here<br />
				print formClose();<br /><br />

				//Prints: <br />
				&lt;form id="foo" action="bar.php" method="post" class="Forms" enctype="multipart/form-data"&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;fieldset&gt; <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;legend&gt;Form&lt;/legend&gt; <br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Your form elements here<br /><br />
				&nbsp;&nbsp;&nbsp;&lt;/fieldset&gt; <br />
				&lt;/form&gt;

			</p>					
					
	</article>		
