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
require_once "src/Enums/Formato.php";
require_once "src/Models/Livro.php";
require_once "src/Models/Literario.php";
require_once "src/Models/Tecnico.php";
require_once "src/Models/Programacao.php";


$livroA = new Literario("O Alquimista", "Paulo Coelho", Genero::AVENTURA);
$livroB = new Tecnico("O Designer do dia a dia", "Donald Norman", Formato::DIGITAL);
//$livroB=  new Tecnico("aaa", "bbb", Formato::DIGITAL);

$livroC = new Programacao("O outro lado da sombra", "Mariana Portella", Formato::FISICO, "traumas" );



?>

<ul>
    <li><b>Titulo do Livro:</b> <?=$livroA->getTitulo()?></li>
    <li><b>Autor:</b> <?=$livroA->getAutor()?></li>   
    <p><b>Genero:</b> <?=$livroA->getGenero()->name?> </p>
</ul>

<hr>

<ul>
    <li><b>Titulo do Livro:</b> <?=$livroB->getTitulo()?></li>
    <li><b>Autor:</b> <?=$livroB->getAutor()?></li>  
    <p><b>Formato:</b> <?=$livroB->getFormato()->name?> </p>

</ul>

<ul>
    <li><b>Titulo do Livro:</b> <?=$livroC->getTitulo()?></li>
    <li><b>Autor:</b> <?=$livroC->getAutor()?></li>  
    <p><b>Formato:</b> <?=$livroC->getFormato()->name?> </p>
    <p><b>Linguagem:</b> <?=$livroC->getLinguagem()?> </p>
</ul>





 <!-- Acessamos as opções do Enum através do getGenero()->name -->
 

    
</body>
</html>