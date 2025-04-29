<?php
class toast
{
    private $title;
    private $desc;
    private $time;
    public function __construct()
    {
        if(isset($_GET['title']) && isset($_GET['auth']))
        {
            $this->clear_data();
            $this->title = $_GET['title'];
            $this->desc = $_GET['auth'];
            $this->time = date("H:i");
        }
    }

    public function clear_data()
    {
        $this->title = " ";
        $this->desc = " ";
        $this->time = " ";
    }

    public function createToast()
    {
        return '<div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">'.$this->title.'</strong>
        <small class="text-body-secondary">'.$this->time.'</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        '.$this->desc.'
        </div>
        </div>';
    }
}


?>