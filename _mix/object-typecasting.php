<?php 


	echo '<h2>Testing typecasting to an object</h2>' . '<br />';
	
	$test_object = (object) array(
		'hello' => 'world',
		'nested' => array('key' => 'value'),
		);

	echo '<tt><pre>' . var_export($test_object, TRUE) . '</pre></tt>'
	




?>