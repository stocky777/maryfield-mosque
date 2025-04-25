<?php
require_once "database.php";

class login 
{
    private $conn;
    private $user;
    private $password;

    public function __construct($user, $password)
    {
        $db = new db();
        $this->conn = $db->connect();
        $this->user = $user;
        $this->password = $password;
        $this->login($this->user, $this->password);
    }

    public function login($user, $password)
    {
        $query = $this->conn->prepare("SELECT * FROM user WHERE name = ? AND password = ?");
        $query->bind_param("ss",$user,$password);
        $query->execute();
        $results = $query->get_result();
        if($results->num_rows === 1)
        {
            return $results->fetch_assoc();
        } else {
            return False;
        }
    }


}







?>