<?php 
require  'databaseconnection.php';


   

       if($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = strip_tags(htmlspecialchars(trim($_POST['title'])));  
        $content = $_POST['content'];
        $created= date("d/m/Y  h:i:sa ");
   


        if(empty($title) || empty($content)){

            echo 'empty field';
        }else{


        $sql  = "insert into post (title,content,created) values ('$title','$content','$created') "; 

        $result =  mysqli_query($con,$sql);

        if($result){
            echo 'success';
        }

    }
    

        }










?>