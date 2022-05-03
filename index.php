<?php
  require_once 'C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\data-terapeuta.php';
  $p = new Terapeuta("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
  <link rel="stylesheet" href="./assets/styles/style_index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Crianças Atipicas</title>
</head>
<body>
  <a class="links" id="paracadastro"></a>
  <a class="links" id="paralogin"></a>
    <div id="login">
      <img width="100%" src="./assets/img/iconpq.png" alt="png">
      <form method="POST" action=""> 
        <h1>Login</h1> 
        <p> 
          <label>Email</label>
          <input id="email_login" name="email_login" required="required" type="text" placeholder="Insira Seu Email"/>
        </p>
        <p> 
          <label>Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Insira Sua Senha" /> 
        
          <button type="button" onclick="mostrarSenha()">Mostrar a Senha</button>
        <script>
          function mostrarSenha() {
            var tipo = document.getElementById("senha");
            if(tipo.type == "password") {
              tipo.type = "text";
            }else{
                tipo.type ="password";
            }
          }
            </script>
        
      </p>
        <p> 
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
          <label for="manterlogado">Manter-me logado</label>
        </p>
        <p> 
          <input type="submit" value="Logar" /> 
        </p>
        <p class="link">
          Ainda não tem conta?
          <a href="./to_ou_res.php">Cadastre-se</a>
        </p>

      </form>
    </div>
    <?php
    //VERIFICAR SE CLICOU NO BOTAO
    if(isset($_POST['BtCadastrar']))//CLICOU NO BOTÃO CADASTRAR OU EDITAR
    {
    //---------------------------------CADASTRAR-----------------------------
            $email_terapeuta = addslashes($_POST['email_terapeuta']);
            $senha_terapeuta = addslashes($_POST['senha_terapeuta']);

            if (!empty($nome_terapeuta) && !empty($email_terapeuta))
            {
              $p->$conectar("atypical","localhost","root","");
              if($p->msgErro == "") // se esta tudo certo
              {
              if($p->logarTerapeuta($email_terapeuta,$senha_terapeuta))
              {
                header("dashbord.php");
              }
              else
              {
                echo "Email e/ou senha estão incorretos!";
              }
            }
            else
            {
              echo "Erro: ".$p->msgErro;
            }
          }else
            {
              echo "Preencha todos os campos!";
            }
          }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>