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
             font-family: Arial, Helvetica, sans-serif;
         }
        .Cadastro{
             background-color: #304885;
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%,-50%);
             padding: 120px;
             border-radius: 10%;
             color:antiquewhite;
         }
         input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 15px;
         }
         button{
           background-color: white;
           border: none;
           padding: 15px;
           width: 100%;
           border-radius: 10px;
           color: black;
           font-size: 20px; 
        }
        button:hover{
            background-color: white;
            cursor: pointer;
        }
     </style>

</head>
   <body background="./assets/fundo0.5.png">
    <div class="Cadastro">
        <div class="loginimage" width=10% height=20%>
       <main>    
      </div>
      <h1>CADASTRO</h1>
       <h2> Você é?</h2>
       <br><br>
       <div id="btn">
           <button type="submit">Terapeuta</button>
           <br><br>
            <form action="./cadastrocrianca.php">
           <button type="submit" >Responsável</button>
            </form>
        </div>   
    </div>
   </body>
</html>