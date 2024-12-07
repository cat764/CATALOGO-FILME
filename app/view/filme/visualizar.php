<?php
require_once __DIR__ ."/../../config/env.php";
require_once __DIR__ ."/../../config/database.php";
require_once __DIR__ ."/../../model/Filme.php";

$id = $_GET['id'];

if ($id == '') {
    return header('Location: listar.php');
}

$filmeModel = new Filme();
$filme = $filmeModel->findById($id);

// echo "<h2>". $filme['id'] ."</h2>" ;
// echo "<h1>". $filme['nome'] ."</h1>" ;
// echo "<span>". $filme['descricao'] ."</span>" ;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="/catalogo-filme/public/css/style.css">
</head>
<body>
    <section class="container">
        <h2>Detalhes do Filme</h2>

        <h3>Nome: <?php echo $filme->nome?></h3>
        <p>Ano: <?php echo $filme->ano?></p>
        <p>Descrição: <?php echo $filme->descricao?></p>

        <form action="listar.php" method="GET">
            <button title="Voltar">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </button>
        </form>
    </section>
    
</body>
</html>