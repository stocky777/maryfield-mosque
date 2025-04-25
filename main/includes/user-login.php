<?php 
require_once "../classes/login.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USER = $_POST["exampleInputEmail1"];
    $PASS = $_POST["exampleInputPassword1"];
    $userlogin = new login($USER, $PASS);
    if($userlogin)
    {
        echo "login successfull";
    } else {echo "Login failed, please try again";}
}
?>