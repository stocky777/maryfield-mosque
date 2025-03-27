<?php
//class for timetable
class PrayerTimetable {
    //response of the api will be stored here
    private $response;
    //data of the api from the response will be stored here
    private $data;
    private $api_url;
    //construct class when called will automatically call the api aswell and therefore decode it
    public function __construct(string $json)
    {
        $this->response = file_get_contents($json);
        $this->data = json_decode($this->response);
        $this->api_url = $json;
    }

    public function checkdateandchange(){
        echo $this->api_url;
        echo '<br>--------------------------------------------- </br>';
        //echo str_replace("2025","2024",$this->api_url);
        $thismonth = date('n');
        $thisyear = date('Y');
        echo $thismonth, $thisyear;
        echo '<br>--------------------------------------------- </br>';
        $TMUrl = preg_replace("/\/\d{4}\/\d{1}\//","$thisyear/$thismonth/",$this->api_url);
        echo $TMUrl;
    }

    //function doesnt't store the data due to database memory not being enough
    public function getTimetable()
    {
        $timingList = [];
        foreach ($this->data->data as $day)
        {
            $base = $day->date->gregorian;
            $date = $base->date;
            $weekday = $base->weekday->en;
            echo $date;
            echo $weekday;
            //day contains all the prayer times
            //the foreach loop will loop until the end of the month, diplsaying namaz name and time
            foreach($day->timings as $title => $time)
            {
                //condition of removing 2 type of data
                if($title !== "Firstthird" && $title !== "Lastthird"){
                //may need to clear out firstthird. lastthird
                echo $title;
                
                echo str_replace(" (UTC)"," ",$time);
                //echo $timingList;
                }
            }
        }
        //return $timingList; no return required when this instantiate
    }


}

//original url in case it doesn't work anymore
#$api_url = "https://api.aladhan.com/v1/calendar/2025/3?latitude=56.47404281844331&longitude=-2.963501315403592&method=3&shafaq=general&tune=5%2C3%2C5%2C7%2C9%2C-1%2C0%2C8%2C-6&timezonestring=UTC&calendarMethod=UAQ";

$api_url = "https://api.aladhan.com/v1/calendar/2025/3?latitude=56.47404281844331&longitude=-2.963501315403592&method=3&shafaq=general&tune=5%2C3%2C5%2C7%2C9%2C-1%2C0%2C8%2C-6&timezonestring=UTC&calendarMethod=UAQ";
$timetable = new PrayerTimeTable($api_url);
$test = $timetable->checkdateandchange();
//$ttbl = $timetable->getTimetable();


        


        ?>