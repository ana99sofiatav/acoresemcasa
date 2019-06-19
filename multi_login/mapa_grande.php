<!DOCTYPE html>  
<html lang="pt">
  <head>
    
    <title>Mapa</title>
    
    <link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
      
    <link href="js_css/style_mapa.css" rel="stylesheet" type="text/css"/>

    <body onload="initialize()">
        
   <div class="divmenu">
    <ul  class="menu">
        <li class="menuli">
	  <a id="letramenu" href="index.php">Home</a></li>
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
        <li class="menuli" ><a id="letramenu" href='login.php'>Log in</a></li>
    </ul>
   </div>
   
   <div id="corpo">

 
  <script>
    
    function initialize() {
        
        //variáveis dos mapas
        var sao_miguel = new google.maps.LatLng(37.782545, -25.495070);
        
        
        var mapa1 = {
            zoom: 10,                                      //Zoom do mapa
            center: sao_miguel,                           //nome do mapa original
            mapTypeId: google.maps.MapTypeId.SATELLITE   //tipo de mapa ROADMAP ou SATTELITE
        };
    
        var saomiguel = new google.maps.Map(document.getElementById("mapa_sao_miguel"), mapa1);
    
        var myMarker = new google.maps.Marker(
        {
            position: sao_miguel,
            map: saomiguel,
            title:"São Miguel"
       });
    }
     
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOxBfFVOV_sNGHMU_hTHovTigBa92pKHc&callback=initMap"
    ></script>
    
    
    	<h1>Mapa de São Miguel</h1>
   
        <div id="intro">
           Nesta página pode explorar a ilha livremente através de um mapa interativo, intruções: <br> <br>
           
                <div class="div-adaptavel">
                   <div class="tooltip">
                        <dd>
                            <a>Toque</a>
                            <img alt="toque" id="icone" src="js_css/images/historia/toque.png">
                            <span class="tooltiptext">Toque<br><br>Toque no sítio desejado do mapa para saber informações sobre o local tocado.</span>
                        </dd>
                    </div>
                <div  class="div-adaptavel"> 
                    <div class="tooltip">
                        <dd>
                            <a>Arraste</a>
                            <img alt="arraste" id="icone" src="js_css/images/historia/arrastar.png">
                            <span class="tooltiptext">Arrastar<br><br>Arraste o mapa com o rato para explorar livremente as várias partes das ilhas!</span>
                        </dd>
                </div>
                <div  class="div-adaptavel"> 
                    <div class="tooltip">
                        <dd>
                            <a>+ zoom</a>
                            <img alt="zoom" id="icone" src="js_css/images/historia/zoom_mais_pc.png">
                            <span class="tooltiptext">+ zoom<br><br>Com a roda do rato rode para a frente para se aproximar da zona desejada, assim terá mais detalhes à sua disposição.</span>
                        </dd>
                </div>
                <div  class="div-adaptavel">
                    <div class="tooltip"> 
                        <dd>
                            <a>- zoom</a>
                            <img alt="zoom menos" id="icone" src="js_css/images/historia/zoom_menos_pc.png">
                            <span class="tooltiptext">- zoom<br><br>Com a roda do rato rode para trás para poder cobrir uma maior área do mapa e assim podêr ver mais sítios interessantes!</span>
                        </dd>
                    </div>
                <div  class="div-adaptavel">
                    <div class="tooltip"> 
                        <dd>
                            <a>Fullscreen</a>
                            <img alt="fullscreen" id="icone" src="js_css/images/historia/fullscreen.png">
                            <span class="tooltiptext">Fullscreen/Ecrã inteiro<br><br>Com a roda do rato rode para trás para poder cobrir uma maior área do mapa e assim podêr ver mais sítios interessantes!</span>
                        </dd>
                    </div>
                <div  class="div-adaptavel">
                    <div class="tooltip"> 
                        <dd>
                            <a>Streetview</a>
                            <img alt="streetview" id="icone" src="js_css/images/historia/streetview.png">
                            <span class="tooltiptext">Streetview/Vista de rua<br><br>Este icone encontra-se no canto inferior direito do mapa abaixo, para navegar pelo mesmo é só agarrar e arrastar com o rato para o sitío desejado!<br>Porquê utilizar isto? <br>Para ver a rua e sua vista em redor!</span>
                        </dd>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                <div id="div-adaptavel-telemovel"></div>
                
            <div id="intro">  
                       <dd>Tip: Não só pode ver São Miguel como também as outras ilhas dos Açores. Divirta-se!</dd><br>
            </div>
    
        <div id="mapa_sao_miguel" style="width:100%; height:700px"></div>
        

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