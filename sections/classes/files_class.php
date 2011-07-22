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
	<?php print __("Files Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Files Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.files.php
			</p>
			
			<p class="text">
				<?php print __("This class allows to upload files"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Files");
			</p>
			
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Files</li>
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
				@var public <span style="color: #F00">$filename</span> <br />
				Contains the file's name.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fileType</span> <br />
				Contains the file's MIME type.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fileSize</span> <br />
				Contains the file's size in bytes.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fileTmp</span> <br />
				Contains the file's temporal name.
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$fileError</span> <br />
				Contains the error if the file has one.
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
		
		<p class="sub-title">upload()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: upload(string $path = NULL, string $type = "image"); <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Uploads a file to specific path"); ?>.
			</p>
			
			<p class="code">
				$this->Files = $this->core("Files");<br /><br />
				
				$path = "path/to/";<br /><br />
				
				//Assuming $_FILES["file"] is set and its a .rar file <br />
				$this->Files->filename  = FILES("file", "name");<br />
				$this->Files->fileType  = FILES("file", "type");<br /> 
				$this->Files->fileSize  = FILES("file", "size");<br />
				$this->Files->fileError = FILES("file", "error");<br />
				$this->Files->fileTmp   = FILES("file", "tmp_name");<br /><br />
				
				//Uploads the .rar document to /path/to/file.rar <br />
				$thi->Files->upload($path, "document");
				
			</p>	

		<p class="sub-title">updateImage()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: uploadImage(string $dir, string $inputName = "file", string $type = "resize", bool $small = TRUE, bool $medium = TRUE, bool $original = TRUE) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Uploads and resizes an image"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
				$this->Files = $this->core("Files");<br /><br />
				
				$path = "path/to/file";<br /><br />
				
				//Assuming $_FILES["file"] is set and its an image (jpg, gif, png, etc.) file <br /><br />
				
				$this->Files->uploadImage($path, "file", "resize", TRUE, TRUE, TRUE);<br />
				//Uploads:<br />
				// /path/to/small_file.jpg <br />
				// /path/to/medium_file.jpg <br />
				// /path/to/original_file.jpg <br />
			</p>
		
		
		<p class="sub-title">getType()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: getType(string $ext, $mimeType = FALSE, $return = FALSE, $icons = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets the type of a file (Audio, Video, etc)"); ?>. <?php print __("Example"); ?>: 
			</p>	
			
			<p class="code">
				$this->Files = $this->core("Files");<br /><br />
							
				//Assuming $_FILES["file"] is set and its a .rar file <br />
				$this->Files->fileType  = FILES("file", "type");<br /><br />
				
				//Prints: "document" <br />
				$this->Files->getType($this->Files->fileType);		
			</p>
				
			
			<!-- End Public Methods -->
			
	</article>		
