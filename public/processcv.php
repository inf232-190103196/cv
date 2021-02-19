<?php

require_once('connections.php');

if (isset($_POST['btn-save1'])) {
    # code...
    $Name = mysqli_real_escape_string($con,$_POST['Name']);
    $Email = mysqli_real_escape_string($con,$_POST['Email']);
    $Message = mysqli_real_escape_string($con,$_POST['Message']);
  
    
  
     if (empty($Name)) {
        # code...
        echo 'Name is empty';
    }
    else
     {
       
        $sql = "insert into cv (Name,Email,Message) values ('$Name','$Email','$Message')";

        header('Location:http://localhost/vsproject/index.php');
        $result = mysqli_query($con,$sql);

        if ($result)    
        {
            echo "Your Record has been saved in the database";
        }
        else{
            echo "Please check your query";
        }
    }

}


?>