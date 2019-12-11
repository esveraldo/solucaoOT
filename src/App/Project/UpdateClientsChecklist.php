<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Project;

use App\Contracts\InterfaceConnection;

/**
 * Description of updateClientsChecklist
 *
 * @author Esveraldo
 */
class UpdateClientsChecklist {

    private $connection;
    private $id;
    private $status;
    private $obs;
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function getStatus() {
        return $this->status;
    }

    function getObs() {
        return $this->obs;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    
    
    public function __construct(InterfaceConnection $conn) {
        $this->connection = $conn->getConnection();
    }
    
    public function updateObs()
	{
		try{
			$stmt = $this->connection->prepare("UPDATE status_checklist SET status = :status, obs = :obs WHERE id = :id");
                        $stmt->bindValue(":status", $this->getStatus());
                        $stmt->bindValue(":obs", $this->getObs());
                        $stmt->bindValue(":id", $this->getId());
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}catch(\PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}
	}

}
