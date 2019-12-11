<?php

namespace App\Project;

session_start();

class Session
{
    public function ses()
    {
        if($_SESSION['AUTH'] !== true){
            return true;
        }else{
            return false;
        }
    }
}