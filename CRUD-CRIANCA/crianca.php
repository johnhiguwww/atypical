<?php
    require_once 'data-crianca.php';
    $p = new Crianca("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Criança atipica</title>
    <link rel="shortcut icon" type="imagex/png" href = "./style_crianca.css ">
    <link rel="shortcut icon" type="imagex/png" href = "C:\xampp\htdocs\atypical\assets\img\imgcadastro.png ">
    <link rel="stylesheet" href="./assets/styles/style_crianca.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
</head>
<body>
    <?php
    if(isset($_POST['Btcadastrar']))
    {
       
    //---------------------------------CADASTRAR-----------------------------
    $nome_crianca = addslashes($_POST['nome_crianca']);
    $email_crianca = addslashes($_POST['email_crianca']);
    $senha_crianca = addslashes($_POST['senha_crianca']);
    $deficiencia = addslashes($_POST['deficiencia']);
    $genero = addslashes($_POST['genero']);
    $data_nas = addslashes($_POST['data_nas']);
    $social = addslashes($_POST['social']);
    $links_hiperfoco = addslashes($_POST['links_hiperfoco']);
    $links_hiperfoco2 = addslashes($_POST['links_hiperfoco2']);
    $links_hiperfoco3 = addslashes($_POST['links_hiperfoco3']);
    $motora = addslashes($_POST['motora']);
    $aprendizagem = addslashes($_POST['aprendizagem']);
    $gestacao = addslashes($_POST['gestacao']);
    $desenvolvimento_motor = addslashes($_POST['desenvolvimento_motor']);
    $psicologia = addslashes($_POST['psicologia']);
    $fonoaudiologia = addslashes($_POST['fonoaudiologia']);
    $medicamento = addslashes($_POST['medicamento']);
    
    if(!empty($nome_crianca) && 
    !empty($email_crianca) && 
    !empty($senha_crianca) && 
    !empty($deficiencia) &&
    !empty($genero) &&
    !empty($data_nas)&&
    !empty($social) &&
    !empty($links_hiperfoco)&&
    !empty($links_hiperfoco2)&&
    !empty($links_hiperfoco)&&
    !empty($motora) &&
    !empty($aprendizagem) &&
    !empty($gestacao) &&
    !empty($desenvolvimento_motor) &&
    !empty($psicologia) &&
    !empty($fonoaudiologia) &&
    !empty($medicamento) 
    ) 
    {
        print_r($_POST);
        if(!$p->cadastrarCrianca($nome_crianca, 
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
        $medicamento))
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
        <form action="#" method="POST">
            <fieldset>
                <legend><b>Cadastro de Criança</b></legend>
                <legend><b>*Gerenciado pelos reponsaveis*</b></legend>  
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_crianca" id="nome_crianca" class="inputUser"  required>
                    <label for="nome_crianca" class="labelInput">Nome completo da criança</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email_crianca" id="email_crianca" class="inputUser"  required>
                    <label for="email_crianca" class="labelInput">Email</label>
                </div>
                <br><br>
            
                <div class="inputBox">
                    <input type="password" name="senha_crianca" id="senha_crianca" class="inputUser"  required>
                    <label for="senha_crianca" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmarsenha" class="inputUser" required>
                    <label for="confirmarsenha" class="labelInput">Confirmar Senha</label>
                </div>
                <br><br> 
                <p>Deficiência:</p>
                    <input type="radio" id="autismo" name="deficiencia" value=" autismo" >
                <label for="autismo">Autismo</label>
                <br>
                    <input type="radio" id="sindromededown" name="deficiencia" value=" Sindrome de down">
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
                <br>
                <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" >
                <label for="feminino">Feminino</label>
                <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" >
                <label for="masculino">Masculino</label>
                <br>
                    <input type="radio" id="outros" name="genero" value="outros" >
                <label for="outros">Outros</label>
                <br><br>
                <label for="data_nas"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nas" id="data_nas" >
                <br>
                <hr>
                <h3>Social:</h3>
                <label for="social">
                    Defina no texto abaixo como é a relação social do sua criança(ex:*A criança tem comportamentos inadequados?*A criança tem interação social?*A criança tem comportamentos de esteriotipia?*A criança se comunica verbalmente?)
                    <br><br>
                    <textarea name="social" style="width:400px; height:100px;"></textarea> 
                    
                </label>
                <hr>
                <h3>Hiperfoco:</h3>
                <label>
                    <input type="text" name="links_hiperfoco" id="links_hiperfoco" placeholder="Adicione links do hiperfoco" >  
                </label> <br><br>
                <label>
                    <input type="text" name="links_hiperfoco2" id="links_hiperfoco2" placeholder="Adicione links do hiperfoco" />
                </label> <br><br>
                <label>
                    <input type="text" name="links_hiperfoco3" id="links_hiperfoco3" placeholder="Adicione links do hiperfoco" />                    
                </label> <br><br>
                <hr>
                <h3>Motora:</h3>
                <label>
                    Defina no texto abaixo como é a dificuldade motora da criança (Ex:A criança tem dificuldade motora fina? *por exemplo pegada de lápis e talheres*
                    A criança tem dificuldade motora grossa? *por exemplo deficuldade em andar*)
                    <br><br>
                    <textarea name="motora" style="width:400px; height:100px;"></textarea> 
                </label>
                <hr>
                <h3>Aprendizagem:</h3>
                <label >
                    Defina no texto abaixo como é a aprendizagem da criança (Ex:A criança tem dificuldade de aprendizagem?*Se sim pode informar quais são* A criança apresenta sinais TDH?)
                    <br><br>
                    <textarea name="aprendizagem" style="width:400px; height:100px;"></textarea>
                </label>
                <hr>
                <h3>Gestação:</h3>
                <label >
                    Vamos para uma pergunta mais pessoal<br>
                    Defina no campo de texto abaixo como foi o periodo da gestação maternal (EX:Fez pré-natal?*Quantas semanas começou a sentir as dores de parto?*Teve alguma doença na gestação?*Foi uma gestação de risco?*Fez uso de medicamentos?*Nasceu com quantas semanas?)
                    <br><br>
                    <textarea name="gestacao" style="width:400px; height:100px;"></textarea>
                </label>
                <hr>
                <h3>Desenvolvimento motor</h3>
                <label>
                    Defina mais sobre o desenvolvimento motor da criança (Ex:Firmou a cabeça com quanto tempo?*Sentou com apoio e sem apoio com quanto tempo?*Andou com quantos anos?)
                    <br><br>
                    <textarea name="desenvolvimento_motor" style="width:400px; height:100px;"></textarea>
                </label>
                <hr>
                <h3>Perguntas direcionadas à área da psicologia</h3>
                <label >
                    Defina no campo de texto abaixo algumas questões psicologicas (Ex:A criança busca e demonstra carinho? Se sim, com qualquer pessoa ou mais *Quais os maiores interesses da criança?* A criança identifica sentimentos?* Demonstra empatia?* Quais os comportamentos que a criança apresenta diante de frustrações?)
                    <br><br>
                    <textarea name="psicologia" style="width:400px; height:100px;"></textarea>
                </label>
                <hr>
                <h3>Fonoaudiologia:</h3>
                <label for="">
                    Defina no campo de texto abaixo alguns fatore fonodiologos da criança (Ex:A criança tem dificuldade de fala?*A criança tem dificuldade de mastigar?*A criança apresenta sialorreia? (salivação em excesso)* A criança apresenta tosse ou engasgo quando se alimenta? * A criança se alimenta de todas as consistência ( líquido, pastoso e sólido)?*  A criança apresenta ecolalias tardias ou imediatas (repetir falas das pessoas ou de desenhos)?)
                    <br><br>
                    <textarea name="fonoaudiologia" style="width:400px; height:100px;"></textarea>
                </label>
                <hr>
                <h3>Medicamentos</h3>
                <div class="tamanhotexto">
                    <label >
                        Informar se a criança ingere algum medicamento
                        <br><br>
                        <textarea name="medicamento" style="width:400px; height:100px;"></textarea>
                    </label>
                </div>
                <br>
                <input type="submit"  name="Btcadastrar" value="Cadastrar">
            </fieldset>
        </form>
        <?php
        $dados = $p->buscarDados();
        if(count($dados) > 0)
        {
            for ($i=0; $i < count($dados); $i++)
            {
                foreach ($dados[$i] as $k => $v)
                {
                    if($k != "id_crianca")
                    {

                    }
                }
            }
        }
        else{

        }
        ?>
    </div>
    <script> 
        (function(){
        var min = 100, max = 300, pad_right = 5, input = document.getElementById('adjinput');

        input.style.width = min+'px';
        input.onkeypress = input.onkeydown = input.onkeyup = function(){
            var input = this;
            setTimeout(function(){
                var tmp = document.createElement('div');
                tmp.style.padding = '0';
                if(getComputedStyle)
                    tmp.style.cssText = getComputedStyle(input, null).cssText;
                if(input.currentStyle)
                    tmp.style.cssText = input.currentStyle.cssText;
                tmp.style.width = '';
                tmp.style.position = 'absolute';
                tmp.innerHTML = input.value.replace(/&/g, "&amp;")
                                       .replace(/</g, "&lt;")
                                       .replace(/>/g, "&gt;")
                                       .replace(/"/g, "&quot;")
                                       .replace(/'/g, "&#039;")
                                       .replace(/ /g, '&nbsp;');
                input.parentNode.appendChild(tmp);
                var width = tmp.clientWidth+pad_right+1;
                tmp.parentNode.removeChild(tmp);
                if(min <= width && width <= max)
                    input.style.width = width+'px';
            }, 1);
            }
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>