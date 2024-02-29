<?php
 include "../config.php";
 $old_com_id_554 = $_GET["old_com_id_554"];
 $com_id_554 = $_POST["com_id_554"];
 $name_554 = $_POST["name_554"];
 $capital_554 = $_POST["capital_554"];
 $province_554 = $_POST["province_554"];
 $logo_554 = $_POST["logo_554"];
 $name=$_FILES["myfile"]["name"];
 $type=$_FILES["myfile"]["type"];
 if($name<>null) $data = addslashes(file_get_contents($_FILES["myfile"]["tmp_name"]));
 $type_id_554 = $_POST["type_id_554"];
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 mysqli_set_charset($conn,"utf8");
 if(!$conn)
 { die("error".mysqli_connect_error()); }
 
 $sql = "   UPDATE company_554 SET ";
 if($name<>null)
    $sql = $sql." image_name='$name',image_type='$type',image_data='$data',"; 
    $sql = $sql."com_id_554='$com_id_554',name_554='$name_554',capital_554='$capital_554',province_554='$province_554',logo_554='$logo_554',type_id_554='$type_id_554'
        
 WHERE com_id_554='$old_com_id_554'";

 if(mysqli_query($conn,$sql))
 {
     echo "Update successfully";
     header("Refresh:0;url=company_list.php");
 }
 else{ echo "Error".mysqli_error($conn);}

 mysqli_close($conn);
?>