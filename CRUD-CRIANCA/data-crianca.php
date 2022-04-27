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
    $comunica_verbalmente,
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
        $cmd = $this->pdo->prepare("SELECT id_crianca FROM crianca WHERE email_crianca = :e");
        $cmd-> bindValue(":e",$email_crianca);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
            return false;
        }else
        {
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
            VALUES (:n,:e,:s,:d,:g,:dn,:ci,:il,:et,:cv,:lk,:lk2,:lk3,:mf,:mg,:fc,:sa,:en,:aa,:ta,:ea,:lr,:pp,:me,:da,:me,:tdh,:pn,:dp,:dg,:gr,:gm,:cn,:cp,:ic,:bs,:ds,:co,:ids,:de,:cf,:si,:ta,:dc,:ac,:ei,:cp,:df,:db,:dbp,:im)");
            $cmd->bindValue(":n",$nome_crianca);
            $cmd->bindValue(":e",$email_crianca);
            $cmd->bindValue(":s",$senha_crianca);
            $cmd->bindValue(":d",$deficiencia);
            $cmd->bindValue(":g",$genero);
            $cmd->bindValue(":dn",$data_nas);
            $cmd->bindValue(":ci",$comportamentos);
            $cmd->bindValue(":il",$interacao_social);
            $cmd->bindValue(":et",$esteriotipia);
            $cmd->bindValue(":cv",$comunica_verbalmente);
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
    public function atualizarDados($nome_crianca, 
    $email_crianca, 
    $senha_crianca,
    $deficiencia,
    $genero,
    $data_nas,
    $comportamentos,
    $interacao_social,
    $esteriotipia,
    $comunica_verbalmente,
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
    $cmd = $this->pdo->prepare("UPDATE crianca SET nome_crianca = :n,
    email_crianca = :e,
    senha_crianca = :s,
    deficiencia = :e,
    deficiencia = :g,
    data_nas = :dn,
    comportamentos = :ci,
    interacao_social= : et,
    esteriotipia = :et,
    comunica_verbalmente = :cv,
    link_hiperfoco = :lk,
    link_hiperfoco2 = :lk2,
    link_hiperfoco3 = :lk3,
    motora_fina = :mf,
    motora_grossa = :mg,
    firmou_cabeca = :fc,
    sentou_apoio = : sa,
    engatinhou = :en,
    andou_anos = :aa,
    tropeca_andar = :ta,
    escada_alternado = :ea,
    linha_reta = :lr,
    pula_pe_so = :pp,
    marcha_equina = :me,
    dificuldade_aprendizagem = :da,
    materias_escolares = :me,
    tdh = :tdh,
    prenatal = :pn,
    dores_parto = :dp,
    doenca_gestacao = :dg,
    gestacao_risco = :gr,
    gestacao_medicamento = :gm,
    crianca_nascimento = :cn,
    carinho_pessoa = :cp,
    interesses_crianca = :ic,
    brinca_sozinha = :bs,
    descricao_socializacao = :ds,
    compartilha_objeto = :co,
    identifica_sentimentos = :ids,
    demonstra_empatia = :de,
    comportamentos_frustracoes = :cf,
    sialorreia = :si,
    tosse_engasgo_alimentacao = :ta,
    dificuldade_comunicacao = :dc,
    alimentacao_consistencia = :ac,
    ecolalias_tardias_imediatas = :ei,
    contato_ocular_pessoas = :cp,
    demora_de_fala = :df,
    dificuldade_de_brinca = :df,
    dificuldade_de_brinca = :db,
    dificuldade_de_brinca_com_pessoas = :dbp,
    ingere_medicamento = :im");
    $cmd->bindValue(":n",$nome_crianca);
    $cmd->bindValue(":e",$email_crianca);
    $cmd->bindValue(":s",$senha_crianca);
    $cmd->bindValue(":d",$deficiencia);
    $cmd->bindValue(":g",$genero);
    $cmd->bindValue(":dn",$data_nas);
    $cmd->bindValue(":ci",$comportamentos);
    $cmd->bindValue(":il",$interacao_social);
    $cmd->bindValue(":et",$esteriotipia);
    $cmd->bindValue(":cv",$comunica_verbalmente);
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
    }
}
?>