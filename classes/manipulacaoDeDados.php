<?php
    include_once("conexaoMySql.php");


  
    class manipulacaoDeDados extends conexaoMySql{
        protected $sql;
        protected $tabela;
        protected $campos;
        protected $dados;
        protected $msg;
        protected $valorNaTabela;
        protected $valorPesquisa;

        public function setTabela($tbl){
            $this->tabela = $tbl;
        }

        public function setCampos($campo){
            $this->campos = $campo;
        }

        public function setDados($dado){
            $this->dados = $dado;
        }

        public function getMsg(){
            return $this->msg;
        }
        public function setValorNaTabela($val){
            $this->valorNaTabela = $val;
        }
        public function setValorPesquisa($pesq){
            $this->valorPesquisa = $pesq;
        }
        public function inserir(){
            $this->sql = "INSERT INTO $this->tabela ($this->campos) values ($this->dados)";
            if(self::executarSQL($this->sql)){
                $this->msg = "Registro cadastrado com sucesso";
            };

        }
        public function excluir(){
            $this->sql = "DELETE FROM $this->tabela where $this->valorNaTabela = '$this->valorPesquisa'";
            if(self::executarSQL($this->sql)){
                $this->msg = "Registro excluído com sucesso";
            };
        }
        public function alterar(){
            $this->sql = "update  $this->tabela set $this->campos where $this->valorNaTabela = '$this->valorPesquisa'";
            if(self::executarSQL($this->sql)){
                $this->msg = "Registro alterado com sucesso";
            };

        }
    }

?>