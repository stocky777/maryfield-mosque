<?php
require_once "database.php";
//if there is a session this will have all the details required
session_start();
//login class will have all the required functions for making the login work
class login
{
    //storing the connection instance here
    private $conn;
    //storing the user
    private $user = " ";
    //storing the password
    private $password = " ";
    //constructor will automatically get and set the data
    //will attempt login
    //check->login to have a clear picture of the login logic (read comments)
    //
    public function __construct($user, $password)
    {
        $db = new db();
        $this->conn = $db->connect();
        $this->user = $user;
        $this->password = $password;
    }

    //login takes 2 arguments which are user and password stored
    //first three lines asks database to select all the users where has the user as user and password as password
    //then gets the results
    //checks if the user has checked the remember me checkbox, if so it will start the function rememberme()
    //check->rememberme() to have a clear picture, read comments
    //it checks if 
    public function login()
    {
        $query = $this->conn->prepare("SELECT * FROM user WHERE name = ? AND password = ?");
        $query->bind_param("ss",$this->user,$this->password);
        $query->execute();
        //echo $user.$password;
        $results = $query->get_result();
        if($results->num_rows == 1)
        {
            return True;
        } else {
            return False;
        }
    }

    public function rememberme()
    {
        $authentication = $this->login();
        if( $authentication === True){
            session_start();
            $_SESSION["user"] = $this->user;
            $_SESSION["token"] = bin2hex(random_bytes(32));
        }
    }

    




}







?>