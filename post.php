<?php
require_once('conn.php');
$json=file_get_contents('php://input');

$obj=json_decode($json,true);

$firstname=$obj['firstname'];
$sirname=$obj['sirname'];
$address=$obj['address'];
$phonenumber=$obj['phonenumber'];
$status=$obj['status'];
$nationalid=$obj['nationalid'];
$age=$obj['age'];

$sql = "INSERT INTO users (firstname,sirname,address,phonenumber,status,nationalid,age)
VALUES ('$firstname','$sirname','$address','$phonenumber','$status','$nationalid','$age')";

  if (mysqli_query($connect, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
?>