<?php

class conexaoMySql
{
    protected $servidor;
    protected $usuario;
    protected $senha;
    protected $conexao;
    protected $qry; /* query */
    protected $dados;
    protected $totalDados;


    public function __construct(){
        $this->servidor = "localhost:3306";
        $this->usuario = "root";
        $this->senha = "Gabriela14321070102";
        $this->banco = "myDatabase";
        self::conectar(); /* toda vez que crio um objeto, ele ja ta conectado automaticamente */
    }

    function conectar(){
       $this->conexao = @mysql_connect($this->servidor, $this->usuario,$this->senha) or die ("Não foi possível conectar com o servidor de banco de dados".mysql_error());
         $this->banco = @mysql_select_db($this->banco) or die ("Não foi possível conectar ao banco de dados".mysql_error()); 
    }

   function executarSQL($sql){ /* esse metodo vai executar qualquer comando sql */
       
      $this->qry = @mysql_query($sql) or die ("Erro ao executar o comando SQL: $sql <br>" .mysql_error());
        return $this->qry;
    }
    function listar($qr){
        $this->dados = @mysql_fetch_assoc($qr);
        return $this->dados;
    } 
    function contaDados($qry){
        $this->totalDados = mysql_num_rows($qry);
        return $this->totalDados;
    }
}

