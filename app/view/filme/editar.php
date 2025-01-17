<?php
require_once __DIR__."\..\..\model\Filme.php";
 
$filmeModel = new Filme();
 
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
 
    $sucesso = false;
   
    if(!empty($id)){
            //fluxo para editar
 
            $nome = $_POST["nome"];
            $ano = $_POST["ano"];
            $descricao = $_POST["descricao"];
 
            $sucesso = $filmeModel->editar($id,$nome,$ano,$descricao);
    } else {
 
   
            $nome = $_POST["nome"];
            $ano = $_POST["ano"];
            $descricao = $_POST["descricao"];
 
            $sucesso = $filmeModel->NovoFilme($nome, $ano, $descricao);
    }
   
    if($sucesso){
        return header("Location: listar.php?mensagem=sucesso");
    } else{
        return header("Location: listar.php?mensagem=erro");
    }
}else if($_SERVER["REQUEST_METHOD"] === "GET"){
 
 
    $filme = null;
 
    if(!empty($_GET['id'])){
 
       $filme = $filmeModel->findById($_GET['id']);
    }else{
        $filme = new Filme();
    }
 
}
 
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
 
    <link rel="stylesheet" href="/catalogo-filme/public/css/editar.css">
</head>
<body>
    <section class="container">
 
    <h1 style="font-size: 35px;">EDITE O FILME</h1>
        <form action="editar.php" method="POST">
        <div>
                <input type="hidden" name="id" value="<?php echo $filme->id ?>" required>
            </div>
 
            <div>
            <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $filme->nome; ?>" required>
            </div>
 
            <div>
            <label for="ano">Ano:</label>
                <input type="text" name="ano" value="<?php echo $filme->ano; ?>" required>
            </div>
 
            <div>
            <label for="descricao">Descrição:</label>
                <input type="text" name="descricao"  value="<?php echo $filme->descricao; ?>" required>
            </div>
 
            <button class="botao">
                salvar
            </button>
        </form>
            <!-- Voltar para a listagem -->
        <form action="visualizar.php" method="GET">
                <button id="icone" type="submit" title= "Voltar">
                <span class="material-symbols-outlined">
                arrow_right_alt
                </span>
                </button>
            </form>
 
    </section>
   
</body>
</html>