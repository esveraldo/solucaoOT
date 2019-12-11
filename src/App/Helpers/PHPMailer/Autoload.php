<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers\PHPMailer;

/**
 * Description of Autoload
 *
 * @author aldo
 */
class Autoload {

    public function autoloadPhpMailer($class)
    {
        $newUrl = str_replace('PHPMailer\\PHPMailer\\', '', $class);
        if (file_exists('../lib/PHPMailer/src' . DIRECTORY_SEPARATOR . $newUrl . '.php')) {
            require_once '../lib/PHPMailer/src' . DIRECTORY_SEPARATOR . $newUrl . '.php';
        } else {
            echo 'Erro ao incluir a classe <strong>' . $newUrl . '.php </strong>';
        }
    }
    
    public function autoloadPhpMailerSite($class)
    {
        $newUrl = str_replace('PHPMailer\\PHPMailer\\', '', $class);
        if (file_exists('lib/PHPMailer/src' . DIRECTORY_SEPARATOR . $newUrl . '.php')) {
            require_once 'lib/PHPMailer/src' . DIRECTORY_SEPARATOR . $newUrl . '.php';
        } else {
            echo 'Erro ao incluir a classe <strong>' . $newUrl . '.php </strong>';
        }
    }
    
}
