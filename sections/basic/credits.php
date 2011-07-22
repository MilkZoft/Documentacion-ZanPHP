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
			<?php print __("Credits"); ?><br />
		</p>
			
		<p class="text">
			<?php print __('ZanPHP was developed by <a href="http://www.twitter.com/CZantany" target="_blank" title="@CZantany">Carlos Santana</a> (CEO of <a href="http://www.milkzoft.com" target="_blank">MilkZoft</a>). ZanPHP was developed in 2009, but was until July 2011 that took the decision to release as free software.'); ?>
		</p>
        
        <p class="text">
        	<?php print __("Currently developing ZanPHP is maintained by the development team and contributors of MilkZoft community."); ?>
        </p>
        
        <p class="text">
        	<?php print __("Is achieved by implementing best practices to develop applications faster and with higher quality."); ?>
        </p>
        
        <p class="text">
        	<?php print __("The MilkZoft's development team are:"); ?>
        </p>
        
        <div style="width: 800px;">
        	<p class="sub-title">Carlos Santana Rold&aacute;n - CEO</p>
            
            <div style="float: left; width: 300px;">
                <img src="../../../images/carlos.jpg" alt="Carlos Santana" class="shadow" />
            </div>
            
            <div style="float: left; width: 400px; margin-left: 20px;">
                <p>
                   
                </p>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div style="width: 800px;">
        	<p class="sub-title">Carlos Hugo Gonz&aacute;lez Castell - Senior Developer</p>
            
            <div style="float: left; width: 300px;">
                <img src="../../../images/hugo.png" alt="Carlos Hugo Gonz&aacute;lez Castell - Senior Developer" class="shadow" />
            </div>
            
            <div style="float: left; width: 400px; margin-left: 20px;">
                <p>
                    
                </p>
            </div>    
       	</div>
       
        <div class="clear"></div>
        
        <div style="width: 800px;">
        	<p class="sub-title">H&eacute;ctor Cer&oacute;n Figueroa - Trainee</p>
            
            <div style="float: left; width: 300px;">
                <img src="../../../images/hector.jpg" alt="H&eacute;ctor Cer&oacute;n Figueroa - Trainee" class="shadow" />
            </div>
            
            <div style="float: left; width: 400px; margin-left: 20px;">
                <p>
                    
                </p>
            </div>    
       	</div>
        
        <div class="clear"></div>
        
        <div style="width: 800px;">
        	<p class="sub-title">Eduardo Figarola Mota - Trainee</p>
            
            <div style="float: left; width: 300px;">
                <img src="../../../images/lalo.jpg" alt="Eduardo Figarola Mota - Trainee" class="shadow" />
            </div>
            
            <div style="float: left; width: 400px; margin-left: 20px;">
                <p>
                    
                </p>
            </div>    
       	</div>
        
        <br />
	</article>