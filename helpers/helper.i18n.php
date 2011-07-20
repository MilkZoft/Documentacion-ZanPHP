<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

if(_language === "English") {
	include "languages/language.english.php";	
} else {
	include "languages/language.spanish.php";	
}
	

function __($text) {
	return htmlentities(translation($text)); 
}

function getXMLang($language, $invert = FALSE) {
	if($invert === TRUE) {
		if($language === "en") {
			return "English";
		} elseif($language === "es") {
			return "Spanish";
		} elseif($language === "fr") {
			return "French";
		} elseif($language === "it") {
			return "Italian";
		} elseif($language === "pt") {
			return "Portuguese";
		}
	} elseif($invert === FALSE) {
		if($language === "English") {
			return "en";
		} elseif($language === "Spanish") {
			return "es";
		} elseif($language === "French") {
			return "fr";
		} elseif($language === "Italian") {
			return "it";
		} elseif($language === "Portuguese") {
			return "pt";
		}
	} else {
		return $language;	
	}
	
	return FALSE;
}

function whichLanguage($invert = TRUE) {
	global $Load;
	
	$Load->helper("router");
	
	$route = route();
	
	if(count($route) > 0 and getXMLang($route[0], TRUE) != FALSE) {
		return getXMLang($route[0], $invert);
	} elseif(count($route) > 0 and $route[0] === _cpanel) {
		return _webLanguage;
	} else {
		return _webLanguage;
	}
}

function isLanguage($language) {
	if($language === "en") {
		return TRUE;
	} elseif($language === "es") {
		return TRUE;
	} elseif($language === "fr") {
		return TRUE;
	} elseif($language === "it") {
		return TRUE;
	} elseif($language === "pt") {
		return TRUE;
	}
	
	return FALSE;
}

function getLanguage($language, $flags = FALSE) {
	if($flags === TRUE) {
		if($language === "Spanish") {
			return img(_webURL . _sh . _lib . _sh . _images . _sh . _icons . _sh . _flags . _sh . "Mexico.png", __("Spanish"));
		} elseif($language === "English") {
			return img(_webURL . _sh . _lib . _sh . _images . _sh . _icons . _sh . _flags . _sh . "Usa.png", __("English"));
		} elseif($language === "French") {
			return img(_webURL . _sh . _lib . _sh . _images . _sh . _icons . _sh . _flags . _sh . "France.png", __("French"));
		} elseif($language === "Portuguese") {
			return img(_webURL . _sh . _lib . _sh . _images . _sh . _icons . _sh . _flags . _sh . "Brazil.png", __("Portuguese"));		
		}
	} else {
		if($language === "Spanish") {
			return __("Spanish");
		} elseif($language === "English") {
			return __("English");
		} elseif($language === "French") {
			return __("French");
		} elseif($language === "Portuguese") {
			return __("Portuguese");		
		}
	}
}
