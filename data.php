<?php 
/**
 * 
 *  include_once "config.php";
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$connection){
        throw new Exception("Cannot Connect TO Database");
    }else{
        echo "connected</br>";

        echo mysqli_query($connection,"INSERT INTO tasks(task,date)VALUES('Do Something More','10-08-25')");
        $result = mysqli_query($connection,"SELECT*FROM tasks");
        while($data = mysqli_fetch_assoc($result)){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
        mysqli_close($connection);
    }

*/
   
?>