<?php
    
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $cidade = $_POST['cidade'];
        $data_nasc = $_POST['data_nasc'];
        $genero = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,tel,cidade,data_nasc,genero)VALUES ('$nome','$email','$tel','$cidade','$data_nasc','$genero')");

    }

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="tel" id="tel" class="inputUser" required>
                    <label for="tel" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" id="genero" name="data_nasc" id="data_nasc"required>
                <br>
                <p>Gênero:</p>
                <input type="radio" name = "genero" id="Feminino "value="Feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name = "genero" value="Masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name = "genero" value="Outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>