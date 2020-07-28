<?php
session_start();
include ('../dbcon.php');

$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pno=$_POST['pcon'];
$std=$_POST['std'];
$id=$_POST['sid'];

$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];

move_uploaded_file ($tempname,"../dataimg/$imagename");

$qry="UPDATE `student` SET `rollno`='$rollno',`name`='$name',
      `city`='$city',`pcont`='$pno',`standard`='$std',`image`='$imagename' WHERE `id`='$id';";

$run=mysqli_query($con,$qry);

if($run==true){
  ?>
  <script>
    alert ('Data Inserted Successfully');
    <?php header('location:updateform.php?$sid=$id') ?>
  </script>
  <?php
}


 ?>
