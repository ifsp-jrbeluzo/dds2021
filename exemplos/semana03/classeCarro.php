<?php

class Carro{
    public $cor;
    public $qtd_porta;
    public $velocidade_maxima;
    public $velocidade_atual = 0;


    public function acelerar($aceleracao,$tempo){
        $this->velocidade_atual = 
                $this->velocidade_atual + $aceleracao*$tempo;
        if($this->velocidade_atual>$this->velocidade_maxima){
            $this->velocidade_atual = $this->velocidade_maxima;
        }
    }

    public function frear($aceleracao,$tempo){
        $this->velocidade_atual = 
                $this->velocidade_atual - $aceleracao*$tempo;
        if($this->velocidade_atual<=0){
            $this->velocidade_atual = 0;
        }
    }

}
?>
