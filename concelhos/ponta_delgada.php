<?php 
	include('../multi_login/functions.php');
    error_reporting(0);
    ini_set('display_errors', 0);
?>

<!DOCTYPE html>

    <head>

        <title>Ponta Delgada</title>

        <link rel="icon" href ="../js_css/images/iconesite.ico" type="image/x-icon" />

        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

        <link href="../js_css/labels.css" rel="stylesheet" type="text/css"/>

        <script src="comentarios_ponta_delgada/jquery-3.2.1.min.js"></script>
        <script src="../js_css/galeria.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

        <div class="divmenu">

            <ul  class="menu">

                <li class="menuli">

                    <a id="letramenu" href="../index.php">Home</a>

                </li>

                <li class="dropdown">

                    <a id="letramenu" href="../freguesias.php" class="dropbtn">Concelhos</a>

                    <div class="dropdown-content">

                        <a id="letramenudrop" href="../freguesias.php">Todos os concelhos</a>

                        <a id="letramenudrop" href="lagoa.php">Lagoa</a>

                        <a id="letramenudrop" href="nordeste.php">Nordeste </a>

                        <a id="letramenudrop" href="ponta_delgada.php">Ponta Delgada</a>              

                        <a id="letramenudrop" href="povoacao.php">Vila da Povoação</a>

                        <a id="letramenudrop" href="ribeira_grande.php">Ribeira Grande</a>

                        <a id="letramenudrop" href="vila_franca_campo.php">Vila Franca do Campo</a>

                    </div>

                </li>

                <li class="menuli" ><a id="letramenu" href='../mapa_grande.php'>Mapa Grande</a></li>

                <li class="menuli" ><a id="letramenu" href='../historia.php'>História</a></li>

                <li class="menuli" ><a id="letramenu" href='../contato.php'>Contato</a></li>

                <li class="menuli" ><a id="letramenu" href='../outrasilhas.php'>Outras Ilhas</a></li>

                <li class="menuli" ><a id="letramenu" href='../multi_login/login.php'>Log in</a></li>

            </ul>

        </div>

        <div id="corpo">

        <!--Meter fotos da região própria-->

        
          <button class="button" onclick="goBack()"><i class="material-icons">chevron_left</i></button>
          
          <h1>Ponta Delgada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="100px" weight="100px" align="bottom" src="../js_css/images/azores_images/concelhos/ponta_delgada_flag.png" alt="Bandeira de Lagoa"/></h1>

        

        <main>

            <input id="tab1" type="radio" name="tabs" checked>

            <label for="tab1">

                <p>Mapa</p>

            </label>

            <input id="tab2" type="radio" name="tabs">

            <label for="tab2">

                <p>Sítios a visitar</p>

            </label>

            <input id="tab3" type="radio" name="tabs">

            <label for="tab3">

                <p>História</p>

            </label>

            <input id="tab4" type="radio" name="tabs">

            <label for="tab4">

                <p>Galeria</p>

            </label>

            <section id="content1">

                <h1>Mapa</h1>

                <!-- Ponta Delgada -->

                

                        <svg  width="auto" height="330px" viewBox="0 0 500 400" xmlns="http://www.w3.org/2000/svg">

                        <g>

                            <a xlink:href="#">

                                <path class="ponta_delgada" d="m134.5,34.750005c0,0 4.5,8.5 4.499997,8.249994c0.000003,0.250006 6.000003,1.250006 6.500003,1.250006c0.5,0 1.5,10.5 1,10.5c-0.5,0 7.5,22 8,21.5c0.5,-0.5 15,-6 14.999996,-6.250006c0.000004,0.250006 8.500004,2.750006 8.5,2.5c0.000004,0.250007 4.500004,-12.249993 4.5,-12.5c0.000004,0.250006 -4.999996,-14.749994 -4.999996,-14.749994c0,0 3,1 2.999996,0.749994c0.000004,0.250006 4.000004,-12.749994 4.000004,-12.749994c0,0 12,-17 12,-17c0,0 -8.5,-1 -8,-1c0.5,0 -5.5,-3.5 -5.5,-3.5c0,0 -16,-4 -16.000004,-4.250005c0.000004,0.250005 -9.499996,2.750005 -9.5,2.5c0.000004,0.250005 -2.999996,11.750005 -3,11.5c0.000004,0.250005 -14.999996,7.750005 -15,7.5c0.000003,0.250005 -4.999997,5.750005 -4.999997,5.750005z" stroke-width="1.5" stroke="#0"/>

                                <title>Pilar da Bretanha</title>
                            </a>

                        </g>

                        <g>

                            <a xlink:href="#">

                                <path class="ponta_delgada" id="svg_3" d="m69,86.750005c0,0 0.5,-8 0.499998,-8.250007c0.000002,0.250007 11.000002,2.250007 11,2c0.000002,0.250007 15.500002,-17.749993 15.500002,-18.249993c0,-0.5 -3.5,-12.5 -3.5,-13.5c0,-1 7.5,-1 7.499998,-1.250006c0.000002,0.250006 -2.999998,-5.249994 -2.999998,-5.249994c0,0 -2.5,-7.5 -3,-8c-0.5,-0.5 10.5,-5.5 10.499997,-5.750005c0.000003,0.250005 0.000003,6.750005 0.000003,6.750005c0,0 5.5,-1.5 7,-2c1.5,-0.5 23,6 22.999997,5.749994c0.000003,0.250006 4.500003,5.750006 4.500003,5.750006c0,0 5.5,1 5.5,1c0,0 0.5,6.5 0.5,9c0,2.5 8,21.5 7.999996,21.249993c0.000004,0.250007 -8.499996,-0.749993 -8.499996,-0.749993c0,0 -0.5,5.5 -0.500004,5.249993c0.000004,0.250007 -7.999996,-0.749993 -7.999996,-0.749993c0,0 -21.5,12 -21.500003,11.749993c0.000003,0.250007 -4.499997,16.250007 -4.5,16c0.000003,0.250007 -7.499997,-1.749993 -7.999997,-1.749993c-0.5,0 -25,-16 -25.000002,-16.250007c0.000002,0.250007 -7.999998,-2.749993 -7.999998,-2.749993z" stroke-width="1.5" stroke="#000"/>

                                <title>Mosteiros</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="#">

                                <path class="ponta_delgada" id="svg_4" d="m61.5,89.250005c0,0 5,2.5 5,2c0,-0.5 4,-2.5 4,-2.5c0,0 25.5,17 25.5,17c0,0 11.5,3 11.5,3c0,0 0.5,8 0.5,8c0,0 4,3.5 4,3.5c0,0 2.5,22 3,22.5c0.5,0.5 13,8.5 13,8.5c0,0 -4,7 -4,7c0,0 -23,13 -23.5,13c-0.5,0 -12,-1 -12,-1c0,0 -21.5,16 -21.5,16c0,0 0.5,-15.5 0.5,-15.5c0,0 -20,-35 -20,-35c0,0 2.5,-11 2.5,-11c0,0 -7.5,-7.5 -7.5,-7.5c0,0 15.5,-5.5 15.5,-5.5c0,0 3.5,-22.5 3.5,-22.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Ginetes</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="#">

                                <path class="ponta_delgada" id="svg_5" d="m69,188.250005c0,0 20.5,-15.5 20.5,-15.5c0,0 7.5,0 7.5,0c0,0 5,0.5 5,0.5c0,0 23,-12.5 23,-12.5c0,0 4,-7.5 4,-7.5c0,0 16,12 17,12c1,0 7.5,0 7.5,0c0,0 14.5,4 14.5,4c0,0 6.5,-1 6.5,-1c0,0 -4.5,4 -4.5,4c0,0 -7.5,3 -8,3.5c-0.5,0.5 -7.5,11.5 -7.5,12c0,0.5 -30,10.5 -30.5,10.5c-0.5,0 -3,8 -3,8c0,0 -8.5,19 -9,19c-0.5,0 -4.5,-13 -4.5,-13c0,0 -38.5,-24 -38.5,-24z" stroke-width="1.5" stroke="#000"/>

                                <title>Candelária</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="#">

                                <path class="ponta_delgada" id="svg_6" d="m114,227.250005c0,0 11.5,-26 12,-26c0.5,0 33,-13 33,-13c0,0 5.5,-10.5 5.5,-10.5c0,0 12,-6.5 12,-6.5c0,0 5,-5.5 5,-5.5c0,0 6.5,1 6.5,1c0,0 8,-4 8,-4c0,0 6,-1.5 6,-1.5c0,0 -0.5,6.5 0,6.5c0.5,0 9.5,5.5 10,6.5c0.5,1 11,13 11,13c0,0 3.5,7 3.5,9c0,2 -10.5,23.5 -11,24c-0.5,0.5 9.5,12.5 9.5,12.5c0,0 0,31 0,31c0,0 -5.5,10 -5.5,10c0,0 2.5,5 2.5,5c0,0 -6.5,6.5 -5.5,6.5c1,0 -5,19.5 -5,19.5c0,0 -15.5,-21 -15.5,-21c0,0 -12.5,0.5 -12.5,0.5c0,0 -12,-23 -12,-23c0,0 -9,0 -9,0c0,0 0.5,-10 0.5,-10c0,0 -11.5,-7 -11.5,-7c0,0 -5.5,2.5 -6,2.5c-0.5,0 -4.5,-6.5 -5,-7c-0.5,-0.5 -9,1.5 -9,1.5c0,0 -6.5,-9 -6.5,-9c0,0 -11,-5 -11,-5z" stroke-width="1.5" stroke="#000"/>

                                <title>Feteiras</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/relva.php">

                                <path class="ponta_delgada" id="svg_7" d="m229.5,197.750005c0,0 4,1.5 4,1.5c0,0 -0.5,-6 0,-6.5c0.5,-0.5 4.5,-2.5 5.5,-2.5c1,0 3,7.5 3,7.5c0,0 6.5,5 7,5.5c0.5,0.5 -4.5,5 -4.5,5c0,0 -5.5,-1 -5.5,-1c0,0 -2.5,5.5 -2.5,5.5c0,0 5,6 5,6c0,0 -6.5,1 -6.5,1c0,0 3.5,5.5 3.5,5.5c0,0 -10,7.5 -9.5,7.5c0.5,0 2,10.5 2,12.5c0,2 6,-0.5 7,-0.5c1,0 7.5,32 7.5,32c0,0 -4,10.5 -4,10.5c0,0 11,3.5 11,3.5c0,0 2.5,19 2.5,19.5c0,0.5 8.5,0.5 8.5,0.5c0,0 1.5,14.5 1.5,14.5c0,0 11.5,-0.5 11.5,1c0,1.5 1,13 1,13c0,0 3.5,1.5 3.5,1.5c0,0 2.5,-5 2.5,-5c0,0 2,5 2,5c0,0 5,-6 5,-6c0,0 2,6.5 2.5,6.5c0.5,0 5,-7 5.5,-7c0.5,0 7,6 7.5,6c0.5,0 13.5,33.5 13.5,33.5c0,0 0,10 0,10c0,0 -8.5,-2.5 -8.5,-2.5c0,0 -19,-12.5 -19,-12.5c0,0 -3,-10.5 -3,-10.5c0,0 -18.5,-10.5 -18.5,-10.5c0,0 -7,0.5 -7,0.5c0,0 -6.5,-12 -6.5,-12c0,0 -33,-29.5 -33,-29.5c0,0 -9.5,-1.5 -9.5,-1.5c0,0 4,-20.5 4,-20.5c0,0 6,-5 6.5,-6c0.5,-1 -3,-6 -3,-6c0,0 5.5,-8.5 5.5,-8.5c0,0 -1.5,-32 -1.5,-32c0,0 -7,-12 -7,-12c0,0 10.5,-22.5 10.5,-22.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Relva</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/covoada.php">

                                <path class="ponta_delgada" id="svg_8" d="m240.5,209.250005c0,0 5,1.5 5,1.5c0,0 3,-4 3,-4c0,0 5,13.5 5,13.5c0,0 -3,9.5 -3,9.5c0,0 17,16.5 17,16.5c0,0 17.5,31 18,31.5c0.5,0.5 -3.5,19 -3.5,19.5c0,0.5 0,15.5 1,16c1,0.5 5.5,12.5 5.5,12.5c0,0 4,0.5 4.5,1.5c0.5,1 2.5,7.5 2.5,7.5c0,0 -2,4 -2,4c0,0 -2,-7.5 -2,-7.5c0,0 -5.5,4 -5.5,4c0,0 -2,-3 -3,-3c-1,0 -3.5,6.5 -3.5,6.5c0,0 -1,-16 -1,-16c0,0 -11,2 -11.5,1.5c-0.5,-0.5 -2.5,-17 -2.5,-17c0,0 -6.5,0.5 -6.5,0.5c0,0 -3.5,-19.5 -3.5,-19.5c0,0 -11.5,-0.5 -11.5,-0.5c0,0 5.5,-12.5 5.5,-12.5c0,0 -7.5,-31.5 -7.5,-31.5c0,0 -6.5,-1 -6.5,-1c0,0 -2.5,-9 -2.5,-9c0,0 11,-7.5 11,-7.5c0,0 -4,-4.5 -4,-4.5c0,0 5,-1.5 5,-1.5c0,0 -6,-8 -6,-8c0,0 2.5,-3 2.5,-3z" stroke-width="1.5" stroke="#000"/>

                                <title>Covoada</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/arrifes.php">

                                <path class="ponta_delgada" id="svg_9" d="m241.5,190.75c0,0 6.5,1 6.5,1c0,0 6.5,5 6.5,5c0,0 32,-9.5 32,-9.5c0,0 0.5,3 0.5,3c0,0 7.5,-0.5 7.5,0c0,0.5 4,3.5 4,4c0,0.5 1.5,24 3,25.5c1.5,1.5 15,4 15,6c0,2 0.5,8.5 0.5,8.5c0,0 -3,3.5 -4,4.5c-1,1 2.5,6.5 2.5,6.5c0,0 6,-4 6,-4c0,0 13,15.5 13,15.5c0,0 4,0 4,0c0,0 0,5 0,5c0,0 13,-3 13.5,0.5c0.5,3.5 2,27.5 2,27.5c0,0 -8,3 -8,3c0,0 4.5,16.5 4.5,17c0,0.5 -6.5,2.5 -6.5,2.5c0,0 8,33.5 8,33.5c0,0 -6,1.5 -6,1.5c0,0 0.5,4.5 0.5,4.5c0,0 -8,0.5 -9,0.5c-1,0 -1,3.5 -1,3.5c0,0 -10,4.5 -10,4.5c0,0 -7.5,-4.5 -7.5,-4.5c0,0 -4,2 -4,2c0,0 -7.5,-21 -7.5,-21c0,0 -9,-6.5 -9,-6.5c0,0 -2,3 -2,3c0,0 -2.5,-9.5 -2.5,-9.5c0,0 -3.5,0 -3.5,0c0,0 -6,-12 -6,-12c0,0 1,-13 1,-13c0,0 3,-22 3,-22c0,0 -18,-31.5 -18,-31.5c0,0 -17.5,-15 -17.5,-15c0,0 3,-11.5 3,-11.5c0,0 -5,-11.5 -5,-11.5c0,0 1.5,-3.5 1.5,-3.5c0,0 -8,-6.5 -8,-6.5c0,0 -3,-6.5 -3,-6.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Arrifes</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sete_cidades.php">

                                <path class="ponta_delgada" id="svg_10" d="m116,93.25c0,0 21,-12 21,-12c0,0 8.5,2 8.5,2c0,0 1.5,-5.5 1.5,-5.5c0,0 8.5,0 8.5,0c0,0 17,-5 17,-5c0,0 26,15 26,15c0,0 5.5,27.5 5.5,27.5c0,0 1.5,16 2,16c0.5,0 -4,3 -4,3c0,0 9.5,18.5 9.5,18.5c0,0 -11,0 -11,0c0,0 0,6 0,6c0,0 -6,-0.5 -6,-0.5c0,0 -7,5.5 -7,5.5c0,0 -11.5,0.5 -11.5,0.5c0,0 -8.5,2 -8.5,2c0,0 -14,-5 -14,-5c0,0 -6,1 -6,1c0,0 -15.5,-11 -15.5,-11c0,0 -14.5,-9 -14.5,-9c0,0 -3,-22 -3,-22c0,0 -4,-5 -4,-5c0,0 5.5,-22 5.5,-22z" stroke-width="1.5" stroke="#000"/>

                                <title>Sete Cidades</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/ajuda_da_bretanha.php">

                                <path class="ponta_delgada" id="svg_11" d="m197.5,19.250005c0,0 15,9.5 15,9.5c0,0 9,0 9,0c0,0 2,9.5 2.5,9c0.5,-0.5 16,4 16,4c0,0 -16,11.5 -16,11.5c0,0 -1.5,11.5 -1.5,11.5c0,0 -8,19.5 -8,19.5c0,0 -0.5,3 -0.5,3c0,0 -11,6 -11,6c0,0 -3.5,-7.5 -3.5,-7.5c0,0 -19.5,-12 -19.5,-12c0,0 3.5,-12.5 4,-13c0.5,-0.5 -2,-10.5 -2,-10.5c0,0 4.5,-16 4.5,-16.5c0,-0.5 11,-14.5 11,-14.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Ajuda da Bretanha</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/remedios.php">

                                <path class="ponta_delgada" id="svg_12" d="m226,52.250005c0,0 12.5,-9.5 15,-9c2.5,0.5 7,7.5 7,7.5c0,0 13,4 13,4c0,0 -13,26 -13.5,25.5c-0.5,-0.5 -21,18 -22,21c-1,3 -13,18.5 -13,18.5c0,0 -3.5,19.5 -4,19.5c-0.5,0 -3,-3 -3,-3.5c0,-0.5 2.5,-6 2.5,-6c0,0 -1.5,-13.5 -1.5,-13.5c0,0 -4,-17 -3.5,-18c0.5,-1 10,-6 10.5,-6c0.5,0 5,-7.5 5,-7.5c0,0 3.5,-15 4,-15c0.5,0 3.5,-17.5 3.5,-17.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Remédios</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/santa_barbara.php">

                                <path class="ponta_delgada" id="svg_13" d="m264,56.750005" opacity="0.5" stroke-width="1.5" stroke="#000"/>

                                <title>Santa Bárbara</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/santa_barbara.php">

                                <path class="ponta_delgada" id="svg_14" d="m264.5,56.750005c0,0 7.5,0 7.5,0c0,0 12.5,14.5 12.5,14.5c0,0 10,5.5 10,5.5c0,0 2,6.5 2,6.5c0,0 -8,1.5 -8,1.5c0,0 2,8.5 2,9.5c0,1 -35,23 -35,23c0,0 -4.5,10 -4.5,10c0,0 -27.5,12.5 -27.5,12.5c0,0 -4,-2.5 -4,-2.5c0,0 -6.5,6 -6.5,6c0,0 -3.5,-1.5 -3.5,-1.5c0,0 5,-17 5,-17c0,0 12.5,-24.5 15.5,-26c3,-1.5 20.5,-17 20.5,-17c0,0 14,-25 14,-25z" stroke-width="1.5" stroke="#000"/>

                                <title>Santa Bárbara</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/santo_antonio.php">

                                <path class="ponta_delgada" id="svg_15" d="m213,146.75c1,-1 6.5,-6 6.5,-6c0,0 6,1 6,1c0,0 27,-13 27.5,-13c0.5,0 5.5,-9 5.5,-10c0,-1 33,-21.5 33,-22c0,-0.5 1.5,-8.5 1,-9c-0.5,-0.5 3.5,-1.5 3.5,-0.5c0,1 2,11 4.5,14.5c2.5,3.5 11,4.5 11,6c0,1.5 -2,9.5 -1,11.5c1,2 9,12 10,12.5c1,0.5 -7,5.5 -7,5.5c0,0 -28,12 -28,12c0,0 -8.5,2 -8.5,2c0,0 -40,23.5 -40,23.5c0,0 5,-11 5,-11c0,0 -8,3.5 -8,3.5c0,0 -1,-1 -3,0.5c-2,1.5 -1.5,9 -1.5,9c0,0 -5,7.5 -5,7.5c0,0 -10,-10.5 -10,-10.5c0,0 -10.5,-6.5 -10.5,-7c0,-0.5 0.5,-9.5 0.5,-9.5c0,0 8.5,-1 8.5,-1c0,0 -1,-8.5 0,-9.5z"  stroke-width="1.5" stroke="#0"/>

                                <title>Santo António</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/capelas.php">

                                <path class="ponta_delgada" id="svg_16" d="m225,186.250005c0,0 6,-7.5 6,-7.5c0,0 -0.5,-9 0.5,-9c1,0 7,-1.5 7,-1.5c0,0 -3.5,11.5 -3.5,11.5c0,0 42.5,-25.5 42.5,-25.5c0,0 41,-15.5 41,-15.5c0,0 13,20 13,20c0,0 4,-10 4,-10c0,0 4.5,1 5,1c0.5,0 6,17.5 6.5,18c0.5,0.5 12,-0.5 12.5,-0.5c0.5,0 1.5,16 1.5,16.5c0,0.5 -3,12 -2.5,12c0.5,0 -5.5,12 -8.5,13.5c-3,1.5 -10.5,7 -12.5,8.5c-2,1.5 -17,14 -17.5,14c-0.5,0 -3.5,-10.5 -3.5,-10.5c0,0 -14,-4.5 -13.5,-4.5c0.5,0 -0.5,-23.5 -1.5,-24.5c-1,-1 -6.5,-5 -6.5,-5c0,0 -6,1 -6,1c0,0 -2.5,-6 -2.5,-6c0,0 -29,11 -30,11c-1,0 -11.5,-4.5 -11.5,-4.5c0,0 -9.5,1.5 -9.5,1.5c0,0 -5,1.5 -5,1.5c0,0 1.5,5 1.5,5c0,0 -7,-10.5 -7,-10.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Capelas</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sao_vicente_de_ferreira.php">

                                <path class="ponta_delgada" id="svg_17" d="m362.5,170.250005c0,0 10.5,5 10.5,5c0,0 5.5,-2 6,-2c0.5,0 5,4 5.5,5c0.5,1 11.5,-2.5 11.5,-2.5c0,0 6,3 6,3c0,0 -4,13.5 -4,14c0,0.5 0,20.5 0.5,22c0.5,1.5 -9,29.5 -9,30c0,0.5 -4.5,-3.5 -6.5,-3.5c-2,0 -6.5,11.5 -8.5,12.5c-2,1 -13,1 -13,1c0,0 0,5 0,5c0,0 -8.5,-2 -8.5,-2c0,0 -12,2 -13,1.5c-1,-0.5 0,-5.5 0,-5.5c0,0 -2,1 -3,0.5c-1,-0.5 -13.5,-14 -14,-14.5c-0.5,-0.5 -5,0.5 -5,1c0,0.5 0.5,-5 0.5,-5c0,0 34.5,-25 34.5,-25.5c0,-0.5 8.5,-15 8.5,-15c0,0 1,-25 1,-25z" stroke-width="1.5" stroke="#000"/>

                                <title>São Vicente de Ferreira</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/fenais_da_luz.php">

                                <path class="ponta_delgada" id="svg_18" d="m405,178.250005c0.5,0 12.5,8.5 13,8c0.5,-0.5 2.5,-8 2.5,-8c0,0 8.5,-1 8.5,-1c0,0 3,-5.5 3,-5.5c0,0 2,6.5 2,6.5c0,0 5.5,-2 6,-2c0.5,0 0.5,4 2,4.5c1.5,0.5 9.5,5.5 10,5.5c0.5,0 -10,14.5 -10,16c0,1.5 -13,23.5 -13.5,24.5c-0.5,1 -9,24.5 -9.5,24.5c-0.5,0 -3,12.5 -3,12.5c0,0 -6,-6 -6.5,-6c-0.5,0 0.5,-4.5 0.5,-4.5c0,0 -6,-4.5 -6,-4.5c0,0 -4.5,3.5 -4.5,3.5c0,0 -7.5,-6.5 -7.5,-7.5c0,-1 11,-27.5 10.5,-29.5c-0.5,-2 -1,-22.5 -1,-22.5c0,0 3,-14.5 3.5,-14.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Fenais da Luz</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/faja_de_cima.php">

                                <path class="ponta_delgada" id="svg_19" d="m356,261.75c0,0 10.5,0.5 10.5,0.5c0,0 -1,-4.5 -1.5,-5c-0.5,-0.5 10,-0.5 11,-1c1,-0.5 7.5,-12 7.5,-12c0,0 6,1 6,1.5c0,0.5 4,7.5 5,8.5c1,1 8,-1.5 8.5,-1.5c0.5,0 4,1.5 4,1.5c0,0 1.5,5 1.5,5c0,0 4.5,4 4.5,4c0,0 0.5,5 0.5,5c0,0 4.5,-1.5 4.5,-1.5c0,0 8.5,-1.5 9,-1.5c0.5,0 5.5,5 5.5,5c0,0 -3,9.5 -3,9.5c0,0 3.5,3.5 3.5,3.5c0,0 -5.5,0 -5.5,0c0,0 2.5,9 2,9c-0.5,0 -8.5,-0.5 -8,-0.5c0.5,0 -1,4.5 -1,4.5c0,0 -4,-3 -5,-3c-1,0 -15,32 -15,32c0,0 -9.5,-8.5 -13.5,-7c-4,1.5 -2.5,4.5 -2.5,4.5c4.5,5 -7,3.5 -7,3.5c0,0 -3,9 -3,9c0,0 -2,-29.5 -2.5,-29.5c-0.5,0 -19.5,2 -19.5,2c0,0 -3,-12.5 -3,-12.5c0,0 6,-4 7,-5c1,-1 -0.5,-28.5 -0.5,-28.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Fajã de Cima</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sao_roque.php">

                                <path class="ponta_delgada" id="svg_20" d="m436.5,269.25c0,0 -4,11 -4,11c0,0 4,2.5 4,2.5c0,0 -5.5,1.5 -5.5,1.5c0,0 1,4 1,4c0,0 7.5,1.5 7.5,1.5c0,0 -3.5,38.5 -5,39c-1.5,0.5 -11.5,6 -11.5,6c0,0 -5,8 -5.5,8.5c-0.5,0.5 -9,3.5 -9,4c0,0.5 3,10.5 3,10.5c0,0 -4,-0.5 -4,-0.5c0,0 0,6.5 0,6.5c0,0 4,-1 4,-1c0,0 6.5,4 6.5,4c0,0 11.5,-12 13,-12.5c1.5,-0.5 11,-1 11,-1.5c0,-0.5 5,2 5,1.5c0,-0.5 2.5,-13.5 3,-14.5c0.5,-1 6.5,-5.5 7.5,-5c1,0.5 4,-8.5 4,-8.5c0,0 -1.5,-6 -2,-7.5c-0.5,-1.5 3,-1.5 3,-1.5c0,0 -0.5,-6.5 -0.5,-7c0,-0.5 4.5,2.5 4.5,2c0,-0.5 -4,-16.5 -4.5,-17.5c-0.5,-1 -2.5,-4 -2.5,-4.5c0,-0.5 -3,-11 -3,-11c0,0 -4,0 -4.5,0c-0.5,0 -15.5,-10 -15.5,-10z" stroke-width="1.5" stroke="#000"/>

                                <title>São Roque</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/livramento.php">

                                <path class="ponta_delgada" id="svg_21" d="m469.5,302.25c0,0 13.5,-6.5 13.5,-6.5c0,0 18.5,14 18.5,14c0,0 6,1 6,1c0,0 -7,2.5 -7.5,3c-0.5,0.5 -6,15.5 -6.5,16c-0.5,0.5 -6.5,-2.5 -5.5,-1c1,1.5 3.5,11.5 3.5,13.5c0,2 -9,19.5 -9,19.5c0,0 -3.5,-4 -3.5,-4c0,0 -5,6.5 -5,6.5c0,0 -16.5,-10.5 -16.5,-10.5c0,0 -6,0.5 -6,0.5c0,0 1.5,-12.5 1.5,-12.5c0,0 10,-3 10.5,-3.5c0.5,-0.5 1.5,-12 1.5,-12c0,0 1.5,-11 1.5,-11c-0.5,-1 8,-3.5 8,-3.5c-5,-2 -5,-9.5 -5,-9.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Livramento</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sao_sebastiao.php">

                                <path class="ponta_delgada" id="svg_22" d="m348,312.75c0,0 5.5,-2.5 5.5,-2.5c0,0 14,0.5 15.5,1.5c1.5,1 4,23 5,23c1,0 -5,13.5 -4,14.5c1,1 5,8 5,8c0,0 -4,0 -4.5,1.5c-0.5,1.5 3.5,17.5 3,17.5c-0.5,0 -3.5,3 -4.5,2.5c-1,-0.5 -5.5,-11 -5.5,-11c0,0 -10.5,-19.5 -10.5,-19.5c0,0 2,-5 2,-5c0,0 -7,-30.5 -7,-30.5z" stroke-width="1.5" stroke="#000"/>

                                <title>S. Sebastião</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sao_jose.php">

                                <path class="ponta_delgada" id="svg_23" d="m340,354.750005c1.5,0 9.5,3 9,0.5c-0.5,-2.5 -1.5,-7.5 -1.5,-7.5c0,0 4,1.5 4,1.5c0,0 6.5,21.5 6.5,21.5c0,0 4.5,3.5 4.5,3c0,-0.5 5,6.5 5,6.5c0,0 -4,4 -4,4c0,0 10,3.5 10.5,3.5c0.5,0 11,-4 11,-4c0,0 -9.5,7.5 -9.5,7.5c0,0 -12.5,-3.5 -12.5,-3.5c0,0 -8.5,2.5 -8.5,2c0,-0.5 -6,-17 -6,-17c0,0 -4,-1 -4,-1c0,0 -6,-17 -4.5,-17z" stroke-width="1.5" stroke="#000"/>

                                <title>S. José</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/santa_clara.php">

                                <path class="ponta_delgada" id="svg_24" d="m321.5,386.250005c1,0 9,1.5 9.5,1.5c0.5,0 7.5,5 8.5,5c1,0 7,-4.5 8,-4.5c1,0 3,1.5 3,1.5c0,0 -2,-13 -3,-14c-1,-1 -8,-5 -8,-5c0,0 0,-12.5 -1,-12.5c-1,0 -8,4.5 -9.5,4.5c-1.5,0 -11,-5 -11,-5c0,0 -2.5,3.5 -2.5,3.5c0,0 6,10 6,10c0,0 1,12 1,12" stroke-width="1.5" stroke="#000"/>

                                <title>Santa Clara</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/sao_pedro.php">

                                <path class="ponta_delgada" id="svg_25" d="m391,353.25c0,0 -2.5,-11 -2.5,-11c0,0 4.5,-9.5 4.5,-9.5c0,0 -6,-6.5 -6,-6.5c0,0 -7.5,3.5 -7.5,3.5c0,0 -6,17.5 -6,17.5c0,0 4,9 4,9.5c0,0.5 -4.5,5.5 -4,6c0.5,0.5 1.5,11.5 2.5,11.5c1,0 19,-3.5 20,-3.5c1,0 7,1.5 7,1.5c0,0 2,-6 2.5,-6c0.5,0 -0.5,-12 -0.5,-12c0,0 -3,-4.5 -3,-4.5c0,0 -11,3.5 -11,3.5z" stroke-width="1.5" stroke="#000"/>

                                <title>S. Pedro</title>

                            </a>

                        </g>

                        <g>

                            <a xlink:href="freguesias/ponta_delgada/faja_de_baixo.php">

                                <path class="ponta_delgada" id="svg_26" d="m389,321.250005c0,0 13.5,6.5 14,6.5c0.5,0 15,-30.5 15,-30.5c0,0 3,2 3,2c0,0 2,-4 2.5,-4c0.5,0 6.5,0 6.5,0c0,0 2.5,-4.5 2.5,-4.5c0,0 4,1.5 4.5,1.5c0.5,0 -3.5,35 -3.5,35c0,0 -16.5,4.5 -15,4.5c1.5,0 1,5.5 0,6.5c-1,1 -6,6.5 -9.5,7c-3.5,0.5 -1,8 -1,8c0,0 -4.5,-6 -4.5,-6c0,0 -9.5,3 -10.5,3c-1,0 -2,-6.5 -2,-6.5c0,0 5,-8.5 5,-9.5c0,-1 -7.5,-9.5 -7.5,-9.5c0,0 0.5,-3.5 0.5,-3.5z" stroke-width="1.5" stroke="#000"/>

                                <title>Fajã de Baixo</title>

                            </a>

                        </g>

                    </svg>

                

                <div id="intro">

                    <p></p>

                    <h1>Factos</h1>

                    Ponta Delgada é uma cidade portuguesa na ilha de São Miguel, na Região Autónoma dos Açores. Possui cerca de 46.102 (no perimetro urbano) e 20.113 habitantes nas três freguesias principalmente inseridas na parte central da cidade: São Pedro, São Sebastião, São José. É a capital administrativa do Arquipélago desde que os distritos foram extintos, por volta de 1976 (conjuntamente com Angra do Heroísmo (sede de diocese) e Horta, onde se sedia o Parlamento regional).

                    <h1></h1>

                    É sede de um município com 231,90 km² de área e 65.853 habitantes (2001), subdividido em 24 freguesias. O município é limitado a leste pelos municípios da Ribeira Grande e da Lagoa e tem costa no oceano Atlântico a norte, sul e oeste.

                    


                    

            </div>

            </section>

            <section id="content2">
                
                <div id="intro">                
                    <h1>Lagoa das Sete Cidades</h1>
                <div id="conteudo">
                   <div id="um">
                   <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa.png" alt="Lagoa das Sete Cidades" id="imagenshistoria"><figcaptation>Lagoa das Sete Cidades</figcaptation>
                   </div>
                   <div id="dois">
                       A lagoa das Sete Cidades constitui-se no maior reservatório natural de água doce de superfície dos Açores. Caracteriza-se pela dupla coloração das suas águas, sendo dividida por um canal pouco profundo, atravessado por uma ponte baixa que separa de um lado um espelho de águas de tom verde e, do outro, um espelho de tom azul.
                    </div>
                </div>
                
                <div id="conteudo">
                <div id="um">
                    Essas características, e a beleza da paisagem envolvente, deram lugar a que surgissem belas lendas sobre a sua origem e formação, inclusive a que a liga ao mito da Atlântida. A lagoa, bem como a sua zona envolvente, encontra-se classificada como Paisagem Protegida.
                </div>
                <div id="dois">
                   <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_2.png" alt="Lagoa das Sete Cidades" id="imagenshistoria"><figcaptation>Lagoa das Sete Cidades</figcaptation>
                </div>
                </div>
                
                    <h1>Portas da Cidade</h1>
                    
                <div id="conteudo">
                   <div id="um">
                    As Portas da Cidade de Ponta Delgada são um dos marcos arquitectónicos da capital da magnífica Ilha de São Miguel. Situadas hoje em dia bem no centro da cidade, em plena Praça de Gonçalo Velho Cabral, as Portas da Cidade foram edificadas em 1783 junto ao antigo cais a Leste da cidade, tendo sido transferidas para este local de prestígio em 1952, devido às obras da também muito importante e bela Avenida Infante D. Henrique.
                    </div>
                    
                <div id="dois">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/portas.png" id="imagenshistoria" alt="Portas da Cidade"><figcaptation>Portas da Cidade</figcaptation>
                </div>
                </div>
                
                <div id="conteudo">
                    <div id="um">
                   <img src="freguesias/imgens/ponta_delgada/ponta_delgada/portas_2.png" alt="Portas da Cidade" id="imagenshistoria"><figcaptation>Portas da Cidade</figcaptation>
                   </div>
                     <div id="dois">
                    Classificadas em 1953 como Imóvel de Interesse Público, caracterizam-se pelos seus três arcos de volta perfeita, ostentando no centro o brasão das armas reais e da cidade, e pelo seu pavimento tipicamente calcetado com as pedras basálticas da região em tons escuros e o elegante mármore claro trazido do continente.
                    </div><button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                    
                </div>
                
                        <h1>Convento de Nossa Senhora da Esperança</h1>
                    <div id="conteudo">
                        <div id="um">
                            <img src="freguesias/imgens/ponta_delgada/ponta_delgada/covento.png" id="imagenshistoria" alt="Convento de Nossa Senhora da Esperança"><figcaption>Convento de Nossa Senhora da Esperança</figcaption>
                        </div>
                        <div id="dois">    
                Intimamente ligado ao culto do Senhor Santo Cristo dos Milagres, o convento e a capela foram construídos em 1545. Alterações posteriores foram efectuadas, nomeadamente a curiosa torre quadrangular com várias ordens de janelas. No interior, de referir o altar-mor revestido a talha dourada e os painéis de azulejo.
                   </div>
                    </div>
               
               
                <div id="conteudo">
                    <div id="um">
                        
                O coro-baixo, revestido por azulejos historiados do séc. XVIII produzidos por António de Oliveira Bernardes, dá acesso à Capela dedicada ao Senhor Santo Cristo. A imagem do Santo Cristo encontra-se envolvida por um retábulo de talha dourada e faz parte de um valioso tesouro, um conjunto de jóias acumuladas desde o século XVIII, no qual se destaca a coroa de espinhos cravejada de diamantes e rubis, o ceptro, a cana e a espiga, o resplendor de ouro e prata e o relicário.
                    </div>
                    <div id="dois">
                        <img src="freguesias/imgens/ponta_delgada/ponta_delgada/covento_2.png" id="imagenshistoria" alt="Convento de Nossa Senhora da Esperança"><figcaption>Convento de Nossa Senhora da Esperança</figcaption>
                    </div>
                </div>
               
                    <h1>Igreja Matriz de Ponta Delgada</h1>
                <div id="conteudo">
                    <div id="um">
                                <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png" id="imagenshistoria" alt="Igreja Matriz de Ponta Delgada"><figcaption>Igreja Matriz de Ponta Delgada</figcaption>
                    </div>
                    <div id="dois">
                    A bela e imponente Igreja de São Sebastião, ou Igreja Matriz de Ponta Delgada, situa-se na bela capital da Ilha de São Miguel e do maravilhoso Arquipélago dos Açores. No local onde outrora existia uma pequena ermida em honra a São Sebastião, teve início a construção do actual templo, no ano de 1531, tendo sido finalizada no ano de 1547. A Igreja foi construída com o esforço da população, ao apelar ao Santo protector dos enfermos, um milagre de modo a pôr um fim na Peste que assolou a cidade entre 1523 e 1531.
                    </div><button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                    
                </div>
                
                <div id="conteudo">
                    <div id="um">
                         A Igreja de São Sebastião apresenta uma bonita fachada em estilo Manuelino, onde estão presentes as armas reais e o escudo com as setas do martírio do Santo, tendo contudo sofrido algumas alterações no século XVIII com elementos Barrocos, como são exemplo os dois portais que ladeiam o central, quatro janelas e um óculo. O interior é rico em talha dourada e diversas e ricas madeiras locais, como o mobiliário em jacarandá do século XVII, e uma rica colecção de paramentos bordados a ouro.
                    </div>
                    <div id="dois">
                        <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz_2.png" id="imagenshistoria" alt="Igreja Matriz de Ponta Delgada"><figcaption>Igreja Matriz de Ponta Delgada</figcaption>
                    </div>
                </div>
                
                    <h1>Forte de São Brás</h1>
                <div id="conteudo">
                <div id="um"><img src="freguesias/imgens/ponta_delgada/ponta_delgada/sao_bras.png" id="imagenshistoria" alt="Forte de São Brás"><figcaption>Forte de São Brás</figcaption>
                </div>
                <div id="dois">
                    Nos Açores não existem castelos, mas sim fortes e fortalezas, uma vez que os castelos são do período medieval, antes da descoberta das ilhas. Na cidade de Ponta Delgada existiam vários fortes: O de São Pedro, o do Açougue e o de São Cristóvão que desapareceram com os arranjos da orla marítima, restando o forte militar de São Brás.
                
                </div>
                </div>
               
                <div id="conteudo">
                <div id="um">
                Este forte é uma construção de base poligonal, projecto do italiano Tomaso Benedetti, com quatro baluartes nos ângulos, preparados para receber peças de artilharia e cortinas de muralha baixas, de grande espessura. No seu interior há uma praça de armas e, em seu redor, um conjunto de edifícios de épocas e configurações diversas. Ao longo dos séculos, foi sendo alterado com novos acrescentos e transformações. É lá que se situa o Museu Militar dos Açores.<p></p>
                </div>
                <div id="dois">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/sao_bras_dentro.png" id="imagenshistoria" alt="Forte de São Brás por dentro"><figcaption>Forte de São Brás Por Dentro</figcaption>
               </div>
               </div>
               <p></p>
                
                
                <h1>Museu Carlos Machado</h1>
                <div id="conteudo">
                <div id="um"> 
                <p></p>
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado.png" id="imagenshistoria" alt="Museu Carlos Machado"><figcaption>Museu Carlos Machado</figcaption>
                     <p></p>
               </div>
                <div id="dois">
                O Museu Carlos Machado está instalado no antigo Convento de Santo André, edifício que remonta ao século XVI, tendo sido fundado em 1567 por Diogo Vaz Carreiro e sua mulher Beatriz Rodrigues Camelo. Este edifício é um dos belos exemplares de arquitectura conventual de Ponta Delgada, tendo sofrido várias alterações ao longo dos séculos, até ser adaptado a Museu em 1930.
                </div><button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                    
                </div>
                
                
                <div id="conteudo">
                    <div id="um">
                         A inauguração em 1880 do então designado “Museu Açoreano”, reflecte a mentalidade científica dessa época, nomeadamente o grande interesse pelas Ilhas demonstrado pelos naturalistas, a par da divulgação da teoria da evolução das espécies de Darwin e das campanhas oceanográficas de Sua Alteza o Príncipe Alberto de Mónaco e El-Rei D. Carlos.
                         
                    A colecção de Arte inclui núcleos de Pintura, Escultura e Arte Sacra. Dentro da Pintura, salientam-se as telas do Morgado de Setúbal, dos finais do século XVIII, bem como as obras oitocentistas do micaelense Marciano Henriques da Silva, pintor régio de D. Luís. 
                    </div>
                    <div id="dois">
                        <img src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado_2.png" id="imagenshistoria" alt="Museu Carlos Machado"><figcaption>Museu Carlos Machado</figcaption>
                    </div>
                </div>
                
                    <div id="conteudo">
                    <div id="um"><img src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado_3.png" id="imagenshistoria" alt="Museu Carlos Machado"><figcaption>Museu Carlos Machado</figcaption>
                    </div>
                    <div id="dois">
                        Na Escultura sobressai a obra de Ernesto Canto da Maya, artista micaelense, que estudou em Paris, onde ganhou o “Grand Prix de Sculpture”, em 1937.
                        Na colecção de Arte Sacra salientam-se as tábuas quinhentistas da Oficina de Coimbra e as que representam os Santos Mártires de Lisboa. Do núcleo de pinturas da Igreja do Colégio dos Jesuítas de Ponta Delgada, merece particular atenção a “Coroação da Virgem” de Vasco Pereira Lusitano.
                    </div>
                    </div>
                
                <h1>Igreja do Colégio dos Jesuítas</h1>
                <div id="conteudo">
                    <div id="um">
                        
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas.png" id="imagenshistoria" alt="Igreja do Colégio dos Jesuítas"><figcaption>Igreja do Colégio dos Jesuítas</figcaption>
                    </div>
                    <div id="dois">
                        
                No século XVI a Companhia de Jesus expandiu-se aos Açores, fundando as suas Residências e os seus Colégios em várias Ilhas deste Arquipélago, nomeadamente em S. Miguel, na cidade de Ponta Delgada, a partir do ano de 1591. A primitiva Igreja do Colégio dos Jesuítas de Ponta Delgada, de invocação a Todos os Santos, por ter sido lançada a primeira pedra em 1 de Novembro de 1592, deu lugar a um monumento ímpar de criação barroca, com exuberantes elementos decorativos na sua fachada, de pedra vulcânica, na talha do retábulo do altar-mor e nos painéis de azulejos setecentistas.
                    </div>
                </div>
                
                <div id="conteudo">
                    <div id="um">
                        
                Pormenor Com a expulsão dos Jesuítas, por ordem do Marquês de Pombal, em 1760, esta igreja salão, de nave única, que possuía um vasto e valioso espólio artístico, ficou destituída de grande parte dos seus bens e alfaias religiosas, desaparecidos ou integrados noutros templos da Ilha, principalmente a partir de 1800, ano em que se interrompeu o culto. 
                    </div>
                    <div id="dois">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_2.png" id="imagenshistoria" alt="Igreja do Colégio dos Jesuítas"><figcaption>Igreja do Colégio dos Jesuítas</figcaption>
                    </div>
                    </div>
                    <div id="conteudo">
                    <div id="um">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_3.png" id="imagenshistoria" alt="Igreja do Colégio dos Jesuítas"><figcaption>Interior Igreja do Colégio dos Jesuítas</figcaption>
                        
                    </div>
                    <div id="dois">
                    Em 1834, a igreja foi adquirida ao Estado, por Nicolau Maria Raposo de Amaral, proprietário do Colégio dos Jesuítas, por herança paterna. Passados 139 anos, seus descendentes e herdeiros doaram a Igreja de Todos os Santos, com o respectivo espólio, à Câmara Municipal de Ponta Delgada, que deliberou ceder o espaço ao Governo Regional dos Açores, em 1977, para instalação do Núcleo de Arte Sacra do Museu Carlos Machado, tendo sido o projecto museológico aprovado em 2004.
                        
                    </div><button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                    </div>
                    
                <h1>Jardim António Borges</h1>
                <div id="conteudo">
                    <div id="um">
                
                Hoje em dia um parque municipal, foi outrora pertença da propriedade de António Borges Medeiros, um negociante e político Açoriano muito interessado na botânica, e na inserção de novas espécies, nomeadamente exóticas, na Ilha, transformando a sua propriedade num interessante Jardim Botânico. O bonito espaço verde retrata o espírito Romântico e pitoresco do século XIX, e é hoje palco das mais diversas actividades desportivas, lúdicas e culturais.
                        
                    </div>
                    <div id="dois">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/borges.png" id="imagenshistoria" alt="Jardim António Borges"><figcaption>Jardim António Borges</figcaption>
                    </div>
                </div>
                
                <div id="conteudo">
                    <div id="um">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/borges_2.png" id="imagenshistoria" alt="Jardim António Borges"><figcaption>Jardim António Borges</figcaption>
                        
                    </div>
                    <div id="dois">
                Do século XIX, foi fundado pelo seu patrono. Este parque tem espécies arbóreas de várias partes do mundo, formando um jardim de rara beleza, com um conjunto de grutas e de recantos, bem como a existência de dois belos mirantes, um simples e outro cisterna mirante, ambos recuperados pela Câmara de Ponta Delgada. Este jardim foi propriedade privada até aos anos de 1950, altura em que passou para a posse da Câmara Municipal de Ponta Delgada.
                        
                    </div>
                </div>
                
                
                
                
                <h1>Miradouro da Boca do Inferno</h1>
                <div id="conteudo">
                    <div id="um">
                        
                Há uma paisagem na Ilha de São Miguel que é muito comum ser vista nos catálogos de viagens para os Açores, mas que a grande parte dos turistas, que viajam para a ilha, nunca chegam a conhecer.
                Trata-se do Miradouro da Boca do Inferno, na Mata do Canário, junto à Lagoa do Canário. Neste local único é possível ter uma vista da Lagoa das Sete Cidades, da Lagoa Rasa, da Lagoa de Santiago, da Lagoa do Canário, de parte da povoação das Sete Cidades e da Serra Devassa. A uma altitude de 730 metros, vemos o mar, a montanha e as lagoas, no meio de uma vegetação natural e selvagem.
                    </div>
                    <div id="dois">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/miradouro_boca_inferno.png" id="imagenshistoria" alt="Miradouro da Boca do Inferno"><figcaption>Miradouro da Boca do Inferno</figcaption>
                        
                    </div>
                </div>
                
                
                <h1>Miradouro Vista do Rei</h1>
                
                <div id="conteudo">
                    <div id="um">
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/miradouro_rei.png" id="imagenshistoria" alt="Miradouro Vista do Rei"><figcaption>Miradouro Vista do Rei</figcaption>
                        
                    </div><div id="dois">
                Miradouro sobre a Lagoa das Sete Cidades, assim chamado por ter sido este o local onde o rei D. Carlos e a rainha D. Amélia se quedaram a apreciar tão inolvidável paisagem aquando da sua visita à ilha de S. Miguel, em 1901.
                Miradouro situado no concelho de Ponta Delgada, na freguesia das Sete Cidades. Circulando na ER-8-2, no sentido de Ponta Delgada para as Sete Cidades, no cruzamento em que se inicia a descida para esta localidade, segue-se em frente cerca de 1 km, pela ER-1-1, onde se descobrira o miradouro.

                        
                    </div>
               <button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                     </div>
                
                
                
                <h1>Lagoa de Santiago</h1>
                <div id="conteudo">
                    <div id="um">
                        
                
                A Lagoa de Santiago situa-se na Serra Devassa, bem próxima da fantástica Lagoa das Sete Cidades, na maravilhosa Ilha de São Miguel, Arquipélago dos Açores. Num local de franca beleza natural, a Lagoa de Santiago surpreende pela sua envolvente de verdejantes escarpas montanhosas plenas de riqueza e diferentes espécies de fauna e flora, que parecem querer guardar para si a beleza deste caudal, num tom de verde escuro vívido.
                A Lagoa de Santiago ocupa uma cratera vulcânica, bem visível no próximo Miradouro da Lagoa do Canário, de onde se tem um panorama de beleza ímpar, imagem pura do melhor que todo o verdejante Arquipélago dos Açores tem para oferecer a quem tem a fortuna de o contemplar.
                    </div>
                    <div id="dois">
                        
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_santiago.png" id="imagenshistoria" alt="Lagoa Santiago"><figcaption>Lagoa Santiago</figcaption>
                    </div>
                </div>
                
                
                <h1>Lagoa das Empadadas</h1>
                <div id="conteudo">
                    <div id="um">
                        
               <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_empadas.png" id="imagenshistoria" alt="Lagoa das Empadadas"><figcaption>Lagoa das Empadadas</figcaption>
                
                    </div>
                    <div id="dois">
                Localizadas perto da Lagoa das Sete Cidade, estas Lagoas são um autêntico tesouro pouco conhecido; são um conjunto de pequenas lagoas rodeadas por um lindíssimo bosque e separadas entre si por pequenas faixas de terras.
                Esta lagoa que se divide por dois lençóis de água com origem em duas diferentes crateras vulcânicas unidas entre si apresenta-se rodeada por bardos de Azáleas e por florestas típica da macaronésia e por florestas de criptomérias.
                    </div><button onclick="topFunction()" class="button" title="Go to top">Topo</button>
                </div>
                
            </section>

            <section id="content3">

                <h1>História</h1>

                

                <div id="intro">

                    <p>

                    <h1></h1>

                    <dd>"Esta cidade de Ponta Delgada é assim chamada por estar situada junto de uma ponta de pedra de biscouto, delgada e não grossa como outras da ilha, quasi raza com o mar, que depois, por se edificar mui perto d'ela uma ermida de Santa Clara, se chamou ponta de Santa Clara…" (Gaspar Frutuoso).</dd>

                    <p></p>

                    Com mais de cinco séculos de existência, Ponta Delgada é hoje uma referência singular no panorama regional, tendo uma população de aproximadamente 46.102 habitantes. É o maior concelho e o que reúne a maior diversidade de equipamentos. Recentemente (2008), a sua linha de costa foi ampliada com a inauguração das "Portas do Mar", projecto composto por inúmeros parques subterrâneos, casinos, novos centros comerciais, anfiteatros, cinemas e variados locais para diversão nocturna, da autoria do arquitecto Manuel Salgado.

                    <p><br></p>

                    O núcleo populacional que deu origem à cidade de Ponta Delgada, nasceu por volta de 1450, numa aldeia piscatória. Inicialmente simples povoado de pescadores atraídos pelas suas seguras enseadas, cedo começa a desempenhar as funções de principal porto da ilha. Mais tarde, o rei D. Manuel I, reconhecendo oficialmente o progresso social da povoação, determinou, por alvará de 1499, que Ponta Delgada fosse elevada a vila. Decorridos apenas 47 anos da elevação de Ponta Delgada a vila, o rei D. João III, em Carta Régia de 2 de Abril de 1546, tomou a iniciativa de elevar a vila à categoria de cidade.

                    <p></p>

                    Antes de Ponta Delgada ganhar o estatuto de primazia, a primeira capital de São Miguel era Vila Franca do Campo, que havia sido elevada a concelho por volta de 1472, completamente destruída pelo terramoto de 1522, quando era considerada a mais importante Vila dos Açores. Esta catástrofe, não foi mais do que acentuar uma tendência que já se vinha verificando, pois em 1513 D. Manuel I, concedia à Misericórdia e Hospital pontadelgadense os mesmos privilégios da de Lisboa e em 1518 a Alfândega, o Almoxarifado e a Contadoria dos Açores foram transferidos para Ponta Delgada. No ano de 1554, foi criado o cargo de Juiz de Fora, situação única no arquipélago, e em 12 de Dezembro de 1582, por Alvará Régio, foi concedido aos habitantes de Ponta Delgada, os mesmos privilégios da cidade do Porto.

                    <p></p>

                    A fertilidade dos solos e a localização estratégica nas rotas entre a Europa e a América da Ilha de São Miguel, justificam o acentuado crescimento económico desta região. O cultivo de trigo, cana-de-açúcar, pastel, urzela, vinho e mais tarde de batata doce, milho, inhame, linho e laranja, sendo esta exportada em grande escala para a Inglaterra, foram a base da economia durante os séculos XVI, XVII e XVIII.

                    <p><br></p>

                    Foi em Ponta Delgada, que se deu o primeiro movimento liberal nos Açores, com a revolta que instalou um governo interino a 1 de Março de 1821, em 16 de Maio de 1832, é escolhida para sede do Tribunal da relação dos Açores e em 28 de Junho de 1833, da Província Oriental dos Açores. Ponta Delgada, participou activamente nas lutas liberais e daqui partiram, em 1832, as tropas para o cerco no Porto, (os sete mil e quinhentos bravos do Mindelo, que conduziu à proclamação da Carta Constitucional e à aclamação da rainha D. Maria II

                    <p></p>

                    </p>Em finais do mesmo século, os laranjais que eram então a mais importante fonte de receita da ilha foram destruídos por uma doença. No entanto, a população reagiu e dedicou-se ao cultivo de novas culturas, nomeadamente chá, tabaco, espadana, chicória, beterraba sacarina e ananás. A construção do porto artificial em 1861 dinamizou a economia, atraindo o sector industrial para o concelho, foi também em Ponta Delgada que se verificou o grande movimento autonomista, que viria a culminar no Decreto de 2 de Março de 1895, e posteriormente na manifestação de 6 de Junho de 1975, que estabeleceu a autonomia actual.

                    <button onclick="topFunction()" class="button" title="Go to top">Topo</button>

                </div>

                <br>

                <div align="center">

                    <p>Portas da Cidade</p>

                    <br>

                    <br>

                </div>

            </section>

            <section id="content4">

            
              <h1 >Galeria</h1>
            
                <div class="row">
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/borges.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado.png" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_empadas.png" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_2.png" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                  </div>
                  <div class="column">
                    <img src="freguesias/imgens/ponta_delgada/ponta_delgada/miradouro_boca_inferno.png" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                  </div>
                </div>
                
                <div id="myModal" class="modal">
                  <span class="close cursor" onclick="closeModal()">&times;</span>
                  <div class="modal-content">
                
                    <div class="mySlides">
                      <div class="numbertext">1 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa.png" style="width:100%">
                    </div>
                
                    <div class="mySlides">
                      <div class="numbertext">2 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/borges.png" style="width:100%">
                    </div>
                
                    <div class="mySlides">
                      <div class="numbertext">3 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides">
                      <div class="numbertext">4 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides">
                      <div class="numbertext">5 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz_2.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides">
                      <div class="numbertext">6 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_empadas.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides">
                      <div class="numbertext">7 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_2.png" style="width:100%">
                    </div>
                    
                    <div class="mySlides">
                      <div class="numbertext">8 / 8</div>
                      <img src="freguesias/imgens/ponta_delgada/ponta_delgada/miradouro_boca_inferno.png" style="width:100%">
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                    <div class="caption-container">
                      <p id="caption"></p>
                    </div>
                
                
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa.png" style="width:100%" onclick="currentSlide(1)" alt="Lagoa Sete Cidades">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/borges.png" style="width:100%" onclick="currentSlide(2)" alt="Jaardim António Borges">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/carlos_machado.png" style="width:100%" onclick="currentSlide(3)" alt="Museu Carlos Machado">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png" style="width:100%" onclick="currentSlide(4)" alt="Igreja Matriz">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz_2.png" style="width:100%" onclick="currentSlide(5)" alt="Igreja Matriz">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/lagoa_empadas.png" style="width:100%" onclick="currentSlide(6)" alt="Lagoa Empadas">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_2.png" style="width:100%" onclick="currentSlide(7)" alt="Jesuítas">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="freguesias/imgens/ponta_delgada/ponta_delgada/miradouro_boca_inferno.png" style="width:100%" onclick="currentSlide(8)" alt="Miradouro Boca do Inferno">
                    </div>
                  </div>
                </div>
                
                

            </section>

        </main>

        </div>

        
                    <h1>Freguesias</h1>

                    <div class="newspaper">

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/ajuda_da_bretanha.php">Ajuda da Bretanha</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/arrifes.php">Arrifes</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/candelaria.php">Candelária</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/capelas.php" >Capelas (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/covoada.php" >Covoada</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/faja_de_baixo.php" >Fajã de Baixo</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/faja_de_cima.php" >Fajã de Cima</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/fenais_da_luz.php" >Fenais da Luz</a>

                    </dd>

                    <dd>

                        <a class="" di="freguesias/ponta_delgada/feteiras.php" >Feteiras</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/freguesias/ponta_delgada/ginetes.php" >Ginetes</a>

                    </dd>

                    <dd>

                        <a class="" di="freguesias/ponta_delgada/livramento.php" >Livramento</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/mosteiros.php" >Mosteiros</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/pilar_da_bretanha.php" >Pilar da Bretanha</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/sao_jose.php" >São José (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="/freguesias/ponta_delgada/sao_pedro.php" >São Pedro (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/sao_sebastiao.php" >São Sebastião (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/relva.php" >Relva (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/remedios.php" >Remédios (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/santa_barbara.php" >Santa Bárbara (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/santa_clara.php" >Santa Clara (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/santo_antonio.php" >Santo António (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/sao_roque.php" >São Roque (Ponta Delgada)</a>

                    </dd>

                    <dd>

                        <a class="" id="freguesias/ponta_delgada/sao_vicente_ferreira.php" >São Vicente Ferreira</a>

                    </dd>

                    <dd>

                        <a class="linkgeneral" href="freguesias/ponta_delgada/sete_cidades.php" >Sete Cidades</a>

                    </dd>

                </div>

        
    <div id="intro">
	<div class="demo-container">

		<form action=" " id="frmComment" method="post">

			<div class="row">

				<label> <a> Nome: </a> </label> <span id="name-info"></span>

				

      <input class="form-field" id="name"

					type="text" name="user" value="<?php

					

					echo $_SESSION['user']['username']; 

					

					?>"readonly="readonly" > 

			</div>

  



			<div class="row">

				<label for="mesg"><a>Comentário: </a> <span id="message-info"></span></label>

				<textarea class="form-field" id="message" name="message" rows="4"></textarea>

				

			</div>

			<div class="row">

				<input type="hidden" name="add" value="post" />

				<button type="submit" name="submit" id="submit" class="btn-add-comment">Adicionar Comentário</button>

				<img src="comentarios_ponta_delgada/LoaderIcon.gif" id="loader" />

			</div>

		</form>

<?php

    include_once 'db.php';

    

    $sql_sel = "SELECT * FROM tbl_user_comments_ponta_delgada ORDER BY id DESC";

    $result = $conn->query($sql_sel);

    $count = $result->num_rows;



    if($count > 0) {

?>

        <div id="comment-count">

        <span id="count-number"><?php echo $count;?></span> Comentário(s)

        </div>

<?php } ?>

		<div id="response">

<?php



while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared statement

{



?>

 <!--$_SESSION['user'] -->





			<div id="comment-<?php echo $row["id"];?>" class="comment-row">

				<div class="comment-user">

				<?php

				

				echo $row["username"]." │ ".$row['create_at_timestamp'];

				

				?>

			</div>

				<div class="comment-msg" id="msgdiv-<?php echo $row["id"];?>"><?php echo $row["message"];?></div>
				 <?php  if ($_SESSION['user']['username']==$row['username']) 
				 {
				 ?>
				<div class="delete" name="delete"

					id="delete-<?php echo $row['id']; ?>" onclick="deletecomment(<?php echo $row['id'];?>)">Eiminar</div>
			</div>
<?php 
}
}
?>
</div>
		</div>

	</div>

	</div>

        </div>

	<script type="text/javascript"></script>

	<script>

    function deletecomment(id) {







       if(confirm("Tem a certeza que quer eliminar este comentário?")) {



            $.ajax({

            url: "comentarios_ponta_delgada/comment-delete.php",

            type: "POST",

            data: 'comment_id='+id,

            success: function(data){

                if (data)

                {

                    $("#comment-"+id).remove();

                    if($("#count-number").length > 0) {

                        var currentCount = parseInt($("#count-number").text());

                        var newCount = currentCount - 1;

                        $("#count-number").text(newCount)

                    }

                }

            }

           });

        }

     }



	$(document).ready(function() {



        $("#frmComment").on("submit", function(e) {

        		$(".error").text("");

            $('#name-info').removeClass("error");

            $('#message-info').removeClass("error");

            e.preventDefault();

            var name = $('#name').val();

            var message = $('#message').val();

            

            if(name == "" && message == ""){

            		$('#name-info').addClass("error");

            		$(".error").text(alert("Oops! Parece que ainda não pode comentar.. \nPara comentar faça login ou, caso esteja com conta iniciada, escreva algo na caixa."));

            }

            if(name == "" && message !== ""){

            		$('#name-info').addClass("error");

            		$(".error").text(alert("Oops! Algo ocorreu, possíveis causas: \n ->Ainda não fez login, \n ->Ainda não tem conta, \n ->Problema de conexão, \nA página irá recarregar.",window.location.reload()));

            }

            if(message == ""){

            		$('#message-info').addClass("error");

            		$(".error").text(alert("Oops! 🙁 Parece que ainda não pode comentar.. \nPara comentar faça login ou, caso esteja com conta iniciada, escreva algo na caixa."));

            }

            

            if(name && message){

                	$("#loader").show();

            		$("#submit").hide();

            	 	$.ajax({

                

                 type:'POST',

                 url: 'comentarios_ponta_delgada/comment-add.php',

                 data: $(this).serialize(),

                 success: function(response)

                    {

						$("#frmComment input").val("");

						$("#frmComment textarea").val("");

                     	$('#response').prepend(response);



                         if($("#count-number").length > 0) {

                             var currentCount = parseInt($("#count-number").text());

                             var newCount = currentCount + 1;

                             $("#count-number").text(newCount)

                         }

                         $("#loader").hide();

                 		$("#submit").show();

                     }

                	});

			}

		});

     });

    </script>

        

        <footer>

            <a href="../sobre.php">

                <p id="footerpp">Sobre o site</p>

            </a>

            <a href="../sugestoes.php">

                <p id="footerpp">Sugestões</p>

            </a>

            <a href="../multi_login/login.php">

                <p id="footerpp">Login/Registrar</p>

            </a>

            <br>

            <p id="footerpp"> Sofia Tavares @ 2019 </p>

        </footer>

    </body>

</html>