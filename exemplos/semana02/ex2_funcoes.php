<?php


function exibe_cadastro($vetor_cadastro){

    include "vetor_copas.php";

    $dataNascimento = $vetor_cadastro["data_nascimento"];
    //spoiller 1: DateTime é uma Classe de Objetos - veremos o que é isso no semestre.
    $data_nasc = new DateTime($dataNascimento);
    
    /*Função date: retorna a data atual no formato passado entre aspas.
    Principais parâmetros Y - ano; m - mês; d - dia; H - hora(24); i - minuto; s - segundos;
    */
    $data_atual = new DateTime( date('Y-m-d') );
    //spoiller 2: $date é um objeto do tipo DateTime; 
    //spoiller 3: ->diff é um método do objeto DateTime
    $intervalo = $data_nasc->diff( $data_atual ); 
    
    $idade = (int)$intervalo->format('%Y');   

    echo "<h3>Dados Cadastrais:</h3>
          <b>Nome:</b>" . $vetor_cadastro["nome"] . "<br />
          <b>Email:</b>" . $vetor_cadastro["email"] . "<br />
          <b>Sexo:</b>" . $vetor_cadastro["sexo"] . "<br />
          <b>Data Nascimento:</b>" .$vetor_cadastro["data_nascimento"]. "<br />
          <b>Idade:</b> " . $idade . " anos<br />
          <h3>Copas assistidas por " . $vetor_cadastro["nome"] . ":</h3>";
    
    $ano_atual = (int)date("Y");

    for($i=$ano_atual;$i>=($ano_atual-$idade+5);$i--){
        if($i%4!=0 && $i%2==0 && $i>=1930){
            echo "<br /> $i - " .$copa[$i];
        }
    } 
    echo "<hr />";

}

?>