<?php
//DB connection
include '../db.php';
//Variables


$user_ID="";

if(isset($_POST['id_val'])){

    $user_ID=$_POST['id_val'];
    selectUser( $user_ID);
}else{
    return false;
}
function selectUser( $user_ID){
    $conn = OpenCon();
    $query ="SELECT NAME,AGE,COUNTRY,GENDER FROM USERS WHERE ID='".$user_ID."'";
    $result= mysqli_query($conn, $query);

    
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['NAME'] . ',' . $row['AGE'] . ',' . $row['COUNTRY'] . ' ,' . $row['GENDER'] ;
    } 
    
}
?>