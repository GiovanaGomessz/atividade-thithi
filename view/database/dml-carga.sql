-- Data Manipulating Language
-- Insert, UPDATE, SELECT, DELETE

--categoria
INSERT INTO categoria (nome) VALUES 
    ('Eletrônicos'),
    ('Eletrodomésticos'),
    ('Roupas e Acessórios'),
    ('Beleza e Cuidados Pessoais'),
    ('Saúde e Bem-estar'),
    ('Alimentos e Bebidas'),
    ( 'Casa e Decoração'),
    ('Esportes e Lazer'),
    ('Automotivo'),
    ('Brinquedos e Jogos'),
    ('Papelaria e Escritório'),
    ('Livros e Mídia'),
    ('Música e Instrumentos Musicais'),
    ('Pet Shop'),
    ('Ferramentas e Construção'),
    ('Relógios e Óculos'),
    ('Energia Solar e Sustentabilidade'),
    ('Segurança e Monitoramento'),
    ('Viagem e Turismo'),
    ('Serviços Digitais')
    ;

--usuário
INSERT INTO usuario (nome, email, telefone, dt_nascimento, cpf) VALUES 
    ('João Silva', 'joao.silva@email.com', '99999-0001', '1990-01-15', '123.456.789-01'),
    ('Maria Oliveira', 'maria.oliveira@email.com','99999-0002', '1985-02-20', '123.456.789-02'),
    ('Carlos Souza', 'carlos.souza@email.com',' 99999-0003', '1992-03-25', '123.456.789-03'),
    ('Ana Lima', 'ana.lima@email.com', ' 99999-0004', '1995-04-10', '123.456.789-04'),
    ('Pedro Santos', 'pedro.santos@email.com', ' 99999-0005', '1988-05-30', '123.456.789-05'),
    ('Juliana Costa', 'juliana.costa@email.com', ' 99999-0006', '1991-06-12', '123.456.789-06'),
    ('Lucas Almeida', 'lucas.almeida@email.com', '99999-0007', '1994-07-05', '123.456.789-07'),
    ('Fernanda Rocha', 'fernanda.rocha@email.com', ' 99999-0008', '1990-08-21', '123.456.789-08'),
    ('Ricardo Mendes', 'ricardo.mendes@email.com', ' 99999-0009', '1987-09-09', '123.456.789-09'),
    ('Camila Nogueira', 'camila.nogueira@email.com',' 99999-0010', '1993-10-14', '123.456.789-10'),
    ('Eduardo Ramos', 'eduardo.ramos@email.com',' 99999-0011', '1989-11-17', '123.456.789-11'),
    ('Bianca Ferreira', 'bianca.ferreira@email.com', ' 99999-0012', '1996-12-22', '123.456.789-12'),
    ('Gustavo Teixeira', 'gustavo.teixeira@email.com', ' 99999-0013', '1986-01-08', '123.456.789-13'),
    ('Larissa Carvalho', 'larissa.carvalho@email.com',' 99999-0014', '1997-02-26', '123.456.789-14'),
    ('Marcos Antunes', 'marcos.antunes@email.com',' 99999-0015', '1984-03-18', '123.456.789-15');
    ;

--produto
INSERT INTO produto (nome, descricao, id_categoria, preco) VALUES
    ('iPhone 15','Smartphone com tela OLED de 6,1 polegadas e chip A17.',
    (select id from categoria where nome = 'Eletrônicos'), 5999.00),
    ('Geladeira Samsung 520L','Geladeira de 520 litros com tecnologia de refrigeração no-frost.',
    (select id from categoria where nome = 'Roupas e Acessórios'), 3499.00),
    ('Tênis Nike Air Max','Tênis de corrida com amortecimento Air Max e design moderno.',
    (select id from categoria where nome = 'Beleza e Cuidados Pessoais'), 499.90),
    ('Base Líquida L’Oréal','Base líquida de alta cobertura com efeito matte e longa duração.',
    (select id from categoria where nome = 'Saúde e Bem-estar'), 89.90),
    ('Multivitamínico One a Day','Suplemento diário para melhorar a saúde geral e aumentar a imunidade.',
    (select id from categoria where nome = 'Alimentos e Bebidas'), 69.90),
    ('Cerveja Artesanal IPA','Cerveja artesanal com sabor intenso e amargor característico.', 
    (select id from categoria where nome = 'Casa e Decoração'), 19.90),
    ('Sofá Retrátil 3 Lugares','Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.',
    (select id from categoria where nome = 'Esportes e Lazer'), 1599.00),
    ('Bicicleta MTB Aro 29','Bicicleta de mountain bike com suspensão dianteira e aro 29.', 
    (select id from categoria where nome = 'Automotivo'), 1899.00),
    ('Kit de Faróis LED para Carro','Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 
    (select id from categoria where nome = 'Brinquedos e Jogos'), 299.00),
    ('Jogo de Tabuleiro Catan', 'Jogo de estratégia onde os jogadores constroem e negociam recursos.',
    (select id from categoria where nome = 'Papelaria e Escritório'), 249.90),
    ('Caderno Universitário 10 Matérias','Caderno espiral com 10 matérias e capa personalizada.',
    (select id from categoria where nome = 'Livros e Mídia'), 19.90),
    ('O Senhor dos Anéis - Edição Especial','Edição luxuosa com capa dura e ilustrações exclusivas do clássico de J.R.R. Tolkien.',
    (select id from categoria where nome = 'Música e Instrumentos Musicais'), 149.90),
    ('Violão Yamaha F310','Violão acústico de excelente qualidade, ideal para iniciantes.',
    (select id from categoria where nome = 'Pet Shop'), 799.00),
    ('Ração Pedigree Sabor Frango','Ração seca para cães, sabor frango e com nutrientes balanceados.',
    (select id from categoria where nome = 'Ferramentas e Construção'), 59.90),
    ('Furadeira Bosch 600W','Furadeira elétrica com 600W de potência e velocidade variável.',
    (select id from categoria where nome = 'Relógios e Óculos'), 299.90),
    ('Relógio Casio G-Shock','Relógio digital e resistente a impactos, ideal para aventuras.',
    (select id from categoria where nome = 'Energia Solar e Sustentabilidade'), 399.90),
    ('Kit Solar 200W','Painel solar de 200W com inversor e bateria para armazenamento.',
    (select id from categoria where nome = 'Segurança e Monitoramento'), 2599.00),
    ('Câmera de Segurança Arlo Pro 4','Câmera de segurança sem fio com alta definição e visão noturna.',
    (select id from categoria where nome = 'Viagem e Turismo'), 1299.00),
    ('Mala de Viagem Samsonite','Mala resistente e leve, com compartimentos para organização.',
    (select id from categoria where nome = 'Serviços Digitais'), 899.00),
    ('Curso de Marketing Digital','Curso online de marketing digital com módulos sobre SEO, Ads e redes sociais.',
    (select id from categoria where nome = 'Esportes e Lazer'), 499.00)
    ;
