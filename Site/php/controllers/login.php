<?php
//DB connection
include '../db.php';
include '../models/userModel.php';
//Variables
$userData = "";
$query = "";

//

if (isset($_POST['user'])) {
    $userData = $_POST['user'];
    loginUser();
} else {
    echo "400";
}
function loginUser() {
    $conn = OpenCon();
    global $userData;
    print_r($userData);
    $user = new User($userData);
    
    print_r($user);
    
    $query = "INSERT INTO USERS (NAME,AGE,COUNTRY,GENDER)
                VALUES ('" . $user->getName() . "', '" . $user->getAge() . "', '" . $user->getCountry() . 
            "', '" . $user->getGender() . "')";
    if (mysqli_query($conn, $query)) {
        echo "200";
        header('Location: ../../chat.php');
        
    } else {
        //echo "Error: " . $query . "<br>" . mysqli_error($conn);
        echo "500";
    }
}


?>