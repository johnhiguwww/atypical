<?php
    require_once 'C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\data-terapeuta.php';
    $p = new Terapeuta("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>CRUD TERAPEUTA</title>
        <link rel="stylesheet" href="./assets/styles/style_cadastro_terapeuta.css">
    </head>
    <body>          
        <?php
        if(isset($_POST['nome_terapeuta']))//CLICOU NO BOTÃO CADASTRAR OU EDITAR
        {
        //---------------------------------CADASTRAR-----------------------------
                $nome_terapeuta = addslashes($_POST['nome_terapeuta']);
                $email_terapeuta = addslashes($_POST['email_terapeuta']);
                $senha_terapeuta = addslashes($_POST['senha_terapeuta']);
                $formacao = addslashes($_POST['formacao']);
                $registromedico = addslashes($_POST['registro_medico']);
                $tempoexperiencia = addslashes($_POST['tempo_experiencia']);
                if (!empty($nome_terapeuta) && !empty($email_terapeuta) && !empty($senha_terapeuta) && !empty($formacao) && !empty($registromedico) && !empty($tempoexperiencia))
                {
                    //cadastrar
                    if(!$p->cadastrarTerapeuta($nome_terapeuta, $email_terapeuta, $senha_terapeuta, $formacao, $registromedico, $tempoexperiencia))
                    {
                        echo "Preencha todos os dados";
                    }    
                    else
                    {
                        echo "Sucesso";
                    } 
                }
            }    
        ?>
        <section id="esquerda">
        <div class="box"> 
        <form method="POST" >
                <legend><b>Cadastro de Terapeutas</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_terapeuta" id="nome_terapeuta" class="inputUser" value="<?php if(isset($res)){echo $res['nome_terapeuta'];} ?>" required>
                    <label >Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email_terapeuta" id="email_terapeuta" class="inputUser" value="<?php if(isset($res)){echo $res['email_terapeuta'];} ?>" required>
                    <label >Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha_terapeuta" class="inputUser" id="senha_terapeuta" value="<?php if(isset($res)){echo $res['senha_terapeuta'];} ?>" required>
                    <label >Senha</label>
                <br><br>
                </div>
                    <div class="inputBox">
                    <input type="password" name="confirmarsenha" class="inputUser" required>
                    <label >Confirme sua Senha</label>
                </div>
                <br><br>
                <button type="button" onclick="mostrarSenha()">Mostrar a Senha</button>
                <br><br>
                <script>
                    function mostrarSenha() 
                    {
                        var tipo = document.getElementById("senha_terapeuta");
                        var tipo2 = document.getElementById("confirmarsenha")
                        if(tipo.type == "password") {
                            tipo.type = "text";
                            tipo2.type = "text";
                        }else{
                            tipo.type ="password";
                            tipo2.type ="password";
                        }
                    }
                </script>
                <br>
                <div class="inputBox">
                    <input type="text" name="formacao" id="formacao" class="inputUser" value="<?php if(isset($res)){echo $res['formacao'];} ?>" required>
                    <label >Formação</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="registro_medico" id="registro_medico" class="inputUser" value="<?php if(isset($res)){echo $res['registro_medico'];} ?>" required>
                    <label >Registro Medico</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tempo_experiencia" id="tempo_experiencia" class="inputUser" value="<?php if(isset($res)){echo $res['tempo_experiencia'];} ?>" required>
                    <label >Tempo De Experiência</label>
                </div>
                <br><br>
                <input type="submit" value="Cadastrar" >
            </form>
        </div>
    </body>
</html> 