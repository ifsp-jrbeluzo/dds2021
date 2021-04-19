<?php


function exibe_dados($vetor){

    //$copa = array("1930"=>"Uruguai","1934"=>"Itália","1938"=>"França");
$copa=["1930"=>"Uruguai","1934"=>"Itália","1938"=>"França"];
$copa["1942"] = "Cancelado devido à 2a Guerra Mundial";
$copa["1946"] = "Cancelado devido à 2a Guerra Mundial";
$copa["1950"] = "Brasil";
$copa["1954"] = "Suíça";
$copa["1958"] = "Suécia";
$copa["1962"] = "Chile";
$copa["1966"] = "Inglaterra";
$copa["1970"] = "México";
$copa["1974"] = "Alemanha";
$copa["1978"] = "Argentina";
$copa["1982"] = "Espanha";
$copa["1986"] = "México";
$copa["1990"] = "Itália";
$copa["1994"] = "Estados Unidos";
$copa["1998"] = "França";
$copa["2002"] = "Coréia do Sul / Japão";
$copa["2006"] = "Alemanha";
$copa["2010"] = "África do Sul";
$copa["2014"] = "Brasil";
$copa["2018"] = "Rússia";

    $dataNascimento = $vetor["data_nascimento"];
    //spoiller 1: DateTime é uma Classe de Objetos - veremos o que é isso no semestre.
    $date = new DateTime($dataNascimento);
    
    /*Função date: retorna a data atual no formato passado entre aspas.
    Principais parâmetros Y - ano; m - mês; d - dia; H - hora(24); i - minuto; s - segundos;
    */
    $data_atual = new DateTime( date('Y-m-d') );
    //spoiller 2: $date é um objeto do tipo DateTime; 
    //spoiller 3: ->diff é um método do objeto DateTime
    $interval = $date->diff( $data_atual ); 
    
    $idade = (int)$interval->format('%Y');    
    echo "<h3>Dados Cadastrais:</h3>";
    echo "<b>Nome:</b>".$vetor["nome"]."<br />";
    echo "<b>Email:</b>".$vetor["email"]."<br />";
    echo "<b>Sexo:</b>".$vetor["sexo"]."<br />";
    echo "<b>Data Nascimento:</b>".$vetor["data_nascimento"]."<br />";
    echo "<b>Idade:</b> ".$idade." anos<br />";
    echo "<h3>Copas assistidas pelo ".$vetor["nome"].":</h3>";
    for($i=date("Y");$i>=((int)date("Y") - $idade + 5);$i--){
        if($i%4!=0 && $i%2==0){
            if(isset($copa[$i]))
                echo "<b>$i</b> - ".$copa[$i]."<br />";
        }
    }

    echo "<hr />";

}

?>