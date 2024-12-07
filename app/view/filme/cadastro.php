<?php
 
require_once __DIR__ ."\..\..\model\Filme.php";
 
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $titulo = $_POST["titulo"];
    $ano = $_POST["ano"];
    $descricao = $_POST["descricao"];
 
 
    $filmeModel = new Filme();
    $sucesso = $filmeModel ->NovoFilme($titulo, $ano, $descricao);
 
    if($sucesso){
        return header("location: listar.php?mensagem=sucesso");
    }else{
        return header("location: listar.php?mensagem=erro");
    }
}  
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filmes</title>
    <link rel="stylesheet" href="/catalogo-filme/public/css/style.css">
    <link rel="stylesheet" href="/catalogo-filme/public/css/cadastro.css">
</head>
<body>
    <h1>Cadastro de filme</h1>
    <section class="adicionar_filmes">
        <form action="cadastrar.php" method="POST">
            <div>
                <label for="titulo">titulo do filme</label><br>
                <input type="text" name="titulo" required>
            </div>
            <div>
                <label for="ano">Ano de Lançamento</label><br>
                <input type="text" name="ano" required>
            </div>
            <div>
                <label for="descricao">Descrição</label><br>
                <input id="tamanho_descricao" type="text" name="descricao" required>
            </div>
            <button>
            <span class="material-symbols-outlined">
                save
            </span>
            </button>
        </form>
        <!-- Voltar para a listagem -->
        <form action="visualizar.php" method="GET">
                <button type="submit" title= "Voltar">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
                </button>
            </form>
    </section>
   
</body>
</html>