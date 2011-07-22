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
			<?php print __("HTML Helper"); ?><br />
		</p>
		
			<p class="small">
				core/helpers/html.forms.php
			</p>
			
			<p class="text">
				<?php print __("The Helper HTML contains functions to manipulate HTML elements with PHP"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Helper"); ?></p>
		
			<p class="text">
				<?php print __("This helper is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->helper("html");
			</p>
			
			<p class="text">
				<?php print __("The following functions are available"); ?>:
			</p>				
		
		<p class="sub-title">anchor()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: anchor(string $text, string $URL = NULL, bool $external = FALSE, array $attributes = array()) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text"> 
				<?php print __("Sets a &lt;a&gt; tag and its attributes"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				$text = "Link"; <br />
				$URL = "http://www.example.com"; <br />
				$attributes = array("id" => "foo", "class" => "bar"); ; <br /><br />
				
				print anchor($text, $URL, FALSE, $attributes); <br /><br />
				
				//Prints: &lt;a href="http://www.example.com" id="foo" class="bar"&gt; Link &lt;/a&gt;<br />						
			</p>
			
		<p class="sub-title">body()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: body(bool $open = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;body&gt; opening/closing tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print body(TRUE); <br /><br />
					//Your HTML code here <br /> <br />
				print body(FALSE);<br /><br />
				
				//Prints: <br />
					&lt;body&gt;<br />
						//Your HTML code here <br />
					&lt;/body&gt; <br />
				//The parameter $raquo outputs the HTML Entity &amp;raquo; if it is set up as TRUE.					
			</p>
				
		<p class="sub-title">bold()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: bold(string $text, bool $br) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;span&gt; tag with the CSS Bold property"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Bolded text"; <br />
				bold($text, TRUE); <br /><br />
				
				//Prints: <br />
				
				&lt;span class="bold"&gt; Bolded text &lt;/span&gt;
				
				&lt;br /&gt; <br />
				//Note that $br parameter outputs an &lt;br /&gt; tag.					
			</p>
					
		<p class="sub-title">br()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: br(integer $jumps = 1) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;br&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				
				print br(2); <br /><br />
				
				//Prints: <br />
				&lt;br / &gt; &lt;br / &gt;						
			</p>
		
		<p class="sub-title">char()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: char(string $char, integer $repeat = 1) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an UTF-8 character"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print char("#", 10); <br /><br />
				
				//Prints:  ##########						
			</p>
		
		<p class="sub-title">div()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: div(string $ID, string $type = "id", string $style = NULL, string $content = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;div&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print div("foo", "id"); <br />
					//You HTML code here
				print div(FALSE); <br /><br />
				
				//Prints: <br />
				//Note: If you set the $ID parameter as TRUE, a div tag is opened, but not closed <br />
				&lt;div id="foo"&gt; <br />
					//You HTML code here <br />
				&lt;/div&gt; <br />
				
			</p>
					
		<p class="sub-title">docType()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: docType($type = "XHTML 1.0 Strict") <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;!DOCTYPE&gt; declaration"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print docType(); <br />
				//Prints: &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xHTML1/DTD/xHTML1-strict.dtd"&gt; <br /><br />
				
				
				print docType("HTML 5"); <br />
				//Prints: &lt;!DOCTYPE html&gt; <br /> <br />
			</p>
		
		<p class="sub-title">getHTMLDecode()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getHTMLDecode(string $HTML)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Converts all HTML entities to its respective characteres from a string"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$rawText = getHTMLDecode("I'll \"walk\" the &lt;b&gt;dog&lt;/b&gt; now"); <br /><br />
				
				print $rawText;<br />
				//Prints: I'll &amp;quot;walk&amp;quot; the &amp;lt;b&gt;dog&amp;lt;/b&amp;gt; now
				
			</p>					
		
		<p class="sub-title">h1()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: h1(string $text)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;h1&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print h1("My Header Text");<br />
				//Prints: &lt;h1&gt; My Header Text &lt;/h1&gt;
			</p>
		
		<p class="sub-title">h2()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: h1(string $text)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;h2&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print h2("Foo");<br />
				//Prints: &lt;h2&gt; My Header Text &lt;/h2&gt;
			</p>
		
		<p class="sub-title">h3()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: h1(string $text)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;h3&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				print h3("Bar");<br />
				//Prints: &lt;h3&gt; My Header Text &lt;/h3&gt;
			</p>
		
		<p class="sub-title">img()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: img(string $src, string $alt = NULL, string $class = "no-border", array $attributes = NULL)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;img /&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$src = "http://www.example.com/foo.jpg";<br />
				$alt = "Lorem Ipsum";<br /><br />
					
				print img($src, $alt, "no-border", NULL);<br /> <br />
				
				//Prints: &lt;img src="http://www.example.com/foo.jpg" alt="Lorem Ipsum" class="no-border" /&gt;
			</p>
		
		<p class="sub-title">head()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: head(bool $open = TRUE)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;head&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">	
				print head(TRUE); <br />
					print "Foo"; <br />
				print head(FALSE); <br /><br />
				
				//Prints: <br />
				&lt;head&gt; Foo &lt;/head&gt;
			</p>
		
		<p class="sub-title">HTML()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: HTML(bool $open = TRUE)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;HTML&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">	
				print HTML(TRUE); <br />
					//Your HTML code here <br />
				print head(FALSE); <br /><br />
				
				//Prints: <br />
				&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="'._webLang.'" xml:lang="'._webLang.'"&gt;<br />
				//Your HTML code here <br />
				&lt;/html&gt;
			</p>
		
		
		<p class="sub-title">p()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: p(string $text, string $class = "left")<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;p&gt; tag and its class attribute"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Foo"; <br />
				print p($text); <br />
					
				//Prints: <br />
				&lt;p class="left"&gt; <br />
				&nbsp;&nbsp;&nbsp;Foo <br />
				&lt;/p&gt;
			</p>
		
		<p class="sub-title">small()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: small(string $text)<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;small&gt; tag"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Foo"; <br />
				print small($text); <br />
					
				//Prints: <br />
				&lt;small class="left"&gt; <br />
				&nbsp;&nbsp;&nbsp;Foo <br />
				&lt;/small&gt;
			</p>
		
		
		<p class="sub-title">span()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: span(string $text, string $class = "left")<br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;span&gt; tag and its class attribute"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$text = "Foo"; <br />
				print span($text); <br />
					
				//Prints: <br />
				&lt;span class="left"&gt; <br />
				&nbsp;&nbsp;&nbsp;Foo <br />
				&lt;/span&gt;
			</p>
		
		<p class="sub-title">openUl()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: openUl(string $ID = NULL, string $class = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets an &lt;span&gt; tag and its class attribute"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">
				$ID    = "foo"; <br />
				$class = "bar"; <br />
				print openUl($ID, $class); <br /><br />
					
				//Prints: <br />
				&lt;ul id="foo" class="bar"&gt; <br />
			
			</p>
		
		<p class="sub-title">li()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: li(string $list) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;li&gt; tag item"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="text">
				<?php print __("You can include a unidimensional array into the -list- parameter, and load item, without their attributes"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				$list[0]  = "foo"; <br />
				$list[1]  = "bar"; <br />
				$list[2]  = "baz"; <br /><br />
				
				print openUl(); <br />
				&nbsp;&nbsp;&nbsp;print li($list); <br />
				print closeUl(); <br /><br />
				
				//Prints: <br />
				
				&lt;ul&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; foo &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; bar &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; baz &lt;/li&gt; <br />
				&lt;/ul&gt; <br />
			</p>
			
			<p class="text">
				<?php print __("In the other hand, you can set multiple items, and their attributes"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">				
				$list[0]["item"]  = "foo"; <br />
				$list[0]["class"] = "lorem"; <br /><br />
				
				$list[1]["item"]  = "bar"; <br />
				$list[1]["class"] = "ipsum"; <br /><br />
				
				print openUl(); <br />
				&nbsp;&nbsp;&nbsp;print li($list); <br />
				print closeUl(); <br /><br />
				
				//Prints: <br />
				
				&lt;ul&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li class="lorem"&gt; foo &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li class="ipsum"&gt; bar &lt;/li&gt; <br />
				&lt;/ul&gt; <br />
			</p>
		
		<p class="sub-title">closeUl()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;/li&gt; closing tag item"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="code">			
				$list[0]  = "foo"; <br />
				$list[1]  = "bar"; <br />
				$list[2]  = "baz"; <br /><br />
				
				print openUl(); <br />
				&nbsp;&nbsp;&nbsp;print li($list); <br />
				print closeUl(); <br /><br />
				
				//Prints: <br />
				
				&lt;ul&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; foo &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; bar &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li&gt; baz &lt;/li&gt; <br />
				&lt;/ul&gt; <br />
			
			</p>
		
		<p class="sub-title">ul()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: ul(string $list, string $ID = NULL, string $class = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
			
			<p class="text">
				<?php print __("Sets a &lt;ul&gt; block tag and its &lt;li&gt; tag items"); ?>. <?php print __("Example"); ?>:
			</p>	
			
			<p class="text">
				<?php print __("You can include a unidimensional array into the -list- parameter, and load item, without their attributes"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				
				$list[0]["item"]  = "foo"; <br />
				$list[0]["class"]  = "bar"; <br /><br />
				
				$list[1]["item"]  = "baz"; <br />
				$list[1]["class"]  = "ban"; <br /><br />

				$class = "lorem";<br />
				$id    = "ipsum";<br /><br />
				
				print ul($list, $ID, $class); <br /><br />
				
				//Prints:<br />
				&lt;ul&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li class="bar"&gt; foo &lt;/li&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;li class="ban"&gt; baz &lt;/li&gt; <br />
				&lt;/ul&gt; <br />
			</p>
	</article>		
