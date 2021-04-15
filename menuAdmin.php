<?php
session_start();
function menu(){
  ?>

<div >
 <nav class="deep-purple lighten-3" >
  <div class="nav-wrapper">
    <a href="#" data-activates="menu_mobile" class="button-collapse">
    	<i class="material-icons"style="color:#000;">menu</i>
    </a>

    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" data-activates="dropdown" data-beloworigin="true" href="#"><i class="material-icons left"style="color:#000;">arrow_drop_down</i><span class="black-text text-black">dropdown</span></a></li>
    </ul>
</div>
   

</nav>
  </div>
  <!--Dropdown-->


<ul class="dropdown-content" id="dropdown">
    <li > <a href="index_admin.php?link=3" style="color:#000;">Cadastrar</a></li>
  	<li class = "divider"></li>
  	<li > <a href="index_admin.php?link=2" style="color:#000;">Listar/Alterar/Excluir</a></li>
</ul>


  <!--menu mobile-->
<ul class="side-nav" id="menu_mobile">

  <li><a href="index_admin.php?link=3"><i class="material-icons left">cancel</i>Cadastrar</a></li>
  <li><a href="index_admin.php?link=2"><i class="material-icons left">description</i>Listar/Alterar/Excluir</a></li>

 </ul>


 <?php
}
?>




