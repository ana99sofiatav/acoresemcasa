<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registar</title>
	
	<link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="js_css/stylelogin.css" rel="stylesheet" type="text/css"/>
  </head>
 
<body>
   <div class="divmenu">
        <ul  class="menu">
            <li class="menuli">
    	        <a id="letramenu" href="../index.php">Home</a></li>
                <li class="dropdown">
                    <a id="letramenu" href="../freguesias.php" class="dropbtn">Concelhos</a>
                        <div class="dropdown-content">
                          <a id="letramenudrop" href="../freguesias.php">Todos os concelhos</a>
                          <a id="letramenudrop" href="../concelhos/lagoa.php">Lagoa</a>
                          <a id="letramenudrop" href="../concelhos/nordeste.php">Nordeste </a>
                          <a id="letramenudrop" href="../concelhos/ponta_delgada.php">Ponta Delgada</a>              
                          <a id="letramenudrop" href="../concelhos/povoacao.php">Vila da Povoação</a>
                          <a id="letramenudrop" href="../concelhos/ribeira_grande.php">Ribeira Grande</a>
                          <a id="letramenudrop" href="c../oncelhos/vila_franca_campo.php">Vila Franca do Campo</a>
                        </div>
            </li>
            <li class="menuli" ><a id="letramenu" href='../mapa_grande.php'>Mapa Grande</a></li>
            <li class="menuli" ><a id="letramenu" href='../historia.php'>História</a></li>
            <li class="menuli" ><a id="letramenu" href='../contato.php'>Contato</a></li>
            <li class="menuli" ><a id="letramenu" href='../outrasilhas.php'>Outras Ilhas</a></li>
            <li class="menuli" ><a id="letramenu" href='login.php'>Login</a></li>
            
            
        </ul>
   </div>
   
 

     
    <div id="corpo">
    <div class="header">
    	 <h1 style="color:white;"> Criar Conta </h1>
    	 </div>
    <form method="post" action="register.php">
        <?php echo display_error(); ?>
    	<div class="input-group">
    		<label><a>Nome de Utilizador</a></label>
    		<input type="text" name="username" value=<?php echo $username; ?>"">
    	</div>
    	<div class="input-group">
    		<label><a>Nome Completo</a></label>
    		<input type="text" name="nome_completo" value=<?php echo $nome; ?>"">
    	</div>
    	<div class="input-group">
    		<label><a>Email</a></label>
    		<input type="email" name="email" value="<?php echo $email; ?>">
    	</div>
    	<div class="input-group">
    		<label><a>Password</a></label>
    		<input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    		<label><a>Confirmar password</a></label>
    		<input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="register_btn">Criar Conta</button>
    	</div>
    	<p>
    		Já é nosso membro? <a style="font-color:red;" href="login.php">Faça Login</a>
    	</p>
    </form>
    
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