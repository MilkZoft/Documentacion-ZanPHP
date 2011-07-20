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
	<?php print __("Database Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Database Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.database.php
			</p>
			
			<p class="text">
				<?php print __("This class selects the database driver to use and loads its respective methods"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("database");
			</p>
			
			<p class="text">
				<?php print __("Inheritance"); ?>:
			</p>
			
			<div class="code">
				<ul>
					<li>ZP_Load</li>
					<ul>
						<li>ZP_Database</li>
					</ul>
				</ul>
			</div>
			
			<!-- Begin Private Attributes -->
			<p class="text">
				<?php print __("Private Attributes"); ?>:
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$count = 0 </span> <br />
				<?php print __("Contains the count of records"); ?>.
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$SQL</span> <br />
				<?php print __("Contains the SQL query"); ?>. 
			</p>
			
			<p class="code">
				@var private static <span style="color: #F00">$connection</span> <br />
				<?php print __("Contains the database's connection"); ?> 
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				@var public <span style="color: #F00">$Database</span> <br />
				<?php print __("Contains the database's driver object"); ?>
			</p>
			<!-- End Public Attributes -->
			
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Public Methods"); ?>:
			</p>
							
			<p class="code">
				ZP_Database Class <?php print __("has not Private Methods"); ?>
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
				<?php print __("Constructor"); ?>.
			</p>	

		<p class="sub-title">connect()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Establishes Database Connection"); ?>.
			</p>	
		
		<p class="sub-title">query()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: query(string $query). <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a custom SQL query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /><br />
				
				$SQL = "SELECT My_Table.Field FROM My_Table WHERE Field = 'Value'"; <br /> <br />
				$Result = $this->Db->query($SQL);
			</p>	
			
		
		<p class="sub-title">insert()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: insert(string $table, string $fields, string $values). <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL INSERT"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /><br />
				
				
				$table  = "My_Table"; <br />
				$fields = "My_Table.Field_Foo, My_Table.Field_Bar"; <br />
				$values = "Lorem, Ipsum"; <br />
				$lastID = $this->Db->insert($table, $fields, $values); <br />
				//$lastID contains the ID of the record inserted.
			</p>	
			
			
		<p class="sub-title">delete()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: delete(string $table, integer $ID, string $primaryKey). <br />
				<?php print __("Return"); ?>:  <?php print __("@boolean"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL DELETE"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
			
				$table        = "My_Table";          				  	  <br />
				$ID           = 10;                                 	  <br />
				$primaryKey   = "My_Table.ID_Field";                	  <br />
				$succesDelete = $this->Db->delete($table, $ID, $primaryKey);   <br />
				//$successDelete will TRUE if the Record has been deleted successfully.
			</p>	
		
		
		<p class="sub-title">deleteBy()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: deleteBy(string $table, string $field, string $value, string $limit = "LIMIT 1"). <br />
				<?php print __("Return"); ?>:  <?php print __("@boolean"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL DELETE by specific field and value"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /><br />
				
				
				$table        = "My_Table";          				  	  <br />
				$field        = "My_Table.Field";                                 	  <br />
				$value        = "Foo";                	  <br />
				$succesDelete = $this->Db->deleteBy($table, $field, $value);   <br />
				//$successDelete will TRUE if the Record has been deleted successfully.
			</p>
			
		
		<p class="sub-title">deleteBySQL()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: deleteBy("string $table, string $SQL"). <br />
				<?php print __("Return"); ?>:  <?php print __("@boolean"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL DELETE by a SQL Query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				
				$table        = "My_Table";          				  	  <br />
				$SQL          = "My_Table.Field = 'Foo'";                                 	  <br />
				$succesDelete = $this->Db->deleteBy($table, $SQL);   <br />
				//$successDelete will TRUE if the Record has been deleted successfully.
			</p>	
		
		<p class="sub-title">update()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: update(string $table, string $values, integer $ID, string $primaryKey). <br />
				<?php print __("Return"); ?>:  <?php print __("@boolean"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL UPDATE by Primary Key"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$table        = "My_Table";          				  	           <br />
				$values       = "My_Table.Field = 'Foo', My_Table.Field2 = 'Bar'"; <br />
				$ID           = 10; <br />
				$primaryKey   = "My_Table.ID_Field"; <br />
				$succesUpdate = $this->Db->update($table, $values, $ID, $primaryKey);   				   <br />
				//$successUpdate will TRUE if the Record has been deleted successfully.
			</p>
		
		
		<p class="sub-title">updateBy()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: updateBySQL(string $table, string $SQL). <br />
				<?php print __("Return"); ?>:  <?php print __("@boolean"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a SQL UPDATE based on a SQL query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$table        = "My_Table";          		  <br />
				$SQL          = "My_Table.Field = 'Bar'";     <br />
				$succesUpdate = $this->Db->updateBySQL($table, $SQL); <br />
				//$successUpdate will TRUE if the Record has been deleted successfully.
			</p>
		
		
		<p class="sub-title">fetch()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets the results into an array. It works as a Interface of the fetch() method from any Database Driver"); ?>.
			</p>
		
		
		<p class="sub-title">rows()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets the number of rows found by a query. It works as a Interface of the rows() method from any Database Driver"); ?>.
			</p>
		
		
		<p class="sub-title">insertID()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Gets the last inserted ID. It works as a Interface of the insertID() method from any Database Driver"); ?>.
			</p>
		
		<p class="sub-title">free()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Frees memory. It works as a Interface of the free() method from any Database Driver"); ?>.
			</p>
			
		
		
		<p class="sub-title">close()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Closes the current database connection. It works as a Interface of the close() method from any Database Driver"); ?>.
			</p>
		
		
		<p class="sub-title">begin()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Begins a transaction. It works as a Interface of the begin() method from any Database Driver which supports Transactions"); ?>.
			</p>
		
		
		<p class="sub-title">commit()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Saves changes. It works as a Interface of the commit() method from any Database Driver which supports Transactions"); ?>.
			</p>
		
		
		<p class="sub-title">rollBack()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Ignore changes. It works as a Interface of the rollBack() method from any Database Driver which supports Transactions"); ?>.
			</p>
	</article>		
