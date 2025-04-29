<?php 
require_once "../classes/login.php";
require_once "../classes/session.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USER = $_POST["exampleInputEmail1"];
    $PASS = $_POST["exampleInputPassword1"];
    $CHECKLIST = isset($_POST["remember"]);
    $userlogin = new login($USER, $PASS);
    $session = new sessionHelper();
    $result = $userlogin->login();
    $isloggedin = $session->isloggedin();
    //print_r($isloggedin); 
    if(!$isloggedin){
        if($result === True)
        {
            if(isset($_POST['remember']))
            {
                $session->rememberme();
                $session->testing();
                echo "checkbox clicked";
            }
            echo "login successfull";
        } 
        else {
            echo "Login failed, please try again";
        }
    } else 
    {
        echo "The return value is True";
    }
}
?>