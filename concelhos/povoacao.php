<?php 
    include('../multi_login/functions.php');       error_reporting(0);    ini_set('display_errors', 0);    ?>
<!DOCTYPE html>  
<html lang="pt">
    <head>
        <title>Povoação</title>
        <link rel="icon" href ="../js_css/images/iconesite.ico" type="image/x-icon" />
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link href="../js_css/labels.css" rel="stylesheet" type="text/css"/>
        <script src="comentarios_povoacao/jquery-3.2.1.min.js"></script>
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
            
          <button class="button" onclick="goBack()"><i class="material-icons">chevron_left</i></button><h1>Povoação</h1>
            <img align="right" src="../js_css/images/azores_images/concelhos/povoacao_flag.png" alt="Bandeira de Lagoa"/>
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
                    <p>Streetview</p>
                </label>
                <input id="tab4" type="radio" name="tabs">
                <label for="tab4">
                    <p>Galeria</p>
                </label>
                <section id="content1">
                    <h1>Mapa Povoação</h1>
                    <!-- Povoação -->
                    <svg  width="auto" height="330px" viewBox="30 0 500 380" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" stroke="#000" id="svg_3" d="m44.68791,152.81257c0,0 4.37499,-4.99999 4.37499,-4.99999c0,0 9.37499,7.49999 9.37499,7.49999c0,0 -1.875,6.87498 -1.875,6.87498c0,0 13.12498,3.125 13.12498,3.125c0,0 0,-11.87498 0,-11.87498c0,0 -3.125,-9.37498 -2.5,-9.99998c0.625,-0.625 11.87498,-2.5 15.62498,-1.875c3.74999,0.625 14.37497,9.37498 14.37497,9.37498c0,0 9.99998,-4.99999 9.99998,-5.62499c0,-0.625 13.74998,-1.24999 13.74998,-1.24999c0,0 6.24999,-9.99999 6.87499,-10.62499c0.625,-0.625 13.12498,-8.12498 13.12498,-8.12498c0,0 8.12498,-0.625 9.37498,-0.625c1.25,0 13.74998,-11.87498 13.74998,-11.87498c0,0 1.87499,3.12499 4.99999,4.37499c3.12499,1.25 13.12498,0 13.12498,0c0,0 16.24997,1.875 16.24997,1.875c0,0 25.62495,14.37497 26.87495,14.37497c1.25,0 14.99998,0.625 14.99998,1.25c0,0.625 -1.875,43.12493 -1.875,43.12493c0,0 7.49999,10.62498 7.49999,10.62498c0,0 -3.75,10.62498 -3.125,11.24998c0.625,0.625 -13.12498,16.87497 -13.74997,18.74997c-0.625,1.87499 -6.24999,4.37499 -6.24999,4.37499c0,0 -15.62498,-7.49999 -15.62498,-7.49999c0,0 -3.74999,2.5 -5.62499,2.5c-1.87499,0 -5.62499,13.12498 -6.24999,13.12498c-0.625,0 -11.87498,-0.625 -13.12497,0c-1.25,0.625 -5.62499,-6.24999 -5.62499,-7.49999c0,-1.25 3.12499,-11.87498 1.24999,-11.87498c-1.87499,0 -6.24999,-0.625 -6.24999,0.625c0,1.25 -6.87498,18.12497 -6.87498,18.12497c0,0 4.99999,3.12499 5.62499,3.74999c0.625,0.625 -6.24999,6.24999 -6.24999,6.87499c0,0.625 -1.25,18.12497 0,18.12497c1.24999,0 6.24999,4.99999 6.24999,4.99999c0,0 8.12498,-0.625 8.74998,0c0.625,0.625 3.125,7.49999 3.125,7.49999c0,0 -9.99999,0.625 -11.87498,0c-1.875,-0.625 -10.62499,-3.75 -11.87498,-3.75c-1.25,0 -13.74998,3.125 -14.37498,3.75c-0.625,0.625 -9.37498,6.24999 -9.99998,7.49998c-0.625,1.25 -10.62498,1.25 -12.49998,1.25c-1.875,0 -11.87498,-3.12499 -11.87498,-3.74999c0,-0.625 -3.12499,-13.12498 -3.12499,-13.12498c0,0 -8.12499,0 -8.12499,0c0,0 -8.12499,-1.875 -8.12499,-1.875c0,0 4.375,-6.24999 4.375,-6.24999c0,0 3.74999,0 4.99999,0c1.24999,0 6.24999,-7.49998 6.24999,-7.49998c0,0 -5,-3.75 -5.62499,-4.37499c-0.625,-0.625 -6.87499,-7.49999 -6.87499,-7.49999c0,0 -7.49999,3.74999 -8.12499,3.74999c-0.625,0 -9.37498,-8.12498 -9.37498,-8.12498c0,0 0.625,-10.62499 0.625,-10.62499c0,0 0,-5.62499 0.625,-5.62499c0.62499,0 -3.125,-5.62499 -3.125,-5.62499c0,0 -6.87499,-1.87499 -6.87499,-1.87499c0,0 -9.37498,4.37499 -9.37498,4.37499c0,0 -3.75,-4.99999 -3.75,-4.99999c0,0 -2.49999,-4.375 -2.49999,-4.375c0,0 8.74998,0 8.74998,0c0,0 1.875,-4.99999 1.875,-4.99999c0,0 -4.99999,-0.625 -4.99999,-0.625c0,0 -27.03119,-4.99999 -15.62497,-7.18749l7.49998,-18.59372l-3.74999,-17.96871" stroke-width="1.5" fill="#ffaaaa"/>
                                <title>Furnas</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" id="svg_4" d="m112.812793,280.312353c1.249998,0 14.999974,4.999991 14.999974,4.374993c0,-0.624999 8.124986,-3.124995 8.124986,-3.124995c0,0 8.749985,-6.249989 9.999983,-6.249989c1.249998,0 6.249989,-3.749994 9.374984,-3.749994c3.124995,0 13.124978,4.999991 14.999974,4.999991c1.874997,0 14.374975,-3.124995 14.374975,-3.749994c0,-0.624999 -1.874997,-13.749976 -1.874997,-13.749976c0,0 -11.87498,1.249998 -11.87498,1.249998c0,0 -3.749994,-5.62499 -3.749994,-5.62499c0,0 2.499996,-12.499979 2.499996,-12.499979c0,0 5.62499,-8.124986 5.62499,-8.124986c0,0 -6.249989,-3.749994 -6.249989,-4.999991c0,-1.249998 2.499996,-14.999974 3.124995,-14.999974c0.624999,0 4.999991,-0.624999 4.999991,-0.624999c0,0 -4.374993,10.624982 -3.749994,10.624982c0.624999,0 7.499987,8.749985 7.499987,8.749985c0,0 15.624973,-0.624999 15.624973,-0.624999c0,0 4.999991,-11.87498 4.999991,-11.87498c0,0 6.874988,-2.499996 6.874988,-2.499996c0,0 8.749985,7.499987 10.624982,7.499987c1.874997,0 11.87498,0 11.87498,0c0,0 -1.249998,12.499979 -1.249998,13.124978c0,0.624999 11.249981,18.749968 10.624982,18.749968c-0.624999,0 -19.374967,9.374984 -19.374967,9.374984c0,0 -1.249998,9.999983 -1.249998,9.999983c0,0 -8.749985,-3.124995 -8.749985,-3.124995c0,0 -3.749994,5.62499 -3.749994,5.62499c0,0 -12.499979,-1.249998 -13.749976,-1.249998c-1.249998,0 -12.499979,16.874971 -12.499979,16.874971c0,0 -8.124986,-6.249989 -8.124986,-6.249989c0,0 -16.249972,16.249972 -16.249972,16.249972c0,0 -13.749976,-3.749994 -14.374975,-3.749994c-0.624999,0 -21.249964,0 -22.499962,0c-1.249998,0 -8.124986,-20.624965 -6.874988,-20.624965z" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="#ea4848"/>
                                <title>Ribeira Quente</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" id="svg_5" d="m243.43757,135.312601c0,0 9.374984,-10.624982 9.374984,-10.624982c0,0 8.124986,-1.249998 8.124986,-1.874997c0,-0.624999 0.624999,-8.124986 3.749994,-9.374984c3.124995,-1.249998 44.999923,-13.124978 46.249921,-13.124978c1.249998,0 5.62499,6.249989 5.62499,6.249989c0,0 8.749985,-4.374993 8.749985,-4.374993c0,0 6.249989,-10.624982 6.249989,-11.249981c0,-0.624999 9.999983,-1.249998 10.624982,-1.249998c0.624999,0 9.374984,-9.374984 9.374984,-9.374984c0,0 9.374984,-0.624999 9.374984,-0.624999c0,0 13.124978,-6.874988 13.124978,-6.874988c0,0 -8.124986,21.249964 -8.124986,21.874963c0,0.624999 -8.124986,12.499979 -8.124986,13.749976c0,1.249998 -3.124995,9.374984 -2.499996,9.374984c0.624999,0 -6.249989,7.499987 -6.249989,7.499987c0,0 0,12.499979 0,12.499979c0,0 -6.874988,14.374975 -6.874988,14.374975c0,0 -18.749968,9.374984 -18.749968,9.374984c0,0 -1.874997,8.749985 -1.874997,9.374984c0,0.624999 8.124986,6.874988 8.124986,6.874988c0,0 0,8.124986 0,9.374984c0,1.249998 4.374993,6.249989 4.374993,6.249989c0,0 -12.499979,9.999983 -12.499979,9.999983c0,0 6.249989,13.749976 6.249989,14.374975c0,0.624999 -6.249989,11.249981 -6.249989,11.249981c0,0 3.124995,6.249989 3.124995,6.249989c0,0 8.749985,-1.874997 9.374984,-1.874997c0.624999,0 11.87498,-3.749994 11.87498,-3.749994c0,0 6.249989,0 7.499987,0c1.249998,0 14.999974,5.62499 15.624973,5.62499c0.624999,0 -3.124995,3.124995 -3.124995,5.62499c0,2.499996 1.874997,12.499979 1.874997,12.499979c0,0 -3.749994,4.374993 -4.374993,4.374993c-0.624999,0 -19.999966,-1.874997 -19.999966,-1.874997c0,0 -27.499953,-10.624982 -27.499953,-10.624982c0,0 -4.999991,4.374993 -4.999991,4.374993c0,0 -8.124986,-6.874988 -9.374984,-6.874988c-1.249998,0 -9.374984,3.749994 -9.374984,3.749994c0,0 -20.624965,-1.874997 -20.624965,-1.874997c0,0 -29.999949,9.999983 -29.999949,9.999983c0,0 -9.374984,-12.499979 -9.374984,-12.499979c0,0 0.624999,-16.874971 0.624999,-16.874971c0,0 -4.374993,-3.749994 -4.374993,-3.749994c0,0 9.999983,-11.87498 10.624982,-13.124978c0.624999,-1.249998 9.999983,-18.124969 9.999983,-18.124969c0,0 -6.874988,-13.749976 -6.874988,-13.749976c0,0 1.249998,-14.999974 1.249998,-14.999974c0,0 0,-26.249955 0,-26.249955z" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="#7fff00"/>
                                <title>Povoação</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" id="svg_6" d="m322.187435,230.312439c0,0 5.62499,4.374993 5.62499,3.749994c0,-0.624999 17.49997,-8.124986 18.749968,-8.124986c1.249998,0 22.499962,8.124986 23.749959,8.124986c1.249998,0 1.874997,-8.124986 1.874997,-8.124986c0,0 -4.374993,-7.499987 -4.374993,-7.499987c0,0 10.624982,-5.62499 10.624982,-5.62499c0,0 3.749994,-21.249964 3.749994,-21.249964c0,0 19.999966,-1.874997 21.249964,-3.749994c1.249998,-1.874997 0.624999,-14.999974 3.749994,-14.999974c3.124995,0 9.374984,0.624999 9.374984,0.624999c0,0 6.249989,-18.749968 4.999991,-19.999966c-1.249998,-1.249998 -18.749968,-18.124969 -18.749968,-18.749968c0,-0.624999 0,-7.499987 0,-7.499987c0,0 -8.124986,-8.749985 -8.124986,-8.749985c0,0 -5.62499,0.624999 -5.62499,0.624999c0,0 -5.62499,-4.999991 -5.62499,-4.999991c0,0 2.499996,-11.87498 2.499996,-11.87498c0,0 -3.749994,-13.124978 -3.749994,-13.124978c0,0 -3.124995,-16.874971 -3.124995,-16.874971c0,0 -7.499987,18.749968 -7.499987,18.749968c0,0 -8.749985,17.49997 -9.374984,19.374967c-0.624999,1.874997 -1.249998,11.249981 -2.499996,11.249981c-1.249998,0 -8.124986,4.374993 -8.124986,5.62499c0,1.249998 -1.249998,9.374984 -1.249998,10.624982c0,1.249998 -4.999991,13.749976 -4.999991,13.749976c0,0 -3.124995,4.999991 -3.124995,4.999991c0,0 -14.374975,4.999991 -14.999974,5.62499c-0.624999,0.624999 -3.124995,8.749985 -2.499996,8.749985c0.624999,0 6.874988,7.499987 6.874988,7.499987c0,0 0.624999,7.499987 0.624999,7.499987c0,0 4.374993,6.249989 4.374993,6.874988c0,0.624999 -11.87498,11.249981 -11.87498,11.249981c0,0 5.62499,10.624982 5.62499,10.624982c0,0 -8.124986,15.624973 -8.124986,15.624973z" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="#bfbf00"/>
                                <title>Nossa Senhora dos Remédios</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" id="svg_7" d="m422.81226,153.43757c0,0 18.74997,8.74999 18.74997,8.74999c0,0 -3.12499,13.12497 -3.12499,14.37497c0,1.25 -6.24999,14.99997 -6.24999,14.99997c0,0 4.99999,9.99999 4.99999,10.62499c0,0.625 5.62499,3.12499 7.49999,4.99999c1.87499,1.87499 8.74998,5.62499 9.99998,6.24999c1.25,0.625 3.12499,5.62499 3.12499,6.87499c0,1.24999 -4.99999,6.87498 -7.49998,13.12497c-2.5,6.24999 -5,14.37498 -5,14.99998c0,0.625 3.125,5.62499 3.125,5.62499c0,0 -18.74997,-4.37499 -18.74997,-3.125c0,1.25 -9.37498,9.37499 -9.37498,9.37499c0,0 -4.37499,7.49998 -6.24999,8.74998c-1.875,1.25 -11.87498,4.37499 -13.12498,4.37499c-1.25,0 -20.62496,-4.99999 -20.62496,-4.99999c0,0 -11.24998,-1.24999 -11.24998,-1.24999c0,0 -8.12499,-6.87499 -8.12499,-6.87499c0,0 9.99998,-7.49999 10.62498,-8.12499c0.625,-0.625 -3.74999,-7.49999 -3.74999,-7.49999c0,0 4.99999,-9.99998 4.99999,-9.99998c0,0 -0.625,-13.12498 -0.625,-13.12498c0,0 9.37498,-6.24999 9.37498,-6.24999c0,0 2.5,-19.99996 3.125,-20.62496c0.625,-0.625 16.87497,-3.74999 19.99996,-1.875c3.125,1.875 4.375,-19.99996 4.375,-19.99996c0,0 3.74999,1.87499 8.74998,3.12499c4.99999,1.25 4.99999,-22.49996 4.99999,-22.49996z" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="#00bca6"/>
                                <title>Faial da Terra</title>
                                </path>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="povoacao" id="svg_8" d="m406.562291,134.062603c0,0 9.999983,0 11.249981,0c1.249998,0 21.874962,-8.749985 21.874962,-8.749985c0,0 11.87498,7.499987 12.499979,8.124986c0.624999,0.624999 3.749994,13.749977 6.249989,14.374976c2.499996,0.624999 12.499979,8.749985 16.874972,11.24998c4.374992,2.499996 14.999974,3.124995 17.49997,3.124995c2.499995,0 21.874962,-1.874997 21.874962,-1.874997c0,0 11.87498,6.874989 12.499979,7.499988c0.624999,0.624998 4.374992,-1.874997 5.62499,-1.874997c1.249998,0 1.874997,8.124986 1.874997,8.124986c0,0 -9.374984,13.124977 -9.999983,14.374975c-0.624999,1.249998 -4.374992,14.999975 -4.374992,14.999975c0,0 -13.124978,12.499978 -14.999975,16.249972c-1.874997,3.749993 -8.124986,14.374975 -8.749985,16.874971c-0.624999,2.499996 -16.874971,13.124977 -18.124969,13.124977c-1.249998,0 -12.499978,5.624991 -12.499978,5.624991c0,0 -12.499979,-1.249998 -13.124978,-1.249998c-0.624999,0 -5.62499,-4.999991 -5.62499,-4.999991c0,0 7.499987,-21.874963 7.499987,-21.874963c0,0 6.874988,-9.374984 6.874988,-9.374984c0,0 -5.62499,-11.249981 -5.62499,-11.249981c0,0 -14.374976,-3.749993 -14.374976,-4.374992c0,-0.624999 -4.999991,-11.249981 -4.999991,-11.249981c0,0 5.62499,-18.749968 5.62499,-18.749968c0,0 1.249998,-11.249981 1.249998,-11.249981c0,0 -19.374967,-9.374984 -19.374967,-9.374984c0,0 -5.62499,-4.999991 -5.62499,-4.999991c0,0 -16.249972,-11.87498 -16.249972,-11.87498c0,0 4.374992,-0.624999 4.374992,-0.624999z" stroke-opacity="null" stroke-width="1.5" stroke="#000" fill="#ffff00"/>
                                <title>Água Retorta</title>
                                </path>
                            </a>
                        </g>
                    </svg>
        </div>
        <div id="intro">
        <h1>Factos</h1>
        Vila da Povoação é uma vila portuguesa na ilha de São Miguel, Região Autónoma dos Açores, com cerca de 2.400 habitantes. Situa-se na zona oriental da costa sul da ilha, distando 60 km da cidade de Ponta Delgada.
        É sede de um município com 110,30 km² de área e 6.726 habitantes (2001), subdividido em 6 freguesias. O município é limitado a norte pelos municípios da Ribeira Grande e de Nordeste, a oeste por Vila Franca do Campo e tem costa no oceano Atlântico a leste e sul.
        
        <h1>Freguesias</h1>
        <dd><p>Água Retorta</p></dd>
        <dd><p>Faial da Terra</p></dd>
        <dd><p>Furnas</p></dd>
        <dd><p>Nossa Senhora dos Remédios</p></dd>
        <dd><p>Povoação (freguesia)</p></dd>
        <dd><p>Ribeira Quente</p></dd>
        <h1>História</h1>
        
        <p></p>
        O descobrimento dos Açores envolve alguma controvérsia, mas os mais recentes estudos apontam para a probabilidade do Arquipélago dos Açores ter sido descoberto por Diogo de Silves, a mando do Infante D. Henrique, em 1427. Crê-se que a ilha de São Miguel, à semelhança de outras ilhas, foi baptizada com nome de um Santo, fruto do espírito religioso vivido na época.
        <p></p>
        Os descobridores aportaram, pela primeira vez, na então chamada Povoação Velha, actual Concelho da Povoação.
        “Chegando aqui às ilhas os novos descobridores tomaram terra no lugar onde agora se chama a Povoação Velha pelo que fizeram depois […] e, desembarcando entre duas frescas ribeiras de claras, doces e frias águas, (a Ribeira de Além e a Ribeira de Pelames) entre rochas e terras altas, (Morro de Santa Bárbara e Lomba dos Pós) todas cobertas de espesso arvoredo de cedros, louros, ginjas e faias, e outras diversas”.
        <p></p>
        Desde logo, o local impressionou os descobridores pois era abundante em vegetação, facto que indicava tratar-se de uma terra fértil. Procedeu-se então ao povoamento da Ilha, transportando para a mesma gado, sementes de trigo, legumes e algumas alfaias agrícolas.
        <h1>Recursos naturais</h1>
        Por todo o concelho se usufrui de um conjunto magnífico de paisagens, parques, miradouros, praias (inclusive uma de água tépida). A Lagoa das Furnas é, por seu turno, outro recanto ao qual não ficará indiferente pela beleza e magia que o envolve. Peremptoriamente, ao falarmos no Concelho da Povoação, não podemos deixar de realçar que no Vale das Furnas, de acordo com os especialistas na área, se encontra a nossa maior riqueza – os recursos hidrológicos, resultantes das manifestações de vulcanismo activo que se encontram patentes nas fumarolas e nos gaisers – manifestações únicas nos Açores. O Vale das Furnas detém 22 qualidades de águas minero-medicinais já classificadas, o que constitui em termos mundiais a maior hidrópole.
        <p></p>
        Os Povoacenses dispõem de um concelho cada vez mais desenvolvido e, consequentemente, atractivo. Este facto deve-se ao aproveitamento dos recursos naturais existentes por todo o concelho, mas também ao trabalho efectuado a diversos níveis, nomeadamente a nível cultural e turístico.
        <h1>Património</h1>
        Deslocando-se ao nosso concelho, além das paisagens paradisíacas de que desfrutará, pode visitar a título de exemplo o Museu do Trigo, o núcleo Museológico da Ribeira Quente, o Parque Terra Nostra, ou ainda o Parque Zoológico da vila da Povoação
        <h1>Links</h1>
        <dd>http://www.cm-povoacao.pt/</dd>
        </div>
        </section>
        <section id="content2">
        <p>
        Pôr conteúdo!!
        </p>
        <p>
        Pôr conteúdo!!
        </p>
        </section>
        <section id="content3">
        <h1>Igreja Matriz da Povoação</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!4v1549848931925!6m8!1m7!1sJsq7ORyNSlI-stOo2B4xmg!2m2!1d37.74865321789224!2d-25.24392529276641!3f44.39766369683032!4f24.306329936649902!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div id="intro">
        <p>As portas da cidade é um dos marcos deste concelho e cidade de Ponta Delgada.</p>
        <p></p>Estas portas são um símbolo da primitiva defesa terrestre da cidade, na costa sudoeste da ilha.
        <p>Foram erguidas em 1783, primitivamente abertas nos muros do setor este.</p>
        </div>
        <br><div align="center">
        <p>Igreja Matriz da Povoação</p>
        <br>
        <br>
        </div>
        </section>
        <section id="content4">
        <p>
        Pôr conteúdo!!
        </p>
        <p>
        Pôr conteúdo!!
        </p>
        </section>
        </main>
        
        <div class="newspaper">
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/agua_retorta.php">Água Retorta</a>
        </dd>
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/faial_da_terra.php">Faial da Terra</a>
        </dd>
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/furnas.php">Furnas</a>
        </dd>
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/nossa_senhora_remedios.php">Nossa Senhora dos Remédios</a>
        </dd>
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/povoacao.php">Povoação</a>
        </dd>
        <dd>
        <a class="linkgeneral" href="freguesias/povoacao/ribeira_quente.php">Ribeira Quente</a>
        </dd>
        </div>
        
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
                    <label for="mesg"><a>Comentário : </a> <span id="message-info"></span></label>
                    <textarea class="form-field" id="message" name="message" rows="4"></textarea>
                </div>
                <div class="row">
                    <input type="hidden" name="add" value="post" />
                    <button type="submit" name="submit" id="submit" class="btn-add-comment">Adicionar Comentário</button>
                    <img src="comentarios_povoacao/LoaderIcon.gif" id="loader" />
                </div>
            </form>
            <?php
                include_once 'db.php';
                
                
                $sql_sel = "SELECT * FROM tbl_user_comments_povoacao ORDER BY id DESC";
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
                    <div class="comment-user"><?php echo $row["username"]."  ".$row['create_at_timestamp'];?></div>
                    <div class="comment-msg" id="msgdiv-<?php echo $row["id"];?>"><?php echo $row["message"];?></div>
                    <?php  if ($_SESSION['user']['username']==$row['username']) 
                        {
                        ?>
                    <div class="delete" name="delete"
                        id="delete-<?php echo $row['id']; ?>" onclick="deletecomment(<?php echo $row['id'];?>)">Delete</div>
                </div>
                <?php 
                    }
                    }
                    ?>
            </div>
        </div>
        </div>
        
        <script type="text/javascript"></script>
        <script>
            function deletecomment(id) {
            
            
            
               if(confirm("Tem a certeza que quer eliminar este comentário?")) {
            
                    $.ajax({
                    url: "comentarios_povoacao/comment-delete.php",
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
                         url: 'comentarios_povoacao/comment-add.php',
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