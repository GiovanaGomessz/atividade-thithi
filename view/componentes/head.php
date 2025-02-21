<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>

    <link rel="stylesheet" href="/web/treino2.0/view/assets/css/style.css">

    <style>
        main{
            background:#003566 ;
            z-index: 1;
        }

        h1{
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px;
            color: #ffff;
        }

        .table{
            margin-top: 3%;
            width: 97%;
            border-color: #FFC300;
            background: #FFC300;
            color:#FCFAFA ;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;

            thead, th, tbody, td, tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;  
            }


            th,
            td {
                border-bottom-width: 2px;
                padding: 0.7rem;
                text-align: left;
            }

            tbody tr:nth-child(even) {
                background-color: var(--cor-cinza-claro);
            }

            tbody tr:hover {
                background-color: var(--cor-cinza);
            }
        }
    </style>
</head>