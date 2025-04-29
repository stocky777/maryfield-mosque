<?php 
require_once "../classes/login.php";
require_once "../classes/session.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $USER = $_POST["exampleInputEmail1"];
    $PASS = $_POST["exampleInputPassword1"];
    $session = new sessionHelper();
    $userlogin = new login($USER, $PASS);
    $CHECKLIST = isset($_POST["remember"]);
    $result = $userlogin->login();
    $isloggedin = $session->isloggedin();
    //print_r($isloggedin); 
    if(!$isloggedin){
        if($result === True)
        {
            if(isset($_POST['remember']))
            {
                $session->rememberme();
                //$session->testing();
                //echo "checkbox clicked";
            }
            header("Location: ../adminpage.php?title=Welcome&auth=For more info please follow intructions on screen");
            //echo "login successfull";
            ?>
            <?php
        } 
        else {
            //echo "Login failed, please try again";
            header("Location: ../adminpage.php?title=Wrong password&auth=Please try again, if you having any difficulty please contact IT department");
        }
    } else 
    {
        header("Location: ../adminpage.php?title=Welcome back&auth=please make sure to logout when finished");
        //echo "The return value is True";
        ?>
        <a href="logout.php">Logout</a>
        <?php
    }
}
?>