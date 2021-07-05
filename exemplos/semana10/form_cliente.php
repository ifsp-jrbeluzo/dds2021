<?php
include "menu.php";
    
            include "../classesFormulario/classeFormulario.php";
            
            $v["method"]="post";
            $v["action"]="#";
            $v["name"]="cliente";
            $v["titulo"]="Cliente";
            
            $f = new Formulario($v);
            
            $v=null;
            $v["type"]="text";
            $v["name"]="cpf";
            $v["id"]="cpf";
            $v["class"]="i";
            $v["placeholder"]="Digite o cpf do cliente...";
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $v = null;
            $v["type"]="text";
            $v["name"]="nome";
            $v["id"]="nome";
            $v["class"]="i";
            $v["placeholder"]="Digite o nome do cliente...";        
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $v=null;
            $v["type"]="text";
            $v["name"]="telefone";
            $v["id"]="telefone";
            $v["placeholder"]="Digite o telefone (xx)xxxxx-xxxx";
            $v["class"]="i"; 
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $v=null;
            $v["type"]="email";
            $v["name"]="email";
            $v["id"]="email";
            $v["placeholder"]="Digite o email....";
            $v["class"]="i"; 
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $v1["name"]="endereco";
            $v1["placeholder"]="Digite o Endereco (CEP / LOGRADOURO / NUMERO / BAIRRO / CIDADE / UF)....";
            $v1["cols"]="40";
            $v1["rows"]="4";
            $v1["class"]="t";
            $t = new TextArea($v1);
            $f->adiciona_elemento($t);

            $v=null;
            $v["type"]="text";
            $v["name"]="sexo";
            $v["id"]="sexo";
            $v["placeholder"]="Digite o sexo (M/F)....";
            $v["class"]="i"; 
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $v=null;
            $v["type"]="button";
            $v["value"]="Inserir Cliente";
            $v["name"]="Enviar";
            $v["id"]="inserir";
            $v["class"]="i"; 
            $i = new Input($v);
            $f->adiciona_elemento($i);

            $f->exibir();


        ?>


        </form>
    </body>
</html>