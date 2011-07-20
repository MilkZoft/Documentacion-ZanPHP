<?php
function translation($text) {	
	//Tabla de contenidos
	switch($text) {
		//Bienvenida
		case "Welcome to ZanPHP": return "Bienvenido a ZanPHP"; break;
		case "ZanPHP is an agile Web application development framework written in PHP5 that uses different design patterns and best practices to create applications more quickly with good quality code":
			return "ZanPHP es un framework de desarrollo �gil de aplicaciones Web escrito en PHP5 el cual utiliza distintos patrones de dise�o y las mejores pr�cticas para crear aplicaciones m�s r�pidamente y con buena calidad de c�digo"; break;
		case "Some of the advantages of ZanPHP are:":
			return "Algunas de las ventajas de ZanPHP son las siguientes:"; break;
		case "Easy to install and configure": return "F�cil de instalar y configurar"; break;
		case "Easy to learn": return "F�cil de aprender"; break;	
		case "You can create almost any type of Web applications": return "Puedes crear casi cualquier tipo de aplicaciones Web"; break;	
		case "Compatible with different platforms": return "Compatible con distintas plataformas"; break;	
		case "Object oriented": return "Orientado a objetos"; break;	
		case "Use lots of design patterns and best practices to produce higher quality code": return "Utiliza gran cantidad de patrones de dise�o y las mejores pr�cticas para producir c�digo de mayor calidad"; break;	
		case "Scalable applications and easy to maintain": return "Aplicaciones escalables y f�ciles de mantener"; break;	
		case "Documentation in English and Spanish": return "Documentaci�n en Ingl�s y Espa�ol"; break;
		case "Integration with jQuery and jQuery Mobile, Ajax and other new technologies": return "Integraci�n con jQuery y jQuery Mobile, Ajax y otras nuevas tecnolog�as"; break;
		case "It is free software": return "Es Software Libre"; break;	
		
		//Server requirements
		case "PHP 5.1.X or higher": return "PHP 5.1.X o superior";
		case "Databases supported: MySQL, MySQLi, MsSQL, Oracle, PostgreSQL and SQLite": return "Bases de datos soportadas: MySQL, MySQLi, MsSQL, Oracle, PostgreSQL y SQLite"; break;
			
		case "Basic Info": return "Informaci�n B�sica"; break;
		case "Server Requirements": return "Requerimientos del Servidor"; break;
		case "License Agreement": return "Licencia de Uso"; break;
		case "Credits": return "Cr�ditos"; break;
		case "Installation": return "Instalaci�n"; break;
		case "Downloading ZanPHP v.1.0": return "Descargar ZanPHP v.1.0"; break;
		case "Credits": return "Cr�ditos"; break;
		case "Instructions": return "Instrucciones"; break;
		case "Troubleshooting": return "Soluci�n de Problemas"; break;
		case "Introduction": return "Introducci�n"; break;
		case "Getting Started": return "Primeros Pasos"; break;
		case "Supported Features": return "Compatibilidad"; break;
		case "Model View Controller": return "Modelo Vista Controlador"; break;
		case "General Topics": return "Temas Generales"; break;
		case "File's Structure": return "Estructura de Archivos"; break;
		case "Configuration": return "Configuraci�n"; break;
		case "Databases": return "Bases de Datos"; break;
		case "Applications": return "Aplicaciones"; break;
		case "Controllers": return "Controladores"; break;
		case "Views": return "Vistas"; break;
		case "Models": return "Modelos"; break;
		case "Translations": return "Traducciones"; break;
		case "Debugging": return "Depuraci�n"; break;
		case "Libraries": return "Librer�as"; break;
		case "Scripts": return "C�digos"; break;
		case "Templates": return "Plantillas"; break;
		case "Style Sheets": return "Hojas de Estilo"; break;
		case "Themes": return "Dise�os"; break;
		case "Classes Reference": return "Referencia de las Clases"; break;
		case "Database Class": return "Clase Database"; break;
		case "Db Class": return "Clase Db"; break;
		case "Files Class": return "Clase Files"; break;
		case "Images Class": return "Clase Images"; break;
		case "Library Class": return "Clase Library"; break;
		case "Load Class": return "Clase Load"; break;
		case "MySQLi_Db Class": return "Clase MySQLi_Db"; break;
		case "Pagination Class": return "Clase Pagination"; break;
		case "Singleton Class": return "Clase Singleton"; break;
		case "Templates Class": return "Clase Templates"; break;
		case "Helpers Reference": return "Referencia de los Ayudantes"; break;
		case "Alerts Helper": return "Ayudante Alerts"; break;
		case "Array Helper": return "Ayudante Array"; break;
		case "Autoload Helper": return "Ayudante Autoload"; break;
		case "Benchmark Helper": return "Ayudante Benchmark"; break;
		case "Browser Helper": return "Ayudante Browser"; break;
		case "Debugging Helper": return "Ayudante Debugging"; break;
		case "Email Helper": return "Ayudante Email"; break;
		case "Errors Helper": return "Ayudante Errors"; break;
		case "Forms Helper": return "Ayudante Forms"; break;
		case "HTML Helper": return "Ayudante HTML"; break;
		case "il8n Helper": return "Ayudante il8n"; break;
		case "Inflect Helper": return "Ayudante Inflect"; break;
		case "Router Helper": return "Ayudante Router"; break;
		case "Security Helper": return "Ayudante Security"; break;
		case "Sessions Helper": return "Ayudante Sessions"; break;
		case "String Helper": return "Ayudante String"; break;
		case "Time Helper": return "Ayudante Time"; break;
		case "Validations Helper": return "Ayudante Validations"; break;
		case "Web Helper": return "Ayudante Web"; break;
		case "Parameters": return "Par�metros"; break;
		case "Return": return "Retorna"; break;
		case "void": return "vac�o"; break;
	}
	

	//Bienvenida
	if($text === "ZanPHP User Guide Version 1.0") {
		return "Gu�a de usuario de ZanPHP versi�n 1.0";	
	} elseif($text === "Home") {
		return "Portada";	
	} elseif($text === "Welcome") {
		return "Bienvenida";
	} elseif($text === "Search") {
		return "Buscador";	
	} elseif($text === "Seek") {
		return "Buscar";	
	} elseif($text === "Example") {
		return "Ejemplo";	
	} elseif($text === "Copyright &copy;") {
		return "&copy; Derechos reservados";
	} elseif($text === "Helpers") {
		return "Asistentes";	
	} elseif($text === "Welcome to the ZanPHP version 1.0 User's Guide") {
		return "Bienvenido a la Gu�a de usuario de ZanPHP versi�n 1.0";
	} elseif($text === "Table of Contents") {
		return "Tabla de Contenidos";
	}
	
	//Alerts Helper
	if($text === "The Helper Alerts contains the Standard errors and confirmations from the Framework to use over the applications") {
		return "Esta funci�n contiene los errores y confirmaciones configurados por defecto en el Framework";	
	} elseif($text === "This function shows an Alert to Notify an Event") {
		return "Esta funci�n muestra una Alerta para Notificar";	
	} elseif($text === "You are able to embed the message returned into a URL") {
		return "Es posible embeber el mensaje retornado dentro de una URL";	
	}
	
	//Array Helper
	if($text === "Array Helper") {
		return "Asistente Array";	
	} elseif($text === "The Helper Array contains functions for manipulating arrays") {
		return "El Asistente Array contiene funciones para manipular vectores";
	} elseif($text === "Loading this Helper") {
		return "Cargando este Asistente";
	} elseif($text === "This helper is loaded using the following code") {
		return "Este asistente es cargado usando el siguiente c�digo";
	} elseif($text === "The following functions are available") {
		return "Las siguientes funciones est�n disponibles";
	} elseif($text === "Returns true if the array is a double array, false if only is a simple array") {
		return "Retorna verdadero si el arreglo es una matriz, falso si solo es un simple vector";
	}
	
	//Autoload Helper
	if($text === "The Helper Autoload contains an implementation of the native PHP function __autoload()") {
		return "El Asistente Autoload contiene una implementaci�n de la funci�n nativa de PHP __autoload()";	
	} elseif($text === "This function is automatically called in case you are trying to use a class/interface which hasn't been defined yet") {
		return "Esta funci�n es llamada autom�ticamente cuando se intenta usar una clase/interfaz que no ha sido definida";	
	}
	
	//BenchMark Helper
	if($text === "This function sets the Benchmark Start Time") {
		return "Esta funci�n configura el tiempo Inicial del Punto de Referencia (BenchMark)";	
	} elseif($text === "This function returns the Benchmark Final Time") {
		return "Esta funci�n retorna el tiempo Final del Punto de Referencia (BenchMark)";	
	}
	
	//Browser Helper
	if($text === "The Helper Browser allows to detect the User's Browser") {
		return "El Asistente Browser permite detectar el navegardor utilizado por el Usuario";	
	} elseif($text === "This function provides the Browser String given by the User Agent from User's Browser") {
		return "Esta funci�n retorna en forma de Cadena el Nombre del Navegador que es provista por el Agente de Usuario del mismo";	
	}
	
	
	//Debugging Helper
	if($text === "The Helper Debugging contains functions for debugging PHP code") {
		return "El Asistente Debugging contiene funciones para depurar c�digo PHP";	
	} elseif($text === "This function is equals to PHP function die()") {
		return "Esta funci�n es equivalente a la funci�n die() de PHP";	
	} elseif($text === "This function is equals to <strong>die(var_dump(\$var))</strong> functions with <strong>&lt;pre&gt;</strong> tag") {
		return "Esta funci�n es equivalente a usar las funciones <strong>die(var_dump(\$var))</strong> con la etiqueta <strong>&lt;pre&gt;</strong>";	
	} elseif($text === "If you want use print_r() function and did not truncate the script, You need to change some extra values on the parameters") {
		return "Si desea usar la funci�n print_r() y no truncar el script, necesita cargar algunos par�metros extra";	
	} 
		
	//Email Helper
	if($text === "The Helper Email allows you to send an Email") {
		return "El Helper Email permite enviar un Email";
	} elseif($text === "This function sets and sends the Email") {
		return "Esta funci�n configura y env�a un email";	
	} 
	
	//Form Helper
	if($text === "This function sets a specific &lt;input /&gt; type Checkbox tag and its attributes") {
		return "Esta funci�n configura una etiqueta &lt;input /&gt; de tipo Checkbox y sus atributos ";	
	} elseif($text === "This function sets a &lt;p&gt; tag to label a field from a form") {
		return "Esta funci�n configura una etiqueta &lt;p&gt; para rotular el campo de una formulario";	
	} elseif($text === "You can set an anchor to the Field Name") {
		return "Puede configurar un Ancla al Nombre del Campo";	
	} elseif($text === "This function sets a &lt;input /&gt; tag with a custom attributes") {
		return "Esta funci�n configura un etiqueta &lt;input /&gt; con atributos personalizados";	
	} elseif($text === "You can set any attribute to the &lt;input /&gt; tag, even its type") {
		return "Puede configurar cualquier atributo a la etiqueta &lt;input /&gt;, incluso su tipo";	
	} elseif($text === "This function sets a simple &lt;label&gt; tag and its -for- attribute") {
		return "Esta funci�n configura una etiqueta &lt;label&gt; simple y su atributo -for- ";	
	} elseif($text === "This function sets an &lt;input /&gt; type Radio tag and its attributes") {
		return "Esta funci�n configura una etiqueta &lt;input /&gt; de tipo Radio y sus atributos";	
	} elseif($text === "This function sets a &lt;select&gt; tag, its attributes and its &lt;option&gt; tags") {
		return "Esta funci�n configura una etiqueta &lt;select&gt; sus atributos y sus etiquetas &lt;option&gt;";	
	} elseif($text === "You can set a single &lt;option&gt; tag with the attribute -selected- and pass it into the &lt;select&gt; tag") {
		return "Puede configurar una sola etiqueta &lt;option&gt; y su atributo -selected- y pasarla dentro de la etiqueta &lt;select&gt;";	
	} elseif($text === "This function sets a &lt;textarea&gt; tag and its attributes") {
		return "Esta funci�n configura una etiqueta &lt;textarea&gt; y sus atributos";	
	} elseif($text === "These functions Set a Basic Form Structure") {
		return "Estas funciones configurar la Estructura B�sica de un Formulario";	
	}
	
	//HTML Helper
	if($text === "This function sets a specific &lt;input /&gt; type Checkbox tag and its attributes") {
		return "Esta funci�n configura una etiqueta &lt;input /&gt; de tipo Checkbox y sus atributos";	
	} elseif($text === "This function sets a &lt;p&gt; tag to label a field from a form") {
		return "Esta funci�n configura una etiqueta &lt;p&gt; para rotular el campo de una formulario";	
	}
	
	//i18n Helper
	if($text === "The Helper i18n contains functions of Internationalization") {
		return "El Ayudante i18n contiene funciones de Internacionalizaci�n";	
	} elseif($text === "This function returns the translation of a specific text") {
		return "Esta funci�n retorna la traducci�n de un texto espec�fico";	
	} elseif($text === "This function returns the standard XML language Abbreviation") {
		return "Esta funci�n retorna la Abreviatura de lenguaje XML est�ndar";	
	} elseif($text === "You can set the XML language Abbreviation and get the full word") {
		return "Puede pasar la Abreviatura XML y obtener la palabra completa";	
	} elseif($text === "This function returns the default Language") {
		return "Esta funci�n retorna el Lenguaje default";	
	} elseif($text === "You can also get the standard XML Abbreviation") {
		return "Puede tambi�n obtener la Abreviatura XML est�ndar";	
	} elseif($text === "This function defines if a specific word is a standard XML language Abbrevation") {
		return "Esta funci�n define si una palabra es una Abreviatura XML est�ndar de un Lenguaje";	
	} elseif($text === "This function returns the translation of a specific Language Word") {
		return "Esta funci�n retorna la traducci�n de la palabra que representa un lenguaje";	
	}  
	
	//Inflect Helper
	if($text === "The Helper inflect contains functions to inflect words") {
		return "El Ayudante Inflect contiene funciones para inflexionar palabras";	
	} elseif($text === "This function returns the plural form of a Word") {
		return "Esta funci�n retorna la forma plural de una palabra";	
	} elseif($text === "This function returns the singular form of a Word") {
		return "Esta funci�n retorna la forma singular de una palabra";	
	}

	//Router Helper
	if($text === "The Helper Router contains functions to manipulate URLs") {
		return "El Ayudante Router contiene funciones para manipular URLs";	
	} elseif($text === "Executes the run() method which is inside all application controllers") {
		return "Ejecuta el m�todo run() contenido en el controlador de cada una de las aplicaciones";	
	} elseif($text === "This function returns a string containing a specific URL segment from route()") {
		return "Esta funci�n retorna una cadena con un segmento de URL espec�fico provista por el m�todo route()";	
	} elseif($text === "This function returns an Array from \$_SERVER[\"REQUEST_URI\"] exploding each position with slashes") {
		return "Esta funci�n retorna un Vector provisto por \$_SERVER[\"REQUEST_URI\"] separando cada posici�n con una diagonal";	
	} elseif($text === "This function returns a URL") {
		return "Esta funci�n retorna una URL";	
	}
	
	//Security Helper
	if($text === "The Helper Security contains security related functions") {
		return "El Ayudante Security contiene funciones relacionadas con seguridad";	
	} elseif($text === "Generates and returns a unique code based on a timestamp") {
		return "Genera y retorna un c�digo �nico basado en la hora y fecha";	
	} elseif($text === "You can define the large of the returned string -no longer than a md5 hash- and if it is uppercased") {
		return "Puede definir la longitud de la cadena retornada -no mayor a la de un hash md5- y si est� o no en may�sculas";	
	} elseif($text === "This function escapes potentially harmful string fragments in a string to avoid SQL Injections") {
		return "Esta funci�n retorna escapa fragmentos de cadena potencialmente peligrosas dentro de una cadena para evitar, por ejemplo, inyecciones SQL";	
	} elseif($text === "This function returns an encripted string") {
		return "Esta funci�n retorna una cadena encriptada";	
	} elseif($text === "You can define the encripting strong") {
		return "Puede definir la fuerza del cifrado";	
	} elseif($text === "This function returns the User's IP") {
		return "Esta funci�n retorna la direcci�n IP del Usuario";	
	} elseif($text === "This function pings a URL") {
		return "Esta funci�n env�a un ping a una URL";	
	} elseif($text === "This function redirect to a URL") {
		return "Esta funci�n redirecciona hacia una URL";	
	}
	
	//Security Helper
	if($text === "The Helper Sessions contains sessions and cookies related functions") {
		return "El Ayudante Sessions contiene funciones relacionadas con Variables de Sesi�n y Cookies";	
	} elseif($text === "Removes a Cookie") {
		return "Elimina una Cookie";	
	} elseif($text === "This function unsets all started session variables") {
		return "Esta funci�n remueve todas las variables de sesi�n";	
	} elseif($text === "This function sets a cookie") {
		return "Esta funci�n crea una Cookie";	
	} elseif($text === "This function sets a session variable") {
		return "Esta funci�n crea una variable de sesi�n";	
	} elseif($text === 'This Function returns a $_SESSION index variable value') {
		return "Esta funci�n devuelve el valor de una variable de sesi�n";	
	}
	
	#Classes
	if($text === "Loading this Class") {
		return "Cargando esta clase";	
	} elseif($text === "This Class is loaded using the following code") {
		return "Esta clase es cargada usando el siguiente c�digo";
	} elseif($text === "Inheritance") {
		return "Herencia";
	} elseif($text === "Private Attributes") {
		return "Atributos Privados";
	} elseif($text === "Public Attributes") {
		return "Atributos P�blicos";
	} elseif($text === "Private Methods") {
		return "M�todos Privados";
	} elseif($text === "Public Methods") {
		return "M�todos P�blicos";
	} elseif($text === "has not Private Attributes") {
		return "no posee Atributos Privados";
	} elseif($text === "has not Public Attributes") {
		return "no posee Atributos P�blicos";
	}  elseif($text === "has not Private Methods") {
		return "no posee M�todos Privados";
	}  elseif($text === "has not Public Methods") {
		return "no posee M�todos P�blicos";
	}
	
	
	//Database Class
	if($text === "This class selects the database driver to use and loads its respective methods") {
		return "Esta clase selecciona el manejador de base de datos a usar y carga sus m�todos";	
	} elseif($text === "Contains the count of records") {
		return "Contiene la cantidad num�rica de registros";	
	} elseif($text === "Contains the SQL query") {
		return "Contiene la consulta SQL";	
	} elseif($text === "Contains the database's connection") {
		return "Contiene la conexi�n a la base de datos";	
	} elseif($text === "Contains the database's driver object") {
		return "Contiene el objeto del manejador de base de datos";	
	} elseif($text === "Establishes Database Connection") {
		return "Establece la conexi�n a la base de datos";	
	} elseif($text === "Performs a custom SQL query") {
		return "Realiza una consulta SQL personalizada";	
	} elseif($text === "Performs a SQL INSERT") {
		return "Realiza una inserci�n SQL";	
	} elseif($text === "Performs a SQL DELETE") {
		return "Realiza una eliminaci�n SQL (elimina un registro)";	
	} elseif($text === "Performs a SQL DELETE by specific field and value") {
		return "Realiza una eliminaci�n SQL mediante un campo-par�metro espec�fico";	
	} elseif($text === "Performs a SQL DELETE by a SQL Query") {
		return "Realiza una eliminaci�n SQL por medio de una consulta SQL";	
	} elseif($text === "Performs a SQL UPDATE by Primary Key") {
		return "Realiza un actualizaci�n SQL referenciando una Llave Primaria";	
	} elseif($text === "Performs a SQL UPDATE based on a SQL query") {
		return "Realiza un actualizaci�n SQL basada en una consulta SQL";	
	} elseif($text === "Gets the results into an array. It works as a Interface of the fetch() method from any Database Driver") {
		return "Obtiene los resultados de una consulta dentro de un vector. Funciona como una interfaz del m�todo fetch() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Gets the number of rows found by a query. It works as a Interface of the rows() method from any Database Driver") {
		return "Obtiene el n�mero de registros encontrados por una consulta. Funciona como una interfaz del m�todo rows() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Gets the last inserted ID. It works as a Interface of the insertID() method from any Database Driver") {
		return "Obtiene el �ltimo ID insertado. Funciona como una interfaz del m�todo insertID() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Frees memory. It works as a Interface of the free() method from any Database Driver") {
		return "Libera memoria. Funciona como una interfaz del m�todo free() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Closes the current database connection. It works as a Interface of the close() method from any Database Driver") {
		return "Cierra la conexi�n de base de datos actual. Funciona como una interfaz del m�todo close() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Begins a transaction. It works as a Interface of the begin() method from any Database Driver which supports Transactions") {
		return "Comienza una transacci�n. Funciona como una interfaz del m�todo begin() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Saves changes. It works as a Interface of the commit() method from any Database Driver which supports Transactions") {
		return "Salva los cambios. Funciona como una interfaz del m�todo commit() de cualquiera de los Manejadores de Base de Datos";	
	} elseif($text === "Ignore changes. It works as a Interface of the rollBack() method from any Database Driver which supports Transactions") {
		return "Ignora los cambios. Funciona como una interfaz del m�todo rollBack() de cualquiera de los Manejadores de Base de Datos";	
	}
	
	//Db Class
	if($text === "This class allows the creation of queries to the database") {
		return "Esta clase permite la creaci�n de consultas y la manipulaci�n de una base de datos";	
	} elseif($text === "Contains the primary key field") {
		return "Contiene el campo Llave primaria";	
	} elseif($text === "Insert count for transactions") {
		return "Contador de Inserciones por transacci�n";	
	} elseif($text === "Contains the query string") {
		return "Contiene la cadena de consulta";	
	} elseif($text === "Contains the name of the table") {
		return "Contiene el nombre de la tabla";	
	} elseif($text === "Contains the fields of the table") {
		return "Contiene los campos de la tabla";	
	} elseif($text === "Contains the values of the query") {
		return "Contiene los valores de la consulta";	
	} elseif($text === "Constructor (loads a Database class object)") {
		return "Constructor (Carga un objeto tipo Database)";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "Sets the table and fields to perform a SQL query") {
		return "Configura la tabla y los campos de una consulta SQL";	
	} elseif($text === "Sets values to perform an insert, update or query") {
		return "Configura los valores para realizar una inserci�n, actualizaci�n o consulta SQL";	
	} elseif($text === "Calls ZP_Database::insert to perform an SQL insert") {
		return "Invoca el m�todo ZP_Database::insert para realizar una inserci�n SQL";	
	} elseif($text === "Calls ZP_Database::update to perform an SQL update by primary key") {
		return "Invoca el m�todo ZP_Database::update para realizar una actualizaci�n SQL mediante una Llave Primaria";	
	} elseif($text === "Calls ZP_Database::updateBySQL to perform an update by a SQL query") {
		return "Invoca el m�todo ZP_Database::updateBySQL para realizar una actualizaci�n mediante una consulta SQL";	
	} elseif($text === "Calls ZP_Database::delete to perform a SQL delete by primary key") {
		return "Invoca el m�todo ZP_Database::delete para realizar una eliminaci�n SQL por medio de una Llave Primaria";	
	} elseif($text === "Calls ZP_Database::deleteBy to perform a SQL delete by specific field") {
		return "Invoca el m�todo ZP_Database::deleteBy para realizar una eliminaci�n SQL por medio de un campo espec�fico";	
	} elseif($text === "Calls ZP_Database::deleteBySQL to perform a delete by a SQL query") {
		return "Invoca el m�todo ZP_Database::deleteBySQL para realizar una eliminaci�n SQL mediante una consulta SQL";	
	} elseif($text === "Decides whether the system deletes, updates or inserts") {
		return "Decide si el sistema elimina, actualiza o inserta un registro";	
	} elseif($text === "Finds a record by primary key") {
		return "Encuentra un registro por medio de la Llave Primaria";	
	} elseif($text === "Finds records by a specific field and value") {
		return "Encuentra registro por medio de un campo y un valor espec�fico";	
	} elseif($text === "Finds the last record") {
		return "Encuentra el �ltimo registro";	
	} elseif($text === "Finds the first record") {
		return "Encuentra el primer registro";	
	} elseif($text === "Finds all records") {
		return "Encuentra todos los registros";	
	} elseif($text === "Counts all records") {
		return "Cuenta todos los registros";	
	} elseif($text === "Counts records by SQL query") {
		return "Cuenta todos los registros mediante una consulta SQL";	
	} elseif($text === "Performs a custom query") {
		return "Realiza una consulta SQL personalizada";	
	} elseif($text === "Calls a stored procedure") {
		return "Invoca un procedimiento Almacenado";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "") {
		return "";	
	} 
	
	
	//Email Class
	if($text === "This class allows to manipulate emails") {
		return "Esta clase permite manipular emails";	
	} elseif($text === "Sets the way the email will be send") {
		return "Configura el modo por el cual ser� enviado el mail";	
	} elseif($text === "Sends an Email") {
		return "Env�a un Email";	
	}
	
	//Files Class
	if($text === "This class allows to upload files") {
		return "Esta clase permite subir archivos";	
	} elseif($text === "") {
		return "";	
	} elseif($text === "Uploads and resizes an image") {
		return "Sube y redimensiona una imagen";	
	} elseif($text === "Gets the type of a file (Audio, Video, etc)") {
		return "Obtiene el tipo de un archivo (Audio, Video, etc) ";	
	}
	
	//Images Class
	if($text === "This class allows to manipulate images") {
		return "Esta clase permite manipular im�genes";	
	} elseif($text === "Creates and loads an image") {
		return "Crea y carga una imagen";
	} elseif($text === "") {
		return "";
	} elseif($text === "") {
		return "";
	} elseif($text === "") {
		return "";
	} elseif($text === "Gets image's width") {
		return "Obtiene el ancho en p�xiles de una imagen";
	} elseif($text === "Gets image's height") {
		return "Obtiene la altura en p�xiles de una imagen";
	} elseif($text === "Performs a resize based on the image's height") {
		return "Realiza una redimensi�n basada en la altura de la imagen";
	} elseif($text === "Performs a resize based on the image's width") {
		return "Realiza una redimensi�n basada en el ancho de la imagen";
	} elseif($text === "Performs a scale") {
		return "Realiza una escalaci�n sobre la imagen";
	} elseif($text === "Performs a resize") {
		return "Realiza una redimensi�n";
	} elseif($text === "Resizes an image into a small, medium and original sizes") {
		return "Redimensiona una imagen en un peque�a, mediana y de tama�o original";
	}
	
	
	//Load Class
	if($text === "This class allows to load models, views, controllers, classes, libraries, helpers as well as interact directly with templates") {
		return "Esta clase permite cargar modelos, vistas, controladores, clases, librer�as, ayudantes as� como interactuar con plantillas";	
	} elseif($text === "This Class is loaded in the load.php file include in the core directory") {
		return "Esta clase es cargada en el archivo load.php incluido en el directorio core/";
	} elseif($text === "Contains the array of view") {
		return "Contiene un vector de vistas";
	} elseif($text === "Contains a Templates Object") {
		return "Contiene un Objecto de tipo Templates";
	} elseif($text === "Loads the autoload helper, the database configuration file and a Templates Object") {
		return "Carga el ayudante autoload, el archivo de configuraci�n de base de datos y un Objecto de tipo Templates";
	} elseif($text === "Sets a CSS file from an specific application. It works as an Interface for the CSS method from the Templates class") {
		return "Configura un archivo CSS desde una aplicaci�n espec�fica. Funciona como una Interfaz del m�todo CSS de la clase Templates";
	} elseif($text === "Loads an specific application class from the applications/ directory") {
		return "Carga una clase de una aplicaci�n espec�fica del directorio applications/ ";
	} elseif($text === "Loads a configuration file") {
		return "Carga un archivo de configuraci�n";
	} elseif($text === "Loads a controller") {
		return "Carga un controlador";
	} elseif($text === "Loads a core class") {
		return "Carga una clase del directorio core/";
	} elseif($text === "Loads a footer template") {
		return "Carga una plantilla de pie de p�gina";
	} elseif($text === "Loads a header template") {
		return "Carga una plantilla de encabezado";
	} elseif($text === "Loads a helper or multiple helper files") {
		return "Carga uno o varios ayudantes";
	} elseif($text === "Loads a hook or multiple hooks files") {
		return "Carga uno o varios hooks";
	} elseif($text === "Sets a JS file from an specific application. It works as an Interface for the js method from the Templates class") {
		return "Configura un archivo JS desde una aplicaci�n espec�fica. Funciona como Interfaz del m�todo js de la clase Templates";
	} elseif($text === "Loads a language file and sets the translations") {
		return "Carga un archivo de lenguaje y configura las traducciones";
	} elseif($text === "Loads a left template") {
		return "Carga la platilla izquierda";
	} elseif($text === "Loads a library") {
		return "Carga una librer�a";
	} elseif($text === "Loads a model") {
		return "Carga un Modelo";
	} elseif($text === "Renders and outputs templates") {
		return "Crea y muestra una plantilla";
	} elseif($text === "Loads a right template") {
		return "Carga la plantilla derecha";
	} elseif($text === "Loads templates") {
		return "Carga plantillas";
	} elseif($text === "Sets a theme. It works as an Interface for the theme method from the Templates class") {
		return "Configura un tema. Funciona como Interfaz del m�todo theme de la clase Templates";
	} elseif($text === "Sets a document title. It works as an Interface for the title method from the Templates class") {
		return "Configura el t�tulo del documento. Funciona como Interfaz del m�todo title de la clase Templates";
	} elseif($text === "Loads a view") {
		return "Carga una vista";
	}
	
	
	
	

	//Creditos
	if($text === "Powered by") {
		return "Desarrollado por";
	} else {
		return $text;	
	}
}
