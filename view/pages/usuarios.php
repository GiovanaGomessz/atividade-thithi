<?php
require_once __DIR__ . '/../model/UsuarioModel.php';

$usuariomodel = new UsuarioModel();
$listar = $usuariomodel->listar();

?>

<?php require_once __DIR__ . '\..\componentes\head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>
    
    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <h1>Usuários</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>email</th>
                <th>telefone</th>
                <th>Data de nascimento</th>
                <th>cpf</th>
            </thead>
            <tbody>
                <?php foreach ($listar as $usuarios) { ?>
                    <tr>

                        <td><?php echo $usuarios['id'] ?></td>
                        <td><?php echo $usuarios['nome'] ?></td>
                        <td><?php echo $usuarios['email'] ?></td>
                        <td><?php echo $usuarios['telefone'] ?></td>
                        <td><?php echo $usuarios['dt_nascimento'] ?></td>
                        <td><?php echo $usuarios['cpf'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button title="visualizar">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button title="editar">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
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
    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>
</body>
</html>