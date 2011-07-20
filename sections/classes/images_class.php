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
	<?php print __("Images Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Images Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.images.php
			</p>
			
			<p class="text">
				<?php print __("This class allows to manipulate images"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Images");
			</p>
			
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Images</li>
					</ul>
				</ul>
			</div>
			
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Files Class <?php print __("has not Private Attributes"); ?>
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$image</span> <br />
				
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$imageType</span> <br />
				
			</p>
			<!-- End Public Attributes -->
			
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
			
			<p class="code">
				ZP_Files <?php print __("has not Private Attributes"); ?>.
			</p>
			<!-- End Private Methods -->
			
			
			<!-- Begin Public Methods -->
			<p class="text">
				<?php print __("Public Methods"); ?>:
			</p>				
		
		<p class="sub-title">load()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: load(string $filename) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Creates and loads an image"); ?>.
			</p>
			
			<p class="code">
			//Instances the Image class <br />
			$this->Images = $this->core("Images"); <br /><br />
			
			$image = $pic = '/path/to/picture.jpg'; <br /><br />
			 
			$this->Images->load($image) <br />
			//This statement creates and loads the picture.jpg from /path/to directory 
			</p>	

		<p class="sub-title">save()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: save(string $filename, string $image_type = IMAGETYPE_JPEG, integer $compression = 75, mixed $permissions = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __(""); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">output()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: output(string $image_type = IMAGETYPE_JPEG) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __(""); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">getWidth()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@integer"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets image's width"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">getHeight()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@integer"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets image's height"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">resizeToHeight()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: resizeToHeight(integer $height) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a resize based on the image's height"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">resizeToWidth()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: resizeToWidth(integer $width) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a resize based on the image's width"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">scale()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: scale(integer $scale) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a scale"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
		
		
		<p class="sub-title">resize()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: resize(integer $width, integer $height) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a resize"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
	
		
		<p class="sub-title">getResize()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getResize(string $size, string $dir, string $filename, integer $max = 0, integer $min = 0) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Resizes an image into a small, medium and original sizes"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
	
			</p>
			<!-- End Public Methods -->
			
	</article>		
