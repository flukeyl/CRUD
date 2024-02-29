<?php
 include "../config.php";
 $old_province_id_554 = $_GET["old_province_id_554"];
 $province_id_554 = $_POST["province_id_554"];
 $province_name_554 = $_POST["province_name_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 mysqli_set_charset($conn,"utf8");
 if(!$conn)
 { die("error".mysqli_connect_error()); }
 $sql = "   UPDATE province_554 SET province_id_554='$province_id_554',province_name_554='$province_name_554'
            WHERE province_id_554='$old_province_id_554'";

 if(mysqli_query($conn,$sql))
 {
     echo "Update successfully";
     header("Refresh:0;url=province_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}

 mysqli_close($conn);
?>