<?php
require_once __DIR__ . '/../model/ProdutoModel.php';

$produtomodel = new ProdutoModel();
$listar = $produtomodel->listar();

?>

<?php require_once __DIR__ . '\..\componentes\head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>
    
    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <h1>Produtos</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
            </thead>
            <tbody>

                <?php foreach ($listar as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['id_categoria'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
                                <button title="visualizar">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
                                <button title="editar">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden"
                                 name="id" value="<?php echo $produto['id'] ?>">
                                <button title="excluir">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>
</body>
</html>