<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo2.css">
    <title>AFTON ― cadastro</title>
</head>
<body>

<div id="menu">
    <li> <a class="active" href= index.php>❮ voltar</a></li>
        <ul>
    <li> <a class="active" href= index.php>HOME</a></li>
    <li> <a class="active" href= galeria.php>GALERIA</a></li>
    <li> <a class="active" href= upload.php>UPLOAD</a></li>
    <li> <a class="active" href= cadastro.php>CADASTRO</a></li>
       </ul>
</div>

<div class="form">
        <h1>Cadastro</h1>
     <?php
        if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];

        $stmt = $pdo->prepare('SELECT COUNT(*) FROM portfolio WHERE data = ? ');
        $stmt->execute([$data]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $error = '<h3>Já existe um cadastro com essas informações.<h3> </br>';
        } else {

            $stmt = $pdo->prepare('INSERT INTO portfolio (nome, email, data, cpf, endereco, telefone)
            VALUES(:nome, :email, :data, :cpf, :endereco, :telefone)');
            $stmt->execute(['nome' => $nome,'email' => $email, 'data' => $data, 'cpf' => $cpf,
            'endereco' => $endereco, 'telefone' => $telefone,]);

            if ($stmt->rowCount()) {
                echo '<h2><span>Seu cadastro foi realizado com sucesso!
                Agora você pode realizar uploads de suas obras em seu portfólio pessoal.</span></h2>';
            } else {
                echo '<h2><span>Erro ao realizar o cadastro, tente novamente mais tarde.</span></h2>';
            }
        }

        if (isset($error)) {
            echo '<span>' . $error . '</span';
        }
     }
     ?>
       <div class="label">
      
       <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="text" name="email" required><br>

        <label for="data">Data de Nascimento:</label>
        <input type="date" name="data" required><br>

        <label for="telefone">CPF:</label>
        <input type="text" name="cpf" required><br>
        
        <label for="endereco">Endereço Eletrônico:</label>
        <input type="text" name="endereco" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br>
        </br>

        <div>
            <input type= "submit" name="submit" value="Cadastrar">
        </div>
      </form>
    </div></div>
    </br></br>

<div class="container-dois stretch">
	<div class="item" style="padding-top: 5px;">Telefone para contato: 18 99614 2317</div>
    <div class="item" style="padding-top: 5px;">Email para contato: afton@hotmail.com</div>
	<div class="item" style="padding-top: 5px;">R. Pref. José Deliberador, 300 - Vila Thaide, Paraguaçu Paulista - SP, 19703-042</div>
    </div>

</body>
</html>