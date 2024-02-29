<?php
 include "../config.php";
 $com_id_554 = $_POST["com_id_554"];
 $name_554 = $_POST["name_554"];
 $capital_554 = $_POST["capital_554"];
 $province_554 = $_POST["province_554"];
 $logo_554 = $_POST["logo_554"];
 $name=$_FILES["myfile"]["name"];
 $type=$_FILES["myfile"]["type"];
 $data = addslashes(file_get_contents($_FILES["myfile"]["tmp_name"]));
 $type_id_554 = $_POST["type_id_554"];
 
  $conn = mysqli_connect($servername,$username,
  $password,$dbname);
mysqli_set_charset($conn,"utf8"); //ไว้สำหรับเพิ่มภาษาไทย
 if(!$conn)
 { die("error".mysqli_connect_error()); }

 $sql = "INSERT INTO company_554 (com_id_554,name_554,capital_554,province_554,logo_554,image_name,image_type,image_data,type_id_554)
         VALUES('$com_id_554','$name_554','$capital_554','$province_554','$logo_554','$name','$type','$data','$type_id_554')";
 if(mysqli_query($conn,$sql))
 {
     echo "Insert successfully";
     header("Refresh:0;url=company_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}
 mysqli_close($conn);
?>
