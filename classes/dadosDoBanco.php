<?php
include_once("conexaoMySql.php");

class dadosLista extends conexaoMySql{
    private $id,$nome,$telefone,$endereco;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id; //quando vai retornar, n precisa do sifrão na variavel
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

   

    public function mostrarDados(){
        $sql="select * from listaTelefonica where id = '$this->id'";
        $qry = self::executarSQL($sql);
        $linha = self::listar($qry);

        $this->id = $linha["id_cat"];
        $this->nome = $linha["nome"];
        $this->telefone = $linha["telefone"];
        $this->endereco = $linha["endereco"];




    }

 


    
}

?>