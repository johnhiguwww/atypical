<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="imagex/png" href = "assets/iconTrello1.png">
    <script src="./fotoevideohiperfoco.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criança atípica</title>
</head>
<body>
    <div class="cadastrocrianca">
        <h2>Cadastro de Criança</h2>
        <h4>*Preencher todos os cadastro*</h4>
        <form method="POST" action="crianca.php">
            <input type="text" name="nome" required="required" placeholder="Digite seu Nome aqui"><br><br>
            <label for="genero">Gênero:</label>
                <select name="genero" id="generto">
                    <option value="Nulo"></option>
                    <option value="Masculina">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Mercedes</option>
                </select><br><br>
            <form method="POST" action="doc.php">
                Nascimento: <input type="date" id="data" name="data"> 
            </form><br> 
            <input type="e-mail" name="email" required="required" placeholder="Digite seu e-mail"><br><br>
            <input type="password" name="password" required="required" placeholder="Digite sua senha"><br><br>
            <input type="password" name="confimedpassword" required="required" placeholder="Confirme sua senha"><br>
            <h3>Social:</h3>
            <label>
                A criança tem interação social?
                <input type="checkbox" name="interacaosocial">
            </label> <br><br>
            <label>
                A criança tem comportamentos inadequados?
                <input type="checkbox" name="comportamentoinadequados">
            </label> <br><br>
            <label>
                A criança tem comportamentos de esteriotipia?
                <input type="checkbox" name="comportamentoesteriotipia">
            </label> <br><br>
            <label>
                A criança se comunica verbalmente?
                <input type="checkbox" name="verbal">
            </label> <br>
            <h3>Hiperfoco:</h3>
            <label>
                <input type="text" name="linkhiperfoco" placeholder="Adicione links do hiperfoco">
            </label><br><br>
            <label>
            FOTOS
            <input type="file" name="arquivos" class="btn btn-success"  accept="image/png, image/jpeg"  multiple /> 
            </label><br><br>
            <label>
            VIDEO
            <input type="file" name="arquivos" class="btn btn-success"  accept="video/mkv, video/mp4"  multiple /> 
            </label><br><br>
            <h3>FONOAUDIOLOGIA:</h3>
            <label>
                A criança tem dificuldade de fala?
                <input type="checkbox" name="dificuldadedefala">
            </label> <br><br>
            <label>
                A criança tem dificuldade de mastigar?
                <input type="checkbox" name="dificuldadedemastigar">
            </label> <br><br>
            <h3>MOTORA:</h3>
            <label>
                A criança tem dificuldade motora fina?<br>
                *por exemplo pegada de lapis e talheres*<br>
                <input type="checkbox" name="motorafina">
            </label> <br><br>
            <label>
                A criança tem dificuldade motora grossa?<br>
                *por exemplo defict em andar*<br>
                <input type="checkbox" name="motoragrossa">
            </label> <br><br>
            <input type="submit" name="Enviar" >  
        </div>
    </form>
   <!-- <?php
     $data = $_POST['data'];
    // separando yyyy, mm, ddd
    list($ano, $mes, $dia) = explode('-', $data);
    // data atual
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    // cálculo
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
     echo "Idade: $idade Anos";
    ?>
    -->
</body>
</html>