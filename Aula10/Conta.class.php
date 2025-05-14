<?php
    class Conta{
        public $Nome;
        public $Cpf;
        public $Saldo;

        public function Sacar($valor){
            
            if($valor > $this->Saldo){
                $resultado = "Saldo Insulficiente";
                return $resultado;
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Saldo atualizado para R$" . $this->Saldo;
                return $this->Saldo;
            }
            //$this->Saldo = $this->Saldo - $Valor;
            //return $this->Saldo;
        }
        public function Depositar($Valor){
            $resultado = "Saldo atualizado para R$" . $this->Saldo;
            return $this->Saldo;
            //$this->Saldo = $this->Saldo + $Valor;
            //return $this->Saldo;
        }
        public function ConsultarSaldo(){
           echo "Nome :". $this->Nome ."<br>";
           echo "CPF :". $this->Cpf ."<br>";
           echo "Saldo atual R$:". $this->Saldo ."<br>";
        }
    }

?>