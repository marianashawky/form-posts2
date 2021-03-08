<?php 
 
       require 'databaseconnection.php';

       $sql = "select * from post";
       $result = mysqli_query($con,$sql);   
      

?>




<!DOCTYPE HTML>
<html>

<head>
    <title>data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>Posts|| <a href="formpost.php">form</a></h1>

        </div>






        <table class='table table-hover table-bordered table-dark'>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>content</th>
                <th>created</th>
                <th>Action</th>
            </tr>




<?php 
             while($data = mysqli_fetch_assoc($result)){

              
                echo '<tr>';
            
                echo '<td>'.$data["id"].'</td>';
                echo '<td>'.$data["title"].'</td>';
                echo '<td>'.$data["content"].'</td>';
                echo '<td>'.$data["created"].'</td>';

                echo "<td>";
                echo "<a href='delete.php?id=".$data['id']."' class='btn btn-danger m-r-1em'>Delete</a> " ;
                echo "<a href='edit.php?id=".$data['id']."' class='btn btn-primary m-r-1em'>Edit</a> ";
                echo "</td>";

                echo '</tr>';

              }

//


?>







        </table>

    </div>



</body>

</html>
