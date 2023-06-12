<?php

include 'db.php';

if (!isset($_GET['id'])) { 
    header('Location: galeria.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM portfolio WHERE id = ?');
$stmt->execute([$id]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
 header('Location: galeria.php');
 exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$stmt = $pdo->prepare('DELETE FROM cadastro WHERE id = ?');
$stmt->execute([$id]);
header('Location: galeria.php');
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo2.css">
  <title>Deletar Upload</title>
</head>
<body>
  <h1>Deletar Upload</h1>
  <div class="texto2">
    Tem certeza que deseja deletar o upload de
    <?php echo $appointment['nome']; ?>
    em <?php echo date('d/m/Y', strtotime($appointment['data'])); ?>?
    
<form method="post">
<button type="submit">Sim</button>
<a class= "persona_a" href="galeria.php">Não</a>

</form>
</div>
</body>
</html>