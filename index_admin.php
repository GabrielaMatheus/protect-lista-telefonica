<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php

include('menuAdmin.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
		<title>Home</title>
        <link rel="stylesheet" href="css/bulma.min.css" />
  



		<!--links do menu-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>





</head>

<header id="header" >
	
<?php
menu();
?>
</header>




<body id="body">
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<script>
	//menu mobile
	$(".button-collapse").sideNav();

	</script>
	


<div id="direito">
<?php
    $link = $_GET["link"];

  
    $pag[2] = "./adm/list/lista_consulta.php";
    $pag[3] = "./adm/frm/frm_cadastro.php";

  
    if(!empty($link)){
        if(file_exists($pag[$link])){
            include $pag[$link];
        }else{
            include "index.php";
        }
    }else{
        include "index.php";
    }

?>

</div>


</body>


</html>


