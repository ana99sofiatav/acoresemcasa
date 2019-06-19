<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="js_css/style.css" rel="stylesheet" type="text/css"/>
  </head>
 
<body>
   <div class="divmenu">
        <ul  class="menu">
            <li class="menuli">
    	        <a id="letramenu" href="">Home</a></li>
                <li class="dropdown">
                    <a id="letramenu" href="freguesias.php" class="dropbtn">Concelhos</a>
                        <div class="dropdown-content">
                          <a id="letramenudrop" href="freguesias.php">Todos os concelhos</a>
                          <a id="letramenudrop" href="lagoa.php">Lagoa</a>
                          <a id="letramenudrop" href="nordeste.php">Nordeste </a>
                          <a id="letramenudrop" href="ponta_delgada.php">Ponta Delgada</a>              
                          <a id="letramenudrop" href="povoacao.php">Vila da Povoação</a>
                          <a id="letramenudrop" href="ribeira_grande.php">Ribeira Grande</a>
                          <a id="letramenudrop" href="vila_franca_campo.php">Vila Franca do Campo</a>
                        </div>
            </li>
            <li class="menuli" ><a id="letramenu" href='mapa_grande.php'>Mapa Grande</a></li>
            <li class="menuli" ><a id="letramenu" href='historia.php'>História</a></li>
            <li class="menuli" ><a id="letramenu" href='contato.php'>Contato</a></li>
            <li class="menuli" ><a id="letramenu" href='outrasilhas.php'>Outras Ilhas</a></li>
            <li class="menuli" ><a id="letramenu" href='login.php'>Login</a></li>    
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
   
   <h1 id="ilhash1">🏝️ São Miguel 🏝️</h1>
      <div id="captioned-gallery">
          <figure class="slider">
            <figure>
              <img src="js_css/images/azores_images/img1.jpg" alt/>
              <figcaption>Sete Cidades</figcaption>
            </figure>
            <figure>
              <img src="js_css/images/azores_images/img2.jpg" alt/>
              <figcaption>Lagoa do Fogo</figcaption>
            </figure>
            <figure>
              <img src="js_css/images/azores_images/img3.jpg" alt/>
              <figcaption>Pequeno ilhéu</figcaption>
            </figure>
            <figure>
              <img src="js_css/images/azores_images/img4.jpg" alt/>
              <figcaption>Vila Franca do Campo</figcaption>
            </figure>
          </figure>
        </div> 
     
    <div id="corpo">
     
        <div id="intro">
            
            <div class="div-adaptavel">
                    O arquipélago dos Açores possui 9 ilhas uma delas sendo a linda ilha de São Miguel, a maior ilha de todas.
                <br>
                <br>
                     Descansando no Grupo Oriental do arquipélago, esta ilha proporciona-lhe as mais belas experiências e recordações. Aqui pode observar as maravilhas que a natureza e mar podem-lhe oferecer.
                <br>
                    Lindas lagoas, maravilhosos monumentos, igrejas e isto é para não falar na gastronomia. Venha conosco e navegue pelo site!
         
                <div style="text-align:left; width:100%;
		line-height: 1.9;font-weight:normal;">
                    
                  <dt><p></p>É composta pelos concelhos de:</dt>
                    <dd>&#128205; Lagoa</dd>
                    <dd>&#128205; Nordeste</dd>
                    <dd>&#128205; Ponta Delgada</dd>
                    <dd>&#128205; Povoação</dd>
                    <dd>&#128205; Ribeira Grande</dd>
                    <dd>&#128205; Vila Franca do Campo</dd>
                  <br>
                  <a href="freguesias.php"><dd> ➜ Toque aqui para ver o mapa de São Miguel.</dd></a>
                </div>
            </div>
    	</div>
      
	
	

  
    <div id="intro"> 
	<p></p>
        <h1>Sítios mais visitados:</h1>
    </div>
    <div class="responsive">
        <div class="gallery">
        	<a href="#">
        	  <img src="js_css/images/azores_images/img1.jpg" alt="Lagoa das sete cidades" width="600" height="400">
        	</a>
        	<div class="desc"><a>Lagoa das Sete Cidades</a></div>
        </div>
    </div>
  
  
    <div class="responsive">
        <div class="gallery">
        	<a href="#">
        	  <img src="js_css/images/azores_images/img6.jpg" alt="Forest" width="600" height="400">
        	</a>
        	<div class="desc"><a>Furnas</a></div>
            </div>
        </div>
  
        <div class="responsive">
            <div class="gallery">
            	<a href="#">
            	  <img src="js_css/images/azores_images/img7.JPG" alt="Northern Lights" width="600" height="400">
            	</a>
        	    <div class="desc"><a>Igreja Arcanjo</a></div>
            </div>
        </div>
      
        <div class="responsive">
          <div class="gallery">
        	<a href="#">
        	  <img src="js_css/images/azores_images/img8.jpg" alt="Mountains" width="600" height="400">
        	</a>
    	    <div class="desc"><a>Ermida Senhora da Paz</a></div>
          </div>
        </div>
    <div class="clearfix"></div>

    <br>


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