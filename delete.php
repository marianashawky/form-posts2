<?php 
     require('databaseconnection.php');


      if(isset($_GET['id'])){
          
        $id =  $_GET['id'];     
   
       $sql = "delete from post where id =".$id;
       
       $result =   mysqli_query($con,$sql);    
   
          if($result){
             
              header("Location: index.php");

          }else{
              echo 'post can not deleted ';
          }
       
   
        }else{

          header("Location: index.php");

      }

      




?>