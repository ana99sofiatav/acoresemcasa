<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "Tem que fazer log in primeiro";
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Conta</title>
	
	<link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


    <script src="userpage.js"></script>

    
    <link href="js_css/stylelogin.css" rel="stylesheet" type="text/css"/>
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
   
   <h1 id="ilhash1">️Bem vindo, <?php echo ucfirst($_SESSION['user']['username']); ?> !</h1>
     
    <div id="corpo">
     
        <div id="intro">
            
            <div class="div-adaptavel">
                Nome Completo: <?php echo $_SESSION['user']['nome_completo']; ?>
                <br>
                <br>
                Nome Utilizador: <?php echo $_SESSION['user']['username']; ?>
                <br>
                <br>
                Palavra-passe: *******
         <button value="<?php echo $_SESSION['user']['id']; ?>" id="buttonApagar">Apagar Conta</button>
         <button value="<?php echo $_SESSION['user']['id']; ?>" id="buttonEditar">Editar Conta</button>
        
        <form method="post" action="userpage.php" id="formEditar">
        <?php echo display_error(); ?>
    	<div class="input-group">
    		<label><a>Nome de Utilizador</a></label>
    		<input value="<?php echo $_SESSION['user']['username']; ?>" type="text" name="username" value=<?php echo $username; ?>"">
    	</div>
    	<div class="input-group">
    		<label><a>Nome Completo</a></label>
    		<input value="<?php echo $_SESSION['user']['nome_completo']; ?>" type="text" name="nome_completo" value=<?php echo $nome; ?>"">
    	</div>
    	<div class="input-group">
    		<label><a>Email</a></label>
    		<input value="<?php echo $_SESSION['user']['email']; ?>" type="email" name="email" value="<?php echo $email; ?>">
    	</div>
    	<div class="input-group">
    		<label><a>Password</a></label>
    		<input value="" type="password" name="password_1">
    	</div>
    	<div class="input-group">
    		<label><a>Confirmar password</a></label>
    		<input value="" type="password" name="password_2">
    		<input type="" value="<?php echo $_SESSION['user']['id']; ?>" name="id">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="editar">Editar Conta</button>
    	</div>
    </form>
            </div>
    	</div>
      
	
	

  
    <div id="intro"> 
	<p></p>
        <h1>Páginas que guardou:</h1>
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