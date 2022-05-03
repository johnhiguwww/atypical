<?php
Class Terapeuta{
    private $pdo;
    public $msgErro = "";
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
    public function buscarDadosTerapeuta()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT nome_terapeuta,formacao,registro_medico,tempo_experiencia FROM terapeuta"); 
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;  
    }
    //FUNCAO DE CADASTRAR TERAPEUTAS NO BANCO DADOS 
    public function cadastrarTerapeuta($nome_terapeuta,
    $email_terapeuta,
    $senha_terapeuta,
    $formacao,
    $registromedico,
    $tempoexperiencia)
    {     
        // ANTES DE CADSTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO
        $cmd = $this->pdo->prepare("SELECT id_terapeuta from terapeuta WHERE email_terapeuta = :e");
        $cmd -> bindValue(":e",$email_terapeuta);
        $cmd->execute();
        if($cmd->rowCount() > 0)//email ja existe no banco
        {
            return false;
        }else // nao foi encontrado o email
        {
            $cmd = $this->pdo->prepare("INSERT INTO terapeuta 
            (nome_terapeuta,
            email_terapeuta,
            senha_terapeuta,
            formacao,
            registro_medico,
            tempo_experiencia)
            VALUES (:n, :e, :s, :f, :r, :t)");
            $cmd->bindValue(":n",$nome_terapeuta);
            $cmd->bindValue(":e",$email_terapeuta);
            $cmd->bindValue(":s",md5($senha_terapeuta));
            $cmd->bindValue(":f",$formacao);
            $cmd->bindValue(":r",$registromedico);
            $cmd->bindValue(":t",$tempoexperiencia);
            $cmd->execute(); 
            return true;//cadastrado
        }
    }
    public function excluirTerapeuta($id_terapeuta){
        $cmd = $this->pdo->prepare("DELETE FROM terapeuta WHERE id_terapeuta = :id_terapeuta");
        $cmd -> bindValue(":id_terapeuta",$id_terapeuta);
        $cmd -> execute();
    }
    //ATUALIZAR DADOS NO BANCO DE DADOS
    public function atualizarDados($id_terapeuta,$nome_terapeuta,$email_terapeuta,$senha_terapeuta,$formacao,$registromedico,$tempoexperiencia)
    {
        $cmd = $this->pdo->prepare("UPDATE terapeuta SET nome_terapeuta = :n, email_terapeuta = :e, senha_terapeuta = :s, formacao = :f, registro_medico = :r , tempo_experiencia = :t WHERE id_terapeuta = :id_terapeuta");
        $cmd->bindValue(":n",$nome_terapeuta);
        $cmd->bindValue(":e",$email_terapeuta);
        $cmd->bindValue(":s",md5($senha_terapeuta));
        $cmd->bindValue(":f",$formacao);
        $cmd->bindValue(":r",$registromedico);
        $cmd->bindValue(":t",$tempoexperiencia);
        $cmd->execute(); 
    }
// ====================================================================================================================================================
    public function logarTerapeuta($email_terapeuta,$senha_terapeuta)
    {
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id_terapeuta FROM usuarios WHERE 
        email_terapeuta = :e AND  senha_terapeuta = :s");
        $sql->bindValue(":e",$email_terapeuta);
        $sql->bindValue(":s",$senha_terapeuta);
        $sql->execute();
        if($sql->rowCount()> 0)
        {
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_terapeuta'] = $dado['id_terapeuta'];
            return true;//logado com sucesso
        }
        else
        {
           return false;//não foi possivel logar 
        }

    }
}
?>