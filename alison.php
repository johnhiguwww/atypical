<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="imagex/png" href = "assets/iconTrello1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de Cadastro</title>
     <style>
      body{       
  margin: 0;
  padding: 0;
  font-family: 'poppins', sans-serif; 
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; 
  }
.container
{
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.container a
{
  position: relative;
  width: 170px;
  height: 60px;
  text-align: center;
  line-height: 55px;
  margin: 10px;
  text-transform: uppercase;
  background: #191919;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
  letter-spacing: 2px;
  overflow: hidden;
}
.container a span
{
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
  z-index: 100000;
  transition: 0s ease-in;
}
.container a:hover span 
{
transition: 0.4s ease-in;
transform: translateY(-100%);
}
.container a:before
{
  content: '';
  position: absolute;
  bottom: -250px;
  left: 60%;
  transform: translateX(-59%);
  width: 250px;
  height: 250px;
  background: #2299ff;
  border-radius: 50%;
  transition: 00.4s ease-in;
}
.container a:hover:before
{
  bottom: -150px;
}
.container a:nth-child(2):before
{
  bottom: 60px;
}
.container a:nth-child(2):hover:before
{
  bottom: -40px;
}
.terapeuta {
  font-size: smaller;
}
     </style>
    
</head>
   <body background="./assets/fundo0.5.png">
    <div class="Cadastro">
      </div class     >
      <h1>CADASTRO</h1>
       <h2> Você é?</h2>
       <br><br>
     <div class="container">
        <a href="#">
            <span>Terapeuta</span>
            <span class="terapeuta">Iniciar cadastro Terapeuta</span>
         </a>
            <a href="./cadastrocrianca.php">
              <span>Responsável</span>
              <span>Iniciar cadastro Responsável</span>
             </a>
     </div>
    </div>
   </body>
</html>