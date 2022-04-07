<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/styles/style_cadastro_terapeuta.css">
    <link rel="shortcut icon" type="imagex/png" href = "./assets/img/iconpq.png ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Terapeuta</title> 
</head>
<body>
    <div class="box">
        <form action="./terapeuta.php">
            <fieldset>
                <legend><b>Cadastro de Terapeutas</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                <br><br>
                </div>
                    <div class="inputBox">
                    <input type="password" name="confirmarsenha" class="inputUser" required>
                    <label for="confirmarsenha" class="labelInput">Confirme sua Senha</label>
                </div>
                <br>
                <div class="inputBox">   
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="formação" id="formação" class="inputUser" required>
                    <label for="formação" class="labelInput">Formação</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="registro medico" id="registro medico" class="inputUser" required>
                    <label for="registro medico" class="labelInput">Regsitro Medico</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tempo de experiencia" id="tempo de experiencia" class="inputUser" required>
                    <label for="tempo de experiencia" class="labelInput">Tempo De Experiência</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>