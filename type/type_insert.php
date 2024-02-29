<?php
 include "../config.php";
 $type_id_554 = $_POST["type_id_554"];
 $type_name_554 = $_POST["type_name_554"];
 
  $conn = mysqli_connect($servername,$username,
  $password,$dbname);
mysqli_set_charset($conn,"utf8"); //ไว้สำหรับเพิ่มภาษาไทย
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "INSERT INTO type_554 (type_id_554,type_name_554)
         VALUES('$type_id_554','$type_name_554')";
 if(mysqli_query($conn,$sql))
 {
     echo "Insert successfully";
     header("Refresh:0;url=type_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
 mysqli_close($conn);
?>
