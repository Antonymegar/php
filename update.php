<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <div>
  <?php
$con=mysqli_connect("localhost","root","","userprofile");
$id = (isset($_POST['UserId']) ? $_POST['UserId'] : '');
$cat=(isset( $_POST['city']) ?  $_POST['city'] : '');
$in=(isset($_POST['Name']) ? $_POST['Name'] : '');
$ip=(isset($_POST['FirstName']) ? $_POST['FirstName'] : '');
$it=(isset($_POST['Email'] ) ? $_POST['Email'] : '');
$ir=(isset($_POST['Street'] ) ? $_POST['Street'] : '');
$iz=(isset($_POST['ZipCode'] ) ? $_POST['ZipCode'] : '');
$qry="update  userinfo set  Name='$in',
 FirstName='$ip' Email= '$it' Street= '$ir' ZipCode='$iz'  where UserId=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record updated');</script>";
      echo "<script> window.location='modify.php';</script>";
}
?>
  </div>

    <span class = "align-middle">
        <div class= "row">
        <div class="col">
            <?php 
            $con=mysqli_connect("localhost" , "root", "", "userprofile");
            $id=$_GET["key"];
            // $cat=$_GET["key"];
            $qry="select * from  user_info  where  UserId = $id ";
            // $qry1="select * from  user_info  where  id = $cityid";
            $run=mysqli_query($con, $qry);
            while($rows=mysqli_fetch_array($run))
             {
                ?>
                <div>
                <form method ="POST" action="update.php">
                    <div class="form-group">
         <label for= "Name"> <b>Name </b> </label>
         <input type= "text"  class= "form-control" name = "Name" 
         value=<?php echo $rows['Name'];?>required>

         <label for= "firstname"> <b>first name </b> </label>
         <input type= "text" class= "form-control" name = "FirstName" 
         value=<?php echo $rows['FirstName'];?> required>

         <label for= "firstname"> <b>email </b> </label>
         <input type= "text" class="form-control" name = "Email"
         value=<?php echo $rows['Email'];?> required>

         <label for= "firstname"> <b>street</b> </label>
         <input type= "text" class="form-control" name = "Street" 
         value=<?php echo $rows['Street'];?> required>

         <label for= "firstname"> <b>zip-code </b> </label>
         <input type= "text" class ="form-control" name = "ZipCode" 
         value=<?php echo $rows['Street'];?>required>
                   <button type="submit" class="btn btn-primary">Update User</button>

                </form>
                </div>
                <?php } ?>
                </div>

                </span>

                

            
            
 

</body>
</html>