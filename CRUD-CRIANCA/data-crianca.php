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
    //FUNCAO DE CADASTRAR CRIANÇAS NO BANCO DADOS 
    public function cadastrarCrianca($nome_crianca, 
    $email_crianca, 
    $senha_crianca,
    $deficiencia,
    $genero,
    $data_nas,
    $comportamentos,
    $interacao_social,
    $esteriotipia,
    $comunica_varbalmente,
    $link_hiperfoco,
    $link_hiperfoco2,
    $link_hiperfoco3,
    $motora_fina,
    $motora_grossa,
    $firmou_cabeca,
    $sentou_apoio,
    $engatinhou,
    $andou_anos,
    $tropeca_andar,
    $escada_alternado,
    $linha_reta,
    $pula_pe_so,
    $marcha_equina,
    $dificuldade_aprendizagem,
    $materias_escolares,
    $tdh,
    $prenatal,
    $dores_parto,
    $doenca_gestacao,
    $gestacao_risco,
    $gestacao_medicamento,
    $crianca_nascimento,
    $demonstra_carinho,
    $carinho_pessoa,
    $interesses_crianca,
    $brinca_sozinha,
    $descricao_socializacao,
    $compartilha_objeto,
    $identifica_sentimentos,
    $demonstra_empatia,
    $comportamentos_frustracoes,
    $sialorreia,
    $tosse_engasgo_alimentacao,
    $dificuldade_comunicacao,
    $alimentacao_consistencia,
    $ecolalias_tardias_imediatas,
    $contato_ocular_pessoas,
    $demora_de_fala,
    $dificuldade_de_brinca,
    $dificuldade_de_brinca_com_pessoas,
    $ingere_medicamento)
    {
    //     public function cadastrarCrianca($nome_crianca, $email_crianca, $senha_crianca, $deficiencia,$genero, $data_nas,$comportamentos,$interacao_social,$esteriotipia,$comunica_varbalmente)
    // {
        // ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRAD
        $cmd = $this->pdo->prepare("SELECT id_crianca FROM crianca WHERE email_crianca = :e");
        $cmd-> bindValue(":e",$email_crianca);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
            return false;
        }else
        {
            // $cmd = $this->pdo->prepare("INSERT INTO crianca (nome_crianca,
            // email_crianca, 
            // senha_crianca,
            // deficiencia,genero,
            // data_nasc,comportamentos,
            // interacao_social,
            // esteriotipia,
            // comunica_verbalmente)
            //  VALUES (:n,:e,:s,:d,:g,:dn,:ci,:il,:et,:cv)");
            $cmd = $this->pdo->prepare("INSERT INTO crianca (nome_crianca, 
            email_crianca, 
            senha_crianca, 
            deficiencia,
            genero,
            data_nasc, 
            comportamentos, 
            interacao_social, 
            esteriotipia, 
            comunica_verbalmente, 
            links_hiperfoco,  
            links_hiperfoco2,  
            links_hiperfoco3, 
            motora_fina, 
            motora_grossa, 
            firmou_cabeca, 
            sentou_apoio, 
            engatinhou, 
            andou_anos, 
            tropeca_andar, 
            escada_alternado, 
            linha_reta, 
            pula_pe_so,
            marcha_equina, 
            dificuldade_aprendizagem, 
            materias_escolares, 
            tdh, 
            prenatal, 
            dores_parto, 
            doenca_gestacao, 
            gestacao_risco, 
            gestacao_medicamento, 
            crianca_nascimento, 
            demonstra_carinho, 
            carinho_pessoa, 
            interesses_crianca, 
            brinca_sozinha, 
            brinca_outras_crianca, 
            descricao_socializacao, 
            compartilha_objeto, 
            identifica_sentimentos,
            demonstra_empatia, 
            comportamentos_frustracoes, 
            sialorreia, 
            tosse_engasgo_alimentacao,
            dificuldade_comunicacao, 
            alimentacao_consistencia,
            ecolalias_tardias_imediatas, 
            contato_ocular_pessoas, 
            demora_de_fala,
            dificuldade_de_brinca, 
            dificuldade_de_brinca_com_pessoas, 
            ingere_medicamento)
            VALUES (:n,:e,:s,:d,:g,:dn,:ci,:il,:et,:cv,:lk,:lk2,:lk3,:mf,:mg,:fc,:sa,:en,:aa,:ta,:ea,:lr,:pp,:me,:da,:me,:tdh,:pn,:dp,:dg,:gr,:gm,:cn,:dc,:cp,:ic,:bs,:ds,:co,:ids,:de,:cf,:si,:ta,:dc,:ac,:ei,:cp,:df,:db,:dbp,:im)");
            $cmd->bindValue(":n",$nome_crianca);
            $cmd->bindValue(":e",$email_crianca);
            $cmd->bindValue(":s",$senha_crianca);
            $cmd->bindValue(":d",$deficiencia);
            $cmd->bindValue(":g",$genero);
            $cmd->bindValue(":dn",$data_nas);
            $cmd->bindValue(":ci",$comportamentos);
            $cmd->bindValue(":il",$interacao_social);
            $cmd->bindValue(":et",$esteriotipia);
            $cmd->bindValue(":cv",$comunica_varbalmente);
            $cmd->bindValue(":lk",$link_hiperfoco);
            $cmd->bindValue(":lk2",$link_hiperfoco2);
            $cmd->bindValue(":lk3",$link_hiperfoco3);
            $cmd->bindValue(":mf",$motora_fina);
            $cmd->bindValue(":mg",$motora_grossa);
            $cmd->bindValue(":fc",$firmou_cabeca);
            $cmd->bindValue(":sa",$sentou_apoio);
            $cmd->bindValue(":en",$engatinhou);
            $cmd->bindValue(":aa",$andou_anos);
            $cmd->bindValue(":ta",$tropeca_andar);
            $cmd->bindValue(":ea",$escada_alternado);
            $cmd->bindValue(":lr",$linha_reta);
            $cmd->bindValue(":pp",$pula_pe_so);
            $cmd->bindValue(":me",$marcha_equina);
            $cmd->bindValue(":da",$dificuldade_aprendizagem);
            $cmd->bindValue(":me",$materias_escolares);
            $cmd->bindValue(":tdh",$tdh);
            $cmd->bindValue(":pn",$prenatal);
            $cmd->bindValue(":dp",$dores_parto);
            $cmd->bindValue(":dg",$doenca_gestacao);
            $cmd->bindValue(":gr",$gestacao_risco);
            $cmd->bindValue(":gm",$gestacao_medicamento);
            $cmd->bindValue(":cn",$crianca_nascimento);
            $cmd->bindValue(":dc",$demonstra_carinho);
            $cmd->bindValue(":cp",$carinho_pessoa);
            $cmd->bindValue(":ic",$interesses_crianca);
            $cmd->bindValue(":bs",$brinca_sozinha);
            $cmd->bindValue(":ds",$descricao_socializacao);
            $cmd->bindValue(":co",$compartilha_objeto);
            $cmd->bindValue(":ids",$identifica_sentimentos);
            $cmd->bindValue(":de",$demonstra_empatia);
            $cmd->bindValue(":cf",$comportamentos_frustracoes);
            $cmd->bindValue(":si",$sialorreia);
            $cmd->bindValue(":ta",$tosse_engasgo_alimentacao);
            $cmd->bindValue(":dc",$dificuldade_comunicacao);
            $cmd->bindValue(":ac",$alimentacao_consistencia);
            $cmd->bindValue(":ei",$ecolalias_tardias_imediatas);
            $cmd->bindValue(":cp",$contato_ocular_pessoas);
            $cmd->bindValue(":df",$demora_de_fala);
            $cmd->bindValue(":db",$dificuldade_de_brinca);
            $cmd->bindValue(":dbp",$dificuldade_de_brinca_com_pessoas);
            $cmd->bindValue(":im",$ingere_medicamento);
            $cmd->execute();
            return true;
        }
    }
}
?>