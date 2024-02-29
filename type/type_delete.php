<?php
 include "../config.php";
 $type_id_554 = $_GET["type_id_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "DELETE FROM type_554 WHERE type_id_554='$type_id_554'";
 if(mysqli_query($conn,$sql))
 {
     echo "Delete successfully";
     header("Refresh:0;url=type_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
?>