<?php
 include "../config.php";
 $com_id_554 = $_GET["com_id_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "DELETE FROM company_554 WHERE com_id_554='$com_id_554'";
 if(mysqli_query($conn,$sql))
 {
     echo "Delete successfully";
     header("Refresh:0;url=company_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
?>