<?php
    include_once("Paginacao.php");
    
    class Lista extends Paginacao{
        private $strNumPagina, $strPaginas, $strUrl;

        public function setNumPagina($valor){
            $this->strNumPagina = $valor;
        }

        public function setUrl($valor){
            $this->strUrl = $valor;
        }

        public function getPaginas(){
            return $this-> strNumPagina;
        }

        public function listaContatos(){
            $sql = "select * from listaTelefonica";
            $this->setParametro($this->strNumPagina);
            $this->setFileName($this->strUrl);
            $this->setInfoMaxPag(10);
            $this->setMaximoLinks(50);
            $this->setSQL($sql);

            self::iniciaPaginacao();
            $cont = 0;

            while ($linha = self::results()){
                $cont++;
                echo "   
                <tr>
                    <td>$linha[id]</td>
                    <td>$linha[nome]</td>
                    <td>$linha[telefone]</td>
                    <td>$linha[endereco]</td>
                    <td><a  class='button' href='index_admin.php?link=3&acao=Alterar&id=$linha[id]'>Editar</a></td>
                    <td><a class='button'  href='index_admin.php?link=3&acao=Excluir&id=$linha[id]'>Excluir</a></td>
                </tr>
                ";
                self::setContador($cont);
            }
        }


       
    }
?>