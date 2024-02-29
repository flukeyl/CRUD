<?php
 include "../config.php";
 $province_id_554 = $_GET["province_id_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "DELETE FROM province_554 WHERE province_id_554='$province_id_554'";
 if(mysqli_query($conn,$sql))
 {
     echo "Delete successfully";
     header("Refresh:0;url=province_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
?>