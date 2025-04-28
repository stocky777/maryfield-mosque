<?php 
require_once "../classes/login.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USER = $_POST["exampleInputEmail1"];
    $PASS = $_POST["exampleInputPassword1"];
    $CHECKLIST = isset($_POST["remember"]);
    $userlogin = new login($USER, $PASS);
    $result = $userlogin->login();
    if($result === True)
    {
        if(isset($_POST['remember']))
        {
            echo "checkbox clicked";
        }
        echo "login successfull";
        } 
        else {
            echo "Login failed, please try again";
        }
}
?>