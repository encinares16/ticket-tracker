<?php 
    // class ConnectDB {
    //     public $connect;
    //     function __connect($connect){
    //         $this->connect = $connect;
    //         if (!$connect) {
    //             die("Database connected failed: " . mysqli_connect_error());
    //         }
    //     }
    // }
    $server_name = 'localhost';
    $server_user = 'root';
    $server_pass = '';
    $db_name = 'login-crud-php';

    $connect = mysqli_connect($server_name, $server_user, $server_pass, $db_name);

    if(!$connect){
        echo "Failed to connect to server";
    exit();
    }
    // $connect->__connect(mysqli_connect("localhost", "root", "", 'login-crud-php'));
?>