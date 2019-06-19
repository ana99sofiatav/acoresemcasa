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
    <title>História</title>
    
    <link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="js_css/style.css" rel="stylesheet" type="text/css"/>
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
        		<!-- notification message -->
        		<?php if (isset($_SESSION['success'])) : ?>
        			<div class="error success" >
        				<h3>
        					<?php 
        						echo $_SESSION['success']; 
        						unset($_SESSION['success']);
        					?>
        				</h3>
        			</div>
        		<?php endif ?>
                    <div class="profile_info">
            			<img src="images/user.png"  >
            
            			<div>
            				<?php  if (isset($_SESSION['user'])) : ?>
            					<strong style="color:white;line-height:1.9;"><?php echo ucfirst($_SESSION['user']['username']); ?></strong>
            
            					<small>
            						<i style="color:white;line-height:1.9;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            						<br>
            						<a href="index.php?logout='1'" style="color: red;">logout</a>
            					</small>
            
            				<?php endif ?>
            			</div>
            		</div>
        		</div>
            
    </ul>
   </div>
   
   <div id="corpo">
        <h1 id="ilhash1">História de São Miguel</h1>

        <div id="intro">
            
            <img style="max-width:100%;height:630px;" src="js_css/images/azores_images/acoresmapa1.jpg" alt="Mapa de São Miguel"/> 
        
            <br>
            Acredita-se que a ilha tenha sido descoberta entre 1426 e 1439 já se encontrando assinalada em portulanos de meados do século XIV como "Ilha Verde". O seu descobrimento encontra-se assim descrito:
            <br>
            <br>
            <dd>"O Infante D. Henrique, desejando conhecer se haveria ilhas ou terra firme nas regiões afastadas do Oceano Ocidental, enviou navegadores. (...) Foram e viram terra a umas trezentas léguas a ocidente do cabo Finisterra e viram que eram ilhas. Entraram na primeira, acharam-na desabitada e, percorrendo-a, viram muitos açores e muitas aves; e foram à segunda, que agora é chamada de S. Miguel, onde encontraram também aves e açores e, além disso, muitas águas quentes naturais."</dd>
            <br>
            <br>
            
       
        </div>
  </div>

    <footer>
        <a><p id="footerpp">Sobre o site</p></a>
        <a href="contato.html"><p id="footerpp">Contatar</p></a>
        <a href="login.php"><p id="footerpp">Login/Registrar</p></a>
        <br>
        <p id="footerpp"> Sofia Tavares @ 2019 </p>
    </footer>
         
    
</body>
</html>