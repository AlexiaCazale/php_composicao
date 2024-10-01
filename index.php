<?php
    require_once 'endereco.class.php';
    require_once 'pessoa.class.php';

    $countPerson = 1;

    //Endereço a quem pertence
    $pessoa = new Pessoa('Paulo', array());

    $endereco = new Endereco('XV de Novembro', '123', '17289383', $pessoa);

    //pessoa colocar os endereõs dela
    $pessoa2 = new Pessoa(nome: 'Ana', logradouro: '7 de setembro', numero: '44', cep: '18756965');
    $pessoa3 = new Pessoa('Maria',array(), '7 de setembro', '44', '18756965');

    $pessoa2 -> setEndereco('Rua Ramos', '15', '17896523', null);

    echo "<h1>Pessoa {$countPerson}</h1>";
    echo "Pessoa: {$pessoa2 -> getNome()} <br>";

    $count = 1; 

    foreach($pessoa2 -> getEndereco() as $e){
        echo "<h3>Endereço {$count} </h3>";
        echo "Logradouro: {$e -> getLogradouro()} <br>";
        echo "Número: {$e -> getNumero()} <br>";
        echo "CEP: {$e -> getCep()} <br>";
        //echo "Pessoa: {$e -> getPessoa()} <br>"; null

        $count++;
    }

    echo '<br>';
    echo "---------------------------------";
    
    $countPerson++; 

    echo "<h1>Pessoa {$countPerson}</h1>";
    echo "Pessoa: {$pessoa3 -> getNome()} <br>";

    $countEn2 = 1; 
    
    foreach($pessoa3 -> getEndereco() as $end){
        echo "<h3>Endereço {$countEn2} </h3>";
        echo "Logradouro: {$end -> getLogradouro()} <br>";
        echo "Número: {$end -> getNumero()} <br>";
        echo "CEP: {$end -> getCep()} <br>";
        //echo "Pessoa: {$e -> getPessoa()} <br>"; null
        
        $countEn2++;
    }
    

;?>

