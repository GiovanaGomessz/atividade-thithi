<?php
require_once __DIR__ . '/../model/CategoriaModel.php';

$categoriamodel = new CategoriaModel();
$listar = $categoriamodel->listar();
?>

<?php require_once __DIR__ . '\..\componentes\head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>

        <!-- <div class="scroll"> -->
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                </thead>
                <tbody>
                    

                <?php  foreach ($listar as $categorias) { ?>
                        <tr>
                            <td><?php echo $categorias['id'] ?></td>
                            <td><?php echo $categorias['nome'] ?></td>
                            <td>
                                <!-- METHODS - Get / Post -->

                                <form action="cadastro.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button title="editar">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form action="excluir.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button title="deletar">
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
        <!-- </div> -->

    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>
</body>

</html>