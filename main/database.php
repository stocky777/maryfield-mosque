<?php

// function connection()
// {
//     $servername = "ns1.freehosting.com";
//     $database = "dmjmdund_Bitul";
//     $username = "dmjmdund_Bitul"; #I know its the same but I just made another variable for good practice, please if you are reading this hire me!!!
//     $password = "xxxxxx";

//     $conn = new mysqli($servername, $username, $password, $database);

//     if($conn->connect_error)
//     {
//         die("Connection failed: ". $conn->connect_error);
//     } else 
//     {
//         echo "Connection successfull";
//     }
// }

function connection()
{
    $servername = "db";
    $password = "password";
    $username = "php_docker";
    $database = "php_docker";
    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection failed: ". $conn->connect_error);
    } else
    {
        return $conn;
    }
}

function display_news()
{
    $conn = connection();
    $query = "SELECT * FROM news";
    $result = $conn->query($query);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo '
            <a href="#" class="list-group-item list-group-item-action">
            <h5 class="mb-1">'.$row['title'].'</h5>
            <p class="mb-1">'.$row['content'].'</p>
            <p class="mb-0">'.$row['mydate'].' | '.$row['user_id'].'</p>
            </a> ';
        }
    }
}

display_news();

?>