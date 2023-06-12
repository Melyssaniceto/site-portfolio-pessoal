<?php
include 'db.php';
if (!isset($_GET['id'])) {
    header('Location: galer.php');
    exit;
} 
$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM cadastro WHERE id = ?');
$stmt->execute([$id]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) { 
    header('Location: galeria.php');
    exit;
} 
$nome = $appointment['nome'];
$data = $appointment['data'];
$conteudo = $appointment['conteudo'];
$imagem = $appointment['imagem'];
$obra = $appointment['obra'];
$local = $appointment['local'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo2.css">
  <title>Alterar ― upload</title>
</head>
<body>
  <h1>Alterar Upload</h1>
  <div class="form label">
  <form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>" required><br>

    <label for="data">Data de Produção:</label>
    <input type="date" name="data" value="<?php echo $data;?>" required><br> 
    
    <label for="email">Conteúdo:</label>
    <input type="text" name="conteudo" value="<?php echo $conteudo; ?>" required><br>

    <label for="imagem">Imagem:</label>
    <input type="text" name="imagem" value="<?php echo $imagem; ?>" required><br>

    <label for="telefone">Nome da obra:</label>
    <input type="text" name="obra" value="<?php echo $obra;?>" required><br>

    <label for="local">Local de produção:</label>
    <input type="text" name="local" value="<?php echo $local; ?>" required><br>

    <button type="submit">Atualizar</button>

</div>
  </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $data = $_POST['data'];     
    $conteudo = $_POST['conteudo'];
    $imagem = $_POST['imagem']; 
    $obra = $_POST['obra'];
    $local = $_POST['local']; 

    $stmt = $pdo->prepare 
    ('UPDATE cadastro SET 
      nome = ?, 
      data = ?,
      conteudo = ?,
      imagem = ?,
      obra = ?,
      local = ?
    WHERE id = ?');

    $stmt->execute([$nome, $data, $conteudo, $imagem, $obra, $local, $id]);
    header('Location: galeria.php');
    exit;
}

?>