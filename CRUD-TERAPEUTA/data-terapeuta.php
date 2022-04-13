<?php

Class Terapeuta{
    private $pdo;
    public function __construct($dbname,$host,$user,$senha)
    {
        try{
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
        }catch (PDOException $e){
            echo "Erro com banco de dados: ".$e->getMessage();
            exit();
        }catch (Exception $e){
            echo "Erro generico ".$e->getMessage();
            exit();
    }
}
    //buscar os dados e colocar no canto direito
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM terapeuta ORDER BY nome_terapeuta"); 
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;  
    }
    //FUNCAO DE CADASTRAR TERAPEUTAS NO BANCO DADOS 
    public function cadastrarPessoa($nome, $email, $senha, $genero, $nascimento, $formacao, $registro_medico, $tempo_experiencia){
        // ANTES DE CADSTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO
        $cmd = $this->pdo->prepare("SELECT id from terapeuta WHERE email_terapeuta = :e");
        $cmd->bindValue(":e",$email);
        $cmd->execute();
        if($cmd->rowCount() > 0)//email ja existe no banco
        {
            return false;
        }else // nao foi encontrado o email
        {
            $cmd = $this->pdo->prepare("INSERT INTO terapeuta 
            (nome_terapeuta, email_terapeuta, senha_terapeuta, genero_masculino_to, genero_feminino_to, genero_outros_to, data_nascimento_to, formacao, registro_medico, tempo_experiencia)
            VALUES (:n, :e, :s, :g, :d, :f, :r, :t)");
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",$senha);
            $cmd->bindValue(":g",$genero);
            $cmd->bindValue(":d",$nascimento);
            $cmd->bindValue(":f",$formacao);
            $cmd->bindValue(":r",$registro_medico);
            $cmd->bindValue(":t",$tempo_experiencia);
            return true;
        }
    }
}
?>