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

 <table align="center">
   <form action="updatestudent.php" method="post">
     <tr>
       <th>Enter Standard</th>
       <td> <input type="number" name="standard" placeholder="Enter Standard" required> </td>
       <th>Enter Student Name</th>
       <td> <input type="text" name="name" placeholder="Enter Student Name" required> </td>
       <td colspan="2"> <input type="submit" name="submit" value="Search"> </td>
     </tr>

   </form>
 </table>

 <table align="center" border="1" width='80%'>
   <tr style="background-color:#000; color:#fff;">
     <th>No</th>
     <th>Image</th>
     <th>Name</th>
     <th>Roll No</th>
     <th>Edit</th>
   </tr>

   <?php

   session_start();

     if(isset($_POST['submit'])){
       include ('../dbcon.php');
       $standard=$_POST['standard'];
       $name=$_POST['name'];

       $qry="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
       $run=mysqli_query ($con,$qry);
       if(mysqli_num_rows($run)<1){
         echo "<tr><td colspan='5'>No record found</td></tr>";
       }
       else{
         $count=0;
         while ($data=mysqli_fetch_assoc($run)) {
           $count++;
           ?>
           <tr align="center">
             <td> <?php echo $count; ?> </td>
             <td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"> </td>
             <td>  <?php echo $data['name']; ?> </td>
             <td> <?php echo $data['rollno']; ?> </td>
             <td> <a href="updateform.php?sid= <?php echo $data['id']; ?> ">Edit</a> </td>
           </tr>

           <?php
         }

       }
     }

    ?>


 </table>
