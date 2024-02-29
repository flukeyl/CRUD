<html lang="en">
<head>
  <title>Province Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "../config.php";
$province_id_554 = $_GET["province_id_554"];
$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");
if(!$conn) { die("error".mysqli_connect_error());}
$sql = "SELECT * FROM province_554 WHERE province_id_554='$province_id_554'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<div class="container">
<form action="province_save.php?old_province_id_554=<?php echo $province_id_554;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="province_id_554">province_id_554</label>
                 <input class="form-control" id="province_id_554" type="text" name="province_id_554" value='<?php echo $row["province_id_554"];?>'>
            </div>
            <div class="form-group">
                 <label for="province_name_554">province_name_554</label>
                 <input class="form-control" id="province_name_554" type="text" name="province_name_554" value='<?php echo $row["province_name_554"];?>'>
            </div>
            
            <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
</div>
<?php mysqli_close($conn); ?>
