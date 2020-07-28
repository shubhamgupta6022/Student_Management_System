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
  include ("titlehead.php");
  include ("../dbcon.php");

  $sid=$_GET['sid'];;
  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
 ?>

 <form action="updatedata.php" method="post" enctype="multipart/form-data">
   <table align="center" border="1" style="width:70%; font-size:20px;margin-top:40px;font-weight:bold;">
     <tr>
       <td align="center">Roll No.</td><td> <input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required> </td>
     </tr>
     <tr>
       <td align="center">Full Name</td><td> <input type="text" name="name" value="<?php echo $data['name']; ?>" required> </td>
     </tr>
     <tr>
       <td align="center">City</td><td> <input type="text" name="city" value="<?php echo $data['city']; ?>" required> </td>
     </tr>
     <tr>
       <td align="center">Parents Contact No.</td><td> <input type="text" name="pcon" value="<?php echo $data['pcont']; ?>"  required> </td>
     </tr>
     <tr>
       <td align="center">Standard</td><td> <input type="text" name="std" value="<?php echo $data['standard']; ?>"required> </td>
     </tr>
     <tr>
       <td align="center">Image</td><td> <input type="file" name="simg" required> </td>
     </tr>
     <tr>

       <td colspan="2" align="center">
         <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
         <input type="submit" name="submit" value="Submit">
       </td>
     </tr>
   </table>
 </form>
