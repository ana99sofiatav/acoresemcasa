<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>  
<html lang="pt">
  <head>
    <title>Contato</title>
    
    <link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
      
    <link href="js_css/style.css" rel="stylesheet" type="text/css"/>
    
    <script src="js_css/myscript.js"></script>
  </head>

  <body>
   <div class="divmenu">
    <ul  class="menu">
        <li class="menuli">
	  <a id="letramenu" href="index.php">Home</a></li>
        <li class="dropdown">
          <a id="letramenu" href="freguesias.php" class="dropbtn">Concelhos</a>
            <div class="dropdown-content">
              <a id="letramenudrop" href="concelhos/lagoa.php">Lagoa</a>
              <a id="letramenudrop" href="concelhos/nordeste.php">Nordeste </a>
              <a id="letramenudrop" href="concelhos/ponta_delgada.php">Ponta Delgada</a>              
              <a id="letramenudrop" href="concelhos/povoacao.php">Vila da Povoação</a>
              <a id="letramenudrop" href="concelhos/ribeira_grande.php">Ribeira Grande</a>
              <a id="letramenudrop" href="concelhos/vila_franca_campo.php">Vila Franca do Campo</a>
            </div>
        </li>
        <li class="menuli" ><a id="letramenu" href='mapa_grande.php'>Mapa Grande</a></li>
        <li class="menuli" ><a id="letramenu" href='historia.php'>História</a></li>
        <li class="menuli" ><a id="letramenu" href='contato.php'>Contato</a></li>
        <li class="menuli" ><a id="letramenu" href='outrasilhas.php'>Outras Ilhas</a></li>
        <li class="menuli" ><a id="letramenu" href='login.php'>Log in</a></li>
        <div class="menuright">
            <div class="profile_info">
    			<img src="images/user.png"  >
    
    			<div >
    				<?php  if (isset($_SESSION['user'])) : ?>
    					<strong><?php echo $_SESSION['user']['username']; ?></strong>
    
    					<small>
    						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
    						<br>
    						<a href="index.php?logout='1'" style="color: red;">logout</a>
    					</small>
    
    				<?php endif ?>
    			</div>
    		</div>
    	</div>
    </ul>
   </div>

     
    
     

    <footer>
      
      <a><p id="footerpp">Sobre o site</p></a>
      <a><p id="footerpp">Contatar</p></a>
      <a><p id="footerpp">Login/Registrar</p></a>
<br>
      <p id="footerpp"> Sofia Tavares @ 2019 </p>
    </footer>
         
     
         

  </body>
</html>