<?php

include "../conexao.php";

    class Produto{
        private $id;
        private $nomeProduto;
        private $categoriaProduto;

        public function getId(){
            return $this -> id;
        }

        public function getNomeProduto(){
            return $this -> nomeProduto;
        }

        public function getCategoriaProduto(){
            return $this -> categoriaProduto;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setnomeProduto($nomeProduto){
            $this -> nomeProduto = $nomeProduto;
        }

        public function setcategoriaProduto($categoriaProduto){
            $this -> categoriaProduto = $categoriaProduto;
        }
        
    }

?>
