<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration</title>
</head>
<body>
    <div>
        <?php
         $con =mysqli_connect("localhost","root","","userprofile");
         $cat= $_POST["city"];
         $Name=$_POST["Name"];
         $FirstName=$_POST["FirstName"];
         $Email=$_POST["Email"];
         $Street=$_POST["Street"];
         $ZipCode=$_POST["ZipCode"];

         $qry="select max(UserId) as usid from user_info ";
         $jd=0;
         $run=mysqli_query($con,$qry);
         while($rows =mysqli_fetch_array($run))
         {
             $jd=$rows[0];
         }
         $qry="Insert into user_info values
         ($cat, $jd+1, '$Name', '$FirstName', '$Email', '$Street', '$ZipCode')";
         if (mysqli_query($con, $qry)==TRUE)
         {
             echo '<script> alert("User added Succesfully");</script>';
             header('refresh:0; url =registration.php');
         }
         else {
             echo '<script> alert("please try again");</script>';
            //  header('refresh:0; url=adminLogin.php');
         }
            
        ?>
   </div>
    <div>
    <form action = "registration.php" method ="post" >
     <div class="container">
         <h1> Registration</h1>
         <p>Fill up the form with correct values.</p>
         <label for= "Name"> <b>Name </b> </label>
         <input type= "text" name = "Name" required>

         <label for= "firstname"> <b>first name </b> </label>
         <input type= "text" name = "FirstName" required>

         <label for= "firstname"> <b>email </b> </label>
         <input type= "text" name = "Email" required>

         <label for= "firstname"> <b>street</b> </label>
         <input type= "text" name = "Street" required>

         <label for= "firstname"> <b>zip-code </b> </label>
         <input type= "text" name = "ZipCode" required>

         <label for="cities">Select City </label>
                              <select name="city">
                              <option selected>Choose....</option>
            <?php
             $con=mysqli_connect("localhost","root","","userprofile");
             $qry="select id, city from cities";
             $run=mysqli_query($con,$qry);
             while ($rows=mysqli_fetch_array($run))
                {
            
                 echo "<option value=".$rows['id'].">".$rows['city']."</option>";
            
                             
                  }
                  ?>
                  
                   </select>


      <input type = "submit" name = "create"  value= "Register">

     </div>

        
    </form>
    
    <div>
    
</body>
</html>