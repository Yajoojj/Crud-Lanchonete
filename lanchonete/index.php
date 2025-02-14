<?php

if($_GET['url'] == 'home'){
    include 'paginas/home.php'; 
}

    elseif($_GET['url'] == 'cadastro'){
        include 'paginas/cadFunc.php'; 
    }
 
 {
    elseif($_GET['url'] == 'listar'){
        include 'paginas/listarFuncionarios.php'; 
    }
 }
 {
    if($_GET['url'] == 'contato'){
        include 'paginas/contato.php'; 
    }
 }
 {
    if($_GET['url'] == 'sobre'){
        include 'paginas/sobre.php'; 
    }
 }
 if(!isset($_GET['url'])){
     header('Location: home');
}