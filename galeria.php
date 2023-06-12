<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo2.css">
    <title>AFTON ― galeria</title>
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
</div></div>
</br></br>

<?php
$stmt =$pdo->query('SELECT * FROM cadastro ORDER BY data'); 
$cadastro = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($cadastro) == 0) {
    echo '<p>Nenhum cadastro realizado.</p>';

} else {
    echo '<table border="1">';
    echo '<thead><tr><th>Nome do autor</th><th>Data de Produção</th><th>Conteúdo</th><th>Imagem</th>
    <th>Nome da obra</th><th>Local de produção</th>
    <th colspan="2">Opções</th></tr></thead>';
    echo '<tbody>';

foreach ($cadastro as $cadastros) {

echo '<tr>';
echo '<td>' . $cadastros['nome'] . '</td>';
echo '<td>' . date('d/m/Y', strtotime($cadastros['data'])) . '</td>';
echo '<td>' . $cadastros['conteudo'] .'</td>';
echo '<td>' . "<img src='". $cadastros['imagem'] ."' width='200px'></td>";
echo '<td>' . $cadastros['obra'] .'</td>';
echo '<td>' . $cadastros['local'] .'</td>';

echo '<td><a style="color:yellow;" href="alterar.php?id=' . $cadastros['id'] . '">Alterar</a></td>'; 
echo '<td><a style="color:yellow;" href="deletar.php?id=' . $cadastros['id'] . '">Deletar</a></td>';
echo '</tr>';
}

echo '</tbody>';
echo '</table>';
}
?>

</br></br>
<div id="menubutton"><li> <a class="active" href= index.php>❮ voltar</a></li> </div>

</br></br>
</br></br>
</br></br>
</br></br>
</br></br>

<div class="container-dois stretch">
	<div class="item" style="padding-top: 5px;">Telefone para contato: 18 99614 2317</div>
    <div class="item" style="padding-top: 5px;">Email para contato: afton@hotmail.com</div>
	<div class="item" style="padding-top: 5px;">R. Pref. José Deliberador, 300 - Vila Thaide, Paraguaçu Paulista - SP, 19703-042</div>
</div>

</body>
</html>
