<?php
 include "../config.php";
 $old_type_id_554 = $_GET["old_type_id_554"];
 $type_id_554 = $_POST["type_id_554"];
 $type_name_554 = $_POST["type_name_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 mysqli_set_charset($conn,"utf8");
 if(!$conn)
 { die("error".mysqli_connect_error()); }
 $sql = "   UPDATE type_554 SET type_id_554='$type_id_554',type_name_554='$type_name_554'
            WHERE type_id_554='$old_type_id_554'";

 if(mysqli_query($conn,$sql))
 {
     echo "Update successfully";
     header("Refresh:0;url=type_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}

 mysqli_close($conn);
?>