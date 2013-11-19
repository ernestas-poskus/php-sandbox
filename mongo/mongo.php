<?php

// connect
$m = new MongoClient('localhost:27017');

// select a database
$db = $m->comedy;

// select a collection (analogous to a relational database's table)
$collection = $db->cartoons;

// add a record
$document = array(
    "title" => "Hobbes",
    'surname' => 'fin'
);
$collection->insert($document);


// add a record
$document = array(
    "title" => "Calvin and Hobbes",
    "author" => "Bill Watterson",
    'surname' => 'f2'
);
$collection->insert($document);


// find everything in the collection
$cursor = $collection->find(array('surname' => 'fin'));

$res = $collection->remove(array('surname' => 'f2'), array("justOne" => true));


echo 'Count: ' . $collection->count();

echo '<pre>';
// iterate through the results
foreach ($cursor as $document) {
    print_r($document);
}
echo '</pre>';
