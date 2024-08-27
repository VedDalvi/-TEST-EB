<?php
if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "auth";

    $connection = new mysqli($host,$dbusername,$dbpassword,$dbname);

    if($connection->connect_error){
        die("Connection Failed: ".$connection->connect_error);
    }

    //validate

    $sql = "select * from login where username = '{$username}' AND password = '{$password}' ";
    error_log($sql);
    $query = mysqli_query($connection,$sql);
   
    $row_count = mysqli_num_rows($query);

    if($row_count == 1){
       $row = mysqli_fetch_array($query);
       /*
       $id = $row['id'];
       session_start();
       $_SESSION['user_id'] = $id;
       */
       echo "Success";
      
    }

    else{
       echo "failed";
    }

    $connection->close();
}   
?>