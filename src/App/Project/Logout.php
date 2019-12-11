<?php

namespace App\Project;


session_start();

//$logout = new Logout();
//$logout->endSes();

class Logout
{

    public function endSes()
    {
        if ($_SESSION['AUTH'] == true) {
            session_destroy();
            session_unset();
            return header("Location: login");
        } else {
            return false;
        }
    }

}

