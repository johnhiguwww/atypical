<?php

Class Crianca{
    private $pdo;
    public function __construct($dbname,$host,$user,$senha)
    {
        try{
           $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
        }catch(PDOException $e){
            echo "Erro com banco de dados: ".$e->getMessage();
            exit();
        }catch(Exception $e){
            echo "Erro generico".$e->getMessage();
            exit();
        }
    }
    //buscar os dados e colocar no canto direito
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT id_crianca,
                                nome_crianca,
                                deficiencia,genero,
                                data_nas, social,
                                links_hiperfoco,links_hiperfoco2
                                links_hiperfoco3,motora,
                                aprendizagem,gestacao,
                                desenvolvimento_motor,psicologia,
                                fonoaudiologia,medicamento
                                FROM crianca");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    //FUNCAO DE CADASTRAR CRIANÇAS NO BANCO DADOS 
    public function cadastrarCrianca($nome_crianca, 
    $email_crianca, 
    $senha_crianca,
    $deficiencia,
    $genero,
    $data_nas,
    $social,
    $links_hiperfoco,
    $links_hiperfoco2,
    $links_hiperfoco3,
    $motora,
    $aprendizagem,
    $gestacao,
    $desenvolvimento_motor,
    $psicologia,
    $fonoaudiologia,
    $medicamento)
    {
        $cmd = $this->pdo->prepare("SELECT id_crianca FROM crianca WHERE email_crianca = :e");
        $cmd-> bindValue(":e",$email_crianca);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
            return false;
        }else
        {
            $cmd = $this->pdo->prepare("INSERT INTO crianca (
            nome_crianca, 
            email_crianca, 
            senha_crianca, 
            deficiencia,
            genero,
            data_nas,
            social,
            links_hiperfoco,
            links_hiperfoco2,
            links_hiperfoco3,
            motora,
            aprendizagem,
            gestacao,
            desenvolvimento_motor,
            psicologia,
            fonoaudiologia,
            medicamento)
            VALUES (:n,:e,:s,:d,:g,:dn,:so,:lk,:lk2,:lk3,:mo,:ap,:ge,:dm,:ps,:fo,:me)");

            $cmd->bindValue(":n",$nome_crianca);
            $cmd->bindValue(":e",$email_crianca);
            $cmd->bindValue(":s",$senha_crianca);
            $cmd->bindValue(":d",$deficiencia);
            $cmd->bindValue(":g",$genero);
            $cmd->bindValue(":dn",$data_nas);
            $cmd->bindValue(":so",$social);
            $cmd->bindValue(":lk",$links_hiperfoco);
            $cmd->bindValue(":lk2",$links_hiperfoco2);
            $cmd->bindValue(":lk3",$links_hiperfoco3);
            $cmd->bindValue(":mo",$motora);
            $cmd->bindValue(":ap",$aprendizagem);
            $cmd->bindValue(":ge",$gestacao);
            $cmd->bindValue(":dm",$desenvolvimento_motor);
            $cmd->bindValue(":ps",$psicologia);
            $cmd->bindValue(":fo", $fonoaudiologia);
            $cmd->bindValue(":me",$medicamento);
            $cmd->execute();
            return true;
        }
    }
    public function excluirCrianca($id_crianca){
        $cmd = $this->pdo->prepare("DELETE FROM crianca WHERE id_crianca = :id_crianca");
        $cmd -> bindValue(":id_crianca",$id_crianca);
        $cmd -> execute();
    }
    public function buscarDadosCrianca($id_crianca)
    {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM crianca WHERE id_crianca = :id_crianca");
        $cmd->bindValue(":id_crianca",$id_crianca);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>