<html lang="en">
<head>
  <title>Type List</title>
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
 $sql = "SELECT * FROM type_554";
 $result = mysqli_query($conn,$sql);
 echo "<a class='btn btn-primary' href='type_form.php'>New Type</a>";
 echo "<table class='table table-striped'>"; 
 echo "<th>type_id_554
      <th>type_name_554
      <th>EDIT
      <th>DELETE";//ใส่หัวข้อคอลัมน์
  while($row=mysqli_fetch_assoc($result))
 {
    echo "<tr>";
        echo "<td>"; echo $row["type_id_554"];  
        echo "<td>"; echo $row["type_name_554"];  
        echo "<td>"; echo "<a class='btn btn-warning' href='type_edit.php?type_id_554=".$row["type_id_554"]."'>edit</a>"; 
        echo "<td>"; echo "<a class='btn btn-danger' href='type_delete.php?type_id_554=".$row["type_id_554"]."'>delete</a>"; 
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