<?php
	if(isset($_GET["lang"]) and $_GET["lang"] === "es") {
		$lang = "es";	
	} else {
		$lang = "en";
	}
?>

<div id="Ubication">
	<a href="../index.php?lang=<?php print $lang; ?>" title="<?php print __("Home"); ?>"><?php print __("Home"); ?></a> &raquo;
	<?php print __("Welcome"); ?>
</div>

<div class="Clear"></div>

	<article>
		<p class="title">
			<?php print __("Model View Controller"); ?><br />
		</p>
			
		<p class="text">
			<?php print __("ZanPHP implements one of the design patterns used today by most web development frameworks. This pattern, referred to as MVC (Model View Controller), this means that basically the development is divided into 3 main parts: a model, a view and a controller. The following explains each concept in the MVC."); ?>
		</p>
        
        <p class="sub-title"><?php print __("Model"); ?></p>
        
        <p class="text">
			<?php print __("This class will contain all the functions entrusted to interact with the business strategy of our application and therefore the handling of data, in more technical terms, will carry out all treatment on our application data handle (queries , inserts, updates and deleted). All these functions must be requested by either the driver or the other depending on the model, as the case may be."); ?>
		</p>
        
        <p class="sub-title"><?php print __("View"); ?></p>
        
        <p class="text">
        	<?php print __("The views are responsible for displaying data to the user, but can also be used to request data, of course, this according to what needs to be done. In the MVC applied to web development can be described as responsible for rendering HTML data."); ?>
        </p>
        
        <p class="sub-title"><?php print __("Controller"); ?></p>
        
        <p class="text">
        	<?php print __("This class is the administrator of the application flow, is responsible for receiving user requests, identify, process, send call the methods of the model and return data to the user through a view."); ?>
        </p>
        <br />
        <p class="text">
        	<?php print __("In ZanPHP the MVC applies within each application, you must create two files in the folder of the application: model.application.php controller.application.php and also the views should be within the \"views\" of each application , you must be named using the following convention: view.myview.php"); ?>
        </p>
    </article>