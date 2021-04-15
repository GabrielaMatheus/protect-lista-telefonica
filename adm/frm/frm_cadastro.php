<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php

$acao = $_GET["acao"];
$id = $_GET["id"];

if($acao != ""){
    include_once("./classes/dadosDoBanco.php");
    $dados = new dadosLista();
    $dados->setId($id);
    $dados->mostrarDados();

    $txtNome = $dados->getNome();
    $txtTelefone = $dados->getTelefone();
    $txtEndereco = $dados->getEndereco();

}

?>


<style>
.title{
    text-align:center;
}
#formulario{
    margin:20px;
}
.buttom{
    justify-content: center;
    text-align:center;
    align-items:center;
    font-size:18px;
    
}
#botao{
    color:#673ab7;
    border: 1px solid #673ab7;
}

#botao:hover{
    background-color: #ede7f6 ;
 
}
</style>

<div id="formulario">

<div class="title">
<h4>Cadastro de Contatos</h4>
</div>
<br>
<div class="row">

    <form action="/projetoListaTelefonica/adm/op/op_lista.php" class="col s12" method="post" enctype="multipart/form-data">
 
        <div class="row">
            <div class="input-field col s12">
                <input id="txtNome" type="text" name="txtNome" class="validate" value="<?php echo $txtNome; ?>">
                <label for="text">Nome do Contato</label>
            </div>
        </div>



        <div class="dois-campos">

       
        <div class="row">
            <div class="input-field col s6">
                <input id="txtTelefone" type="text" name="txtTelefone" class="validate" value="<?php echo $txtTelefone; ?>">
                <label for="text">Telefone</label>
            </div>
            <div class="input-field col s6">
                <input id="txtEndereco" type="text" name="txtEndereco" class="validate" value="<?php echo $txtEndereco; ?>">
                <label for="text">Endereco</label>
            </div>
       


         

        </div> <!-- fecha row -->

     

       

        <div class="buttom">
        <input type="hidden" name="id" value="<?php  echo $id;  ?>">
        <input type="hidden" name="acao" value="<?php if($acao != ""){ echo $acao; }else{echo "Inserir";} ?>">
        <input type="submit" value="<?php if($acao != ""){ echo $acao; }else{echo "Inserir";} ?>" id="botao"class="button is-medium">
        </div>
      
    </form>
</div>
</div>
