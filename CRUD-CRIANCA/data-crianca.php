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
        $cmd = $this->pdo->query("SELECT * FROM crianca ORDER BY id_crianca ");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    //FUNCAO DE CADASTRAR TERAPEUTAS NO BANCO DADOS 
    public function cadastrarTerapeuta($nome_crianca, $email_crianca, $senha_crianca, $deficiencia, $genero)   )

}
?>