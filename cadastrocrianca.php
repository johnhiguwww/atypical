<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
    <link rel="stylesheet" href="./assets/styles/style_cadastro_crianca.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Criança</title> 
</head>
<body>
    <div class="box">
        <form action="./crianca.php">
            <fieldset>
                <legend><b>Cadastro de Criança</b></legend>
                <legend><b>*Gerenciado pelos reponsaveis*</b></legend>  
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
            
                <div class="inputBox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                    
                <p>Deficiência:</p>
                <input type="radio" id="autismo" name="deficiencia" value="autismo" required>
                <label for="autismo">Autismo</label>
                <br>
                <input type="radio" id="sindromededown" name="deficiencia" value="sindromededown" required>
                <label for="sindromededown">Sindrome de Down</label>
                <br>
                <input type="radio" id="microsefalia" name="deficiencia" value="microsefalia" required>
                <label for="microsefalia">Microcefalia</label>
                <br>
                <input type="radio" id="aut_sd" name="deficiencia" value="aut_sd" required>
                <label for="aut_sd">Autismo e Sindrome de Down</label>
                <br>
                <input type="radio" id="aut_micro" name="deficiencia" value="aut_micro" required>
                <label for="aut_micro">Autismo e Microcefalia</label>
                <br>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outros</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <div class="inputBox">
                <h3>Social:</h3>
                <label>
                A criança tem comportamentos inadequados?
                <input type="checkbox" name="comportamentoinadequados">
                </label> <br>
                </div>
                <br>
                <div class="inputBox">
                <label>
                A criança tem interação social?
                <input type="checkbox" name="interacaosocial">
                </label> 
                </div>
                <br>
                <div class="inputBox">
                <label>
                 A criança tem comportamentos de esteriotipia?
                 <input type="checkbox" name="comportamentoesteriotipia">
                </label>
                <div class="inputBox">
                  <br>    
                <label>
                 A criança se comunica verbalmente?
                 <input type="checkbox" name="verbal">            
                </label> <br>
                <br>
                <div class="inputBox">
                    <h3>Hiperfoco:</h3>
                <label>
                    <input type="text" name="linkhiperfoco" placeholder="Adicione links do hiperfoco">  
                </label> <br><br>
                <label>
                    Fotos
                    <input type="file" name="arquivos" class="btn btn-success" accept="image/png, image/jpeg" multiple />
                    </label> <br><br>
                  <label>
                      Video
                      <input type="file" name="arquivos" class="btn btn-success" accept="video/mkv, video/mp4" multiple />                    
                      </label> <br><br>
                           <h3>Motora</h3>
                           <label>
                            A criança tem dificuldade motora fina?<br>
                            *por exemplo pegada de lápis e talheres*
                            <br>
                            <input type="checkbox" name="motorafina">
                            </label> <br><br>
                            <label>
                                A criança tem dificuldade motora grossa? <br>
                                *por exemplo deficuldade em andar*
                                <br>
                                <input type="checkbox" name="motoragrossa">
                                </label><br>
                                <h3>Aprendizagem</h3>
                                <label>
                                    A criança tem dificuldade de aprendizagem?
                                    <input type="checkbox" name="deficaprendizagem">
                               </label> <br><br>
                               <label>
                                   Se sim pode informar quais são:
                                    <input type="text" name="materias" placeholder="matérias escolares">
                                   </label> <br><br>
                                   <label>
                                       A criança apresenta sinais TDH?
                                       <input type="checkbox" name="tdg">
                                   </label> <br><br>
                                   <h3>Gestação</h3>
                                   <label>
                                       Fez pré-natal?
                                       <input type="checkbox" name="prenatal">
                                       <br>
                                    </label>
                                       <br>
                                       Quantas semanas começou a sentir?
                                       <input type="text" name="">
                                       <br><br>
                                       Teve alguma doença na gestação?
                                       <input type="checkbox" name="">
                                       <br>
                                       Foi de risco?
                                       <input type="checkbox" name="">
                                       <br>
                                       Fez uso de medicamentos?
                                       <input type="checkbox" name="">
                                       <br><br>
                                    Nasceu com quantas semanas? 
                                    <input type="text" name="">   
                                </label> <br>
                                   <h3>Desenvolvimento motor</h3>
                                   <label>
                                   Firmou a cabeça com quanto tempo?
                                   <input type="text" name="">
                                   <br><br>
                                   Sentou com apoio e sem apoio com quanto tempo?
                                   <input type="text" name="">
                                   <br><br>
                                   Engatinhou?
                                   <input type="checkbox" name="">
                                   <br><br>
                                   Andou com quantos anos? 
                                   <input type="text" name="">
                                   <br><br>
                                   Tropeça muito ao andar?
                                   <input type="checkbox" name="">
                                   <br><br>
                                   Sobe escada alternado?
                                   <input type="checkbox" name="">
                                   <br><br>
                                   Anda em linha reta? 
                                   <input type="checkbox" name="">
                                   <br><br>
                                   Pula de um pé só?
                                   <input type="checkbox" name=""> 
                                   <br><br>
                                   <h3>Perguntas direcionadas à área da psicologia</h3>
                                   <label>
                                     A criança busca e demonstra carinho? Se sim, com qualquer pessoa ou mais com familiares?
                                     <input type="text" name="">
                                     <br><br> 
                                     Quais os maiores interesses da criança? 
                                     <input type="text" name="">
                                     <br><br>
                                     A criança brinca sozinha? 
                                     <input type="checkbox" name="">
                                     <br><br>
                                     Brinca com outras crianças? Fale um pouco sobre como é a socialização.
                                     <input type="text" name="">
                                     <br><br>
                                     Compartilha objetos? 
                                     <input type="checkbox" name="">
                                     <br><br>
                                     A criança identifica sentimentos? 
                                     <input type="checkbox" name="">
                                     <br><br>
                                     Demonstra empatia (ex.: fica triste ao ver o outro triste)? 
                                    <input type="checkbox" name="">
                                    <br><br>
                                    Quais os comportamentos que a criança apresenta diante de frustrações?
                                    <input type="text">
                                    <br><br>
                                    <h3>FONOAUDIOLOGIA</h3>
                      <label>
                          A criança tem dificuldade de fala?
                          <input type="checkbox" name="dificuldadedefala">
                        </label> <br><br>
                        <label>
                            A criança tem dificuldade de mastigar?
                            <input type="checkbox" name="dificuldadedemastigar">
                           </label> <br><br>
                           A criança apresenta sialorreia? (salivação em excesso) 
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança apresenta tosse ou engasgo quando se alimenta?
                           <input type="checkbox" name=""> 
                           <label> <br><br>
                           <label>
                           A criança apresenta dificuldade para se comunicar ( não usa gestos ou fala)?         
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança se alimenta de todas as consistência ( líquido, pastoso e sólido)?
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança apresenta ecolalias tardias ou imediatas (repetir falas das pessoas ou de desenhos animados)?
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança tem dificuldade de olhar ou manter o contato ocular com as pessoas? 
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança demorou a falar ou fala poucas palavras?
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança tem dificuldades no brincar pois, apenas gira os brinquedos ou joga no chão?
                           <input type="checkbox" name="">
                           <label> <br><br>
                           <label>
                           A criança apresenta dificuldades no brincar com outras crianças ou adultos (só brinca só e quando alguém se aproxima ele se afasta)?
                           <input type="checkbox" name="">
                           <br><br>
                           <h3>Medicamentos</h3>
                           <label>
                           Informar se a criança ingere algum medicamento
                           <input type="text" name="">
                           <br><br>
                           <label>
                               Inserir laudo da criança
                                <input type="file" name="arquivos" class="btn btn-success"  accept=".pdf"  multiple />
                            </label>
                           <div style="height: 300px; width: 100%;">
                           <embed src="" type="application/pdf" width="100%" height="100%">
                           <div>
                           <br><br>
                           <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>