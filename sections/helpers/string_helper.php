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
		<p class="title">
			<?php print __("String Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/string.security.php
			</p>
			
			<p class="text">
				<?php print __("The Helper String contains functions to deal with Text and Strings"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("string");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">cleanHTML()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: cleanHTML(string $HTML) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
	
			<p class="text"> 
				<?php print __("This function cleans HTML from a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "&lt;p&gt;&lt;strong&gt;Lorem&lt;/strong&gt; ipsum&lt;/p&gt;"; <br />
				print cleanHTML($text); <br /> <br />
				//Prints: Lorem ipsum
			</p>
			
		<p class="sub-title">removeSpaces()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: removeSpaces(string $text, bool $trim = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function removes blank spaces from a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Lorem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ipsum";<br />
				//Gets: "Lorem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ipsum";<br /><br />
				removeSpaces($text, FALSE);<br />
				//Gets: "Lorem ipsum";
			</p>
			
		<p class="sub-title">compress()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: compress(string $string) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function compress a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
			
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
		
		<p class="sub-title">POST(), GET()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: POST/GET(string $position, string $coding = "decode") <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function gets data from \$_POST or \$_GET"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				if(POST("foo") !== FALSE) print POST("foo", "encode"); <br />
				
				//Prints: "bar" <br />
				//Assuming the user Posted foo = bar ($_POST["foo"] = "bar")<br /> <br />
				
				
				if(GET("lorem") !== FALSE) print GET("lorem", "encode"); <br />
				
				//Prints: "ipsum" <br />
				//Assuming the user entered http://example.com/?lorem=ipsum 
			
			</p>
			
		<p class="sub-title">FILES()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: FILES(string $name = FALSE, string $position = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __('This function returns a specific position value from $_FILES'); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				FILES("download", "name"); <br />
				//Assuming "image" is set and it is a file.<br />
				Array { <br />
				&nbsp;&nbsp;&nbsp;[name] => MyFile.jpg<br />
				}
	
			</p>
			
			
		<p class="sub-title">recoverPOST()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: recoverPOST(string $position, string $value = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function recovers data from \$_POST"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				recoverPOST("foo");<br /><br />
				
				//Prints: "bar" <br />
				//Assuming the user Posted foo = bar ($_POST["foo"] = "bar") <br /> <br /><br />
				
				recoverPOST("foo", "lorem");<br /><br />
				
				//Prints: "lorem" <br />
				//Assuming the "foo" position is not define in $_POST<br />
			
			</p>
		
		<p class="sub-title">getFileSize()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getFileSize(int $size) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function help you work with numeric data"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print getFileSize(1000000);<br />
				//Prints: 976.56 Kb <br /><br />
				
				print getFileSize(53927400);<br />
				//Prints: 51.43 Mb <br />
			</p>
		
		<p class="sub-title">filter()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: filter(string $text, bool $cleanHTML = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function cleans a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				$text = "&lt;scrip&gt; alert('Message'); &lt;/scrip&gt;"; <br />
				print filter($text, TRUE);<br /><br />
				//Prints: alert(Message); 
				
					
			</p>
		
		<p class="sub-title">encode()</p> <!--Not yet-->

			<p class="parameters">
				<?php print __("Parameters"); ?>: encode(string $text, bool $URL = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function encodes a URL and/or a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = decode("áéíóú"); <br />
				print encode($text, FALSE);<br />
				//Prints: áéíóú			
			</p>
		
		<p class="sub-title">decode()</p> <!--Not yet-->

			<p class="parameters">
				<?php print __("Parameters"); ?>: decode(string $text, bool $URL = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function decodes a URL and/or a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = decode("áéíóú"); <br />
				print encode($text, FALSE);<br />
				//Prints: áéíóú			
			</p>
		
		<p class="sub-title">nice()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: nice(string $title) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("This function returns the nice form of a String"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit"; <br />
				print nice($text);<br /> <br />
				//Prints: "lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit"
			</p>
	</article>		
