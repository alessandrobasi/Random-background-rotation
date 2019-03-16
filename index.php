<?php

function random_img(){
	$randurl = 
	array("https://forum.gaming-italia.it/carosello/d023351cd802d65c50f0f5cfd372f297.jpg",
    "https://forum.gaming-italia.it/carosello/computer-gaming-green-51415.jpg",
    "https://forum.gaming-italia.it/carosello/mDqn5R0.jpg", 
    "https://forum.gaming-italia.it/carosello/technology-joystick-controller-gadget-gaming-entertainment-568723-pxhere.com.jpg",
    "https://forum.gaming-italia.it/carosello/light-controller-reflection-blue-circle-sphere-933936-pxhere.com.jpg",
    "https://forum.gaming-italia.it/carosello/laptop-computer-keyboard-technology-red-equipment-644474-pxhere.com.jpg");

	$random_url = array_rand($randurl,1);
	
	return $randurl[$random_url];
}

header("location: ".random_img());
die();
?>
