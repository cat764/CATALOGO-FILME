<?php



// printa formatado no navegador
// echo"<pre>";
//print_r(); 
// echo"</pre>";
require_once __DIR__. "\..\..\model\Filme.php";

$filmeModel = new Filme();
$filmes = $filmeModel->buscartodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="/catalogo-filme/public/css/style.css">
</head>
<body>
    <header>
        <div>
            <nav>
                <ul>
                    <li><a class="logo" href="">MovieVerse</a></li>
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><a href="listar.php">Editar</a></li>
                    <li><a href="">Contato  </a></li>
                </ul>
            </nav>
        </div>
    </header>
<section class="container">
    
    <h2>Filme</h2>

    <div class="acao">
        <a href="cadastro.php">
            <button>Novo
                <span class="material-symbols-outlined">
                add_circle
                </span>
            </button>
        </a>
    </div>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
                <?php
                foreach($filmes as $filme){ ?>
                <?php 

                ?>
                <tr>
                    <td><?php echo $filme->id?></td>
                    <td><?php echo $filme->nome?></td>
                    <td><?php echo $filme->ano?></td>
                    <td><?php echo $filme->descricao?></td>

                    <td>
                        <!-- Methods - Get / Post -->
                        <form action="visualizar.php" method="GET">
                            <input 
                            type="hidden" 
                            name="id" 
                            value="<?php echo $filme->id;?>"
                            >
                            <button title="detalhes">
                                <span class="mateial-symbols-outlined">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </span>
                            </button>
                            <br>
                        </form>
                        <form action="editar.php">
                            <input type="hidden" 
                            name="id" 
                            name=""
                            value="<?php echo $filme->id;?>"
                            >
                            <button title="editar">
                                <span>
                                    Editar
                                </span>
                            </button>

                        </form>
                        <form action="excluir.php" method="POST">
                        <input 
                            type="hidden" 
                            name="id" 
                            value="<?php echo $filme->id;?>"
                            >
                            <button onclick="return confirm('Tem certeza que deseja excluir o filme?')">
                                <span class="mateial-symbols-outlined">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </span>
                            </button>
                            <br>
                        </form>
                    </td>
                </tr>
                <?php  } ?>
            <tr>

            </tr>
        </tbody>
    </table>
    <script src="/catalogo-filmes/public/js/main.js" defer></script>
</section>
</body>
</html>