<html lang="en">
<head>
  <title>Province List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
 include "../config.php";
 $conn = mysqli_connect($servername,$username,
    $password,$dbname);
 mysqli_set_charset($conn,"utf8"); //ไว้สำหรับเพิ่มภาษาไทย
 if(!$conn)
 {  die("Error ".mysqli_connect_error()); }
 $sql = "SELECT * FROM province_554";
 $result = mysqli_query($conn,$sql);
 echo "<a class='btn btn-primary' href='province_form.php'>New Province</a>";
 echo "<table class='table table-striped'>"; 
 echo "<th>province_id_554
      <th>province_name_554
      <th>EDIT
      <th>DELETE";//ใส่หัวข้อคอลัมน์
  while($row=mysqli_fetch_assoc($result))
 {
    echo "<tr>";
        echo "<td>"; echo $row["province_id_554"];  
        echo "<td>"; echo $row["province_name_554"];  
        echo "<td>"; echo "<a class='btn btn-warning' href='province_edit.php?province_id_554=".$row["province_id_554"]."'>edit</a>"; 
        echo "<td>"; echo "<a class='btn btn-danger' href='province_delete.php?province_id_554=".$row["province_id_554"]."'>delete</a>"; 
 }
 echo "</table>";
 mysqli_close($conn);
?>
<script language="JavaScript">
function chkConfirm()
{
   if(confirm(' กรุณายืนยันการลบ')){
      return true;
   }
   else
   {
   return false;
   }
}
</script>