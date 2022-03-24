<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela Cadastro</title>
  <style>
    body{
      font-family: Arial, Helvetica, Sans-serif;
      background-image: linear-gradient(to right, rgb(255, 255, 0), rgb(0, 0, 255));
    }
    div{
      background-color: #304885;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 120px;
      border-radius: 15px;
      color: white;
    }
    button{
      background-color: white;
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 10px;
      color: black;
      font-size: 15px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<body>
  
    <div>
      <h1>Cadastro</h1>
      <H2>Você é?</H2>
      <br><br>
  <form action="cadastro_terapeuta.php">
      <button type="submit">Terapeuta</button>
      <br><br>
      </form>
      <form action="cadastrocrianca.php">
      <button type="submit">Responsável</button>
  </form>

    </div>

</body>
</html>