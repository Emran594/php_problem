<?php
include_once ('config.php');
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Can not Connect To Database");
}else{
    $action = $_POST['action'] ?? '';
    if(!$action){
        header('Location: index.php');
        die();
    }else{
        $task = $_POST['task'];
        $date = $_POST['date'];
        $query = "INSERT INTO " . DB_TABLE . "(task,date) VALUES('{$task}','{$date}')";
        if (!mysqli_query( $connection, $query )) {
            echo("Error description: " . mysqli_error($connection));
            }else{
            header( 'Location: index.php?added=true' );
            }
    }
}
?>  
