<!DOCTYPE html>  
<html lang="pt">
   <head>
      <title>Freguesias</title>
      <link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
      <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
      <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
      <link href="js_css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js_css/galeria.js"></script>
   </head>
   <body>
      <div class="divmenu">
         <ul  class="menu">
            <li class="menuli">
               <a id="letramenu" href="index.php">Home</a>
            </li>
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
            <li class="menuli"><a id="letramenu" href='mapa_grande.php'>Mapa Grande</a></li>
            <li class="menuli"><a id="letramenu" href='historia.php'>História</a></li>
            <li class="menuli"><a id="letramenu" href='contato.php'>Contato</a></li>
            <li class="menuli"><a id="letramenu" href='outrasilhas.php'>Outras Ilhas</a></li>
            <li class="menuli"><a id="letramenu" href='multi_login/login.php'>Log In</a></li>
         </ul>
      </div>
      <h1 id="ilhash1">
          <button class="button" onclick="goBack()"><i class="material-icons">chevron_left</i></button>
          Concelhos de São Miguel</h1>
      <div id="captioned-gallery">
         <figure class="slider">
            <figure>
               <img src="js_css/images/azores_images/img1.jpg" >
               <figcaption>Sete Cidades</figcaption>
            </figure>
            <figure>
               <img src="js_css/images/azores_images/img2.jpg" >
               <figcaption>Lagoa do Fogo</figcaption>
            </figure>
            <figure>
               <img src="js_css/images/azores_images/img3.jpg" >
               <figcaption>Lagoa do Fogo</figcaption>
            </figure>
            <figure>
               <img src="js_css/images/azores_images/img4.jpg" >
               <figcaption>Vila Franca do Campo</figcaption>
            </figure>
         </figure>
      </div>
      <!--<div id="freguesias3">   -->
      <div id="corpo">
         <div id="intro">
            São Miguel é uma ilha repleta de paisagens e sabores maravilhosos. Com este mapa da ilha pode ver os vários concelhos da ilha delimitados, não só por região mas também por cor.<br><br>
            Pode escolher uma área do mapa à sua escolha, ou se preferir, escolha um dos concelhos da lista abaixo👇 e comece a explorar o que a ilha tem para lhe oferecer!<br>
         </div>
         <div style="max-width:900px; display: block; margin:auto;" class="caixa">
               <svg  version="1.1" viewBox="0 0 104 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/ponta_delgada.php" title="Ponta Delgada">
                        <path  class="ponta_delgada" d="m67.095 100.12c0 0.24695-0.42333 0.84667-0.9525 1.3406-0.74083 0.635-1.4111 0.84667-2.54 0.84667-1.5169 0-1.5875 0.0706-1.8344 1.1642-0.24694 1.27-1.2347 2.54-1.9756 2.54-0.24694 0-0.45861 0.24695-0.45861 0.52917s-0.14111 0.52917-0.35278 0.52917c-0.17639 0-0.35278 0.21166-0.35278 0.49388 0 0.24695-0.24694 0.67028-0.52917 0.91723-0.70556 0.59972-0.67028 1.5169 0.17639 3.175 0.38806 0.77611 0.70556 1.6933 0.70556 2.0814 0 0.38805 0.56444 1.1289 1.3053 1.6933 0.74083 0.52917 1.9403 1.5875 2.6811 2.3283 0.74083 0.74084 1.9403 1.5875 2.6458 1.905 1.27 0.49389 3.2456 2.2931 3.2456 2.9281 0 0.17639 0.38806 0.52916 0.84667 0.77611 1.9756 1.0936 4.0217 2.5753 5.5033 3.9864 0.88194 0.84666 1.9403 1.6228 2.3636 1.7286 0.42333 0.14111 0.88194 0.56444 0.98778 0.9525 0.28222 0.84667 3.0339 2.1872 4.445 2.1872 0.56444 0 1.3053-0.24694 1.6581-0.56444 0.35278-0.3175 1.5875-0.77611 2.7517-0.98778 1.1289-0.24695 2.3989-0.70556 2.8222-1.0583 0.88194-0.81139 1.7286-0.84667 3.1044-0.14112 1.5522 0.81139 1.905 0.67028 2.1519-0.98777 0.14111-0.81139 0.49389-1.7992 0.74083-2.152 0.38806-0.59972 0.35278-0.77611-0.28222-1.3406-0.42333-0.35278-1.0583-0.635-1.4464-0.635-0.38806 0-1.2347-0.49389-1.905-1.0583-0.67028-0.59972-1.6933-1.1642-2.2578-1.3053-1.0583-0.21167-1.27-0.70556-0.70556-1.7992 0.17639-0.3175 0.59972-1.2347 0.91722-2.0108 0.35278-0.77612 0.84667-1.8344 1.1289-2.3636 0.42333-0.88194 0.42333-0.98777-0.28222-1.3758-0.56445-0.28222-0.9525-0.28222-1.5522 0.0353-1.3758 0.74084-7.2319-0.81139-7.2319-1.9403 0-0.3175-0.21167-0.42333-0.52917-0.3175-0.74083 0.28223-1.5875-0.49388-1.5875-1.4817 0-0.42334-0.14111-0.91722-0.35278-1.0231-0.17639-0.10583-0.35278-0.49389-0.35278-0.88195 0-0.35277-0.24694-0.70555-0.52917-0.84666-0.28222-0.10584-0.52917-0.49389-0.52917-0.88195 0-1.023-1.5522-2.6811-3.4572-3.6689-0.91722-0.45861-2.9281-1.5169-4.4803-2.3283-2.9986-1.5522-3.7042-1.7286-3.7042-0.98778z">
                           <title>Ponta Delgada</title>
                        </path>
                     </a>
                  </g>
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/ribeira_grande.php">
                        <path  class="ribeira_grande"  d="m133.8 109.12c-0.38805 0.52916-1.2347 1.2347-1.8697 1.5522s-2.1167 1.023-3.2808 1.5875c-1.1642 0.52917-2.2225 1.1289-2.3283 1.3053-0.14111 0.14111-0.70555 0.17639-1.3053 0.0353-0.81139-0.17639-1.1642-0.0706-1.4111 0.35277-0.17639 0.35278-1.0231 0.74084-1.8697 0.91723-2.4342 0.45861-2.7869 0.38805-2.7869-0.49389-0.0353-0.74084-0.0706-0.70556-0.56444 0.17639-0.52917 1.023-1.3406 1.27-1.7286 0.635-0.17638-0.28223-0.38805-0.28223-0.67027 0-0.635 0.49389-2.6458 0.0353-3.81-0.84667-0.70556-0.52917-0.9525-1.0583-0.9525-1.9756-0.0353-1.1994-0.0353-1.1994-0.59973-0.42333-0.28222 0.42333-0.77611 0.77611-1.023 0.77611-0.28222 0-0.70556 0.3175-0.9525 0.70556-0.24695 0.38805-0.635 0.70555-0.88195 0.70555-0.24694 0-0.81138 0.38806-1.3053 0.88195s-1.0583 0.88194-1.27 0.88194c-0.21167 0-0.9525 0.28222-1.6933 0.67028-0.9525 0.49389-2.0461 0.67028-4.1275 0.635-2.3636 0-3.1397-0.14111-4.8331-0.98778l-1.9756-0.98778-0.56445 0.84667c-0.3175 0.45861-0.56444 1.0231-0.56444 1.27 0 0.21167-0.24694 0.88195-0.56444 1.4817-0.91722 1.7286-1.1994 2.3283-1.1994 2.5047 0 0.0706 0.45861 0.21167 1.0231 0.3175 0.56444 0.14111 1.5875 0.70556 2.2578 1.3053 0.67028 0.56444 1.5522 1.0583 1.9403 1.0583 0.38805 0 0.98778 0.24694 1.3053 0.56444 0.45861 0.49389 0.70556 0.49389 1.6933 0.10584 0.635-0.24695 1.27-0.56445 1.4817-0.74084 0.59972-0.52916 1.7992-0.28222 4.0217 0.81139 2.1872 1.0936 2.2578 1.0936 4.6567 0.70556 2.293-0.35278 2.5047-0.35278 3.4572 0.35278l0.98778 0.70555 1.2347-0.70555c0.70555-0.35278 1.7286-0.74084 2.2578-0.81139 0.81139-0.0706 1.1642-0.42334 1.6933-1.5875 0.67028-1.4817 0.70556-1.517 2.1167-1.27 0.81139 0.10583 1.6228 0.3175 1.7992 0.45861 0.21167 0.14111 1.0583 0.35278 1.9403 0.49389 0.84667 0.14111 1.8344 0.49389 2.1519 0.77611 0.52917 0.49389 0.77612 0.45861 2.1872-0.17639 0.84666-0.38806 1.658-0.9525 1.7992-1.27 0.10584-0.3175 0.635-0.52917 1.2347-0.52917 1.1642 0 2.8575-0.67027 2.8575-1.0936 0-0.42333 3.81-1.0936 4.9389-0.84666 0.88195 0.17639 1.0231 0.14111 0.84667-0.3175-0.10583-0.3175-0.49389-0.56445-0.84667-0.56445-0.74083 0-1.8697-3.0339-1.7286-4.7272 0.17639-1.905-0.70555-4.9036-1.6228-5.5739-0.81139-0.635-0.84667-0.59972-1.5522 0.35278z">
                           <title>Ribeira Grande</title>
                        </path>
                     </a>
                  </g>
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/nordeste.php">
                        <path  class="nordeste"  d="m140.65 108.69c-1.1642 0.28223-2.54 0.45861-3.0692 0.35278-1.1642-0.21167-1.1289-0.24694-0.45862 2.3989 0.28223 1.0936 0.42334 2.3989 0.3175 2.8222-0.28222 1.2347 0.88195 4.445 1.6228 4.445 0.3175 0 0.77611 0.38806 0.98778 0.88195 0.52917 1.1289 1.5875 1.1289 3.4219 0 0.77612-0.49389 1.8697-0.88195 2.4342-0.88195 0.56445 0 1.5522-0.3175 2.1872-0.74083 1.5522-0.9525 2.6106-0.77611 3.3161 0.56444 0.84667 1.6228 1.7992 2.2578 3.3514 2.2931 0.98778 0 1.7286 0.28222 2.4342 0.88194 0.74084 0.635 1.4464 0.88195 2.5753 0.88195 1.4111 0 1.9403-0.38806 1.1642-0.88195-0.52917-0.3175-0.38806-2.7164 0.17639-3.4925 0.74083-0.98777 0.67027-3.3514-0.14112-5.0094-0.38805-0.77611-0.81138-1.8697-0.9525-2.3989-0.10583-0.52917-0.49388-1.0583-0.81138-1.1642-0.3175-0.0705-0.84667-0.3175-1.1642-0.49389-1.3758-0.74083-5.1506-0.98777-7.0556-0.45861-2.4342 0.635-5.8208 0.635-7.1261-0.0353-0.52917-0.28223-1.0231-0.52917-1.0583-0.49389 0 0-0.98778 0.24694-2.152 0.52916z">
                           <title>Nordeste</title>
                        </path>
                     </a>
                  </g>
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/povoacao.php">
                        <path   class="povoacao" d="m148.41 118.36c-0.56444 0.38806-1.5169 0.70556-2.0814 0.70556-0.56444 0-1.7639 0.42333-2.6458 0.9525-1.5169 0.88194-1.6933 0.91722-3.9158 0.52917-2.2578-0.38806-5.6444-0.0353-5.6444 0.59972 0 0.42333-1.6933 1.0936-2.8222 1.0936-0.635 0-1.1642 0.24694-1.3758 0.635-0.17639 0.35278-0.88195 0.84667-1.5875 1.1289-1.4817 0.56444-1.5875 0.9525-0.45861 1.4111 1.0936 0.45861 2.0108 1.2347 2.0108 1.7286 0 0.21167 0.3175 0.56445 0.70556 0.81139 0.38805 0.24694 0.70555 0.635 0.70555 0.84667 0 0.21166 0.3175 0.74083 0.70556 1.1994 0.38805 0.45861 0.81139 1.1994 0.91722 1.6581 0.17639 0.59972 0.45861 0.81139 1.2347 0.81139 0.56445 0 1.3053-0.14112 1.6581-0.3175 0.3175-0.17639 1.3406-0.67028 2.2578-1.0936 0.91723-0.42333 2.0461-1.0583 2.54-1.4464 1.0583-0.84667 4.4803-1.4464 6.2089-1.1289 0.67028 0.10583 2.0461 0.56444 3.0692 1.023 2.2225 1.0231 2.9986 1.0583 3.81 0.14111 0.49389-0.52916 1.0936-0.70555 2.4694-0.70555 1.7639 0 1.9403-0.0705 3.0692-1.517 1.517-1.8344 2.5047-3.6689 2.2225-4.1275-0.10583-0.21166-0.98777-0.35277-1.905-0.35277-1.3053 0-1.9403-0.21167-2.7164-0.88195-0.70555-0.59972-1.4464-0.88194-2.4342-0.88194-1.5522-0.0353-2.5047-0.67028-3.3514-2.2931-0.70556-1.3053-1.3053-1.4464-2.6458-0.52917z">
                           <title>Povoação</title>
                        </path>
                     </a>
                  </g>
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/vila_franca_campo.php">
                        <path  class="vila_franca_campo"  d="m118 123.79c-0.49389 1.1289-0.84667 1.4817-1.6581 1.5522-0.52916 0.0705-1.5522 0.42334-2.1872 0.81139-1.5522 0.84667-1.9403 0.84667-3.1044-0.0706-0.52917-0.42333-1.0231-0.70555-1.0936-0.59972-0.0706 0.0706 0.0706 0.84667 0.35277 1.6933 0.24695 0.88195 0.635 2.4694 0.88195 3.5278 0.59972 2.8928 1.0583 3.8806 1.7992 3.8806 0.35277 0 0.70555 0.14111 0.84666 0.35277 0.14111 0.21167 0.52917 0.17639 1.0583-0.0706 0.635-0.28222 1.1289-0.28222 1.8697 0.0353 0.67028 0.28223 1.27 0.3175 1.905 0.0705 0.49389-0.17638 2.8928-0.3175 5.3269-0.3175 4.3039 0 4.4803 0 5.5386-0.91722 0.635-0.52916 1.5522-0.91722 2.152-0.91722 0.56444 0 1.023-0.14111 1.023-0.35278 0-0.56444-0.81139-2.1167-1.0936-2.1167-0.14111 0-0.38805-0.35278-0.52917-0.81139-0.14111-0.42334-0.52916-0.98778-0.88194-1.2347-0.38806-0.24694-0.67028-0.635-0.67028-0.81138 0-0.49389-1.4464-1.6933-2.0461-1.7286-0.24694 0-0.52917-0.24695-0.635-0.52917-0.14111-0.28222-0.42333-0.52917-0.67028-0.52917-0.24694 0-0.635-0.24694-0.88194-0.52916-0.21167-0.24695-1.1642-0.59973-2.0461-0.74084-0.91722-0.10583-1.7992-0.35278-2.0108-0.49389-0.17639-0.14111-0.84667-0.3175-1.4817-0.42333-0.98778-0.14111-1.1642-0.0353-1.7639 1.27z">
                           <title>Vila Franca do Campo</title>
                        </path>
                     </a>
                  </g>
                  <g transform="translate(-57.602 -99.698)">
                     <a xlink:href="concelhos/lagoa.php">
                        <path  class="lagoa"  d="m98.633 124.78c-1.4111 0.70556-2.3636 1.9756-2.7517 3.8453-0.17639 0.77611-0.03528 0.9525 1.0583 1.3406 0.74083 0.24695 1.7992 0.35278 2.5753 0.21167 1.4464-0.24694 2.5753 0.38806 6.0678 3.3161 0.70556 0.59972 1.6228 1.0936 2.0814 1.0936 0.42333 0 1.0583 0.35278 1.4111 0.77611 0.635 0.77611 0.70556 0.77611 1.6581 0.24695 1.0936-0.59972 1.0936-0.70556 0.35278-3.4925-0.28223-1.0583-0.635-2.54-0.74084-3.2808-0.14111-0.77611-0.42333-1.7639-0.635-2.2225-0.38805-0.81138-0.52916-0.84666-2.4342-0.635-1.7992 0.21167-2.2578 0.10584-4.2333-0.88194-2.5047-1.2347-2.4694-1.2347-4.4097-0.3175z">
                           <title>Lagoa</title>
                        </path>
                     </a>
                  </g>
               
               </svg>
        </div>
         <div id="intro">
               <dt  style="background-color:rgba(0, 153, 255,0.6)">
                  <a id="intro" href="concelhos/ponta_delgada.php" style="line-height: 2.3;">📌Ponta Delgada</a>
               </dt>
               <dt style="background-color:rgba(153, 51, 255,0.6);">
                  <a id="intro" href="concelhos/ribeira_grande.php" style="line-height: 2.3;">📌Ribeira Grande</a>
               </dt>
               <dt style="background-color:rgba(255, 204, 0,0.6);">
                  <a id="intro" href="concelhos/lagoa.php" style="line-height: 2.3;">📌Lagoa</a>
               </dt>
               <dt style="background-color:rgba(92, 214, 92,0.6);">
                  <a id="intro" href="concelhos/vila_franca_campo.php" style="line-height: 2.3;">📌Vila Franca do Campo</a>
               </dt>
               <dt style="background-color:rgba(255, 26, 117,0.6);">
                  <a id="intro" href="concelhos/povoacao.php" style="line-height: 2.3;">📌Povoação</a>
               </dt>
               <dt style="background-color: rgba(255, 51, 51,0.6);">
                  <a id="intro" href="concelhos/nordeste.php" style="line-height: 2.3;">📌Nordeste</a>
               </dt>
            </div>
         <br><br>
      </div>
      <footer>
         <a>
            <p id="footerpp">Sobre o site</p>
         </a>
         <a>
            <p id="footerpp">Contatar</p>
         </a>
         <a>
            <p id="footerpp">Login/Registrar</p>
         </a>
         <br>
         <p id="footerpp"> Sofia Tavares @ 2019 </p>
      </footer>
   </body>
</html>