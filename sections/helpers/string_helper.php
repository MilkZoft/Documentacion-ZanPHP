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
	<?php print __("String Helper"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="Title">
			<?php print __("String Helper"); ?><br />
		</p>
		
			<p class="Small">
				core/helpers/string.security.php
			</p>
			
			<p class="Text">
				<?php print __("The Helper String contains functions to deal with Text and Strings"); ?>.
			</p>
		
		<p class="SubTitle"><?php print __("Loading this Helper"); ?></p>
		
			<p class="Text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="Code">
				$this->helper("string");
			</p>
			
			<p class="Text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="SubTitle">cleanHTML()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: cleanHTML(string $HTML) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function cleans HTML from a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$text = "&lt;p&gt;&lt;strong&gt;Lorem&lt;/strong&gt; ipsum&lt;/p&gt;"; <br />
				print cleanHTML($text); <br /> <br />
				//Prints: Lorem ipsum
			</p>
			
		<p class="SubTitle">removeSpaces()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: removeSpaces(string $text, bool $trim = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function removes blank spaces from a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$text = "Lorem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ipsum";<br />
				//Gets: "Lorem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ipsum";<br /><br />
				removeSpaces($text, FALSE);<br />
				//Gets: "Lorem ipsum";
			</p>
			
		<p class="SubTitle">compress()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: compress(string $string) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function compress a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
			
				$HTML = " <br />
						&lt;html&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Foo&lt;/title&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />
							
						&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href='#'&gt; bar &lt;/a&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />
						&lt;/html&gt;<br />
					";<br /><br />
					
					print $HTML;<br />
					//Prints: <br />
						&lt;html&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Foo&lt;/title&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />
							
						&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href='#'&gt; bar &lt;/a&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />
						&lt;/html&gt;<br /><br />
					print compress($HTML);<br />
					//Prints: &lt;html&gt; &lt;head&gt; &lt;title&gt;Foo&lt;/title&gt; &lt;/head&gt; &lt;body&gt; &lt;p&gt; &lt;a href='#'&gt; bar &lt;/a&gt; &lt;/p&gt; &lt;/body&gt; &lt;/html&gt;
					
			</p>
		
		<p class="SubTitle">POST(), GET()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: POST/GET(string $position, string $coding = "decode") <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function gets data from \$_POST or \$_GET"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				if(POST("foo") !== FALSE) print POST("foo", "encode"); <br />
				
				//Prints: "bar" <br />
				//Assuming the user Posted foo = bar ($_POST["foo"] = "bar")<br /> <br />
				
				
				if(GET("lorem") !== FALSE) print GET("lorem", "encode"); <br />
				
				//Prints: "ipsum" <br />
				//Assuming the user entered http://example.com/?lorem=ipsum 
			
			</p>
			
		<p class="SubTitle">FILES()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: FILES(string $name = FALSE, string $position = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __('This function returns a specific position value from $_FILES'); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				FILES("download", "name"); <br />
				//Assuming "image" is set and it is a file.<br />
				Array { <br />
				&nbsp;&nbsp;&nbsp;[name] => MyFile.jpg<br />
				}
	
			</p>
			
			
		<p class="SubTitle">recoverPOST()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: recoverPOST(string $position, string $value = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function recovers data from \$_POST"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				recoverPOST("foo");<br /><br />
				
				//Prints: "bar" <br />
				//Assuming the user Posted foo = bar ($_POST["foo"] = "bar") <br /> <br /><br />
				
				recoverPOST("foo", "lorem");<br /><br />
				
				//Prints: "lorem" <br />
				//Assuming the "foo" position is not define in $_POST<br />
			
			</p>
		
		<p class="SubTitle">getFileSize()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: getFileSize(int $size) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function help you work with numeric data"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				print getFileSize(1000000);<br />
				//Prints: 976.56 Kb <br /><br />
				
				print getFileSize(53927400);<br />
				//Prints: 51.43 Mb <br />
			</p>
		
		<p class="SubTitle">filter()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: filter(string $text, bool $cleanHTML = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function cleans a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				
				$text = "&lt;scrip&gt; alert('Message'); &lt;/scrip&gt;"; <br />
				print filter($text, TRUE);<br /><br />
				//Prints: alert(Message); 
				
					
			</p>
		
		<p class="SubTitle">encode()</p> <!--Not yet-->

			<p class="Parameters">
				<?php print __("Parameters"); ?>: encode(string $text, bool $URL = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function encodes a URL and/or a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$text = decode("áéíóú"); <br />
				print encode($text, FALSE);<br />
				//Prints: áéíóú			
			</p>
		
		<p class="SubTitle">decode()</p> <!--Not yet-->

			<p class="Parameters">
				<?php print __("Parameters"); ?>: encode(string $text, bool $URL = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function encodes a URL and/or a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$text = decode("áéíóú"); <br />
				print encode($text, FALSE);<br />
				//Prints: áéíóú			
			</p>
		
		<p class="SubTitle">nice()</p>

			<p class="Parameters">
				<?php print __("Parameters"); ?>: nice(string $title) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="Text"> 
				<?php print __("This function returns the nice form of a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="Code">
				$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit"; <br />
				print nice($text);<br /> <br />
				//Prints: "lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit"
			</p>
	</article>		
