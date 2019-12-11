<?php

namespace App\DI;

use App\Connections\Base;
use App\Helpers\Urls;
use App\Project\SelectClientsChecklist;
use App\Project\InsertClientsChecklist;
use App\Project\UpdateClientsChecklist;
use App\Project\Login;
use App\Project\Logout;
use App\Project\Session;

class Container {

    public static function url() {
        $url = new Urls();
        return $url;
    }

    public static function conn() {
        $conn = new Base();
        return $conn;
    }
    
    public static function getInsertClientsChecklist() {
        $insertClientsChecklist = new InsertClientsChecklist(self::conn());
        return $insertClientsChecklist;
    }

    public static function getSelectClientsChecklist() {
        $selClientsChecklist = new SelectClientsChecklist(self::conn());
        return $selClientsChecklist;
    }
    
    public static function getUpdateClientsChecklist() {
        $updateClientsChecklist = new UpdateClientsChecklist(self::conn());
        return $updateClientsChecklist;
    }
    
    public static function getLogin()
    {
        $login = new Login(self::conn());
        return $login;
    }
    
    public static function getSes()
    {
        $ses = new Session();
        return $ses;
    }
    
    public static function getLogout()
    {
        $logout = new Logout();
        return $logout;
    }
}
