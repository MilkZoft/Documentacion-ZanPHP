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
	<?php print __("Db Class"); ?>
</div>

<?php
	include "search.php";
?>

<div class="Clear"></div>


	<article>
		<p class="title">
			<?php print __("Db Class"); ?><br />
		</p>
		
			<p class="small">
				core/classes/class.db.php
			</p>
			
			<p class="text">
				<?php print __("This class allows the creation of queries to the database"); ?>.
			</p>
		
		<p class="sub-title"><?php print __("Loading this Class"); ?></p>
		
			<p class="text">
				<?php print __("This Class is loaded using the following code"); ?>:
			</p>
			
			<p class="code">
				$this->core("Db");
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
				@var private <span style="color: #F00">$row</span> <br />
				<?php print __("Contains the row content in fetch mode"); ?>.
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$primaryKey = FALSE</span> <br />
				<?php print __("Contains the primary key field"); ?>. 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$inserts = 0</span> <br />
				<?php print __("Insert count for transactions"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$query</span> <br />
				<?php print __("Contains the query string"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$table</span> <br />
				<?php print __("Contains the name of the table"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$fields</span> <br />
				<?php print __("Contains the fields of the table"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$values</span> <br />
				<?php print __("Contains the values of the query"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$encode = FALSE</span> <br />
				<?php print __("Contains the values of the query"); ?> 
			</p>
			
			<p class="code">
				@var private <span style="color: #F00">$logs = _dbLogs;</span> <br />
				<?php print __(""); ?> 
			</p>
			<!-- End Private Attributes -->
			
			
			<!-- Begin Public Attributes -->
			<p class="text">
				<?php print __("Public Attributes"); ?>:
			</p>
			
			<p class="code">
				Zan_Db Class <?php print __("has not Public Attributes"); ?>
			</p>		
			<!-- End Public Attributes -->
			
			
			<!-- Begin Private Methods -->
			<p class="text">
				<?php print __("Private Methods"); ?>:
			</p>
							
			<p class="code">
				ZP_Db Class <?php print __("has not Private Methods"); ?>
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
				<?php print __("Constructor (loads a Database class object)"); ?>.
			</p>	

		<p class="sub-title">encode()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: encode(bool $encode = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets -encode- flag attribute as TRUE or FALSE"); ?>.
			</p>	
		
		<p class="sub-title">table()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: table(string $table, string $fields = "*") <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets the table and fields to perform a SQL query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /><br />
	
				$this->Db->table("my_table", "my_field"); <br />
				$this->Db->values("'my_value'"); <br /><br />
				
				//$lastID contains the ID of the record inserted <br />				
				$insertID1 = $this->Db->save();
			</p>	
			
			
		<p class="sub-title">values()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: values(string $values) <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Sets values to perform an insert, update or query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /><br />
	
				$this->Db->table("my_table", "my_field"); <br />
				$this->Db->values("'my_value'"); <br /><br />
				
				//$lastID contains the ID of the record inserted <br />				
				$insertID1 = $this->Db->save();
			</p>	
		
		
		<p class="sub-title">insert()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: insert(bool $begin = FALSE) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::insert to perform an SQL insert"); ?>. <?php print __("Example"); ?>:
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
			
		
		<p class="sub-title">update()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: update(integer $ID) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::update to perform an SQL update by primary key"); ?>. <?php print __("Example"); ?>:
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
		
		<p class="sub-title">updateBySQL()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: updateBySQL() <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::updateBySQL to perform an update by a SQL query"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table", "My_Table.Field = 'Foo', My_Table.Field2 = 'Bar'"); <br />
		
				$succesUpdate = $this->Db->updateBySQL(); <br />
				//$successUpdate will TRUE if the Record has been deleted successfully.
			</p>
		
		
		<p class="sub-title">delete()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: delete(integer $ID) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::delete to perform a SQL delete by primary key"); ?>. <?php print __("Example"); ?>:
			</p>
			
			<p class="code">
				//Instances the Database Class
				$this->Db = $this->core("Db");

				$table = "My_Table";
				$values = "My_Table.Field = 'Foo', My_Table.Field2 = 'Bar'";
				$ID = 10;
				$primaryKey = "My_Table.ID_Field";
				$succesUpdate = $this->Db->update($table, $values, $ID, $primaryKey);
				//$successUpdate will TRUE if the Record has been deleted successfully. 
			</p>
		
		
		<p class="sub-title">deleteBy()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: deleteBy(string $field, string $value) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::deleteBy to perform a SQL delete by specific field"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br />
		
				$succesDelete = $this->Db->deleteBy("Foo_Field", "Bar_Value"); <br />
				//$successUpdate will TRUE if the Record has been deleted successfully.
			</p>
		
		
		<p class="sub-title">deleteBySQL()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: deleteBySQL(string $SQL) <br />
				<?php print __("Return"); ?>:  <?php print __("@bool"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls ZP_Database::deleteBySQL to perform a delete by a SQL query"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br />
				
				$SQL = "My_Field = 'Value' AND Other_Field = 'Other_Value'"; <br /><br />
				
				$succesDelete = $this->Db->deleteBySQL($SQL); <br />
				//$successDelete will TRUE if the Record has been deleted successfully.
			</p>
		
		
		<p class="sub-title">save()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: save($option = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Decides whether the system deletes, updates or inserts"); ?>.
			</p>
		
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table", "My_Field"); <br />
				$this->Db->values("'My_Value'"); <br /><br />		
				
				//save() modes: <br /><br />
				
				$insertID = $this->Db->save(); <br />
				//This statement performs a SQL insert and returns the ID of the inserted record <br /><br />
				
				$successInsert = $this->Db->save(FALSE); <br />
				//This statement performs an update by SQL query (updateBySQL) and returns TRUE if record was inserted successfully <br /><br />
				
				$ = $this->Db->save(13); <br />
				//This statement performs an update by primary Key <br /><br />
				
				$ = $this->Db->save("begin"); <br />
				//This statement performs a begin() method from the Database object <br /><br />
			</p>
				
		<p class="sub-title">find()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: find(integer $ID) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds a record by primary key"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table", "My_Field"); <br /><br />
				
				//This statement finds the record with ID = 14 <br />
				$Record = $this->Db->find(14); 		
				
			</p>
			
			
		<p class="sub-title">findBy()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: findBy(string $field, string $value, string $group = NULL, string $order = NULL, string $limit = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds records by a specific field and value"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$Record = $this->Db->findBy("My_Field", "My_Value", "Field", "Other_Field", "1") <br />
				//This statement represents the follow query: <br />
				// SELECT My_Table.My_Field FROM My_Table WHERE My_Field = 'My_Value' GROUP BY Field ORDER BY Other_Field LIMIT 1 <br />
					
				
			</p>
		
		<p class="sub-title">findBySQL()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: findBySQL(string $SQL, string $group = NULL, string $order = NULL, string $limit = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds records by a specific field and value"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$Record = $this->Db->findBySQL("Field = 'Foo' AND Another_Field = 'Bar'", "Field", "Another_Field", "5") <br />
				//This statement represents the following query: <br />
				// SELECT * FROM My_Table WHERE Field = 'Foo' AND Another_Field = 'Bar' GROUP BY Field ORDER BY Another_Field LIMIT 5 <br />
					
				
			</p>
		
		
		<p class="sub-title">findLast()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds the last record"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$lastRecord = $this->Db->findLast() <br />
				//Finds the last inserted record
					
				
			</p>
		
		
		<p class="sub-title">findFirst()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds the first record"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$firstRecord = $this->Db->findFirst() <br />
				//Finds the last inserted record
					
				
			</p>
		
		
		<p class="sub-title">findAll()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: findAll(string $group = NULL, string $order = NULL, string $limit = NULL) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Finds all records"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$Records = $this->Db->findAll("Field", "Another_Field") <br />
				//This produces: <br />
				//SELECT * FROM My_Table GROUP BY Field ORDER BY Another_Field <br /><br />
				
				$Records = $this->Db->findAll() <br />
				//This produces: <br />
				//SELECT * FROM My_Table
					
				
			</p>
		
		
		<p class="sub-title">countAll()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@integer"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Counts all records"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				
				$count = $this->Db->countAll() <br />
				//This statement counts all records from a table <br />
			</p>
		
		
		<p class="sub-title">countBySQL()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: countBySQL(string $SQL) <br />
				<?php print __("Return"); ?>:  <?php print __("@integer"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Counts records by SQL query"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$this->Db->table("My_Table"); <br /><br />
				$SQL = "Field = 'Foo' AND Another_Field = 'Bar'; <br /><br />
				
				$count = $this->Db->countBySQL($SQL) <br />
				//This statement counts all records according to the following SQL query: <br />
				//SELECT * FROM My_Table WHERE Field = 'Foo' AND Another_Field = 'Bar'
			</p>
		
		
		<p class="sub-title">query()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: query(string $query) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Performs a custom query"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$fields = "Field, Another_Field"; <br />
				$this->Db->table("My_Table", $fields); <br />
				$this->Db->values("My_Table"); <br />
				
				$query = "Field = 'Foo' AND Another_Field = 'Bar' LIMIT 1"; <br /><br />
				
				$Records = $this->Db->query($query) <br />
				//This statement produces: <br />
				//SELECT My_Table.Field, My_Table.Another_Field FROM My_Table WHERE Field = 'Foo' AND Another_Field = 'Bar' LIMIT 1
			</p>
		
		
		<p class="sub-title">call()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: call(string $procedure) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Calls a stored procedure"); ?>.
			</p>
			
			<p class="code">
				//Instances the Database Class <br />
				$this->Db = $this->core("Db"); <br /> <br />
				
				$Records = $this->Db->call("getByCategory"); <br />
				//This produces the SQL Statement: <br />
				// CALL getByCategory
			</p>
		
		
		<p class="sub-title">begin()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Begins a transaction. It works as a Interface of the begin() method from any Database Driver which supports Transactions"); ?>.
			</p>
		
		
		<p class="sub-title">commit()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Saves changes. It works as a Interface of the commit() method from any Database Driver which supports Transactions"); ?>.
			</p>
		
		
		<p class="sub-title">rollBack()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: None. <br />
				<?php print __("Return"); ?>:  <?php print __("@void"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Ignore changes. It works as a Interface of the rollBack() method from any Database Driver which supports Transactions"); ?>.
			</p>	
		
		
		<p class="sub-title">encoding()</p>

			<p class="parameters">
				<?php print __("Parameters"); ?>: encoding($rows) <br />
				<?php print __("Return"); ?>:  <?php print __("@mixed"); ?>;
			</p>
		
			<p class="text">
				<?php print __("Encodes records if -encode()- flag is set as TRUE"); ?>.
			</p>
			
			<!-- End Public Methods -->
	</article>		
