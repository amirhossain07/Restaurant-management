<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<?php
    require_once("dashboard/dashboard.php");
    
?>
<div class="content">
    <div class="form1">

    <?php


if(isset($_REQUEST["id6"]))
{
    $editId = $_REQUEST["id6"];
    $selectinfo = "SELECT * FROM chefsinfo WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form enctype="multipart/form-data" action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>upoload Photo :</p>
            <input type="file" name="picture"></br>
            <p>About :</p>
            <input type="text" name="about" value="<?php echo $getData["about"];?>" ></br>
            
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit11" class="btn btn-primary">Update Chefs</button>
      </div>
</form>
<?php } }
?>

</div>
</div>





           
            
</body>
</html>