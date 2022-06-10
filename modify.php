<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
        <th scope ="col"> CityID</th>
        <th scope ="col">UserId</th>
        <th scope ="col">Name</th>
        <th scope ="col">FirstName</th>
        <th scope ="col">Email</th>
        <th scope ="col">Street</th>
        <th scope ="col">ZipCode</th>
    </tr>
    <thead>
        
    <tbody>
        <?php 
        $con=mysqli_connect("localhost", "root", "", "userprofile");
        $qry="select * from user_info";
        $recset=mysqli_query($con, $qry);
        while($row=mysqli_fetch_array($recset)){
            echo "<td>";
            echo $row["id"];
            echo "<td>";

            echo "<td>";
            echo $row["UserId"];
            echo "<td>";

            echo "<td>";
            echo $row["Name"];
            echo "<td>";

            echo "<td>";
            echo $row["FirstName"];
            echo "<td>";
            
            echo "<td>";
            echo $row["Email"];
            echo "<td>";

            echo "<td>";
            echo $row["Street"];
            echo "<td>";

            echo "<td>";
            echo $row["ZipCode"];
            echo "<td>";

            echo "</td>";
            $ItemID=$row["UserId"];
            echo "<td>";

            echo "</td>";
             echo "<TD><a href='update.php?key=$ItemID'>MODIFY</>";
            echo "</td>
            </tr>";
          }
        ?>
        </tbody>
        </table>
    
</body>
</html>