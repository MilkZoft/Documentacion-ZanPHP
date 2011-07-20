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
	<?php print __("Pagination Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Pagination Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.pagination.php
			</p>
			
			<p class="text">
				<?php print __("This class is for paging the SQL query results"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Pagination");
			</p>
			
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Pagination</li>
					</ul>
				</ul>
			</div>
		
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Pagination Class <?php print __("has not Private Attributes"); ?>.
			</p>
			<!-- End Private Attributes -->
		
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				ZP_Pagination Class <?php print __("has not Public Attributes"); ?>.
			</p>
			<!-- End Public Attributes -->
						
						
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
			
			<p class="code">
				ZP_Pagination has not Private Methods
			</p>
			<!-- End Private Methods -->
			
			
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
				<?php print __("Constructor (Loads the HTML helper)"); ?>.
			</p>	
		
		
		<p class="sub-title">paginate()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: paginate(integer $count, integer $end, integer $start, string $URL, string $anchor = _top) <br />
				<?php print __("Return"); ?>:  <?php print __("@string"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs paging of results"); ?>.
			</p>
			
			<p class="code">
				
			</p>
			
			<!-- End Private Methods -->
				
			
				
			
	</article>		
