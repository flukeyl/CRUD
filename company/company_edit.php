<html lang="en">
<head>
  <title>Company Edit</title>
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
mysqli_set_charset($conn,"utf8");
if(!$conn) { die("error".mysqli_connect_error());}

$com_id_554 = $_GET["com_id_554"];
$sql = "SELECT * FROM company_554 WHERE com_id_554='$com_id_554'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<div class="container">
<form action="company_save.php?old_com_id_554=<?php echo $com_id_554;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="com_id_554">company_id_554</label>
                 <input class="form-control" id="com_id_554" type="text" name="com_id_554" value='<?php echo $row["com_id_554"];?>'>
            </div>

            <div class="form-group">
                 <label for="name_554">name_554</label>
                 <input class="form-control" id="name_554" type="text" name="name_554" value='<?php echo $row["name_554"];?>'>
            </div>

            <div class="form-group">
                 <label for="capital_554">capital_554</label>
                 <input class="form-control" id="capital_554" type="text" name="capital_554" value='<?php echo $row["capital_554"];?>'>
            </div>

            <div class="form-group">
                 <label for="province_554">province_554</label>
                 <select name="province_554" class="form-control" >
                    <?php 
                    $sql2="SELECT * FROM province_554";
                    $result2 = mysqli_query($conn,$sql2);
                    while($row2=mysqli_fetch_assoc($result2))
                    {
                         echo "<option ";
                         if($row["province_554"]==$row2["province_id_554"]) echo " selected ";
                         echo "value='".$row2["province_id_554"]."'>".$row2["province_name_554"]."</option>";
                    }
                    ?>
                 </select>
            </div>

               <div class="form-group">
                    <label for="reorder_pt">image</label>
                    <input class="form-group" type="file" name="myfile" id="uploadImage" onchange="PreviewImage();">
                    <?php echo '<img id="uploadPreview" src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'" width=100px/> <br>';?>
               </div>

               <div class="form-group">
                    <label for="type_id_554">type_id_554</label>
                    <select name="type_id_554" class="form-control">
                    <?php 
                    $sql3="SELECT * FROM type_554";
                    $result3 = mysqli_query($conn,$sql3);
                    while($row3=mysqli_fetch_assoc($result3))
                    {
                         echo "<option ";
                         if($row["type_id_554"]==$row3["type_id_554"]) echo " selected ";
                         echo "value='".$row3["type_id_554"]."'>".$row3["type_name_554"]."</option>";
                    }
                    ?>
                 </select>
            </div>
            
            <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
</div>
<?php mysqli_close($conn); ?>
<script>
    
function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}
selectElement('com_id_554', '<?php echo $row["com_id_554"];?>');
</script>

<script type="text/javascript">
   function PreviewImage() {
   var oFReader = new FileReader();
   oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
   oFReader.onload = function (oFREvent) {
   document.getElementById("uploadPreview").src = oFREvent.target.result;
   };
    };
 </script>