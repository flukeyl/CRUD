<html lang="en">
<head>
  <title>Company Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
 include "../config.php";
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 mysqli_set_charset($conn,"utf8"); //ไว้สำหรับเพิ่มภาษาไทย
 if(!$conn)
 {  die("Error ".mysqli_connect_error()); }

 $sql = "SELECT * FROM province_554";
 $result = mysqli_query($conn,$sql);
 $select_province = "";
 while($row=mysqli_fetch_assoc($result))
 {
   $select_province = $select_province."<option value='".$row['province_id_554']."'>".$row['province_name_554']."</option>";
 }

 $sql = "SELECT * FROM type_554";
 $result = mysqli_query($conn,$sql);
 $select_type = "";
 while($row=mysqli_fetch_assoc($result))
 {
   $select_type = $select_type."<option value='".$row['type_id_554']."'>".$row['type_name_554']."</option>";
 }
?>
<div class="container">
        <form action="company_insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                 <label for="com_id_554">com_id_554</label>
                 <input class="form-control" id="com_id_554" type="text" name="com_id_554">
            </div>
            <div class="form-group">
                 <label for="name_554">name_554</label>
                 <input class="form-control" id="name_554" type="text" name="name_554">
            </div>
            <div class="form-group">
                 <label for="capital_554">capital_554</label>
                 <input class="form-control" id="capital_554" type="text" name="capital_554">
            </div>
            <div class="form-group">
                 <label for="province_554">province_554</label>
                 <select name="province_554" class="form-control">
                    <?php echo $select_province ?>
                 </select>
            </div>
            <div class="form-group">
                 <label for="logo_554">logo_554</label>
                 <input class="form-control" type="file" name="myfile" id="uploadImage" onchange="PreviewImage();">
                 <img class="form-group" id="uploadPreview" style="height: 200px; margin-top: 20px;" />
            </div>
            <div class="form-group">
                 <label for="type_id_554">type_id_554</label>
                 <select name="type_id_554" class="form-control">
                    <?php echo $select_type ?>
                 </select>
            </div>
            
            <input class="btn btn-primary" type="submit" value="INSERT">
        </form>
</div>

<script type="text/javascript">
     function PreviewImage() {
     var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
     oFReader.onload = function (oFREvent) {
     document.getElementById("uploadPreview").src = oFREvent.target.result;
          };
     };
</script>

</body>