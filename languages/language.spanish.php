<?php
function translation($text) {	
	//Tabla de contenidos
	switch($text) {
		//Credits
		case "Credits": return "Créditos"; break;
		case 'ZanPHP was developed by <a href="http://www.twitter.com/CZantany" target="_blank" title="@CZantany">Carlos Santana</a> (CEO of <a href="http://www.milkzoft.com" target="_blank">MilkZoft</a>). ZanPHP was developed in 2009, but was until July 2011 that took the decision to release as free software.': return 'ZanPHP fue desarrollado por <a href="http://www.twitter.com/CZantany" target="_blank" title="@CZantany">Carlos Santana</a> (CEO de <a href="http://www.milkzoft.com" target="_blank">MilkZoft</a>). ZanPHP fue desarrollado en 2009, pero hasta Julio de 2011 se tomo la decisión de liberarlo como software libre.'; break;
		case "Currently developing ZanPHP is maintained by the development team and contributors of MilkZoft community.": return "Actualmente el desarrollo de ZanPHP es mantenido por el equipo de desarrollo de MilkZoft y por los colaboradores de la comunidad."; break;
		case "Is achieved by implementing best practices to develop applications faster and with higher quality.": return "Se implementaron las mejores practicas para desarrollar aplicaciones de manera más rápida y con mayor calidad."; break;
		case "The MilkZoft's development team are:": return "El equipo de desarrollo que conforma a MilkZoft, es el siguiente:"; break;
		
		//Bienvenida
		case "Welcome to ZanPHP": return "Bienvenido a ZanPHP"; break;
		case "ZanPHP is an agile Web application development framework written in PHP5 that uses different design patterns and best practices to create applications more quickly with good quality code": return "ZanPHP es un framework de desarrollo ágil de aplicaciones Web escrito en PHP5 el cual utiliza distintos patrones de diseño y las mejores prácticas para crear aplicaciones más rápidamente y con buena calidad de código"; break;
		case "Some of the advantages of ZanPHP are:": return "Algunas de las ventajas de ZanPHP son las siguientes:"; break;
		case "Easy to install and configure": return "Fácil de instalar y configurar"; break;
		case "Easy to learn": return "Fácil de aprender"; break;	
		case "You can create almost any type of Web applications": return "Puedes crear casi cualquier tipo de aplicaciones Web"; break;	
		case "Compatible with different platforms": return "Compatible con distintas plataformas"; break;	
		case "Object oriented": return "Orientado a objetos"; break;	
		case "Use lots of design patterns and best practices to produce higher quality code": return "Utiliza gran cantidad de patrones de diseño y las mejores prácticas para producir código de mayor calidad"; break;	
		case "Scalable applications and easy to maintain": return "Aplicaciones escalables y fáciles de mantener"; break;	
		case "Documentation in English and Spanish": return "Documentación en Inglés y Español"; break;
		case "Integration with jQuery and jQuery Mobile, Ajax and other new technologies": return "Integración con jQuery y jQuery Mobile, Ajax y otras nuevas tecnologías"; break;
		case "It is free software": return "Es Software Libre"; break;	
		
		//Server requirements
		case "PHP 5.1.X or higher": return "PHP 5.1.X o superior"; break;
		case "Databases supported: MySQL, MySQLi, MsSQL, Oracle, PostgreSQL and SQLite": return "Bases de datos soportadas: MySQL, MySQLi, MsSQL, Oracle, PostgreSQL y SQLite"; break;
		
		//Licence
		case "All rights reserved.": return "Todos los derechos reservados."; break;
		case "This license is a legal agreement between you and MilkZoft, Inc. for the use of ZanPHP Software (the \"Software\"). By obtaining the Software you agree to comply with the terms and conditions of this license.": return "Esta licencia es un acuerdo legal entre usted y MilkZoft, Inc. para el uso de Software ZanPHP (el \"Software\"). Al obtener el Software, usted acepta cumplir con los términos y condiciones de esta licencia."; break;
		case "PERMITTED USE": return "USO PERMITIDO"; break;
		case "You are permitted to use, copy, modify, and distribute the Software and its documentation, with or without modification, for any purpose, provided that the following conditions are met:": return "Usted está autorizado para usar, copiar, modificar y distribuir el Software y su documentación, con o sin modificaciones, para cualquier propósito, siempre que se cumplan los siguientes requisitos:"; break;
		case "1. A copy of this license agreement must be included with the distribution.": return "1. Una copia de este acuerdo de licencia debe ser incluido con la distribución."; break;
		case "2. Redistributions of source code must retain the above copyright notice in all source code files.": return "2. La redistribución del código fuente deben conservar el aviso de copyright en todos los archivos de código fuente."; break;
		case "3. Redistributions in binary form must reproduce the above copyright notice in the documentation and/or other materials provided with the distribution.": return "3. Las redistribuciones en formato binario deben reproducir el aviso de copyright en la documentación y / o otros materiales suministrados con la distribución."; break;
		case "4. Any files that have been modified must carry notices stating the nature of the change and the names of those who changed them.": return "4. Todos los archivos que han sido modificados deben llevar avisos indicando la naturaleza de los cambios y los nombres de aquellos que los cambió."; break;
		case "5. Products derived from the Software must include an acknowledgment that they are derived from ZanPHP in their documentation and/or other materials provided with the distribution.": return "5. Productos derivados del Software debe incluir un reconocimiento que se derivan de ZanPHP en su documentación y / o otros materiales suministrados con la distribución."; break;
		case "6. Products derived from the Software may not be called \"ZanPHP\", nor may \"ZanPHP\" appear in their name, without prior written permission from MilkZoft, Inc.": return "6. Productos derivados del Software no puede ser llamado \"ZanPHP\", ni podrá aparecer \"ZanPHP\" en su nombre, sin la previa autorización por escrito de MilkZoft, Inc."; break;
		case "INDEMNITY": return "INDEMNIZACIÓN"; break;
		case "You agree to indemnify and hold harmless the authors of the Software and any contributors for any direct, indirect, incidental, or consequential third-party claims, actions or suits, as well as any related expenses, liabilities, damages, settlements or fees arising from your use or misuse of the Software, or a violation of any terms of this license.": return "Usted acepta indemnizar y mantener indemne a los autores del Software y todos los colaboradores por los daños directos, indirectos, incidentales o consecuentes reclamaciones de terceros, acciones o demandas, así como cualquier gasto, responsabilidades, daños, asentamientos o cargos derivados de su uso o mal uso del Software, o una violación de cualquiera de los términos de esta licencia."; break;
		case "DISCLAIMER OF WARRANTY": return "RENUNCIA DE GARANTÍA"; break;
		case "THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE.": return "EL SOFTWARE SE ENTREGA \"TAL CUAL\", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O IMPLÍCITA, INCLUYENDO, PERO NO LIMITADO A, LAS GARANTÍAS DE CALIDAD, RENDIMIENTO, NO INFRACCIÓN, COMERCIALIZACIÓN O IDONEIDAD PARA UN PROPÓSITO PARTICULAR."; break;
		case "LIMITATIONS OF LIABILITY": return "LIMITACIONES DE LA RESPONSABILIDAD"; break;
		case "YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE.": return "USTED ASUME TODO RIESGO ASOCIADO CON LA INSTALACIÓN Y EL USO DEL SOFTWARE."; break;
		case "IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.": return "EN NINGÚN CASO LOS AUTORES O TITULARES DEL SOFTWARE SE HACE RESPONSABLE DE LAS RECLAMACIONES, DAÑOS O CUALQUIER OTRA RESPONSABILIDAD QUE SE PRESENTE, DE, O EN RELACIÓN CON EL SOFTWARE. LOS TITULARES DE LICENCIAS SON LOS UNICOS RESPONSABLES DE DETERMINAR LA CONVENIENCIA DE UTILIZACIÓN Y ASUME LOS RIESGOS ASOCIADOS CON SU USO, INCLUYENDO PERO NO LIMITADO A LOS RIESGOS DE LOS ERRORES DEL PROGRAMA, DAÑOS AL EQUIPO, PÉRDIDA DE DATOS O PROGRAMAS DE SOFTWARE, O FALTA DE DISPONIBILIDAD O DE LA INTERRUPCIÓN DE LAS OPERACIONES."; break;
		
		//MVC
		case "ZanPHP implements one of the design patterns used today by most web development frameworks. This pattern, referred to as MVC (Model View Controller), this means that basically the development is divided into 3 main parts: a model, a view and a controller. The following explains each concept in the MVC.": return "ZanPHP implementa uno de los patrones de diseño más utilizados en la actualidad por la mayoría de frameworks de desarrollo web. Este patrón, denominado: MVC, por sus siglas en inglés (Model View Controller), esto quiere decir que básicamente el desarrollo se divide en 3 partes fundamentales: un modelo, una vista y un controlador. A continuación se explicará cada concepto del MVC."; break;
		case "This class will contain all the functions entrusted to interact with the business strategy of our application and therefore the handling of data, in more technical terms, will carry out all treatment on our application data handle (queries , inserts, updates and deleted). All these functions must be requested by either the driver or the other depending on the model, as the case may be.": return "Esta clase contendrá todas aquellas funciones encargadas de interactuar con la estrategia de negocio de nuestra aplicación y por lo tanto con el manejo de datos; en palabras más técnicas, se encargará de realizar todo el tratamiento sobre los datos que nuestra aplicación manejará (consultas, inserciones, actualizaciones y bajas). Todas estas funciones deben de ser requeridas ya sea por el controlador o por otra función del modelo, como puede ser el caso."; break;
		case "Model": return "Modelo"; break;
		case "View": return "Vista"; break;
		case "Controller": return "Controlador"; break;
		case "The views are responsible for displaying data to the user, but can also be used to request data, of course, this according to what needs to be done. In the MVC applied to web development can be described as responsible for rendering HTML data.": return "Las vistas son las encargadas de mostrar los datos al usuario, aunque también puede ser utilizadas para requerir datos, claro, esto en función a lo que se necesite hacer. En el MVC aplicado a desarrollo web, se pueden describir como el HTML encargado de mostrar los datos."; break;
		case "This class is the administrator of the application flow, is responsible for receiving user requests, identify, process, send call the methods of the model and return data to the user through a view.": return "Esta clase es el administrador del flujo de la aplicación, se encarga de recibir las peticiones del usuario, identificarlas, procesarlos, mandar a llamar a los métodos del modelo necesarias y retornar los datos al usuario por medio de una vista."; break;
		case "In ZanPHP the MVC applies within each application, you must create two files in the folder of the application: model.application.php controller.application.php and also the views should be within the \"views\" of each application , you must be named using the following convention: view.myview.php": return "En ZanPHP, el MVC aplica dentro de cada aplicación, se deben crear dos archivos dentro de la carpeta de la aplicación: controller.application.php y model.application.php, asimismo las vistas deberán estar dentro del directorio \"views\" de cada aplicación, estás deberán ser nombradas utilizando la siguiente convención: view.myview.php"; break;
		
		//Structure
		case "File's Structure": return "Estructura de archivos"; break;
		case "ZanPHP consists of 3 main directories, which are: Applications, core and lib. Each with different purposes. The following explains the purpose of each of these directories.": return ""; break;
		case "Applications": return "Aplicaciones"; break;
		case "This directory is one that contains all the applications developed with ZanPHP.": return "Este directorio es el que contiene todas las aplicaciones desarrolladas con ZanPHP."; break;
		case "The \"core\" directory, is the most important of ZanPHP includes the configuration file of the site to develop as well as the framework classes that support the architecture itself, translations, along with the functions (helpers) that the framework we offers to do the heavy lifting.": return "El directorio \"Core\" es el más importante de ZanPHP, pues en el se encuentran los archivos de configuración del sitio a desarrollar, así, como las clases importantes del framework que soportan la arquitectura del mismo, las traducciones, así como todas las funciones (helpers) que el framework nos ofrece para realizar el trabajo pesado."; break;
		case "In this directory you will find different types of files, among them: style sheets, external libraries, images, templates, and uploaded files for each application.": return "En este directorio se encuentran diferentes tipos de archivos, entre los que destacan: hojas de estilo, librerías externas, plantillas, imágenes, así como los archivos subidos por cada aplicación."; break;
		
		//Configuration
		case "ZanPHP requires slightly configuration to make it work properly for it, you have to edit 2 files in /core/config, these are: config.constants.php and config.database.php": return "ZanPHP requiere de una ligera configuración para que todo funcione correctamente, para ello, se tienen que editar los 2 archivos ubicados en /core/config, estos son: config.constants.php y config.database.php"; break;
		case "Note that the configuration is based on PHP constants, and according to these values ​​is set as the operation of the framework.": return "Cabe destacar que la configuración se basa en constantes de PHP, y de acuerdo a dichos valores es como se configura el funcionamiento del framework."; break;
		case "The first configuration file to analyze is: config.database.php, once the file is open you can see that this is the configuration needed to connect to the database to be used by the site. This file allows us to modify the constants for 2 areas of work, local work, or working remotely. The constants are:": return "El primer archivo de configuración a analizar será: config.database.php, una vez abierto el archivo se puede observar que se trata de la configuración necesaria para conectar con la base de datos que será utilizada por el sitio. Este archivo nos permite modificar las constantes para 2 ámbitos de trabajo, el trabajo local, o el trabajo remoto. Las constantes son las siguientes:"; break;
		case "The second configuration file, will all those config.constants.php constant for the operation of our site, that is general constant, noting that there are some important constants configured for the proper functioning of the site and the framework, these include:": return "El segundo archivo de configuración, config.constants.php tendrá todas aquellas constantes necesarias para el funcionamiento de nuestro sitio, es decir constantes generales, destacando, que existen algunas constantes importantes a configurar para el correcto funcionamiento del sitio y del framework, entre ellas están:"; break;
		case "<strong>_dbController:</strong> allows us to specify the database driver to use.": return "<strong>_dbController:</strong> nos permite especificar el controlador de base de datos a utilizar."; break;
		case "<strong>_dbHost:</strong> allows us to configure the host where the database server (usually localhost).": return "<strong>_dbHost:</strong> nos permite configurar el host donde se encuentra el servidor de base de datos (usualmente es localhost)"; break;
		case "<strong>_dbUser:</strong> the user to connect to the database.": return "<strong>_dbUser:</strong> el usuario para conectarnos a la base de datos."; break;
		case "<strong>_dbPwd:</strong> password to connect to the database.": return "<strong>_dbPwd:</strong> la contraseña para conectarnos a la base de datos."; break;
		case "<strong>_dbName:</strong> the name of the database to which we will connect.": return "<strong>_dbName:</strong> el nombre de la base de datos a la cual nos vamos a conectar."; break;
		case "<strong>_dbPort:</strong> database port.": return "<strong>_dbPort:</strong> el puerto de conexión."; break;
		case "<strong>_dbPfx:</strong> the prefix our tables have.": return "<strong>_dbPfx:</strong> el prefijo que nuestras tablas tendrán."; break;
		case "<strong>_domain:</strong> serves to specify the domain that our site will have.": return "<strong>_domain:</strong> nos sirve para especificar el dominio que nuestro sitio tendrá."; break;
		case "<strong>_modRewrite:</strong> toggles the stylization of URLs (TRUE or FALSE).": return "<strong>_modRewrite:</strong> activa o desactiva la estilización de URLs (TRUE o FALSE)."; break;
		case "<strong>_webURL:</strong> URL allows you to configure the general site will useful to load images, scripts, etc.": return "<strong>_webURL:</strong> nos permite configurar la URL general que tendrá el sitio, útil para cargar imagenes, scripts, etc."; break;
		
		//Databases
		case "Databases": return "Bases de datos"; break;
		case "Thanks to the design patterns implemented by ZanPHP, you can use more than one driver database on the websites, this means that we can work on a website under MySQL, MSSQL Server and PostgreSQL": return "Gracias a los patrones de diseño que ZanPHP implementa, es posible utilizar más de un controlador de base de datos en nuestros sitios, esto quiere decir que podemos trabajar en un sitio bajo MySQL, MSSQLServer y Postgre SQL"; break;
		case "For this, it is only necessary, modify the constant _dbController located in the file": return "Para esto, sólo es necesario, modificar la constante _dbController ubicada en el archivo"; break;
		
		//Applications
		case "Create an application with ZanPHP is very easy, you just need to create a directory within /applications, the directory must take the application name in lowercase. Note that the directory name that is the same with which you will access the application from the website": return "Crear una aplicación en ZanPHP es muy fácil, solo es necesario crear un directorio dentro de /applications, el directorio deberá llevar el nombre de la aplicación en minúsculas. Cabe destacar que el nombre que tenga el directorio es el mismo con el cual se accederá a la aplicación desde el sitio web"; break;
		case "Other aspects to consider, is that within the application directory 2 files should be mandatory, as well as a directory, which are: controller.application.php, model.application.php and /views": return "Otros de los aspectos a considerar, es que dentro del directorio de aplicación debe de existir 2 archivos obligatorio, así como un directorio, los cuales son los siguientes: controller.application.php, model.application.php y /views"; break;
		case "The contents of these files and the directory will be explained in the subsequent topics": return "El contenido de estos archivos y directorio, será explicado en temas posteriores"; break;
		
		//Controllers
		case "The controllers are very important in ZanPHP they are indispensable for the use of MVC. It is important that each application must have a controller, a model and the views can vary": return "Los controladores en ZanPHP son muy importantes pues son indispensables para la utilización del MVC. Es muy importante que cada aplicación debe de tener un controlador, un modelo y las vistas pueden variar"; break;
		case "However, this section will analyze the structure that a controller must have for proper operation": return "Ahora bien, en esta sección se analizará la estructura que un controlador debe de tener para su correcto funcionamiento"; break;
		case "This is the basic structure that any controller should have and fulfill for the proper functioning of the framework": return "Esta es la estructura básica que cualquier controlador debera tener y cumplir para el correcto funcionamiento del framework"; break;
		
		//Models
		case "Models are a fundamental part of an application, since they are in charge of interacting with the database, model, classify and to organize data": return "Los modelos son pieza fundamental de una aplicación, pues son los que se encargan de interactuar con la base de datos, modelar, clasificar y hasta organizar los datos"; break;
		case "Like the controllers, models have a basic structure that must be met to work correctly with ZanPHP": return "Al igual que los controladores poseen una estructura básica que debe de ser cumplida para trabajar correctamente con ZanPHP"; break;
		
		//Views
		case "The views are responsible for showing or request data to the user. The controller is responsible for loading the view with data obtained by the models. That's how the MVC design pattern works": return "Las vistas son las encargadas de mostrar o solicitar datos al usuario. El controlador es el encargado de cargar las vistas con los datos obtenidos mediante los modelos. Así es como funciona el patrón de diseño MVC"; break;
		case "Views should be named as follows: view.myview.php and must be located in the /views of each application" : return "Las vistas deben de ser nombradas de la siguiente forma: view.myview.php y deben estar ubicadas en el directorio /views de cada aplicación"; break;
		case "Another important aspect to mention about the directory /views, is that this can be created within the /css, /js or /images, where can be placed style sheets, scripts and images that will be used only by the application": return "Otro aspecto importante para mencionar acerca del directorio /views, es que dentro de este pueden crearse los directorios /css, /js o /images; donde deberán de ser colocados las hojas de estilos, scripts e imagenes que serán utilizadas unicamente por la aplicación"; break;
		
		//Translations
		case "ZanPHP a user-friendly translations system, you only need to use a function and a file where you place the translations": return "ZanPHP implementa un sistema de traducciones fácil de usar, solo se necesita el uso de una función y un archivo donde se colocarán las traducciones"; break;
		case "The function is used as follows": return "La función se utiliza de la siguiente forma"; break;
		case "To complete the translation process, you must add the translation in the following file /core/languages/language.spanish.php, you must add as follows": return "Para completar el proceso de traducción, es necesario agregar la traducción en el siguiente archivo /core/languages/language.spanish.php, se debe de agregar de la siguiente forma"; break;
		case "": return ""; break;
		
		
		case "Basic Info": return "Información Básica"; break;
		case "Server Requirements": return "Requerimientos del Servidor"; break;
		case "License Agreement": return "Licencia de Uso"; break;
		case "Credits": return "Créditos"; break;
		case "Installation": return "Instalación"; break;
		case "Downloading ZanPHP v.1.0": return "Descargar ZanPHP v.1.0"; break;
		case "Credits": return "Créditos"; break;
		case "Instructions": return "Instrucciones"; break;
		case "Troubleshooting": return "Solución de Problemas"; break;
		case "Introduction": return "Introducción"; break;
		case "Getting Started": return "Primeros Pasos"; break;
		case "Supported Features": return "Compatibilidad"; break;
		case "Model View Controller": return "Modelo Vista Controlador"; break;
		case "General Topics": return "Temas Generales"; break;
		case "File's Structure": return "Estructura de Archivos"; break;
		case "Configuration": return "Configuración"; break;
		case "Databases": return "Bases de Datos"; break;
		case "Applications": return "Aplicaciones"; break;
		case "Controllers": return "Controladores"; break;
		case "Views": return "Vistas"; break;
		case "Models": return "Modelos"; break;
		case "Translations": return "Traducciones"; break;
		case "Debugging": return "Depuración"; break;
		case "Libraries": return "Librerías"; break;
		case "Scripts": return "Códigos"; break;
		case "Templates": return "Plantillas"; break;
		case "Style Sheets": return "Hojas de Estilo"; break;
		case "Themes": return "Diseños"; break;
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
		case "Parameters": return "Parámetros"; break;
		case "Return": return "Retorna"; break;
		case "void": return "vacío"; break;
		
		//Helpers
		case "Parameters": return "Parámetros"; break;	
		case "Return": return "Retorna"; break;	
		case "void": return "vacío"; break;
		
		//Bienvenida
		case "ZanPHP User Guide Version 1.0": return "Guía de usuario de ZanPHP versión 1.0"; break;
		case "Home": return "Portada"; break;
		case "Welcome": return "Bienvenida"; break;
		case "Search": return "Buscador"; break;
		case "Seek": return "Buscar"; break;
		case "Example": return "Ejemplo"; break;
		case "Copyright &copy;": return "&copy; Derechos reservados"; break;
		case "Helpers": return "Asistentes"; break;
		case "Welcome to the ZanPHP version 1.0 User's Guide": return "Bienvenido a la Guía de usuario de ZanPHP versión 1.0"; break;
		case "Table of Contents": return "Tabla de Contenidos"; break;
		
		//Alerts Helper
		case "The Helper Alerts contains the Standard errors and confirmations from the Framework to use over the applications"; return "Esta función contiene los errores y confirmaciones configurados por defecto en el Framework"; break;
		case "This function shows an Alert to Notify an Event"; return "Esta función muestra una Alerta para Notificar"; break;
		case "You are able to embed the message returned into a URL"; return "Es posible embeber el mensaje retornado dentro de una URL"; break;
		
		//Array Helper
		case "Array Helper": return "Asistente Array";	
		case "The Helper Array contains functions for manipulating arrays": return "El Asistente Array contiene funciones para manipular vectores"; break;
		case "Loading this Helper": return "Cargando este Asistente"; break;	
		case "This helper is loaded using the following code": return "Este asistente es cargado usando el siguiente código"; break;	
		case "The following functions are available": return "Las siguientes funciones están disponibles"; break;
		case "Returns true if the array is a double array, false if only is a simple array": return "Retorna verdadero si el arreglo es una matriz, falso si solo es un simple vector"; break;
		
		//Autoload Helper
		case "The Helper Autoload contains an implementation of the native PHP function __autoload()": return "El Asistente Autoload contiene una implementación de la función nativa de PHP __autoload()";	break;
		case "This function is automatically called in case you are trying to use a class/interface which hasn't been defined yet": return "Esta función es llamada automáticamente cuando se intenta usar una clase/interfaz que no ha sido definida";	break;
		
		//BenchMark Helper
		case "This function sets the Benchmark Start Time": return "Esta función configura el tiempo Inicial del Punto de Referencia (BenchMark)"; break;	
		case "This function returns the Benchmark Final Time": return "Esta función retorna el tiempo Final del Punto de Referencia (BenchMark)"; break;
		
		//Browser Helper
		case "The Helper Browser allows to detect the User's Browser": return "El Asistente Browser permite detectar el navegardor utilizado por el Usuario"; break;	
		case "This function provides the Browser String given by the User Agent from User's Browser": return "Esta función retorna en forma de Cadena el Nombre del Navegador que es provista por el Agente de Usuario del mismo"; break;
	
		//Debugging Helper
		case "The Helper Debugging contains functions for debugging PHP code": return "El Asistente Debugging contiene funciones para depurar código PHP"; break;	
		case "This function is equals to PHP function die()": return "Esta función es equivalente a la función die() de PHP"; break;
		case "This function is equals to <strong>die(var_dump(\$var))</strong> functions with <strong>&lt;pre&gt;</strong> tag": return "Esta función es equivalente a usar las funciones <strong>die(var_dump(\$var))</strong> con la etiqueta <strong>&lt;pre&gt;</strong>"; break;	
		case "If you want use print_r() function and did not truncate the script, You need to change some extra values on the parameters": return "Si desea usar la función print_r() y no truncar el script, necesita cargar algunos parámetros extra"; break; 
		
		//Email Helper
		case "The Helper Email allows you to send an Email": return "El Helper Email permite enviar un Email"; break;
		case "This function sets and sends the Email": return "Esta función configura y envía un email"; break;

		//Form Helper
		case "This function sets a specific &lt;input /&gt; type Checkbox tag and its attributes": return "Esta función configura una etiqueta &lt;input /&gt; de tipo Checkbox y sus atributos "; break;	
		case "This function sets a &lt;p&gt; tag to label a field from a form": return "Esta función configura una etiqueta &lt;p&gt; para rotular el campo de una formulario"; break;	
		case "You can set an anchor to the Field Name": return "Puede configurar un Ancla al Nombre del Campo"; break;
		case "This function sets a &lt;input /&gt; tag with a custom attributes": return "Esta función configura un etiqueta &lt;input /&gt; con atributos personalizados"; break;
		case "You can set any attribute to the &lt;input /&gt; tag, even its type": return "Puede configurar cualquier atributo a la etiqueta &lt;input /&gt;, incluso su tipo"; break;
		case "This function sets a simple &lt;label&gt; tag and its -for- attribute": return "Esta función configura una etiqueta &lt;label&gt; simple y su atributo -for- "; break;
		case "This function sets an &lt;input /&gt; type Radio tag and its attributes": return "Esta función configura una etiqueta &lt;input /&gt; de tipo Radio y sus atributos"; break;
		case "This function sets a &lt;select&gt; tag, its attributes and its &lt;option&gt; tags": return "Esta función configura una etiqueta &lt;select&gt; sus atributos y sus etiquetas &lt;option&gt;"; break;
		case "You can set a single &lt;option&gt; tag with the attribute -selected- and pass it into the &lt;select&gt; tag": return "Puede configurar una sola etiqueta &lt;option&gt; y su atributo -selected- y pasarla dentro de la etiqueta &lt;select&gt;"; break;
		case "This function sets a &lt;textarea&gt; tag and its attributes": return "Esta función configura una etiqueta &lt;textarea&gt; y sus atributos"; break;
		case "These functions Set a Basic Form Structure": return "Estas funciones configurar la Estructura Básica de un Formulario"; break;
	
		//HTML Helper
		case "The Helper HTML contains functions to manipulate HTML elements with PHP": return "El Ayudante HTML contiene funciones para manipular elementos HTML mediante PHP"; break;
		case "Sets a &lt;a&gt; tag and its attributes": return "Configura una etiqueta &lt;a&gt; y sus atributos"; break;
		case "Sets an &lt;body&gt; opening/closing tag": return "Configura una etiqueta &lt;body&gt; de apertura o cierre "; break;	
		case "Sets a &lt;span&gt; tag with the CSS Bold property": return "Configura una etiqueta &lt;span&gt; con la propiedad CSS Bold"; break;	
		case "Sets a &lt;br&gt; tag": return "Configura una etiqueta &lt;br&gt;"; break;	
		case "Sets an UTF-8 character": return "Configura un caracter UTF-8"; break;
		case "Sets an &lt;div&gt; tag": return "Configura una etiqueta &lt;div&gt;";	
		case "Sets a &lt;!DOCTYPE&gt; declaration": return "Configura una declaración &lt;!DOCTYPE&gt;"; break;	
		case "Converts all HTML entities to its respective characteres from a string": return "Convierte todas las entidades HTML de una cadena a sus caracteres correspondientes"; break;	
		case "Sets a &lt;h1&gt; tag": return "Configura una etiqueta &lt;h1&gt;"; break;	
		case "Sets a &lt;h2&gt; tag": return "Configura una etiqueta &lt;h2&gt;"; break;	
		case "Sets a &lt;h3&gt; tag": return "Configura una etiqueta &lt;h3&gt;"; break;	
		case "Sets a &lt;img /&gt; tag": return "Configura una etiqueta &lt;img /&gt;"; break;	
		case "Sets an &lt;head&gt; tag": return "Configura una etiqueta &lt;head&gt;"; break;	
		case "Sets an &lt;HTML&gt; tag": return "Configura una etiqueta &lt;HTML&gt;"; break;	
		case "Sets an &lt;p&gt; tag and its class attribute": return "Configura una etiqueta &lt;p&gt; y su atributo class"; break;	
		case "Sets an &lt;small&gt; tag": return "Configura una etiqueta &lt;small&gt;"; break;	
		case "Sets an &lt;span&gt; tag and its class attribute": return "Configura una etiqueta &lt;span&gt; y su atributo class"; break;
		case "Sets a &lt;li&gt; tag item": return "Configura una etiqueta &lt;li&gt;"; break;
		case "You can include a unidimensional array into the -list- parameter, and load item, without their attributes": return "Puede incluir un arreglo simple como parámetro y cargar uno o múltiples ítems"; break;	
		case "In the other hand, you can set multiple items, and their attributes": return "Por otra parte, puede incluir múltiples elementos y sus atributos"; break;	
		case "Sets a &lt;/li&gt; closing tag item": return "Configura una etiqueta &lt;/li&gt; de cierre"; break;	
		case "Sets a &lt;ul&gt; block tag and its &lt;li&gt; tag items": return "Configura una bloque &lt;ul&gt; y sus elementos &lt;li&gt;"; break;	
			
		//i18n Helper
		case "The Helper i18n contains functions of Internationalization": return "El Ayudante i18n contiene funciones de Internacionalización"; break;	
		case "This function returns the translation of a specific text": return "Esta función retorna la traducción de un texto específico"; break;	
		case "This function returns the standard XML language Abbreviation": return "Esta función retorna la Abreviatura de lenguaje XML estándar"; break;	
		case "You can set the XML language Abbreviation and get the full word": return "Puede pasar la Abreviatura XML y obtener la palabra completa"; break;	
		case "This function returns the default Language": return "Esta función retorna el Lenguaje default"; break;	
		case "You can also get the standard XML Abbreviation": return "Puede también obtener la Abreviatura XML estándar"; break;	
		case "This function defines if a specific word is a standard XML language Abbrevation": return "Esta función define si una palabra es una Abreviatura XML estándar de un Lenguaje"; break;	
		case "This function returns the translation of a specific Language Word": return "Esta función retorna la traducción de la palabra que representa un lenguaje"; break;	
	
		//Inflect Helper
		case "The Helper inflect contains functions to inflect words": return "El Ayudante Inflect contiene funciones para inflexionar palabras"; break;	
		case "This function returns the plural form of a Word": return "Esta función retorna la forma plural de una palabra"; break;	
		case "This function returns the singular form of a Word": return "Esta función retorna la forma singular de una palabra"; break;	

		//Router Helper
		case "The Helper Router contains functions to manipulate URLs": return "El Ayudante Router contiene funciones para manipular URLs"; break;	
		case "Executes the run() method which is inside all application controllers": return "Ejecuta el método run() contenido en el controlador de cada una de las aplicaciones"; break;	
		case "This function returns a string containing a specific URL segment from route()": return "Esta función retorna una cadena con un segmento de URL específico provista por el método route()"; break;	
		case "This function returns an Array from \$_SERVER[\"REQUEST_URI\"] exploding each position with slashes": return "Esta función retorna un Vector provisto por \$_SERVER[\"REQUEST_URI\"] separando cada posición con una diagonal"; break;	
		case "This function returns a URL": return "Esta función retorna una URL"; break;	
	
		//Security Helper
		case "The Helper Security contains security related functions": return "El Ayudante Security contiene funciones relacionadas con seguridad"; break;	
		case "Generates and returns a unique code based on a timestamp": return "Genera y retorna un código único basado en la hora y fecha"; break;	
		case "You can define the large of the returned string -no longer than a md5 hash- and if it is uppercased": return "Puede definir la longitud de la cadena retornada -no mayor a la de un hash md5- y si está o no en mayúsculas"; break;	
		case "This function escapes potentially harmful string fragments in a string to avoid SQL Injections": return "Esta función retorna escapa fragmentos de cadena potencialmente peligrosas dentro de una cadena para evitar, por ejemplo, inyecciones SQL"; break;	
		case "This function returns an encripted string": return "Esta función retorna una cadena encriptada"; break;	
		case "You can define the encripting strong": return "Puede definir la fuerza del cifrado"; break;	
		case "This function returns the User's IP": return "Esta función retorna la dirección IP del Usuario"; break;	
		case "This function pings a URL": return "Esta función envía un ping a una URL"; break;	
		case "This function redirect to a URL": return "Esta función redirecciona hacia una URL"; break;	
	
		//Security Helper
		case "The Helper Sessions contains sessions and cookies related functions": return "El Ayudante Sessions contiene funciones relacionadas con Variables de Sesión y Cookies"; break;	
		case "Removes a Cookie": return "Elimina una Cookie"; break;	
		case "This function unsets all started session variables": return "Esta función remueve todas las variables de sesión"; break;	
		case "This function sets a cookie": return "Esta función crea una Cookie"; break;	
		case "This function sets a session variable": return "Esta función crea una variable de sesión"; break;	
		case 'This Function returns a $_SESSION index variable value': return "Esta función devuelve el valor de una variable de sesión"; break;
	
		#Classes
		case "Loading this Class": return "Cargando esta clase"; break;	
		case "This Class is loaded using the following code": return "Esta clase es cargada usando el siguiente código"; break;
		case "Inheritance": return "Herencia"; break;
		case "Private Attributes": return "Atributos Privados"; break;
		case "Public Attributes": return "Atributos Públicos"; break;
		case "Private Methods": return "Métodos Privados"; break;
		case "Public Methods": return "Métodos Públicos"; break;
		case "has not Private Attributes": return "no posee Atributos Privados"; break;
		case "has not Public Attributes": return "no posee Atributos Públicos"; break;
		case "has not Private Methods": return "no posee Métodos Privados"; break;
		case "has not Public Methods": return "no posee Métodos Públicos"; break;
	
		//Database Class
		case "This class selects the database driver to use and loads its respective methods": return "Esta clase selecciona el manejador de base de datos a usar y carga sus métodos"; break;	
		case "Contains the count of records": return "Contiene la cantidad numérica de registros"; break;	
		case "Contains the SQL query": return "Contiene la consulta SQL"; break;	
		case "Contains the database's connection": return "Contiene la conexión a la base de datos"; break;	
		case "Contains the database's driver object": return "Contiene el objeto del manejador de base de datos"; break;	
		case "Establishes Database Connection": return "Establece la conexión a la base de datos"; break;	
		case "Performs a custom SQL query": return "Realiza una consulta SQL personalizada"; break;	
		case "Performs a SQL INSERT": return "Realiza una inserción SQL"; break;	
		case "Performs a SQL DELETE": return "Realiza una eliminación SQL (elimina un registro)"; break;	
		case "Performs a SQL DELETE by specific field and value": return "Realiza una eliminación SQL mediante un campo-parámetro específico"; break;	
		case "Performs a SQL DELETE by a SQL Query": return "Realiza una eliminación SQL por medio de una consulta SQL"; break;	
		case "Performs a SQL UPDATE by Primary Key": return "Realiza un actualización SQL referenciando una Llave Primaria"; break;	
		case "Performs a SQL UPDATE based on a SQL query": return "Realiza un actualización SQL basada en una consulta SQL"; break;	
		case "Gets the results into an array. It works as a Interface of the fetch() method from any Database Driver": return "Obtiene los resultados de una consulta dentro de un vector. Funciona como una interfaz del método fetch() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Gets the number of rows found by a query. It works as a Interface of the rows() method from any Database Driver": return "Obtiene el número de registros encontrados por una consulta. Funciona como una interfaz del método rows() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Gets the last inserted ID. It works as a Interface of the insertID() method from any Database Driver": return "Obtiene el último ID insertado. Funciona como una interfaz del método insertID() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Frees memory. It works as a Interface of the free() method from any Database Driver": return "Libera memoria. Funciona como una interfaz del método free() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Closes the current database connection. It works as a Interface of the close() method from any Database Driver": return "Cierra la conexión de base de datos actual. Funciona como una interfaz del método close() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Begins a transaction. It works as a Interface of the begin() method from any Database Driver which supports Transactions": return "Comienza una transacción. Funciona como una interfaz del método begin() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Saves changes. It works as a Interface of the commit() method from any Database Driver which supports Transactions": return "Salva los cambios. Funciona como una interfaz del método commit() de cualquiera de los Manejadores de Base de Datos"; break;	
		case "Ignore changes. It works as a Interface of the rollBack() method from any Database Driver which supports Transactions": return "Ignora los cambios. Funciona como una interfaz del método rollBack() de cualquiera de los Manejadores de Base de Datos"; break;	
		
		//Db Class
		case "This class allows the creation of queries to the database": return "Esta clase permite la creación de consultas y la manipulación de una base de datos"; break;	
		case "Contains the primary key field": return "Contiene el campo Llave primaria"; break;	
		case "Insert count for transactions": return "Contador de Inserciones por transacción"; break;	
		case "Contains the query string": return "Contiene la cadena de consulta"; break;	
		case "Contains the name of the table": return "Contiene el nombre de la tabla"; break;	
		case "Contains the fields of the table": return "Contiene los campos de la tabla"; break;	
		case "Contains the values of the query": return "Contiene los valores de la consulta"; break;	
		case "Constructor (loads a Database class object)": return "Constructor (Carga un objeto tipo Database)"; break;	
		case "Contains the row content in fetch mode": return "Contiene el contenido del registro devuelto por fetch()"; break;	
		case "": return ""; break;	
		case "Sets the table and fields to perform a SQL query": return "Configura la tabla y los campos de una consulta SQL"; break;	
		case "Sets values to perform an insert, update or query": return "Configura los valores para realizar una inserción, actualización o consulta SQL"; break;	
		case "Calls ZP_Database::insert to perform an SQL insert": return "Invoca el método ZP_Database::insert para realizar una inserción SQL"; break;	
		case "Calls ZP_Database::update to perform an SQL update by primary key": return "Invoca el método ZP_Database::update para realizar una actualización SQL mediante una Llave Primaria"; break;	
		case "Calls ZP_Database::updateBySQL to perform an update by a SQL query": return "Invoca el método ZP_Database::updateBySQL para realizar una actualización mediante una consulta SQL"; break;	
		case "Calls ZP_Database::delete to perform a SQL delete by primary key": return "Invoca el método ZP_Database::delete para realizar una eliminación SQL por medio de una Llave Primaria"; break;	
		case "Calls ZP_Database::deleteBy to perform a SQL delete by specific field": return "Invoca el método ZP_Database::deleteBy para realizar una eliminación SQL por medio de un campo específico"; break;	
		case "Calls ZP_Database::deleteBySQL to perform a delete by a SQL query": return "Invoca el método ZP_Database::deleteBySQL para realizar una eliminación SQL mediante una consulta SQL"; break;	
		case "Decides whether the system deletes, updates or inserts": return "Decide si el sistema elimina, actualiza o inserta un registro"; break;	
		case "Finds a record by primary key": return "Encuentra un registro por medio de la Llave Primaria"; break;	
		case "Finds records by a specific field and value": return "Encuentra registro por medio de un campo y un valor específico"; break;	
		case "Finds the last record": return "Encuentra el último registro"; break;	
		case "Finds the first record": return "Encuentra el primer registro"; break;	
		case "Finds all records": return "Encuentra todos los registros"; break;	
		case "Counts all records": return "Cuenta todos los registros"; break;	
		case "Counts records by SQL query": return "Cuenta todos los registros mediante una consulta SQL"; break;	
		case "Performs a custom query": return "Realiza una consulta SQL personalizada"; break;	
		case "Calls a stored procedure": return "Invoca un procedimiento Almacenado"; break;	
		case "": return ""; break;	
		case "": return ""; break;	
		case "": return ""; break;	
		case "": return ""; break;	
	
		//Email Class
		case "This class allows to manipulate emails": return "Esta clase permite manipular emails"; break;	
		case "Sets the way the email will be send": return "Configura el modo por el cual será enviado el mail"; break;	
		case "Sends an Email": return "Envía un Email"; break;	
	
		//Files Class
		case "This class allows to upload files": return "Esta clase permite subir archivos"; break;	
		case "": return ""; break;	
		case "Uploads and resizes an image": return "Sube y redimensiona una imagen"; break;	
		case "Gets the type of a file (Audio, Video, etc)": return "Obtiene el tipo de un archivo (Audio, Video, etc) "; break;	
	
		//Images Class
		case "This class allows to manipulate images": return "Esta clase permite manipular imágenes"; break;
		case "Creates and loads an image": return "Crea y carga una imagen"; break;
		case "": return ""; break;
		case "": return ""; break;
		case "": return ""; break;
		case "Gets image's width": return "Obtiene el ancho en píxiles de una imagen"; break;
		case "Gets image's height": return "Obtiene la altura en píxiles de una imagen"; break;
		case "Performs a resize based on the image's height": return "Realiza una redimensión basada en la altura de la imagen"; break;
		case "Performs a resize based on the image's width": return "Realiza una redimensión basada en el ancho de la imagen"; break;
		case "Performs a scale": return "Realiza una escalación sobre la imagen"; break;
		case "Performs a resize": return "Realiza una redimensión"; break;
		case "Resizes an image into a small, medium and original sizes": return "Redimensiona una imagen en un pequeña, mediana y de tamaño original"; break;
	
		//Load Class
		case "This class allows to load models, views, controllers, classes, libraries, helpers as well as interact directly with templates": return "Esta clase permite cargar modelos, vistas, controladores, clases, librerías, ayudantes así como interactuar con plantillas"; break;	
		case "This Class is loaded in the load.php file include in the core directory": return "Esta clase es cargada en el archivo load.php incluido en el directorio core/"; break;
		case "Contains the array of view": return "Contiene un vector de vistas"; break;
		case "Contains a Templates Object": return "Contiene un Objecto de tipo Templates"; break;
		case "Loads the autoload helper, the database configuration file and a Templates Object": return "Carga el ayudante autoload, el archivo de configuración de base de datos y un Objecto de tipo Templates"; break;
		case "Sets a CSS file from an specific application. It works as an Interface for the CSS method from the Templates class": return "Configura un archivo CSS desde una aplicación específica. Funciona como una Interfaz del método CSS de la clase Templates"; break;
		case "Loads an specific application class from the applications/ directory": return "Carga una clase de una aplicación específica del directorio applications/ "; break;
		case "Loads a configuration file": return "Carga un archivo de configuración"; break;
		case "Loads a controller": return "Carga un controlador"; break;
		case "Loads a core class": return "Carga una clase del directorio core/"; break;
		case "Loads a footer template": return "Carga una plantilla de pie de página"; break;
		case "Loads a header template": return "Carga una plantilla de encabezado"; break;
		case "Loads a helper or multiple helper files": return "Carga uno o varios ayudantes"; break;
		case "Loads a hook or multiple hooks files": return "Carga uno o varios hooks"; break;
		case "Sets a JS file from an specific application. It works as an Interface for the js method from the Templates class": return "Configura un archivo JS desde una aplicación específica. Funciona como Interfaz del método js de la clase Templates"; break;
		case "Loads a language file and sets the translations": return "Carga un archivo de lenguaje y configura las traducciones"; break;
		case "Loads a left template": return "Carga la platilla izquierda"; break;
		case "Loads a library": return "Carga una librería"; break;
		case "Loads a model": return "Carga un Modelo"; break;
		case "Renders and outputs templates": return "Crea y muestra una plantilla"; break;
		case "Loads a right template": return "Carga la plantilla derecha"; break;
		case "Loads templates": return "Carga plantillas"; break;
		case "Sets a theme. It works as an Interface for the theme method from the Templates class": return "Configura un tema. Funciona como Interfaz del método theme de la clase Templates"; break;
		case "Sets a document title. It works as an Interface for the title method from the Templates class": return "Configura el título del documento. Funciona como Interfaz del método title de la clase Templates"; break;
		case "Loads a view": return "Carga una vista"; break;
	
		//Templates Class
		case "This class allows to control design templates": return "Esta clase permite la manipulación de plantillas de diseño"; break;
		case "Contains the name of the current theme": return "Contiene el nombre del tema actual"; break;
		case "Contains the theme's path": return "Contiene el directorio del tema"; break;
		case "Contains the array of variables": return "Contiene el arreglo de variables"; break;
		case "Contains the the header's template title": return "Contiene el título del encabezado de la plantilla"; break;
		case "Contains the CSS's file from an specific application": return "Contiene el archivo CSS de una aplicación específica"; break;
		case "Contains the JavaScript's file from an specific application": return "Contiene el archivo Javascript de una aplicación específica"; break;
		case "Loads helpers: array, browser, debugging, forms, html and web": return "Carga los ayudantes: array, browser, debbuging, form, html and web"; break;
		case "Sets the current theme": return "Configura el tema actual"; break;
		case "Sets vars": return "Configura el arreglo vars"; break;
		case "Gets the CSS. It must be included into the header's file from the theme current theme": return "Obtiene los archivos CSS. Debe ser incluido dentro del archivo header contenido en el Theme (Tema) actual"; break;
		case "Sets and loads a CSS's file": return "Configura y carga un archivo CSS"; break;
		case "Sets and loads a js's file": return "Configura y carga un archivo JS"; break;
		case "Sets header's title": return "Configura el título del encabezado"; break;
		case "Gets the header's title": return "Obtiene el título del encabezado"; break;
		case "": return ""; break;
		case "": return ""; break;
		case "": return ""; break;
		case "": return ""; break;
	
		#Load helpers: array, browser, debugging, forms, html and web
	
		//Creditos
		case "Powered by": return "Desarrollado por"; break;
	}
}
