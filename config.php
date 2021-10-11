<?php
require 'environment.php';

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/vtvideo/");   
    $config['host'] = 'localhost';
    $config['dbname'] = 'photo-budget';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{ 
    define("BASE_URL", "http://photobudget.pessoal.ws/"); 
    $config['host'] = 'photos_budgget.mysql.dbaas.com.br';
    $config['dbname'] = 'photos_budget';
    $config['dbuser'] = 'photos_budget';
    $config['dbpass'] = 'Juliana@2009';
}


global $db;

try{

    $db = new PDO("mysql:dbname=".$config['dbname'].";host=" .$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOExcpetion $e){
    echo "ERRO: " .$e->getMessage();
    exit;
}

// Dados banco de dados

// NOME photos_budgget
// senha Juliana@2009
// servidor photo_budget.mysql.dbaas.com.br
// usuario  photo_budget


//senha de ftp  juliana@mozart.1976Lima
//host ftp.menus.pessoal.ws
//usuario   menuspessoal1
//photobudget.pessoal.ws

//NOVO

// ftp   ftp.photobudget.pessoal.ws
//usuario    photobudgetpesso1
//password    Photo@23Juliana@Mozart
//    ftp.photobudgetpesso1.hospedagemdesites.ws


