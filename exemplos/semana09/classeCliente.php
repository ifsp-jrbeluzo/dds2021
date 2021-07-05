<?php

class Cliente{

    public $cpf; 
    public $nome; 
    public $telefone; 
    public $email; 
    public $endereco; 
    public $sexo; 
   
    public function __construct($valores){
        $this->cpf = $valores["cpf"];
        $this->nome = $valores["nome"];
        $this->telefone = $valores["telefone"];
        $this->email = $valores["email"];
        $this->endereco = $valores["endereco"];
        $this->sexo = $valores["sexo"];
    }

    public function exibir(){
        $sexo["m"] = "Masculino";
        $sexo["M"] = "Masculino";
        $sexo["f"] = "Feminino";
        $sexo["F"] = "Feminino";
        echo "<div id='cliente$this->cpf'>";
        echo "<form id='alterar$this->cpf'>";        
        echo "<b>Cliente: </b><span id='nome$this->cpf'>$this->nome</span><br />";
        echo "<b>CPF: </b><span id='cpf$this->cpf'>$this->cpf</span><br />";
        echo "<b>Telefone: </b><span id='telefone$this->cpf'>$this->telefone</span><br />";
        echo "<b>Email: </b><span id='email$this->cpf'>$this->email</span><br />";
        echo "<b>Endereço: </b><span id='endereco$this->cpf'>$this->endereco</span><br />";
        echo "<b>Sexo: </b><span id='sexo$this->cpf'>".$sexo[$this->sexo]."</span><br />";
        /*echo "<form method='post' action='remover_cliente.php'>
                <input type='hidden' name='id_tabela' value='$this->cpf' />
                <button type='button'>Alterar</button> 
                <button class='remover' value='$this->cpf'>Remover</button>
               </form>";*/
        echo "<button type='button' class='alterar' value='$this->cpf'>Alterar</button> 
              <button type='button' class='alterando' value='$this->cpf' style='display:none'>Alterar</button> 
                <button class='remover' value='$this->cpf'>Remover</button>
              </form>";
                
        echo "<hr />";
        echo "</div>";
    }

}


?>