<?php
  session_start();

  if(isset($_SESSION['uid'])){
    echo "";
  }else{
    header('location: ../login.php');
  }
 ?>

<?php
  include ("header.php");
  include ("titlehead.php")
 ?>

 <form action="addstudent.php" method="post" enctype="multipart/form-data">
   <table align="center" border="1" style="width:70%; font-size:20px;margin-top:40px;font-weight:bold;">
     <tr>
       <td align="center">Roll No.</td><td> <input type="text" name="rollno" placeholder="Enter Roll No" required> </td>
     </tr>
     <tr>
       <td align="center">Full Name</td><td> <input type="text" name="name" placeholder="Enter Full Name" required> </td>
     </tr>
     <tr>
       <td align="center">City</td><td> <input type="text" name="city" placeholder="Enter City" required> </td>
     </tr>
     <tr>
       <td align="center">Parents Contact No.</td><td> <input type="text" name="pcon" placeholder="Enter contact no of parents" required> </td>
     </tr>
     <tr>
       <td align="center">Standard</td><td> <input type="text" name="std" placeholder="Enter Standard" required> </td>
     </tr>
     <tr>
       <td align="center">Image</td><td> <input type="file" name="simg" required> </td>
     </tr>
     <tr>
       <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
     </tr>
   </table>
 </form>

  </body>
</html>

<?php

session_start();
  if(isset($_POST['submit'])){

    include ('../dbcon.php');

    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pno=$_POST['pcon'];
    $std=$_POST['std'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file ($tempname,"../dataimg/$imagename");

    $qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`)
          VALUES ('$rollno','$name','$city','$pno','$std','$imagename')";

    $run=mysqli_query($con,$qry);

    if($run==true){
      ?>
      <script>
        alert ('Data Inserted Successfully');
      </script>
      <?php
    }


  }

 ?>
