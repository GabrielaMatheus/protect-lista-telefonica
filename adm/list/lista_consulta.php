<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>


<?php
    include_once("./classes/Lista.php");
    $lista = new Lista();
    $lista->setNumPagina($_GET["pg"]); //com essa liha eu consigo ir pro proximo e anterior
    $lista->setUrl("index_admin.php?link=2");

?>


<style>
.tabela{
    margin: 25px;
}
.title{
    text-align:center;
}
.numerosInferiores{
    text-align:center;

}
#botao{
    color:#673ab7;
    border: 1px solid #673ab7;
}

#botao:hover{
    background-color: #ede7f6 ;
 
}


</style>

<div class="title">
<h4>Lista de Contatos</h4>
</div>

<div class="tabela">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" >
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Editar</th>
    <th>Excluir</th>
</tr>
</thead>

<tbody>
 <?php
    $lista->listaContatos();
 ?>

    <tr>
        <td colspan="6" class="numerosInferiores"> <?php  $lista ->geraNumeros() ?> </td>
    </tr>
</tbody>
</table>
</div>