<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Management System</title>
  </head>
  <body>


    <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
    <h1 align="center">Student Management System</h1>

    <form action="index.php" method="post">
      <table align="center" style="width:30%" border="1">
        <tr>
          <td colspan="2" align="center">Student Information</td>
        </tr>
        <tr>
          <td align="left">Choose Standard</td>
          <td>
              <select name="std" required>
                <option>1st</option>
                <option>2nd</option>
                <option>3rd</option>
                <option>4th</option>
                <option>5th</option>
                <option>6th</option>
              </select>
          </td>
        </tr>
        <tr>
          <td align="left">Enter Roll No:</td>
          <td> <input type="text" name="rollno" required> </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="submit" name="submit" value="Show Info"> </td>
        </tr>
      </table>
    </form>



  </body>
</html>

<?php

  if(isset($_POST['submit'])){
    $standard=$_POST['std'];
    $rollno=$_POST['rollno'];

    include ('dbcon.php');
    include ('function.php');

    showdetails($standard,$rollno);
  }

 ?>
