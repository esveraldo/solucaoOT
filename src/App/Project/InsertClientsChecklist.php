<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Project;

use App\Contracts\InterfaceConnection;

/**
 * Description of InsertClientsChecklist
 *
 * @author Esveraldo
 */
class InsertClientsChecklist {

    private $connection;
    private $fields = [];
    private $clients_checklist_id;
    private $status;
    private $obs;
    
    function getFields() {
        return $this->fields;
    }

    function setFields($fields) {
        $this->fields = $fields;
    }
    
    function getClients_checklist_id() {
        return $this->clients_checklist_id;
    }

    function getStatus() {
        return $this->status;
    }

    function getObs() {
        return $this->obs;
    }

    function setClients_checklist_id($clients_checklist_id) {
        $this->clients_checklist_id = $clients_checklist_id;
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
    
    public function insert()
	{
		try{
			$stmt = $this->connection->prepare("INSERT INTO clients_checklist( 
                            rsocial,
                            cnpj,
                            endereco,
                            contato,
                            telefone,
                            email,
                            bilhetagem,
                            relatorios,
                            outros_relatorios,
                            listagem,
                            regras_imp,
                            pool,
                            cotas,
                            alerta_cotas,
                            policy,
                            lib_cracha,
                            outros_lib_cracha,
                            chargerback,
                            tracking,
                            releaser,
                            dispositivos_liberacao,
                            outros_dispositivos_liberacao,
                            implementacao,
                            instalacao,
                            sites,
                            impressao,
                            sem_server_imp,
                            sis_op,
                            comunicacao_entre_sites,
                            user_autentic_estacoes,
                            imp_rede_usb,
                            licenca_sql_server,
                            instalar_sql_server_express,
                            server_dominio_autenticacao,
                            outros_server_dominio_autenticacao,
                            importacao_dominio,
                            outros_importacao_dominio,
                            qtde_users,
                            qtde_contas,
                            qtde_grupos,
                            qtde_estacoes_trabalho,
                            sis_op_est_trabalho,
                            outros_sis_op_est_trabalho,
                            navegadores_utilizados,
                            outros_navegadores_utilizados,
                            antivirus_utilizado,
                            erp_utilizado,
                            plataforma_erp,
                            impressao_erp,
                            bilhetagem_erp,
                            forma_desej_bilhetagem_erp,
                            em_cluster,
                            em_cetrix,
                            solaris,
                            ibm,
                            amb_impressao_extraordinario,
                            mod_e_qtde_de_impressoras,
                            mod_e_qtde_de_impressoras_usb,
                            server_imp_resp,
                            restricoes_do_fabricante,
                            descricao_restricao,
                            objetivo_projeto,
                            observacoes_adicionais
                                 ) 
                            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                   ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                                   ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
			$stmt->execute($this->getFields());
                        $id = $this->connection->lastInsertId();
			if($stmt->rowCount() > 0){			
                                return $id;
			}else{
				return false;
			}
		}catch(\PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}
	}
        
        public function insertObs()
	{
		try{
			$stmt = $this->connection->prepare("INSERT INTO status_checklist(clients_checklist_id, status, obs) 
                            VALUES(:clients_checklist_id, :status, :obs)");
                        $stmt->bindValue(":clients_checklist_id", $this->getClients_checklist_id());
                        $stmt->bindValue(":status", $this->getStatus());
                        $stmt->bindValue(":obs", $this->getObs());
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
