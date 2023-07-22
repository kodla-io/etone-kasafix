<?php
use CodeIgniter\Events\Events;

class Init
{
    public function __construct()
    {
        Events::on('action_testing', static function () {
            echo "Hi from Init.php :)";
        }, 100);
    }
}


$init = new Init();