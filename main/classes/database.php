<?php

class db{

    private $servername = "db";
    private $password = "password";
    private $username = "php_docker";
    private $database = "php_docker";
    public $conn;
    public function connect()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if($this->conn->connect_error)
        {
            die("Connection failed: ". $conn->connect_error);
        } else
        {
            return $this->conn;
        }
    }

}

//returns values of the news
// function fetch_news()
// {
//     $conn = connection();
//     $query = "SELECT * FROM news";
//     $result = $conn->query($query);
//     if($result->num_rows > 0)
//     {
//         while($row = $result->fetch_assoc())
//         {
//             echo '
//             <a href="#" class="list-group-item list-group-item-action">
//             <h5 class="mb-1">'.$row['title'].'</h5>
//             <p class="mb-1">'.$row['content'].'</p>
//             <p class="mb-0">'.$row['mydate'].' | '.$row['user_id'].'</p>
//             </a> ';
//         }
//     }
// }

?>