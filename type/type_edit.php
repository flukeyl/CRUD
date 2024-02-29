<html lang="en">
<head>
  <title>Type Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "../config.php";
$type_id_554 = $_GET["type_id_554"];
$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");
if(!$conn) { die("error".mysqli_connect_error());}
$sql = "SELECT * FROM type_554 WHERE type_id_554='$type_id_554'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<div class="container">
<form action="type_save.php?old_type_id_554=<?php echo $type_id_554;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="type_id_554">type_id_554</label>
                 <input class="form-control" id="type_id_554" type="text" name="type_id_554" value='<?php echo $row["type_id_554"];?>'>
            </div>
            <div class="form-group">
                 <label for="type_name_554">type_name_554</label>
                 <input class="form-control" id="type_name_554" type="text" name="type_name_554" value='<?php echo $row["type_name_554"];?>'>
            </div>
            
            <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
</div>
<?php mysqli_close($conn); ?>
