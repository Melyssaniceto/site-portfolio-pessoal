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
    <title>AFTON ― upload</title>
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
        <h1>Upload</h1>
     <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $obra = $_POST['obra'];
        $local = $_POST['local'];

        $stmt = $pdo->prepare('SELECT COUNT(*) FROM cadastro WHERE data = ? ');
        $stmt->execute([$data]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $error = '<h2>Já existe um cadastro com essas informações.<h2> </br>';
        } else {

            $stmt = $pdo->prepare('INSERT INTO cadastro (nome, data, conteudo, imagem, obra, local)
            VALUES(:nome, :data, :conteudo, :imagem, :obra, :local)');
            $stmt->execute(['nome' => $nome,'data' => $data,
            'conteudo' => $conteudo, 'imagem' => $imagem, 'obra' => $obra, 'local' => $local]);

            if ($stmt->rowCount()) {
                echo '<h2><span>Parabéns, o seu upload foi realizado com sucesso! 
                Agora, suas obras estarão armazenadas em seu portfólio pessoal.
                </span></h2>';
            } else {
                echo '<h2><span>Erro ao realizar o upload, tente novamente mais tarde.</span></h2>';
            }
        }

        if (isset($error)) {
            echo '<span>' . $error . '</span';
        }
     }
     ?>

       <div class="label">
      
       <form method="post">
        <label for="nome">Nome do autor:</label>
        <input type="text" name="nome" required><br>

        <label for="data">Data de produção:</label>
        <input type="date" name="data" required><br>

        <label for="conteudo">Conteúdo:</label>
        <input type="text" name="conteudo" required placeholder="Descreva aqui o conteúdo da obra"><br>

        <label for="imagem">Imagem:</label>
        <input type="text" name="imagem" required placeholder="Cole o link da imagem aqui"><br>
        
        <label for="obra">Nome da obra:</label>
        <input type="text" name="obra" required><br>

        <label for="local">Local de produção:</label>
        <input type="text" name="local" required><br>
        </br>

        <div>
            <input type= "submit" name="submit" value="Upload">
        </div>
      </form>
    </div></div>
    </br></br>

<div class="container-dois stretch">
	<div class="item" style="padding-top: 5px;">Telefone para contato: 18 99614 2317</div>
    <div class="item" style="padding-top: 5px;">Email para contato: afton@hotmail.com</div>
	<div class="item" style="padding-top: 5px;">R. Pref. José Deliberador, 300 - Vila Thaide, Paraguaçu Paulista - SP, 19703-042</div>
    </civ>

</body>
</html>