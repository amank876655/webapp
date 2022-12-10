<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('myweb-2003-firebase-adminsdk-mr3wn-4e263e912f.json')
    ->withDatabaseUri('https://myweb-2003-default-rtdb.firebaseio.com/');

 $database = $factory->createDatabase();


?>