<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Enums/Genero.php";
require_once "src/Models/Livro.php";
require_once "src/Models/Literario.php";

$livroA = new Literario("O Alquimista", "Paulo Coelho", Genero::AVENTURA);



?>

<ul>
    <li><b>Titulo do Livro:</b> <?=$livroA->getTitulo()?></li>
    <li><b>Autor:</b> <?=$livroA->getAutor()?></li>   
</ul>

 <!-- Acessamos as opções do Enum através do getGenero()->name -->
 <p><b>Genero:</b> <?=$livroA->getGenero()->name?> </p>

    
</body>
</html>