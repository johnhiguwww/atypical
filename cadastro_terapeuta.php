<?php
    require_once 'C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\data-terapeuta.php';
    $p = new Terapeuta("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>CRUD TERAPEUTA</title>
        <link rel="shortcut icon" type="image/png" href = "C:\xampp\htdocs\atypical\assets\img\iconpq.png">
        <link rel="stylesheet" href="style_terapeuta.css">
    </head>
    <body>
        <?php
        if(isset($_POST['nome_terapeuta']))//CLICOU NO BOTÃO CADASTRAR OU EDITAR
        {
        //----------------------------------EDITAR------------------------------
            if(isset($_GET['id_terapeuta_update']) && !empty($_GET['id_terapeuta_update']))
            {
                $ip_upd = addslashes($_GET['id_terapeuta_update']);
                $nome_terapeuta = addslashes($_POST['nome_terapeuta']);
                $email_terapeuta = addslashes($_POST['email_terapeuta']);
                $senha_terapeuta = addslashes($_POST['senha_terapeuta']);
                $formacao = addslashes($_POST['formacao']);
                $registromedico = addslashes($_POST['registro_medico']);
                $tempoexperiencia = addslashes($_POST['tempo_experiencia']);
                if (!empty($nome_terapeuta) && !empty($email_terapeuta) && !empty($senha_terapeuta) && !empty($formacao) && !empty($registromedico) && !empty($tempoexperiencia))
                {
                    //EDITAR
                    $p->atualizarDados($ip_upd, $nome_terapeuta, $email_terapeuta, $senha_terapeuta, $formacao, $registromedico, $tempoexperiencia);
                    header("location: terapeuta.php");
                }
                else
                {
                    ?>
                    <div>
                        <img src="./atypical/assets/icon/aviso.png">
                        <h4>Preencha todos os campos</h4>
                    </div>
                    <?php
                }          
            }
        //---------------------------------CADASTRAR-----------------------------
            else
            {
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
                        echo "Email ja esta cadastrado!";
                    }
            else
            {
                echo "Preencha todos os campos";
                }
            }     
        }           
         ?>
        <?php
            if(isset($_GET['id_terapeuta_up']))//SE A PESSOA CLICOU EM EDITAR
            {
                $id_terapeuta_update = addslashes($_GET['id_terapeuta_update']);
                $res = $p->buscarDadosTerapeuta($id_terapeuta_update);
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
                    <input type="password" name="rep_senha" class="inputUser" required>
                    <label >Confirme sua Senha</label>
                </div>
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
                <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";} ?>" >
        </form>
    </div>
        </section>
        <section id="direita">
        <table>
                <!-- <tr>
                    <td>ID</td>
                    <td>NOME COMPLETO</td>
                    <td>EMAIL</td>
                    <td>SENHA</td>
                    <td>DATA DE NASCIMENTO</td>
                    <td>FORMACAO</td>
                    <td>REGISTRO MEDICO</td>
                    <td>TEMPO DE EXPERIENCIA</td>               
                </tr> -->
            <?php
                $dados = $p->buscarDados();
                if(count($dados)> 0)//TEM PESSOAS NO BANCO DE DADOS?\
                {
                    for ($i=0; $i < count($dados); $i++)
                    { 
                        echo "<tr>";
                        foreach ($dados[$i] as $k => $v)
                        {
                            if($k != "id")
                            {
                                echo "<td>".$v."</td>";
                            }
                        }
                ?>
                <td>
                        <a href="terapeuta.php?id_terapeuta_update=<?php echo $dados [$i]['id_terapeuta'];?>">Editar</a>
                        <a href="terapeuta.php?id_terapeuta=<?php echo $dados [$i]['id_terapeuta'];?>">Excluir</a>
                </td>
                    <?php

                    echo "</tr>";
                }
            }   
            else // O BANCO DE DADOS ESTA VAZIO
            {
                ?>             
            </table>
                    <div class="aviso">
                        <h4>Ainda não a pessoas cadastradas</h4>
                    </div>
               <?php
            }
            ?>
        </section>
    </body>
</html> 

<?php

    if(isset($_GET['id_terapeuta']))
    {
        $id_terapeuta = addslashes($_GET['id_terapeuta']);
        $p->excluirTerapeuta($id_terapeuta);
        header("location: terapeuta.php");
    }
        }
?>
<!-- feitor por mano higor o nordico -->
<!-- e alyson o mesclado -->