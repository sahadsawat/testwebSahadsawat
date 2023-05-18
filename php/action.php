<?php  
 //action.php  
 include 'crud.php';  
 $object = new Crud();  
 if(isset($_REQUEST["action"]))  
 {  
      if($_REQUEST["action"] == "Load")  
      {  
           echo $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");  
      }  
      if($_REQUEST["action"] == "Insert")  
      {  
           $first_name = mysqli_real_escape_string($object->connect, $_REQUEST["first_name"]);  
           $last_name = mysqli_real_escape_string($object->connect, $_REQUEST["last_name"]);  
           $image = $object->upload_file($_FILES["user_image"]);  
           $query = "  
           INSERT INTO users(first_name, last_name, image)VALUES('".$first_name."', '".$last_name."', '".$image."')  
           ";  
           $object->execute_query($query);  
           echo 'Data Inserted';  
      }  
 }
   
 ?>  
 