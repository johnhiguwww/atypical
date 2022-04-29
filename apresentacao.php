<?php
    require_once 'C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\data-terapeuta.php';
    $p = new Terapeuta("atypical","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="C:\xampp\htdocs\atypical\CRUD-TERAPEUTA\style_terapeuta.css">
    <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Atypical</title>
</head>
<body>
    <div class="search">
        <div class="icon"></div>
        <div class="input"></div>   
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Atypical</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#">
</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="Pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success" type="submit">Enter</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-light" style="background-color: black;">
  <!-- Navbar content -->
</nav>    

  <!-- fgfgfggggggggggggggggggggggggggggggggggggggggggggggggggggggg --> 

<section id="direita">
  <table>
    <tr id="titulo">
           <td>ID</td>
           <td>Nome</td>
           <td>Email</td>
           <td>Senha</td>
           <td>Formação</td>
           <td>Registro</td>
           <td>Tempo</td>
    </tr>
  <?php
  $dados = $p->buscarDados();
  if(count($dados) >0)
  {
    for ($i=0; $i < count($dados); $i++)
  {
    echo "<tr>";
    foreach ($dados[$i] as $k => $v)
    {
        if($k != "id")
        {
          echo "<td>" .$v. "</td>";
        }
      }
    }
  }
      ?>        
    </table>
</section>
<!-- =============================================================================================================== -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 