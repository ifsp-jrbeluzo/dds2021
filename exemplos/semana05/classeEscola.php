<?php

    class Escola{
        public $nome;
        public $cnpj;
        public $endereco;
        public $cidade;
        public $estado;

        public function __construct($valores){            
            $this->nome = $valores["nome"];
            $this->cnpj = $valores["cnpj"];
            $this->endereco = $valores["endereco"];
            $this->cidade = $valores["cidade"];
            $this->estado = $valores["estado"];
        }

        public function exibir_escola(){
            echo "<h3>Escola:</h3>";
            echo "$this->nome ($this->cnpj)<br />";
            echo "Endereço: $this->endereco<br />";
            echo "Cidade/UF: $this->cidade / $this->estado<br />";           
        }

    }

?>