<!DOCTYPE html>  
<html lang="pt">
  <head>
    <title>Contacto</title>
    
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
            <div class="dropdown-content"><a id="letramenudrop" href="freguesias.php">Todos os concelhos</a>
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
        <li class="menuli" ><a id="letramenu" href='multi_login/login.php'>Log in</a></li>
    </ul>
   </div>

     <html>
<body>
		<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');
?>
<form method="POST" action="getdata.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>
<?php

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

?>
</body>
</html>
    
     

    <footer>
      
      <a><p id="footerpp">Sobre o site</p></a>
      <a><p id="footerpp">Contatar</p></a>
      <a><p id="footerpp">Login/Registrar</p></a>
<br>
      <p id="footerpp"> Sofia Tavares @ 2019 </p>
    </footer>
         
     
         

  </body>
</html>