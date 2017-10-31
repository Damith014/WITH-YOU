<?php

/*
 * Database connection and checking
 * 
 * 
 */
 function OpenCon()
 {
     $host="localhost";
     $user="root";
     $password="";
     $database="WITH_YOU";


     $conn = mysqli_connect($host, $user, $password,$database);
     
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
     return $conn;
}


function CloseCon($conn){
    mysqli_close($conn);
}
?>

