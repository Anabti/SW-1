<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        //Construtor para inicializar esses atributos
        public function_construct($)

        public function __construct($Nome, $Preco, $Quantidade= 0) {
            $this->nome = $Nome;
            $this->preco = $Preco;
            $this->quantidade = $Quantidade;
        }

        //Gettes
        public function getNome() {
            return $this->nome;
        }

        public function getPreco() {
            return $this->preco;
        }

        //settings
        public function setNome($Nome) {
            $this->nome = $Nome;
        }

        public function setPreco($Preco) {
            $this->preco = $Preco;
        }

        public function adicionarEstoque($Quantidade){
            if ($quantidade > 0) {
                $this
            }
        }

        public function removerEstoque($Quantidade){

        }

    }

?>