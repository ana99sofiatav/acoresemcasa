<!DOCTYPE html>  
<html lang="pt">
  <head>
    <title>Ilhas</title>
    <link rel="icon" href ="js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />
  	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	  
    <link href="js_css/style.css" rel="stylesheet" type="text/css">
    
  </head>

  <body onload="initialize()">
  
  <script>
    
    function initialize() {
        
        //variáveis dos mapas
        var sao_miguel = new google.maps.LatLng(37.782545, -25.495070);
        var santa_maria = new google.maps.LatLng(36.973062, -25.094728);
        var sao_jorge = new google.maps.LatLng(38.641253, -28.029045);
        var graciosa = new google.maps.LatLng(39.051702, -28.006863);
        var terceira = new google.maps.LatLng(38.722418, -27.213828);
        var flores = new google.maps.LatLng(39.439280, -31.204284);
        var faial = new google.maps.LatLng(38.577781, -28.700612);
        var corvo = new google.maps.LatLng(39.700333, -31.114375);
        var pico = new google.maps.LatLng(38.459796, -28.322870);
        
        
        var mapa1 = {
            zoom: 10,                                      //Zoom do mapa
            center: sao_miguel,                           //nome do mapa original
            mapTypeId: google.maps.MapTypeId.SATELLITE   //tipo de mapa ROADMAP ou SATTELITE
        };
        var mapa2 =  {
            zoom: 12,
            center: santa_maria,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa3 =  {
            zoom: 11,
            center: sao_jorge,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa4 =  {
            zoom: 12,
            center: graciosa,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa5 =  {
            zoom: 11,
            center: terceira,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa6 =  {
            zoom: 11,
            center: flores,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa7 =  {
            zoom: 11,
            center: faial,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa8 =  {
            zoom: 12,
            center: corvo,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa9 =  {
            zoom: 11,
            center: pico,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
    
        var saomiguel = new google.maps.Map(document.getElementById("mapa_sao_miguel"), mapa1);
        var santamaria = new google.maps.Map(document.getElementById("mapa_santa_maria"), mapa2);
        var saojorge = new google.maps.Map(document.getElementById("mapa_sao_jorge"), mapa3);
        var graciosa = new google.maps.Map(document.getElementById("mapa_graciosa"), mapa4);
        var terceira = new google.maps.Map(document.getElementById("mapa_terceira"), mapa5);
        var flores = new google.maps.Map(document.getElementById("mapa_flores"), mapa6);
        var faial = new google.maps.Map(document.getElementById("mapa_faial"), mapa7);
        var corvo = new google.maps.Map(document.getElementById("mapa_corvo"), mapa8);
        var pico = new google.maps.Map(document.getElementById("mapa_pico"), mapa9);
    
        var myMarker = new google.maps.Marker(
        {
            position: sao_miguel,
            map: saomiguel,
            title:"São Miguel"
       });
        var myMarker2 = new google.maps.Marker(
            {
                position: santa_maria,
                map: santamaria,
                title:"Santa Maria"
        });
        var myMarker3 = new google.maps.Marker(
            {
                position: sao_jorge,
                map: saojorge,
                title:"São Jorge"
        });
        var myMarker4 = new google.maps.Marker(
            {
                position: graciosa,
                map: graciosa,
                title:"Greciosa"
        });
        var myMarker5 = new google.maps.Marker(
            {
                position: terceira,
                map: terceira,
                title:"Terceira"
        });
        var myMarker6 = new google.maps.Marker(
            {
                position: flores,
                map: flores,
                title:"Flores"
        });
        var myMarker7 = new google.maps.Marker(
            {
                position: faial,
                map: faial,
                title:"Faial"
        });
        var myMarker8 = new google.maps.Marker(
            {
                position: corvo,
                map: corvo,
                title:"Corvo"
        });
        var myMarker9 = new google.maps.Marker(
            {
                position: pico,
                map: pico,
                title:"Pico"
        });
    }
     
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOxBfFVOV_sNGHMU_hTHovTigBa92pKHc&callback=initMap"
    ></script>
    
    
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
   
<div>
    <p id="intro" >Nesta página pode encontrar mais informação acerca das ilhas dos Açores. <br> Escolha uma das ilhas representadas abaixo  👇</p><br>
  </div>
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
                            <span class="tooltiptext">Streetview/Vista de rua<br><br>Este icone encontra-se no canto inferior direito do mapa abaixo, para navegar pelo mesmo é só agarrar e arrastar com o rato para o sitío desejado!<br>Porquê utilizar isto? <br>Para ver a rua e tudo o que está em redor!</span>
                        </dd>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <hr>

<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1"><p>São Miguel</p></label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2"><p>Santa Maria</p></label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3"><p>São Jorge</p></label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4"><p>Graciosa</p></label>
  
  <input id="tab5" type="radio" name="tabs">
  <label for="tab5"><p>Terceira</p></label>
  
  <input id="tab6" type="radio" name="tabs">
  <label for="tab6"><p>Flores</p></label>
  
  <input id="tab7" type="radio" name="tabs">
  <label for="tab7"><p>Faial</p></label>
  
  <input id="tab8" type="radio" name="tabs">
  <label for="tab8"><p>Corvo</p></label>
  
  <input id="tab9" type="radio" name="tabs">
  <label for="tab9"><p>Pico</p></label>
    
    
  <section id="content1">
      
      
    <h1>Ilha de São Miguel</h1>
   
        <div id="mapa_sao_miguel" style="width:100%; height:400px; float: left"></div>

        <div id="intro">
            <h4><br><hr><br>Açores<br></h4>
            
            <a id="p-ilhas">Esta é a ilha maior de São Miguel. Ao natural desta ilha dá-se o nome de micaelense.<br></a>
        </div>
  
  
  </section>
  <section id="content2">
    
        <h1>Ilha de Santa Maria</h1>
    
        <div id="mapa_santa_maria" style="width:100%; height:400px"></div>
        
        
  </section>
  <section id="content3">
      
            <h1>Ilha de São Jorge</h1>
    
           <div id="mapa_sao_jorge" style="width:100%; height:400px"></div>
                <p>
                 Pôr conteúdo!!
                </p>
                <p>
                 Pôr conteúdo!!
                </p>
                
  </section>
    
  <section id="content4">
      
      <h1>Ilha da Graciosa</h1>
    
       <div id="mapa_graciosa" style="width:100%; height:400px"></div>
            <p>
             Pôr conteúdo!!
            </p>
            <p>
             Pôr conteúdo!!
            </p>
  </section>
  
    <section id="content5">
        
        <h1>Ilha da Terceira</h1>
    
       <div id="mapa_terceira" style="width:100%; height:400px"></div>
            <p>
             Pôr conteúdo!!
            </p>
            <p>
             Pôr conteúdo!!
            </p>
  </section>
  
    <section id="content6">
        
        <h1>Ilha das Flores</h1>
    
        <div id="mapa_flores" style="width:100%; height:400px"></div>
            <p>
             Pôr conteúdo!!
            </p>
            <p>
             Pôr conteúdo!!
            </p>
  </section>
  
    <section id="content7">
      <h1>Ilha do Faial</h1>
    
   <div id="mapa_faial" style="width:100%; height:400px"></div>
    <p>
     Pôr conteúdo!!
    </p>
    <p>
     Pôr conteúdo!!
    </p>
  </section>
  
    <section id="content8">
      <h1>Ilha do Corvo</h1>
    
   <div id="mapa_corvo" style="width:100%; height:400px"></div>
    <p>
     Pôr conteúdo!!
    </p>
    <p>
     Pôr conteúdo!!
    </p>
  </section>
  
    <section id="content9">
      <h1>Ilha do Pico</h1>
    
   <div id="mapa_pico" style="width:100%; height:400px"></div>
    <p>
     Pôr conteúdo!!
    </p>
    <p>
     Pôr conteúdo!!
    </p>
  </section>

    </main>
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