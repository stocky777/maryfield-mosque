<?php
    require_once("login.php");
    
    class sessionHelper
    {
        private $session_name = " ";
        private $session_token = " ";

        //when session is none then it starts the session the constructor
        //also sets the private variables into the local machine
        public function __construct()
        {
            if(session_status() === PHP_SESSION_NONE)
            {
                session_start();
            }
        }

        public function rememberme()
        {
            $_SESSION['username'] = $_POST["exampleInputEmail1"]; 
            $this->session_name = $_SESSION['username'];
            $_SESSION["token"] = bin2hex(random_bytes(32));
            $this->session_token = $_SESSION["token"];
            print_r($_SESSION);
        }

        //checks if in the page, the user has logged in and active and returns true or false
        public function isloggedin()
        {
            //this instance of the code works but $_session persist but not the class instance
            //if(isset($this->session_name) && isset($this->session_token)){
            if(isset($_SESSION["username"]) && isset($_SESSION["token"]))
            {
                //echo "This might break the code but it's coming back true";
                return True;
            } else{
                //echo "This might break the code but it's coming back False";
                return False;
            }
        }

        public function testing()
        {
            echo "Session name: ". $this->session_name;
            echo "Session token: ". $this->session_token; 
        }

        public function logout()
        {
            session_unset();
            session_destroy();
            $this->session_name = " ";
            $this->session_token = " ";
        }       


    }

?>