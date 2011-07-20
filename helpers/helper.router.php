<?php
function route() {
	$URL = explode("/", substr($_SERVER["REQUEST_URI"], 1));
	
	if(is_array($URL)) {		 
		$URL = array_diff($URL, array(""));
		
		if(_domain === FALSE) {
			$vars[] = array_shift($URL);
		}
		
		if(_modRewrite === FALSE and isset($URL[0])) { 
			if($URL[0] == basename($_SERVER["SCRIPT_FILENAME"])) {
				$vars[] = array_shift($URL);
			}
		}
	}
	
	return $URL;
}
?>