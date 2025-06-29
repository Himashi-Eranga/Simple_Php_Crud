<?php

//include connection php
require_once "connection.php";

//ceck the database connection
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["uname"];
    $usergmail=$_POST["ugmail"];
    $usernumber=$_POST["unumber"];
    $useraddress=$_POST["uaddress"];
    $userpassword=$_POST["upassword"];

    //insert data to database

    $sql="insert into user_details (userName,userGmail,usernumber,userAddress,userPassword) VALUES ('$username', '$usergmail', '$usernumber', '$useraddress', '$userpassword')";

    //check if the insert was sucessful

    if($conn->query($sql)===TRUE){
        echo "<script>alert('Data Added Sucessfully')</script>";
    
    }
    else{
        echo "error :". $sql . "<br>" . $conn->error;
    }
}

$conn->close();
 

?>