<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>timetable</title>
    <div class="container-fluid">
        <?php
        // #error handlers
        // if(json_last_error() !== JSON_ERROR_NONE)
        // {
        //     echo json_last_error_msg();
        // }else{
        //     $data = json_decode($response, flags: JSON_THROW_ON_ERROR);
        //     // echo "<pre>";
        //     // print_r($data);
        //     // echo "</pre>";

        //     foreach ($data->data as $day) 
        //     {
        //         echo "Date: " .$day->date->readable . "\n";
        //         foreach($day->timings as $prayer => $time){
                    
        //             echo "$prayer: $time \n";
        //         }
        //     }
        include("script.php");
            

            
            //$items = $data->data[0]->timings;
            
            //print_r($items);}

        


        ?>
    </div>
</head>
<body>
    


</body>
</html>