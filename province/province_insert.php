<?php
 include "../config.php";
 $province_id_554 = $_POST["province_id_554"];
 $province_name_554 = $_POST["province_name_554"];
 
  $conn = mysqli_connect($servername,$username,
  $password,$dbname);
mysqli_set_charset($conn,"utf8"); //ไว้สำหรับเพิ่มภาษาไทย
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "INSERT INTO province_554 (province_id_554,province_name_554)
         VALUES('$province_id_554','$province_name_554')";
 if(mysqli_query($conn,$sql))
 {
     echo "Insert successfully";
     header("Refresh:0;url=province_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
 mysqli_close($conn);
?>
