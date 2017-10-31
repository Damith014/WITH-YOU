<?php
//DB connection
include '../db.php';
include '../models/messageModel.php';
//Variables
$msgData = "";
$query = "";

//
if (isset($_POST['msg'])) {
    $msgData = $_POST['msg'];
    sendMsg();
} else {
    echo "400";
}
function sendMsg() {
    $conn = OpenCon();
    global $msgData;
    print_r($msgData);
    $msg = new Msg($msgData);
    
    //print_r($user);
    
    $query = "INSERT INTO MESSAGES (USER_ID, MESSAGE, TIME)
                VALUES ('" . $msg->getUser_id() . "', '" . $msg->getMsg() . "', '" . $msg->getTime() . 
            "')";
    if (mysqli_query($conn, $query)) {
        echo "200";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        echo "500";
    }
}
?>