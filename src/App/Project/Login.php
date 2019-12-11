<?php

namespace App\Project;

use App\Contracts\InterfaceConnection;

class Login
{
    private $user;
    private $pass;
    private $status;
    private $tempoSessao;
    private $connection;

    public function __construct(InterfaceConnection $conn) {
        $this->connection = $conn->getConnection();
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getTempoSessao()
    {
        return $this->tempoSessao;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setTempoSessao($tempoSessao)
    {
        $this->tempoSessao = $tempoSessao;
        return $this;
    }

    public function login()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM authentication WHERE login = :login AND senha = :senha");
            $stmt->bindValue(":login", $this->getUser());
            $stmt->bindValue(":senha", $this->getPass());
            $stmt->execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch();
            //var_dump($count, $row);
            //if ($count == 1 && !empty($row) && password_verify($this->getPass(), $row[3]) == $row[3]) {
            if ($count == 1 && !empty($row)) {
//                if($row[5] == "nao" && $row[5] != null){
//                    return;
//                }
                $this->setStatus($row[4]);
                $confirmacao = $this->getTempoSessao();
                if($confirmacao == "1"){
                    /* define o limitador de cache para 'must-revalidate' tem a opção também de 'private' */
                    session_cache_limiter('private');
                    /* define o prazo do cache em 720 minutos */
                    session_cache_expire(720);
                    //12 horas 60 * 60 * 12
                    session_set_cookie_params('43200');
                }
                session_start();
                $_SESSION['AUTH'] = true;
                $_SESSION['nome'] = $row[1];
                $_SESSION['login'] = $row[2];
                //$_SESSION['id_setor'] = $row[2];
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }


}