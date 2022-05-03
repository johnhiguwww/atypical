<?php
    require_once 'C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\data-terapeuta.php';
    $p = new Terapeuta("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>CADASTRO DE TERAPEUTA</title>
        <link rel="stylesheet" href="./assets/styles/style_cadastro_terapeuta.css">
        <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>          
        <?php
        if(isset($_POST['BtCadastrar']))//CLICOU NO BOTÃO CADASTRAR OU EDITAR
        {
        //---------------------------------CADASTRAR-----------------------------
                $nome_terapeuta = addslashes($_POST['nome_terapeuta']);
                $email_terapeuta = addslashes($_POST['email_terapeuta']);
                $senha_terapeuta = addslashes($_POST['senha_terapeuta']);
                $confirmarSenha = addslashes($_POST['confirmarsenha']);
                $formacao = addslashes($_POST['formacao']);
                $registromedico = addslashes($_POST['registro_medico']);
                $tempoexperiencia = addslashes($_POST['tempo_experiencia']);
                if (!empty($nome_terapeuta) && !empty($email_terapeuta) && !empty($senha_terapeuta) && !empty($formacao) && !empty($registromedico) && !empty($tempoexperiencia))
                {
                    $p->$conectar("atypical","localhost","root","");
                    if($p->msgErro == "") // se esta tudo certo
                    {
                        if($senha_terapeuta == $confirmarSenha)
                        {
                            if($u->cadastrarTerapeuta($nome_terapeuta,
                            $email_terapeuta,
                            $senha_terapeuta,
                            $formacao,
                            $registromedico,
                            $tempoexperiencia))
                            {
                                ?>
                                <div id="msg-sucesso">
                                    Cadastrado com sucesso! Acesse o login para entrar!
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="msg-erro">
                                    Email ja cadastrado!
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <div class="msg-erro">
                                Senha e confirmar senha não correspondem!
                            </div>
                            <?php
                        }
                        
                    }
                    else
                    {
                        ?>
                        <div>
                            <?echo "Erro: ".$u->msgErro;?>
                        </div>
                        <?php
                    }
                }else
                {
                    ?>
                    <div class="msg-erro">
                        Preencha todos os campos!
                    </div>
                    <?php
                }
            } 
        ?>
        <div class="container">
        <!-- <section id="esquerda">
        <div class="box">  -->
        <div class="row">
        <h1 class="display-6">Cadastro de Terapeuta</h1>
        <div class="col-6  justify-content-start">
        <form action="./CRUD-TERAPEUTA/terapeuta.php" method="POST">
        <fieldset>        
                <div class="inputBox">
                    <input type="text" name="nome_terapeuta" id="nome_terapeuta" class="inputUser" value="<?php if(isset($res)){echo $res['nome_terapeuta'];} ?>" required>
                    <label >Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email_terapeuta" id="email_terapeuta" class="inputUser" value="<?php if(isset($res)){echo $res['email_terapeuta'];} ?>" required>
                    <label >Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha_terapeuta" class="inputUser" id="senha_terapeuta" value="<?php if(isset($res)){echo $res['senha_terapeuta'];} ?>" required>
                    <label >Senha</label>
                <br><br>
                </div>
                    <div class="inputBox">
                    <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser" required>
                    <label >Confirme sua Senha</label>
                </div>
                <br><br>
                <button type="button" class="btn btn-outline-light" onclick="mostrarSenha()">Mostrar a Senha</button>
                <br><br>
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
                <input class="btn btn-outline-light" type="submit" name="BtCadastrar"value="Cadastrar">
                </fieldset>  
            </form>
            </div>
                <div class="col-6">
                <img src="./assets/img/imgterapeuta.png" class="rounded float-end" alt="...">
                </div>
        </div>
            </div>
        </div>
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
                                      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
</body>
</html> 