<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/web/treino2.0/view/assets/css/style.css">
    <link rel="stylesheet" href="/web/treino2.0/view/assets/css/home.css">
    <style>
        h1{
            font-family: Arial, Helvetica, sans-serif;
            color:#fff ;
        }

        p{
            /* width: 1350px; */
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            color: #ffffffa1;

        }

        main{
            background: #003566;
            z-index: 1;
        }
    </style>
</head>

<body>

    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <h1>Conteúdo</h1>

        <div class="card">
            <div class="produtitos">
                <h2>Tênis Nike Air Max 270</h2>
                <img src="../assets/img/tenis.webp" class="prod">
                <p>Descrição: Tênis confortável e moderno da Nike,
                    com tecnologia de amortecimento Max Air.
                </p>
                <h3>R$499,99</h3>
            </div>

            <div class="produtitos">
                <h2>Camiseta Adidas</h2>
                <img src="../assets/img/blusa.jpg" class="prod">
                <p>Descrição: Camiseta básica e estilosa da Adidas,
                    em 100% algodão.
                </p>
                <h3>R$129,90</h3>
            </div>

            <div class="produtitos">
                <h2>Galaxy S23</h2>
                <img src="../assets/img/celular.webp" class="prod">
                <p>Descrição: Smartphone topo de linha da Samsung, 
                    com câmera de 200 MP e tela AMOLED de 6,1".
                </p>
                <h3>R$3.499,00</h3>
            </div>

            <div class="produtitos">
                <h2>Fone de Ouvido</h2>
                <img src="../assets/img/fone.webp" class="prod">
                <p>Descrição: Fone de ouvido com cancelamento de
                     ruído ativo e som de alta qualidade.
                </p>
                <h3>R$1.799,00</h3>
            </div>

            <div class="produtitos">
                <h2>Cadeira Gamer</h2>
                <img src="../assets/img/cadeira.webp" class="prod">
                <p>Descrição: Cadeira ergonômica com apoio lombar e regulagem de altura,
                     ideal para longas sessões de jogos.
                </p>
                <h3>R$1.299,90</h3>
            </div>

            <div class="produtitos">
                <h2>Relógio Casio</h2>
                <img src="../assets/img/relogio.webp" class="prod">
                <p>Descrição: Relógio resistente à água e impactos, 
                    ideal para aventuras ao ar livre.
                </p>
                <h3>R$349,00</h3>
            </div>

            <div class="produtitos">
                <h2>Cafeteira Nespresso</h2>
                <img src="../assets/img/cafeteira.webp" class="prod">
                <p>Descrição: Cafeteira automática que prepara café e expresso de alta
                     qualidade, com tecnologia de cápsulas.
                </p>
                <h3>R$999,00</h3>
            </div>

            <div class="produtitos">
                <h2>Livro</h2>
                <img src="../assets/img/livro.webp" class="prod">
                <p>Descrição: Best-seller de Charles Duhigg sobre como os
                     hábitos moldam nossas vidas e como mudá-los.
                </p>
                <h3>R$49,90</h3>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

</body>

</html>