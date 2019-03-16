<?php
// 0 = Hide error   ||   1 = Show error ( hopefully no one )
$ERROR = 0;
ini_set('display_errors', $ERROR);
ini_set('display_startup_errors', $ERROR);
error_reporting(E_ALL);

// This function return an array
function get_img(){
	
	// Set the directory where the photos are
	// "." same directory   ||   "/path/to/dir" specific directory from web root
	// "path/to/dir" child directory
	$directory = ".";
	
	// Set the extensions of the images
	$extensions = ["png","jpg","jpeg"];
    
   	// Result array
	$_array = array();
	
	foreach($extensions as $ext){
		
		$images = glob($directory . "/*." . $ext );
		
		foreach($images as $image) {
			array_push($_array, $image);
		}
		
	}
	
	// Return an array of string (file name)
	return $_array;
}

// This function return a string (url)
function random_img(){
	// Get array of images
	$randurl = get_img();
	
	// Pick one random url form array
	$random_url = array_rand($randurl,1);
	
	// Return picked url
	return $randurl[$random_url];
}

// Redirect to the random url
header("location: " . random_img() );
exit();

?>
