<?php
  include('connection.php');



    $sql = "SELECT * FROM tbl_record";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        while($row = mysqli_fetch_assoc($result)){

            echo $row['id'];
            echo $row['firstname'];
            echo $row['lastname'];
            echo $row['address'];
            echo $row['skills'];
            echo $row['designation'];
        
        }
    }else{
        echo "<script> alert('No Record Found');</script>";
    }
?>

