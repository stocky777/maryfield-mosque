<?php
//this class will take the connection and process the data from the database
//this class will also insert the information from the admin, :| which is not implemented yet
require_once "database.php"; //may need to change where this is stored
class News {
    private $conn;

    public function __construct()
    {
        //creating a db object
        $db = new db();
        //calling the db class for the connection function which will grant to manipulate or insert data
        $this->conn = $db->connect();
    }

    //fetch_news function fetches all the available articles in the db and therefore returns the array/list of items 
    public function fetch_news()
    {
     $query = "SELECT * FROM news";
     $result = $this->conn->query($query);
     if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $newslist[] = $row;
            }
        }
        return $newslist;
    }



}


?>