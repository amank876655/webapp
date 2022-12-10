<?php
  session_start();
  include('dbcon.php');

  if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
  

  $postData = [
    'Name' => $Name,
    'Email' => $Email,
    'Subject' => $Subject,
    'Message' => $Message,
  ];
  $ref_table = "college";
  $postRef = $database->getReference($ref_table)->push($postData);

  if($postRef){
    $_SESSION['status'] = 'Data Inserted Successfully';
    header("Location: index.html");
  }
  else{
    $_SESSION['status'] = 'Data Not Inserted';
    header("Location: index.html");
  }

  }
?>