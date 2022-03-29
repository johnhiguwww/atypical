<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Terapeuta</title> 
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(255, 255, 0), rgb(0, 0, 255));
        }
        .box{
            color: white;
            position: absolute;
            top: 150%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        input[type="checkbox"]{
    position: relative;
    width: 40px;
    height: 20px;
    -webkit-appearance: none;
    background: #c6c6c6;
    outline: none;
    border-radius: 20px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
}
input:checked[type="checkbox"]{
    background: #03a9f4;
}
input[type="checkbox"]:before{
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 20px;
    top: 0;
    left: 0;
    background: #fff;
    transform: scale(1.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    transition: .5s;
}
input:checked[type="checkbox"]:before{
    left: 20px;
}
    </style>
</head>
<body>
    <div class="box">
        <form action="">
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
                <label for="microsefalia">Microsefalia</label>
                <br>
                <input type="radio" id="aut_sd" name="deficiencia" value="aut_sd" required>
                <label for="aut_sd">Autismo e Sindrome de Down</label>
                <br>
                <input type="radio" id="aut_micro" name="deficiencia" value="aut_micro" required>
                <label for="aut_micro">Autismo e Microsefalia</label>
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
                            *por exemplo pegada de lapis e talheres*
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
                                       A criança apresenta sinaios TDH?
                                       <input type="checkbox" name="tdg">
                                   </label> <br><br>
                                   <h3>Gestação</h3>
                                   <label>
                                       Fez pré natal?
                                       <input type="checkbox" name="prenatal">
                                       <br>
                                    </label>
                                       <br>
                                       Quantas semanas começou a sentir?
                                       <input type="text" name="">
                                       <br><br>
                                       Teve alguma doença na gestação?
                                       <input type="checkbox" name="">
                                       <br><br>
                                       Foi de risco?
                                       <input type="checkbox" name="">
                                       <br><br>
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
                                   Sentou com apoio e sem apojo com quanto tempo?
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
                                      A criança busca e demonstra carinho? <input type="checkbox" name=""><br><br>
                                      Se sim, com qualquer pessoa ou mais com familiares?
                                     <input type="text" name="">
                                     <br><br> 
                                     Quais os maiores interesses da criança? 
                                     <input type="text" name="">
                                     <br><br>
                                     A criança brinca sozinha? 
                                     <input type="checkbox" name="">
                                     <br><br>
                                     Brinca com outras crianças? <input type="checkbox" name=""><br><br>
                                      Fale um pouco sobre como é a socialização.
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
                                    <input type="submit" name="submit" id="submit">
                   
            </fieldset>
        </form>
    </div>
</body>
</html>