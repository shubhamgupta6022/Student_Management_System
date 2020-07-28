<?php

  function showdetails($standard,$rollno){
    include ('dbcon.php');
    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
    $run=mysqli_query($con,$sql);

    if(mysqli_num_rows($run)){

      $data=mysqli_fetch_assoc($run);
      ?>

      <table  border="1" style="margin-top:20px;width:50%;" align="center" >
        <tr>
          <th colspan="3">Student Details</th>
        </tr>
        <tr>
          <td rowspan="5"> <img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px;max-width:120px;padding-left:64px;"> </td>
          <th style="width: 33% ;">Roll No</th>
          <td style="width: 33% ;"><?php echo $data['rollno']; ?></td>
        </tr>
        <tr>
          <th style="width: 33% ;">Name</th>
          <td style="width: 33% ;"><?php echo $data['name']; ?></td>
        </tr>
        <tr>
          <th style="width: 33% ;">Standard</th>
          <td style="width: 33% ;"><?php echo $data['standard']; ?></td>
        </tr>
        <tr>
          <th style="width: 33% ;">City</th>
          <td style="width: 33% ;"><?php echo $data['city']; ?></td>
        </tr>
        <tr>
          <th style="width: 33% ;">Parents Contact No</th>
          <td style="width: 33% ;"><?php echo $data['pcont']; ?></td>
        </tr>
      </table>


    <?php
    }else{
      ?>
      <script>
        alert('No data found');
      </script>
      <?php
    }
  }

 ?>
