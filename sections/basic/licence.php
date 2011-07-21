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
		<p class="title"><?php print __("ZanPHP License Agreement"); ?><br /></p>
        
		<p class="text">
			<?php print __("Copyright (c) 2011, MilkZoft, Inc."); ?><br />
            
            <?php print __("All rights reserved."); ?> <br /><br />
            
            <?php print __("This license is a legal agreement between you and MilkZoft, Inc. for the use of ZanPHP Software (the \"Software\"). By obtaining the Software you agree to comply with the terms and conditions of this license."); ?>
		</p>
        
        <p class="sub-title"><?php print __("PERMITTED USE"); ?></p>
        
		<p class="text">
			<?php print __("You are permitted to use, copy, modify, and distribute the Software and its documentation, with or without modification, for any purpose, provided that the following conditions are met:"); ?><br /><br />
            
            <?php print __("1. A copy of this license agreement must be included with the distribution."); ?> <br />
            
            <?php print __("2. Redistributions of source code must retain the above copyright notice in all source code files."); ?> <br />
            
            <?php print __("3. Redistributions in binary form must reproduce the above copyright notice in the documentation and/or other materials provided with the distribution."); ?> <br />
            
            <?php print __("4. Any files that have been modified must carry notices stating the nature of the change and the names of those who changed them."); ?> <br />
            
            <?php print __("5. Products derived from the Software must include an acknowledgment that they are derived from ZanPHP in their documentation and/or other materials provided with the distribution."); ?> <br />
            
            <?php print __("6. Products derived from the Software may not be called \"ZanPHP\", nor may \"ZanPHP\" appear in their name, without prior written permission from MilkZoft, Inc."); ?> <br />
		</p>
        
        <p class="sub-title"><?php print __("INDEMNITY"); ?></p>
      
		<p class="text">
			<?php print __("You agree to indemnify and hold harmless the authors of the Software and any contributors for any direct, indirect, incidental, or consequential third-party claims, actions or suits, as well as any related expenses, liabilities, damages, settlements or fees arising from your use or misuse of the Software, or a violation of any terms of this license."); ?><br /><br />
  		</p>
        
        <p class="sub-title"><?php print __("DISCLAIMER OF WARRANTY"); ?></p>
        
		<p class="text">        
            <?php print __("THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE."); ?> <br />    
  		</p>
        
        <p class="sub-title"><?php print __("LIMITATIONS OF LIABILITY"); ?></p>
        
		<p class="text">
			<?php print __("YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE."); ?><br />
            <?php print __("IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS."); ?><br /><br />
  		</p>
        
	</article>