<?php
include_once("../../classes/manipulacaoDeDados.php");

$acao = $_POST["acao"];
$id = $_POST["id"];
$lista = new manipulacaoDeDados();
$lista->setTabela("listaTelefonica");


$txtNome = $_POST["txtNome"];
$txtTelefone = $_POST["txtTelefone"];
$txtEndereco = $_POST["txtEndereco"];


if($acao == "Inserir"){


$lista->setCampos("nome, telefone,endereco");
$lista->setDados("'$txtNome','$txtTelefone','$txtEndereco'");
$lista->inserir();

echo "<script type='text/javascript'> location.href='../../index_admin.php?link=2' </script>";

}

if($acao == "Alterar"){
    $lista->setCampos("nome = '$txtNome',telefone = '$txtTelefone',endereco = '$txtEndereco'");
    $lista->setValorNaTabela("id");
    $lista->setValorPesquisa($id);
    $lista->alterar();

    echo "<script type='text/javascript'> location.href='../../index_admin.php?link=2' </script>";

}


if($acao == "Excluir"){
    
    $lista->setValorNaTabela("id");
    $lista->setValorPesquisa($id);
    $lista->excluir();

    echo "<script type='text/javascript'> location.href='../../index_admin.php?link=2' </script>";

}
echo $lista->getMsg();

?>