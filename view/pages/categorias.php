<?php

class Categorias {
    public $categorias = [
        [
            'id' => '1',
            'nome' => 'Eletrônicos',
            'descricao' => 'Dispositivos como smartphones, notebooks e tablets.'
        ],
        [
            'id' => '2',
            'nome' => 'Eletrodomésticos',
            'descricao' => 'Produtos para o lar como geladeiras, fogões e máquinas de lavar.'
        ],
        [
            'id' => '3',
            'nome' => 'Roupas e Acessórios',
            'descricao' => 'Moda masculina, feminina e infantil, incluindo calçados.'
        ],
        [
            'id' => '4',
            'nome' => 'Beleza e Cuidados Pessoais',
            'descricao' => 'Produtos de maquiagem, perfumes e skincare.'
        ],
        [
            'id' => '5',
            'nome' => 'Saúde e Bem-estar',
            'descricao' => 'Suplementos, vitaminas e produtos para cuidados pessoais.'
        ],
        [
            'id' => '6',
            'nome' => 'Alimentos e Bebidas',
            'descricao' => 'Itens de mercado, bebidas e produtos gourmet.'
        ],
        [
            'id' => '7',
            'nome' => 'Casa e Decoração',
            'descricao' => 'Móveis, iluminação e artigos de decoração.'
        ],
        [
            'id' => '8',
            'nome' => 'Esportes e Lazer',
            'descricao' => 'Equipamentos esportivos, roupas fitness e bicicletas.'
        ],
        [
            'id' => '9',
            'nome' => 'Automotivo',
            'descricao' => 'Peças, acessórios e produtos para veículos.'
        ],
        [
            'id' => '10',
            'nome' => 'Brinquedos e Jogos',
            'descricao' => 'Jogos de tabuleiro, brinquedos educativos e eletrônicos.'
        ],
        [
            'id' => '11',
            'nome' => 'Papelaria e Escritório',
            'descricao' => 'Materiais escolares, organizadores e móveis para escritório.'
        ],
        [
            'id' => '12',
            'nome' => 'Livros e Mídia',
            'descricao' => 'Livros físicos, e-books e materiais educativos.'
        ],
        [
            'id' => '13',
            'nome' => 'Música e Instrumentos Musicais',
            'descricao' => 'Instrumentos, acessórios e equipamentos de áudio.'
        ],
        [
            'id' => '14',
            'nome' => 'Pet Shop',
            'descricao' => 'Rações, brinquedos e acessórios para pets.'
        ],
        [
            'id' => '15',
            'nome' => 'Ferramentas e Construção',
            'descricao' => 'Materiais para reformas, ferramentas e equipamentos de segurança.'
        ],
        [
            'id' => '16',
            'nome' => 'Relógios e Óculos',
            'descricao' => 'Relógios de pulso, óculos de grau e de sol.'
        ],
        [
            'id' => '17',
            'nome' => 'Energia Solar e Sustentabilidade',
            'descricao' => 'Placas solares, lâmpadas LED e produtos ecológicos.'
        ],
        [
            'id' => '18',
            'nome' => 'Segurança e Monitoramento',
            'descricao' => 'Câmeras de segurança, alarmes e fechaduras eletrônicas.'
        ],
        [
            'id' => '19',
            'nome' => 'Viagem e Turismo',
            'descricao' => 'Mochilas, malas de viagem e acessórios para turismo.'
        ],
        [
            'id' => '20',
            'nome' => 'Serviços Digitais',
            'descricao' => 'Cursos online, assinaturas e consultorias digitais.'
        ]
    ];
    public function listar() {
        return $this->categorias;
    }
}

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
                    <th>Descrição</th>
                </thead>
                <tbody>
                    <?php 
                    $categoriasModel = new Categorias();
                    $categorias = $categoriasModel->listar();
                    foreach ($categorias as $categorias) { ?>
                        <tr>
                            <td><?php echo $categorias['id'] ?></td>
                            <td><?php echo $categorias['nome'] ?></td>
                            <td><?php echo $categorias['descricao'] ?></td>
                            <td>
                                <!-- METHODS - Get / Post -->
                                <form action="visualizar.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button title="visualizar">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </button>
                                </form>

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