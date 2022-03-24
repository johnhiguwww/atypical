<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crianças Atipicas</title>
 <style>
   body{
      font-family:  Arial, Helvetica, sans-serif;
      background-image: linear-gradient(to right, rgb(255, 255, 0), rgb(0, 0, 255));
    } 
   div{
      background-color: #304885;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 80px;
      border-radius: 10px;
      color: aliceblue;
   }
   input{
     padding: 10px;
     border: none;
     outline: none;
     font-size: 15px;
   }
   input:hover{
   cursor: pointer; 
  }
  a{
    color: yellow;
  }
{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif
}
body
{
     display: flex;
     justify-content: center;
     align-items: center;
     min-height: 100vh;
     background: #
}

 </style>
</head>
<body">

</body>
</html>


  <a class="links" id="paracadastro"></a>
  <a class="links" id="paralogin"></a>

    <div id="login">
      <img width="100%" src="./assets/img/iconpq.png" alt="png">

      <form method="post" action=""> 
        <h1>Login</h1> 
        <p> 
          <label for="email_login">Email</label>
          <input id="email_login" name="email_login" required="required" type="text" placeholder="Insira Seu Email"/>
        </p>
        <p> 
          <label for="senha_login">Senha</label>
          <input id="senha_login" name="senha_login" required="required" type="password" placeholder="Insira Sua Senha" /> 
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