<?php
include('dbcon.php');

// $database->
$reference = $database->getReference('college');

  echo $reference->getValue();

?>