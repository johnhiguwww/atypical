<?php
    require_once 'data-crianca.php';
    $p = new Crianca("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
    <link rel="stylesheet" href="./assets/styles/style_crianca.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Criança atipica</title>
</head>
<body>
    <?php
    if(isset($_POST['Btenviar']))
    {
        print_r($_POST);
    //---------------------------------CADASTRAR-----------------------------
    $nome_crianca = addslashes($_POST['nome_crianca']);
    $email_crianca = addslashes($_POST['email_crianca']);
    $senha_crianca = addslashes($_POST['senha_crianca']);
    $deficiencia = addslashes($_POST['deficiencia']);
    $genero = addslashes($_POST['genero']);
    $data_nas = addslashes($_POST['data_nas']);
    $comportamentos = addslashes($_POST['comportamentos']);
    $interacao_social = addslashes($_POST['interacao_social']);
    $esteriotipia = addslashes($_POST['esteriotipia']);
    $comunica_verbalmente = addslashes($_POST['comunica_verbalmente']);
    $links_hiperfoco = addslashes($_POST['links_hiperfoco']);
    $links_hiperfoco2 = addslashes($_POST['links_hiperfoco2']);
    $links_hiperfoco3 = addslashes($_POST['links_hiperfoco3']);
    $motora_fina = addslashes($_POST['motora_fina']);
    $motora_grossa = addslashes($_POST['motora_grossa']);
    $firmou_cabeca = addslashes($_POST['firmou_cabeca']);
    $sentou_apoio = addslashes($_POST['sentou_apoio']);
    $engatinhou = addslashes($_POST['engatinhou']);
    $andou_anos = addslashes($_POST['andou_anos']);
    $tropeca_andar = addslashes($_POST['tropeca_andar']);
    $escada_alternado = addslashes($_POST['escada_alternado']);
    $linha_reta = addslashes($_POST['linha_reta']);
    $pula_pe_so = addslashes($_POST['pula_pe_so']);
    $marcha_equina = addslashes($_POST['marcha_equina']);
    $dificuldade_aprendizagem = addslashes($_POST['dificuldade_aprendizagem']);
    $materias_escolares = addslashes($_POST['materias_escolares']);
    $tdh = addslashes($_POST['tdh']);
    $prenatal = addslashes($_POST['prenatal']);
    $dores_parto = addslashes($_POST['dores_parto']);
    $doenca_gestacao = addslashes($_POST['doenca_gestacao']);
    $gestacao_risco = addslashes($_POST['gestacao_risco']);
    $gestacao_medicamento = addslashes($_POST['gestacao_medicamento']);
    $crianca_nascimento = addslashes($_POST['crianca_nascimento']);
    $carinho_pessoa = addslashes($_POST['carinho_pessoa']);
    $interesses_crianca = addslashes($_POST['interesses_crianca']);
    $brinca_sozinha = addslashes($_POST['brinca_sozinha']);
    $descricao_socializacao = addslashes($_POST['descricao_socializacao']);
    $compartilha_objeto = addslashes($_POST['compartilha_objeto']);
    $identifica_sentimentos = addslashes($_POST['identifica_sentimentos']);
    $demonstra_empatia = addslashes($_POST['demonstra_empatia']);
    $comportamentos_frustracoes = addslashes($_POST['comportamentos_frustracoes']);
    $sialorreia = addslashes($_POST['sialorreia']);
    $tosse_engasgo_alimentacao = addslashes($_POST['tosse_engasgo_alimentacao']);
    $dificuldade_comunicacao = addslashes($_POST['dificuldade_comunicacao']);
    $alimentacao_consistencia = addslashes($_POST['alimentacao_consistencia']);
    $ecolalias_tardias_imediatas = addslashes($_POST['ecolalias_tardias_imediatas']);
    $contato_ocular_pessoas = addslashes($_POST['contato_ocular_pessoas']);
    $demora_de_fala = addslashes($_POST['demora_de_fala']);
    $dificuldade_de_brinca = addslashes($_POST['dificuldade_de_brinca']);
    $dificuldade_de_brinca_com_pessoas = addslashes($_POST['dificuldade_de_brinca_com_pessoas']);
    $ingere_medicamento = addslashes($_POST['ingere_medicamento']);

    if(!empty($nome_crianca) && 
    !empty($email_crianca) && 
    !empty($senha_crianca) && 
    !empty($deficiencia) &&
    !empty($genero) &&
    !empty($data_nas)
    ) 
    {
        if(!$p->cadastrarCrianca($nome_crianca, 
        $email_crianca,
        $senha_crianca,
        $deficiencia,
        $genero,
        $data_nas,
        $comportamentos,
        $interacao_social,
        $esteriotipia,
        $comunica_verbalmente,
        $links_hiperfoco,
        $links_hiperfoco2,
        $links_hiperfoco3,
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
        $tosse_engasgo_alimentacao
        ,$dificuldade_comunicacao,
        $alimentacao_consistencia,
        $ecolalias_tardias_imediatas,
        $contato_ocular_pessoas,
        $demora_de_fala,
        $dificuldade_de_brinca,
        $dificuldade_de_brinca_com_pessoas,
        $ingere_medicamento))
        {
            echo "Ocorreu um erro";
        }
        else{
            echo "Sucesso";
            }
        }
    }
    ?>
    <section id="esquerda">
    <div class="box">
        <form method="POST">
            <fieldset>
                <legend><b>Cadastro de Criança</b></legend>
                <legend><b>*Gerenciado pelos reponsaveis*</b></legend>  
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_crianca" id="nome_crianca" class="inputUser" required>
                    <label for="nome_crianca" class="labelInput">Nome completo da criança</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email_crianca" id="email_crianca" class="inputUser" required>
                    <label for="email_crianca" class="labelInput">Email</label>
                </div>
                <br><br>
            
                <div class="inputBox">
                    <input type="password" name="senha_crianca" id="senha_crianca" class="inputUser" required>
                    <label for="senha_crianca" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmarsenha" class="inputUser" required>
                    <label for="confirmarsenha" class="labelInput">Confirmar Senha</label>
                </div>
                <br><br> 
                <!-- <script>
                    function mostrarSenha() 
                    {
                        var tipo = document.getElementById("senha");
                        var tipo2 = document.getElementById("confirmarsenha")
                        if(tipo.type == "password") {
                            tipo.type = "text";
                            tipo2.type = "text";
                        }else{
                            tipo.type ="password";
                            tipo2.type ="password";
                        }
                    }
                </script>   -->
                <p>Deficiência:</p>
                <input type="radio" id="autismo" name="deficiencia" value="autismo" >
                <label for="autismo">Autismo</label>
                <br>
                <input type="radio" id="sindromededown" name="deficiencia" value="Sindrome de down" >
                <label for="sindromededown">Sindrome de Down</label>
                <br>
                <input type="radio" id="microsefalia" name="deficiencia" value="Microcefalia" >
                <label for="Microcefalia">Microcefalia</label>
                <br>
                <input type="radio" id="autismo_sindrome" name="deficiencia" value="Autismo e Sindrome de Down" >
                <label for="autismo_sindrome">Autismo e Sindrome de Down</label>
                <br>
                <input type="radio" id="autismo_microcefalia" name="deficiencia" value="Autismo e Microcefalia" >
                <label for="autismo_microcefalia">Autismo e Microcefalia</label>
                <br>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="genero" name="genero" value="feminino" >
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="genero" name="genero" value="masculino" >
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="genero" name="genero" value="outros" >
                <label for="outros">Outros</label>
                <br><br>
                <label for="data_nas"><b>Data de Nascimento:</b></label>
                <input type="text" name="data_nas" id="data_nas" >
                <br>
                <div class="inputBox">
                <h3>Social:</h3>
                <hr>
                <label>
                A criança tem comportamentos inadequados?
                <input type="checkbox" name="comportamentos" id="comportamentos" value="A criança apresenta comportamentos inadequados" >
                </label> <br>
                </div>
                <br>
                <div class="inputBox">
                    <label>A criança tem interação social?</label> 
                    <input type="checkbox" name="interacao_social" id="interacao_social" value="A criança apresenta interação social">
                </div>
                <br>
                <div class="inputBox">
                        <label>A criança tem comportamentos de esteriotipia?</label>
                     <input type="checkbox" name="esteriotipia" id="esteriotipia" value="A criança apresenta comportamentos de esteriotipia">
                </div>               </div>
                <div class="inputBox">
                <br>    
                <label>
                 A criança se comunica verbalmente?
                 <input type="checkbox" name="comunica_verbalmente" id="comunica_verbalmente" value="A criança apresenta comunica verbalmente">            
                </label> <br>
                <br>
                <div class="inputBox">
                <hr>
                    <h3>Hiperfoco:</h3>
                <label>
                    <input type="text" name="links_hiperfoco" id="links_hiperfoco" placeholder="Adicione links do hiperfoco">  
                </label> <br><br>
                <label>
                    <input type="text" name="links_hiperfoco2" id="links_hiperfoco2" placeholder="Adicione links do hiperfoco"/>
                    </label> <br><br>
                  <label>
                      <input type="text" name="links_hiperfoco3" id="links_hiperfoco3" placeholder="Adicione links do hiperfoco"/>                    
                      </label> <br><br>
                      <hr>
                           <h3>Motora</h3>
                           <label>
                            A criança tem dificuldade motora fina?<br>
                            *por exemplo pegada de lápis e talheres*
                            <br>
                            <input type="checkbox" name="motora_fina" id="motora_fina" value="A criança apresenta dificuldade motora fina">
                            </label> <br><br>
                            <label>
                                A criança tem dificuldade motora grossa? <br>
                                *por exemplo deficuldade em andar*
                                <br>
                                <input type="checkbox" name="motora_grossa" id="motora_grossa" value="A criança apresenta dificuldade motora grossa">
                                </label><br>
                                <hr>
                                <h3>Aprendizagem</h3>
                                <label>
                                    A criança tem dificuldade de aprendizagem?
                                    <input type="checkbox" name="dificuldade_aprendizagem" id="dificuldade_aprendizagem" value="A criança apresenta dificuldade em aprendizagem">
                               </label> <br><br>
                               <label>
                                   Se sim pode informar quais são:
                                    <input type="text" name="materias_escolares" id="materias_escolares" placeholder="matérias escolares">
                                   </label> <br><br>
                                   <label>
                                       A criança apresenta sinais TDH?
                                       <input type="checkbox" name="tdh" id="tdh" value="A criança apresenta sinais de TDH" >
                                   </label> <br><br>
                                   <hr>
                                   <h3>Gestação:</h3>
                                   <label>
                                       Fez pré-natal?
                                       <input type="checkbox" name="prenatal" value="A mãe fez pré-natal">
                                       <br>
                                    </label>
                                       <br>
                                       Quantas semanas começou a sentir as dores de parto?
                                       <input type="text" name="dores_parto" id="dores_parto" >
                                       <br><br>
                                       Teve alguma doença na gestação?
                                       <input type="text" name="doenca_gestacao" id="doenca_gestacao"  >
                                       <br>
                                       Foi uma gestação de risco?
                                       <input type="checkbox" name="gestacao_risco" id="gestacao_risco" value="A mãe teve uma gestação de risco">
                                       <br>
                                       Fez uso de medicamentos?
                                       <input type="text" name="gestacao_medicamento" id="gestacao_medicamento" >
                                       <br><br>
                                    Nasceu com quantas semanas? 
                                    <input type="text" name="crianca_nascimento" id="crianca_nascimento">   
                                </label> <br>
                                <hr>
                                   <h3>Desenvolvimento motor</h3>
                                   <label>
                                   Firmou a cabeça com quanto tempo?
                                   <input type="text" name="firmou_cabeca" id="firmou_cabeca">
                                   <br><br>
                                   Sentou com apoio e sem apoio com quanto tempo?
                                   <input type="text" name="sentou_apoio" id="sentou_apoio">
                                   <br><br>
                                   Engatinhou?
                                   <input type="checkbox" name="engatinhou" id="engatinhou" value="A criança engatinhou">
                                   <br><br>
                                   Andou com quantos anos? 
                                   <input type="text" name="andou_anos" id="andou_anos" >
                                   <br><br>
                                   Tropeça muito ao andar?
                                   <input type="checkbox" name="tropeca_andar" id="tropeca_andar" value="A criança tropeça ao andar">
                                   <br><br>
                                   Sobe escada alternado?
                                   <input type="checkbox" name="escada_alternado" id="escada_alternado" value="A criança sobe a escada de forma alternada" >
                                   <br><br>
                                   Anda em linha reta? 
                                   <input type="checkbox" name="linha_reta" id="linha_reta" value="A criança costuma andar somente em linha reta">
                                   <br><br>
                                   Pula de um pé só?
                                   <input type="checkbox" name="pula_pe_so" id="pula_pe_so" value="A criança pula de um pé só"> 
                                   <br><br>
                                   A Criança costuma a marchar em ponta dos pés (marcha equina)? 
                                   <input type="checkbox" name="marcha_equina" id="marcha_equina" value="A criança anda na ponta de pé">
                                   <hr>
                                   <h3>Perguntas direcionadas à área da psicologia</h3>
                                   <label>
                                     A criança busca e demonstra carinho? Se sim, com qualquer pessoa ou mais com familiares?
                                     <input type="text" name="carinho_pessoa" id="carinho_pessoa">
                                     <br><br> 
                                     Quais os maiores interesses da criança? 
                                     <input type="text" name="interesses_crianca" id="interesses_crianca">
                                     <br><br>
                                     A criança brinca sozinha? 
                                     <input type="checkbox" name="brinca_sozinha" id="brinca_sozinha" value="A criança tem o costume de brincar sozinha">
                                     <br><br>
                                     Brinca com outras crianças? Fale um pouco sobre como é a socialização.
                                     <input type="text" name="descricao_socializacao" id="descricao_socializacao">
                                     <br><br>
                                     Compartilha objetos? 
                                     <input type="checkbox" name="compartilha_objeto" id="compartilha_objeto" value="A criança compartilha objetos">
                                     <br><br>
                                     A criança identifica sentimentos? 
                                     <input type="checkbox" name="identifica_sentimentos" id="identifica_sentimentos" value="A criança indetifica sentimentos">
                                     <br><br>
                                     Demonstra empatia (ex.: fica triste ao ver o outro triste)? 
                                    <input type="checkbox" name="demonstra_empatia" id="demonstra_empatia" value="A criança demonstra empatia">
                                    <br><br>
                                    Quais os comportamentos que a criança apresenta diante de frustrações?
                                    <input type="text" name="comportamentos_frustracoes" id="comportamentos_frustracoes">
                                    <br><br>
                                    <hr>
                                    <h3>FONOAUDIOLOGIA</h3>
                      <label>
                          A criança tem dificuldade de fala?
                          <input type="checkbox" name="dificuldadedefala" id="dificuldadedefala" value="A criança tem dificuldade de fala">
                        </label> <br><br>
                        <label>
                            A criança tem dificuldade de mastigar?
                            <input type="checkbox" name="dificuldadedemastigar" id="dificuldadedemastigar" value=" A criança tem dificuldade de mastigar">
                           </label> <br><br>
                           A criança apresenta sialorreia? (salivação em excesso) 
                           <input type="checkbox" name="sialorreia" id="sialorreia" value="A criança apresenta sialorreia (salivação em excesso)">
                           <label> <br><br>
                           <label>
                           A criança apresenta tosse ou engasgo quando se alimenta?
                           <input type="checkbox" name="tosse_engasgo_alimentacao" id="tosse_engasgo_alimentacao" value="A criança apresenta tosse ou engasgo quando se alimenta"> 
                           <label> <br><br>
                           <label>
                           A criança apresenta dificuldade para se comunicar (não usa gestos ou não fala)?         
                           <input type="checkbox" name="dificuldade_comunicacao" id="dificuldade_comunicacao" value="A criança apresenta dificuldade para se comunicar (não usa gestos ou não fala)" >
                           <label> <br><br>
                           <label>
                           A criança se alimenta de todas as consistência ( líquido, pastoso e sólido)?
                           <input type="checkbox" name="alimentacao_consistencia" id="alimentacao_consistencia" value="A criança se alimenta de todas as consistência ( líquido, pastoso e sólido)">
                           <label> <br><br>
                           <label>
                           A criança apresenta ecolalias tardias ou imediatas (repetir falas das pessoas ou de desenhos)?
                           <input type="checkbox" name="ecolalias_tardias_imediatas" id="ecolalias_tardias_imediatas" value="A criança apresenta ecolalias tardias ou imediatas?" > 
                           <label> <br><br>
                           <label>
                           A criança tem dificuldade de olhar ou manter o contato ocular com as pessoas? 
                           <input type="checkbox" name="contato_ocular_pessoas" id="contato_ocular_pessoas" value=" A criança tem dificuldade de olhar ou manter o contato ocular com as pessoas">
                           <label> <br><br>
                           <label>
                           A criança demorou a falar ou fala poucas palavras?
                           <input type="checkbox" name="demora_de_fala" id="demora_de_fala" value="A criança demorou a falar ou não fala">                           
                           <!-- <label> <br><br> -->
                           <label>
                           A criança tem dificuldades no brincar pois, apenas gira os brinquedos ou joga no chão?
                           <input type="checkbox" name="dificuldade_de_brinca" id="dificuldade_de_brinca" value=" A criança tem dificuldades no brincar">
                           <label> <br><br>
                           <label>
                           A criança apresenta dificuldades no brincar com outras crianças ou adultos (só brinca só e quando alguém se aproxima ele se afasta)?
                           <input type="checkbox" name="dificuldade_de_brinca_com_pessoas" id="dificuldade_de_brinca_com_pessoas" value="A criança apresenta dificuldades no brincar com outras crianças ou adultos">
                           <br><br>
                           <hr>
                           <h3>Medicamentos</h3>
                           <label>
                           Informar se a criança ingere algum medicamento
                           <input type="text" name="ingere_medicamento" id="ingere_medicamento">
                           <br><br>
                           <label>
                               Inserir laudo da criança
                                <input type="file" name="arquivos" class="btn btn-success"  accept=".pdf"  multiple />
                            </label>
                           <div style="height: 300px; width: 100%;">
                           <embed src="" type="application/pdf" width="100%" height="100%">
                           <div>
                           <br><br>
                           <input type="submit" name="Btenviar"  value="Enviar">
            </fieldset>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>