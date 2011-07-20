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
			<?php print __("HTML Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/html.forms.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper HTML contains functions to manipulate HTML elements with PHP"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("html");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">anchor()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: checkbox($text = NULL, $position = "Right", $name, $value, $ID = NULL, $checked = FALSE, $events = NULL, $disabled = "No"); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function sets a specific &lt;input /&gt; type Checkbox tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formCheckbox("Option 1", "Left", "option1", "1", "Op1", TRUE, 'onclick="'."alert('Option 1 selected');".'"', TRUE); <br /><br />
				
				//Prints: "Option 1 &lt;input id="Op1" name="option1" value="1" type="checkbox" onclick="alert('Option 1 selected');" checked="checked" /&gt; " .<br />						
			</p>
			
		<p class="SubTitle">formField()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: formField($a = NULL, $text, $raquo = TRUE); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets a &lt;p&gt; tag to label a field from a form"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formField(NULL, "Field Name", $raquo = TRUE); <br /><br />
				
				//Prints: &lt;p class="Field"&gt; &raquo; Field Name &lt;/p&gt; .<br />	
				//The parameter $raquo outputs the HTML Entity &amp;raquo; if it is set up as TRUE.					
			</p>
			
			<p class="Text">
				<?php print __("You can set an anchor to the Field Name"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print field("Top", "Field Name", $raquo = TRUE); <br /><br />
				
				//Prints: &lt;p class="Field"&gt; &lt;a name="Top"&gt; &raquo; Field Name &lt;/a&gt; &lt;/p&gt; .<br />						
			</p>
		
		<p class="SubTitle">formInput()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: formInput($p = "Yes", $text = NULL, $name = NULL, $value = NULL, $class = "Input", $type = "text", $ID = NULL, $events = NULL, $src = NULL, $raquo = "Yes") <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets a &lt;input /&gt; tag with a custom attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formInput("Yes", "Foo", "bar", NULL, "input", "text", NULL, NULL, NULL, TRUE); <br /><br />
				
				//Prints: <br />
				
				&lt;p class="Field"&gt; <br /> 
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;input id="bar" title="Foo" name="bar" type="text" class="input" /&gt; <br />
				&lt;/p&gt;<br /><br />


				//The parameter $raquo outputs the HTML Entity &amp;raquo; if it is set up as TRUE.					
			</p>
			
			<p class="Text">
				<?php print __("You can set any attribute to the &lt;input /&gt; tag, even its type"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formInput("Yes", "Foo", "bar", "1", "input", "image", "foo", 'onclick="'."alert('Option 1');".'"', "http://mydomain.com/images/icon.jpg", TRUE); <br /><br />
				
				//Prints: <br />
				
				&lt;p class="Field"&gt; <br />
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;input id="foo" title="Foo" name="bar" type="image" class="input" value="1" onclick="alert('Option 1 selected');" src="http://mydomain.com/images/icon.jpg" /&gt; <br />
				&lt;/p&gt; <br /> <br />
			
				//The parameter $raquo outputs the HTML Entity &amp;raquo; if it is set up as TRUE.					
			</p>
			
		<p class="SubTitle">formLabel()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: label(string $for, string $text, boolean $br = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets a simple &lt;label&gt; tag and its -for- attribute"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formLabel("foo", "Bar", TRUE); <br /><br />
				
				//Prints: &lt;label for="foo"&gt;Bar: &lt;/label&gt;<br />						
			</p>
		
		<p class="SubTitle">formRadio()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: radio(string $text = NULL, string $position = "Right", string $name, string $value, string $ID = NULL, boolean $checked = FALSE, string $events = NULL, boolean $disabled = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets an &lt;input /&gt; type Radio tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formRadio("Foo", "Right", "foo", "bar", "myID", FALSE, NULL, FALSE) <br /><br />
				
				//Prints:  &lt;input type="radio" value="bar" name="foo" title="foo" id="myID"&gt; Foo <br />						
			</p>
		
		<p class="SubTitle">formSelect()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: formSelect(boolean $p = TRUE, string $text, string $name, mixed $options, string $class = "Select", string $selected = NULL, string $ID = NULL, string $size = "1", boolean $raquo = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets a &lt;select&gt; tag, its attributes and its &lt;option&gt; tags"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
			
				// You can set &lt;option&gt; tags (for passing to $options parameter) this way: <br />
				$options[0]["option"]   = "Foo"; <br />
				$options[0]["selected"] = TRUE;  <br />
				$options[0]["value"]    = 1;     <br /> <br />
				
				//Additional you can set the "onclick" event setting $options[0]["onClick"] <br /> <br />
				
				//Here is another way: <br />
				$options[1] = array("option" => "Bar", "selected" => FALSE, "value" => 2); <br /> <br />
					
				print formSelect(TRUE, "Foo", "bar", $options, "Select", NULL, NULL, "1", TRUE); <br /> <br />					
				
				//Prints: <br />
				//Note: If you don't set the ID @param into the formSelect(), the id attribute is set as $name @param <br />
				&lt;p class="Field"&gt; <br />
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;select id="bar" title="bar" name="bar" size="1" class="select"&gt; <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="1" selected="selected">Foo&lt;/option&gt; <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="2">Bar&lt;/option&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;/select&gt;<br />
				&lt;/p&gt;

			</p>
			
			<p class="Text">
				<?php print __("You can set a single &lt;option&gt; tag with the attribute -selected- and pass it into the &lt;select&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
			
				$option = '&lt;option value="1" selected="selected"&gt;Unique Option&lt;/option&gt;'; <br /> <br />
				print formSelect(TRUE, "Foo", "bar", NULL, "Select", $option, NULL, "1", TRUE);		  <br /> <br />
				
				//Prints: <br />
				
				&lt;p class="Field"&gt; <br />
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;select id="bar" title="bar" name="bar" size="1" class="Select"&gt; <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="1" selected="selected">Unique Option&lt;/option&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;/select&gt;<br />
				&lt;/p&gt;

			</p>		
				
		<p class="SubTitle">formTextarea()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: formTextarea(boolean $p = TRUE, string $text, string $name, string $value = NULL, string $class = "Textarea", string $ID = NULL, int $rows = 25, int $cols = 90, boolean $raquo = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("This function sets a &lt;textarea&gt; tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				print formTextarea(TRUE, "Foo", "bar", "Default Text", "textarea", "unique-id", 25, 90, TRUE); <br /> <br />
				
				&lt;p class="Field"&gt; <br />
				&nbsp;&nbsp;&nbsp;&raquo; Foo &lt;br /&gt;<br />		
				&nbsp;&nbsp;&nbsp;&lt;textarea id="unique-id" title="bar" name="bar" rows="25" cols="90" class="Textarea"&gt; Default Text &lt;/textarea&gt; <br />
				&lt;/p&gt;

			</p>
		
		<p class="SubTitle">formOpen() and formClose()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: formOpen(string $ID = NULL, string $text = NULL, string $action, string $class = "Forms", string $method = "post", string $enctype = "multipart/form-data") <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="Text">
				<?php print __("These functions Set a Basic Form Structure"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
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
