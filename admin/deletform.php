
<?php

session_start();
  include ("../dbcon.php");

  $id=$_REQUEST['sid'];;
  $sql="DELETE FROM `student` WHERE `id`='$id'";
  $run=mysqli_query($con,$sql);

  if($run){
    ?>
    <script>
      alert('Delete successful');
      window.open('deletestudent.php','_self');
    </script>
    <?php
  }
 ?>
