<?php
	
	require_once('functions\nl2br.functions.php');



    $recipe = "3 tablespoons Dijon mustard
    1/3 cup Caesar salad dressing
    8 ounces grilled chicken breast
    3 cups romaine lettuce";
    
	
	// convert the newlines to <br />'s.
	echo convertHTML($recipe);
	
	
?>