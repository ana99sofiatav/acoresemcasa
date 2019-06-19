<?php 
    include('../../../multi_login/functions.php');      error_reporting(0);   ini_set('display_errors', 0);    ?>
<!DOCTYPE html>  
<html lang="pt">
    <head>
        <title>Nossa Senhora do Rosário</title>
        <link rel="icon" href ="https://acorestest.000webhostapp.com/js_css/images/iconesite.ico" type="image/x-icon" />
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://acorestest.000webhostapp.com/js_css/labels.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="divmenu">
            <ul  class="menu">
                <li class="menuli">
                    <a id="letramenu" href="../../../index.php">Home</a>
                </li>
                <li class="dropdown">
                    <a id="letramenu" href="../../../freguesias.php" class="dropbtn">Concelhos</a>
                    <div class="dropdown-content">
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/freguesias.php">Todos os concelhos</a>
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/lagoa.php">Lagoa</a>
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/nordeste.php">Nordeste </a>
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/ponta_delgada.php">Ponta Delgada</a>              
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/povoacao.php">Vila da Povoação</a>
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/ribeira_grande.php">Ribeira Grande</a>
                        <a id="letramenudrop" href="https://acorestest.000webhostapp.com/concelhos/vila_franca_campo.php">Vila Franca do Campo</a>
                    </div>
                </li>
                <li class="menuli" ><a id="letramenu" href='https://acorestest.000webhostapp.com/mapa_grande.php'>Mapa Grande</a></li>
                <li class="menuli" ><a id="letramenu" href='https://acorestest.000webhostapp.com/historia.php'>História</a></li>
                <li class="menuli" ><a id="letramenu" href='https://acorestest.000webhostapp.com/contato.php'>Contato</a></li>
                <li class="menuli" ><a id="letramenu" href='https://acorestest.000webhostapp.com/outrasilhas.php'>Outras Ilhas</a></li>
                <div id="menuright">
                    <li id="menuli"><a id="letramenu" href='https://acorestest.000webhostapp.com/multi_login/login.php'>Login</a></li>
                </div>
            </ul>
        </div>
        <!--Meter fotos da região própria-->
        <div id="corpo">
            <h1>Nossa Senhora do Rosário</h1>
            <main>
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">
                    <p>Mapa</p>
                </label>
                <input id="tab2" type="radio" name="tabs">
                <label for="tab2">
                    <p>História</p>
                </label>
                
                <section id="content1">
                    <h1></h1>
                    <!-- Lagoa -->
                    <svg  width="auto" height="340px" viewBox="100 100 500 300" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <a xlink:href="https://acorestest.000webhostapp.com/concelhos/freguesias/lagoa/cabouco.php">
                                <path class="lagoa" stroke-width="1.5" stroke="#0" d="m163.999524,204.888291c2.222216,-2.222216 14.666624,-19.555499 14.666622,-19.999941c0.000002,0.444442 8.444422,0.444442 8.44442,0c0.000002,0.444442 -0.888884,-19.999943 -0.888884,-19.999943c0,0 4.888875,-0.444443 5.777761,-0.888886c0.888886,-0.444443 13.333295,-23.555487 13.333295,-23.555487c0,0 5.777761,0 6.666647,0c0.888886,0 4.444432,-7.555534 4.444429,-7.999975c0.000002,0.444441 8.888866,-5.777763 9.777752,-5.777763c0.888886,0 12.444408,2.222216 12.444406,1.777774c0.000003,0.444441 3.555548,-6.666649 6.222207,-7.555536c2.666659,-0.888886 13.777738,3.111102 13.777735,2.666661c0.000003,0.444441 -0.44444,4.888873 -0.444443,4.444432c0.000003,0.444441 2.222219,-0.444445 3.111105,-0.444445c0.888886,0 11.111079,9.333306 11.111076,8.888865c0.000003,0.444441 -5.333315,5.777759 -5.333318,5.333318c0.000003,0.444441 -0.888883,7.555532 -0.888886,7.11109c0.000003,0.444442 -14.222178,10.666634 -14.222181,10.222192c0.000003,0.444442 -3.111099,2.666657 -3.111102,2.222216c0.000003,0.444442 -38.666552,29.333247 -38.666552,29.77769c0,0.444443 -10.666636,18.222169 -10.666636,18.222169c0,0 -9.333306,-0.888886 -9.777749,-1.333329c-0.444443,-0.444443 -11.555522,-1.777773 -12.444408,-2.222216c-0.888886,-0.444443 -11.555522,1.777773 -11.555524,1.33333c0.000002,0.444442 -3.999987,-0.000001 -1.777771,-2.222217z" />
                                <title>Cabouco</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="https://acorestest.000webhostapp.com/concelhos/freguesias/lagoa/santa_cruz.php">
                                <path class="lagoa" stroke-width="1.5" stroke="#0" id="svg_4" d="m266.22145,151.999556c0,0 0.888886,54.666508 0.888883,54.222066c0.000003,0.444442 -4.888872,15.111066 -4.888872,15.999953c0,0.888886 -7.555534,-0.444443 -7.555534,-0.444443c0,0 -0.888886,-4.888875 -0.888889,-5.333317c0.000003,0.444442 -6.222201,1.333329 -6.222204,0.888886c0.000003,0.444442 -23.111041,-3.555546 -23.111044,-3.999988c0.000002,0.444442 -4.444429,5.333317 -4.444432,4.888875c0.000002,0.444442 -13.333292,-6.666648 -13.333292,-6.666648c0,0 -6.666647,1.333329 -6.66665,0.888887c0.000002,0.444442 10.666638,-19.5555 10.666636,-19.999942c0.000002,0.444442 55.555397,-40.444328 55.555397,-40.444328z" >
                                <title>Santa Cruz</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="https://acorestest.000webhostapp.com/concelhos/freguesias/lagoa/nossa_senhora_rosario.php">
                                <path fill="red" stroke-width="1.5" stroke="#0" d="m274.66587,135.555159c0,0 5.333318,2.222216 5.333315,1.777774c0.000003,0.444441 1.333333,4.44443 1.333329,3.999988c0.000003,0.444441 1.777776,-1.333331 5.777764,0.888885c3.999988,2.222216 10.222193,5.333318 10.666636,6.222204c0.444443,0.888886 7.999977,3.999988 7.999973,3.555547c0.000003,0.444442 7.111094,0.888885 7.111094,1.333328c0,0.444443 -5.777761,33.77768 -5.777761,33.77768c0,0 -6.222204,3.999988 -6.222204,5.333318c0,1.333329 -7.999977,36.888782 -7.999977,37.777668c0,0.888886 0,19.111056 -0.000003,18.666613c0.000003,0.444443 -7.111087,-7.111091 -7.111087,-7.111091c0,0 -15.111067,-10.222193 -15.55551,-10.222193c-0.444443,0 -4.888875,0.444443 -4.888878,0.000001c0.000003,0.444442 -3.999985,-6.222205 -3.999988,-6.666647c0.000003,0.444442 7.111093,-17.777727 7.111093,-17.777727c0,0 -0.888886,-55.999838 -0.888886,-56.444281c0,-0.444443 0.888886,-6.666647 0.888883,-7.111089c0.000003,0.444441 6.222207,-7.999978 6.222207,-7.999978z"/>
                                <title>Nossa Senhora do Rosário</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="https://acorestest.000webhostapp.com/concelhos/freguesias/lagoa/agua_de_pau.php">
                                <path class="lagoa" stroke-width="1.5" stroke="#0" d="m313.776868,154.221772c0,0 16.444397,0.444443 16.444393,0.000002c0.000004,0.444442 9.777753,-5.777763 9.777749,-6.222204c0.000004,0.444442 11.111083,-0.000002 11.555526,-0.000002c0.444443,0 7.11109,1.777773 7.111087,1.333331c0.000004,0.444442 6.222208,-7.999978 6.666651,-8.444422c0.444443,-0.444443 5.333318,-0.444443 6.222204,0c0.888886,0.444443 3.111102,9.333306 3.999988,10.666636c0.888886,1.333329 12.888852,10.666636 12.888852,10.666636c0,0 -5.777761,1.777773 -5.777761,1.777773c0,0 -7.555534,7.999977 -7.555538,7.555535c0.000004,0.444442 -7.111086,109.777458 -7.111086,109.777458c0,0 5.333318,11.999965 5.333314,11.555522c0.000004,0.444443 -11.555518,-2.666659 -11.555522,-3.111102c0.000004,0.444443 -2.222212,7.999977 -2.222216,7.999977c0.000004,0 -9.333302,-6.666647 -9.333306,-7.11109c0.000004,0.444443 0.000004,-6.222204 0,-6.666647c0.000004,0.444443 -5.777757,-3.111102 -5.777757,-3.111102c0,0 1.777773,-12.888852 1.777769,-13.333294c0.000004,0.444443 -7.55553,1.777772 -7.555534,1.333329c0.000004,0.444443 -2.666655,3.111102 -2.666655,3.111102c0,0 -15.999954,1.777773 -15.999954,1.777773c0,0 -12.888852,-7.999977 -12.888855,-8.44442c0.000003,0.444443 1.777776,-6.666648 1.777773,-7.11109c0.000003,0.444443 -12.888848,-8.44442 -12.888851,-8.888863c0.000003,0.444443 -1.777769,-18.22217 -1.777773,-18.666612c0.000003,0.444442 8.444423,-37.333226 8.44442,-37.777668c0.000003,0.444442 7.555537,-7.111092 7.555537,-7.111092c0,0 3.555545,-31.555464 3.555545,-31.555464z" />
                                <title>Água de Pau</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="https://acorestest.000webhostapp.com/concelhos/freguesias/lagoa/ribeira_cha.php">
                                <path class="lagoa" stroke-width="1.5" stroke="#0" d="m387.998875,165.777294c0,0 5.333318,6.222204 5.333313,5.777762c0.000005,0.444442 -1.777768,20.444384 -1.777768,20.444384c0,0 3.111102,11.999965 3.111098,11.555523c0.000004,0.444442 -0.444439,7.11109 0.444447,7.11109c0.888887,0 3.111102,7.555533 3.999989,7.999976c0.888886,0.444443 4.888875,2.222216 4.888875,6.222204c0,3.999989 -2.222216,5.777762 -0.888887,5.777762c1.33333,0 10.666636,10.222192 10.666636,16.444396c0,6.222204 1.777773,12.888852 1.777773,14.666624c0,1.777773 -1.777773,12.444409 -2.222216,12.444409c-0.444443,0 -7.555534,2.222216 -8.44442,2.666659c-0.888886,0.444443 -7.999977,-1.777773 -7.999981,-2.222216c0.000004,0.444443 -13.333291,9.333306 -13.333295,8.888863c0.000004,0.444443 2.666663,1.33333 1.777777,3.111102c-0.888886,1.777773 -4.888875,5.777761 -4.888879,5.333318c0.000004,0.444443 -5.333314,1.777773 -5.333318,1.333329c0.000004,0.444444 -5.777757,-11.111078 -5.333313,-11.555522c0.444443,-0.444443 7.11109,-108.888573 7.111086,-109.333015c0.000004,0.444442 6.666651,-7.555535 6.666651,-7.555535c0,0 4.444432,0.888887 4.444432,0.888887z" />
                                <title>Ribeira Chã</title>
                                </path>
                            </a>
                        </g>
                    </svg>
        <div id="intro">
        Nossa Senhora do Rosário é uma freguesia portuguesa do concelho da Lagoa, com 6,21 km² de área e 5 396 habitantes (2011). A sua densidade populacional é 868,9 hab/km².
        </div>
        </section>
        
        <section id="content2">
                    <div id="intro">
            <p></p>
            <h1>Sítios mais visitados:</h1>
        </div>
        <div class="">
            <div class="gallery">
                <a>
                    <h1>Restaurante da Pousada da Juventude</h1>
                    <img src="http://juntarosario.org/wp-content/uploads/S%C3%B3-Grelhados.jpg" alt="retaurante">
                    </a>
                <div class="desc"><div id="intro">
                Rua Direita da Atalhada, 160<br>
                9560-415 Lagoa<br>
                Telefone: 296 916 647<br>
                Aberto todos os dias das 10h00 às 15h00 e das 17h00 às 21h30.<br>
                Domingos das 10h00 às 15h00.<br>
                Feriados variam entre as manhãs ou as tardes.<br></div></div>
            </div>
        </div>
        <div class="">
            <div class="gallery">
                <a>
                    <h1>Q’enosso</h1>
                    <div style="text-align:center"><img style="max-width:600px" src="http://juntarosario.org/wp-content/uploads/Restaurante-Q%C3%A9-Nosso.jpg"/></div>
                    </a>
                <div class="desc">
                <div id="intro">
                Rua Coronel Ângelo Manuel Albergaria Pacheco, 12 
                9560-035 Lagoa<br> 
                Telefone: 296 965 117<br> 
                Aberto de segunda-feira a sábado das 12h30 às 15h00 e das 19h00 às 23h00. Domingos, das 12h30 às 15h00.<br> 
            <dd>Encerra às segundas-feiras.<br></div></div>
            </div>
        </div>
        <div class="">
            <div class="gallery">
                <a>
                    <h1>Só Grelhados</h1>
                    <img src="http://juntarosario.org/wp-content/uploads/Restaurante-Pousada-da-Juventude.jpg" alt="Lagoa das sete cidades" max-width="300">
                    </a>
                <div class="desc"><div id="intro">
                Av Vulcanológica 
                atalhada<br> 
                Telefone:  296 960 610<br> 
                E-mail: rest.pousadajuventudelagoa@gmail.com<br> 
                Aberto todos os dias<br>    
                
                </div></div>
            </div>
        </div>
        <div class="clearfix"></div>
        
       
        </div>
        </section>
        
        <section id="content3">
        <div id="intro"></div>
        </section>
        <section id="content4">
            
        </section>
        </main>
                    <h1>Freguesias</h1>
                <div class="newspaper">
                    <dd>
                        <a class="linkgeneral" href="agua_de_pau.php">Água de Pau</a>
                    </dd>
                    <dd>
                        <a class="linkgeneral" href="cabouco.php">Cabouco</a>
                    </dd>
                    <dd>
                        <a class="linkgeneral" href="nossa_senhora_rosario.php">Nossa Senhora do Rosário (Lagoa)</a>
                    </dd>
                    <dd>
                        <a class="linkgeneral" href="ribeira_cha.php">Ribeira Chã</a>
                    </dd>
                    <dd>
                        <a class="linkgeneral" href="santa_cruz.php">Santa Cruz</a>
                    </dd>
                </div>
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