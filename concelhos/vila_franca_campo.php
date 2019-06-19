<?php 
   include('../multi_login/functions.php');
   
   //esconder os erros
   error_reporting(0);
   ini_set('display_errors', 0);
   
   ?>
<!DOCTYPE html>  
<html lang="pt">
   <head>
      <title>Vila Franca do Campo</title>
      <link rel="icon" href ="../js_css/images/iconesite.ico" type="image/x-icon" />
      <link rel="shortcut icon" href="../js_css/images/iconesite.ico" type="image/x-icon" />
      <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
      <link href="../js_css/labels.css" rel="stylesheet" type="text/css"/>
      <script src="comentarios_vila_franca_do_campo/jquery-3.2.1.min.js"></script>
      <style>
        
      </style>
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
      <!--Meter fotos da região própria-->
      <div id="corpo">
         <h1>Vila Franca do Campo</h1>
         <img align="right" src="../js_css/images/azores_images/concelhos/vila_franca_do_campo_flag.png" alt="Bandeira de Lagoa"/>
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
               <h1>Mapa Vila Franca do Campo</h1>
               <!-- Vila Franca do Campo -->
               <svg  width="auto" height="360px" viewBox="-50 10 300 130" xmlns="http://www.w3.org/2000/svg">
                  <g>
                     <a xlink:href="freguesias/vila_franca_do_campo/agua_de_alto.php">
                        <path class="vila_franca_campo" id="svg_2" d="m26.647177,53.29414c0,0 7.529402,-2.352938 7.764696,-2.352938c0.235294,0 2.588232,3.05882 2.588232,3.05882c0,0 1.411763,3.05882 1.88235,2.823526c0.470588,-0.235294 3.764701,1.88235 4.705876,0.941175c0.941175,-0.941175 3.294113,-2.352938 3.529407,-2.588232c0.235294,-0.235294 7.764696,-3.294113 7.764696,-3.294113c0,0 1.411763,1.647057 1.411763,1.647057c0,0 -2.117644,2.823526 -1.647057,3.05882c0.470588,0.235294 3.529407,7.764696 3.529407,7.529402c0,-0.235294 4.94117,-0.705881 4.94117,-0.941175c0,-0.235294 2.352938,-5.176464 2.588232,-5.176464c0.235294,0 2.117644,-0.235294 2.117644,-0.235294c0,0 1.88235,1.176469 2.823526,2.117644c0.941175,0.941175 2.823526,4.235289 2.823526,4.235289c0,0 1.88235,3.764701 1.88235,3.529407c0,-0.235294 3.294113,-2.588232 3.294113,-2.588232c0,0 2.117644,0 2.588232,0.941175c0.470588,0.941175 0.705881,3.05882 0.470588,3.05882c-0.235294,0 -1.176469,1.411763 -1.176469,1.647057c0,0.235294 0.705881,2.823526 0.705881,2.823526c0,0 -2.588232,4.470582 -2.588232,4.470582c0,0 -4.705876,1.88235 -4.235289,2.588232c0.470588,0.705881 0.941175,2.117644 0.941175,2.117644c0,0 2.588232,0.470588 2.823526,0.470588c0.235294,0 -1.176469,3.999995 -1.176469,3.999995c0,0 0.941175,3.764701 0.941175,4.235289c0,0.470588 -3.764701,3.999995 -3.999995,4.235289c-0.235294,0.235294 -2.588232,4.705876 -2.823526,5.176464c-0.235294,0.470588 -0.941175,2.352938 -0.705881,2.352938c0.235294,0 1.176469,2.588232 1.176469,2.823526c0,0.235294 -1.647057,4.235289 -1.647057,4.235289c0,0 2.117644,2.823526 2.117644,2.823526c0,0 -0.235294,4.705876 -0.235294,4.705876c0,0 -3.529407,-4.470582 -3.529407,-4.470582c0,0 -5.411758,3.999995 -5.411758,3.999995c0,0 -2.117644,-2.352938 -2.117644,-2.352938c0,0 -2.823526,3.05882 -2.823526,3.05882c0,0 -3.764701,0.470588 -3.764701,0.470588c0,0 -1.411763,-4.470582 -1.411763,-4.470582c0,0 -5.882345,-1.88235 -5.882345,-1.88235c0,0 -0.705881,2.352938 -1.176469,2.352938c-0.470588,0 -3.999995,-2.117644 -3.999995,-2.117644c0,0 -3.294113,-3.529407 -3.294113,-3.529407c0,0 -0.941175,-3.999995 -0.941175,-4.235289c0,-0.235294 1.176469,-5.882345 1.176469,-5.882345c0,0 0,-3.764701 0,-3.764701c0,0 0,-5.647051 0,-5.647051c0,0 -4.235289,-4.705876 -4.235289,-4.705876c0,0 -2.352938,-4.705876 -2.352938,-4.705876c0,0 -0.941175,-4.470582 -0.941175,-4.470582c0,0 -0.470588,-7.764696 -0.470588,-7.764696c0,0 0.235294,-3.529407 0.235294,-3.529407c0,0 -0.470588,-4.94117 -0.470588,-4.94117c0,0 -3.05882,-2.823526 -3.05882,-2.823526c0,0 -0.705881,-3.05882 -0.705881,-3.05882z" />
                        <title>Água d'Alto</title>
                        </path>
                     </a>
                  </g>
                  <g>
                     <a xlink:href="freguesias/vila_franca_do_campo/sao_pedro.php">
                        <path class="vila_franca_campo" id="svg_4" d="m76.767644,80.833327c0,0 4.040402,-3.838382 4.040402,-3.838382c0,0 1.010101,-3.232322 1.010101,-3.232322c0,0 2.020201,1.414141 2.020201,1.414141c0,0 -0.40404,6.262624 -0.40404,6.262624c0,0 -1.212121,4.242422 -1.212121,4.646463c0,0.40404 -0.20202,4.242422 -0.20202,4.848483c0,0.60606 3.838382,3.434342 3.838382,3.434342c0,0 -2.626261,2.020201 -2.626261,2.020201c0,0 -0.20202,2.424241 -0.20202,2.424241c0,0 -1.010101,1.616161 -1.010101,2.222221c0,0.60606 0.60606,3.838382 0.60606,4.040402c0,0.20202 0.80808,3.030302 0.80808,3.232322c0,0.20202 -1.414141,2.626261 -1.010101,2.828282c0.40404,0.20202 2.626261,3.838382 2.626261,3.838382c0,0 -0.80808,2.222221 -0.80808,2.222221c0,0 -2.424241,0.80808 -2.424241,0.80808c0,0 -0.80808,1.414141 -0.80808,1.414141c0,0 -2.828282,-1.010101 -2.828282,-1.010101c0,0 -1.212121,-1.818181 -1.212121,-1.818181c0,0 -4.242422,0 -4.242422,0c0,0 0,-5.252523 0,-5.252523c0,0 -1.010101,-2.424241 -1.212121,-2.424241c-0.20202,0 0.60606,-1.414141 0.60606,-1.414141c0,0 -0.80808,-5.050503 -0.80808,-5.050503c0,0 1.818181,-3.030302 1.818181,-3.030302c0,0 2.222221,-3.838382 2.222221,-3.838382c0,0 3.232322,-3.434342 3.232322,-3.434342c0,0 -0.20202,-2.828282 -0.20202,-2.828282c0,0 -0.80808,-2.828282 -0.80808,-2.828282c0,0 1.010101,-2.222221 1.010101,-2.222221c0,0 0.20202,-2.020201 0.20202,-2.020201c0,0 -2.020201,-1.414141 -2.020201,-1.414141z" />
                        <title>S.Pedro</title>
                        </path>
                     </a>
                  </g>
                  <g>
                     <a xlink:href="freguesias/vila_franca_do_campo/sao_miguel.php">
                        <path class="vila_franca_campo" id="svg_6" d="m69.3989,48.87068c0.91074,0 6.01092,0.18215 6.01092,0.18215c0,0 2.36795,-2.73224 2.36795,-2.73224c0,0 0.72859,-3.82514 0.72859,-3.82514c0,0 -0.91074,-3.82514 -0.91074,-3.82514c0,0 2.36794,0.91075 2.36794,0.91075c0,0 2.18579,-3.82514 2.18579,-3.82514c0,0 2.73224,-4.91803 2.73224,-4.91803c0,0 0.18215,-2.18579 0.18215,-2.18579c0,0 -1.4572,0 -1.4572,0c0,0 -0.36429,-1.45719 -0.36429,-1.45719c0,0 1.82149,-0.91075 1.82149,-0.91075c0,0 2.00364,0.91075 2.00364,0.91075c0,0 1.27505,-0.91075 1.27505,-0.91075c0,0 2.73224,-0.3643 2.73224,-0.3643c0,0 0,1.82149 0,1.82149c0,0 1.27504,1.63935 1.27504,1.63935c0,0 1.0929,0.3643 1.27505,0.3643c0.18215,0 1.45719,0.72859 1.45719,0.72859c0,0 2.55009,-0.91074 2.55009,-0.91074c0,0 0.7286,-1.0929 0.7286,-1.0929c0,0 2.36794,0.54645 2.36794,0.54645c0,0 1.8215,-0.7286 1.8215,-0.7286c0,0 3.09653,4.00729 3.09653,4.00729c0,0 -4.00728,0.54644 -4.00728,0.54644c0,0 -3.46084,0 -3.46084,0c0,0 -4.91803,0.54645 -4.91803,0.54645c0,0 -2.18579,1.27505 -2.18579,1.27505c0,0 -0.18215,2.55009 -0.18215,2.55009c0,0 0.91074,3.64299 0.91074,3.64299c0,0 -0.18214,2.91438 -0.18214,2.91438c0,0 -0.91075,3.82514 -0.91075,3.82514c0,0 0,3.27869 0,3.27869c0,0 -0.3643,6.01093 -0.3643,6.01093c0,0 2.36794,2.73224 2.36794,2.73224c0,0 2.73224,0 2.73224,0c0,0 1.63935,2.36794 1.63935,2.36794c0,0 2.73224,-1.4572 2.73224,-1.4572c0,0 3.27868,1.8215 3.27868,1.8215c0,0 5.10018,0 5.10018,0c0,0 0.91075,3.09654 0.91075,3.09654c0,0 -0.18215,2.00364 -0.18215,2.00364c0,0 2.00364,5.28233 2.00364,5.46448c0,0.18215 1.63935,5.82878 1.63935,5.82878c0,0 -0.18215,2.91439 -0.18215,3.09654c0,0.18215 0.91075,7.10382 0.91075,7.10382c0,0 -1.27505,3.64299 -1.27505,3.64299c0,0 -1.27504,6.01092 -1.27504,6.01092c0,0 -1.0929,4.55374 -1.0929,4.55374c0,0 -2.36794,1.09289 -2.36794,1.09289c0,0 -6.19308,2.36795 -6.19308,2.36795c0,0 -0.91075,2.00364 -0.91075,2.00364c0,0 2.55009,5.82878 2.55009,5.82878c0,0 -5.28233,-1.8215 -5.28233,-1.8215c0,0 -1.09289,-0.3643 -2.00364,0.3643c-0.91075,0.7286 -3.09654,2.55009 -3.09654,2.55009c0,0 -5.10018,0.3643 -5.10018,0.3643c0,0 -2.55009,1.0929 -2.55009,1.0929c0,0 1.27505,-3.09654 1.27505,-3.09654c0,0 -2.55009,-1.82149 -2.55009,-2.00364c0,-0.18215 1.82149,-2.91439 1.63934,-2.91439c-0.18215,0 -2.18579,-6.01093 -2.18579,-6.01093c0,0 1.63934,-3.64299 1.63934,-3.64299c0,0 0,-2.55009 0,-2.55009c0,0 2.36794,-2.36794 2.36794,-2.36794c0,0 -3.46083,-4.18943 -3.46083,-4.18943c0,0 -0.3643,-2.36795 -0.3643,-2.36795c0,0 1.45719,-5.64663 1.45719,-5.64663c0,0 0,-7.10382 0,-7.10382c0,0 -2.55009,-2.36794 -2.55009,-2.36794c0,0 0,-2.36794 0,-2.36794c0,0 0.7286,-1.8215 0.7286,-1.8215c0,0 -0.54645,-3.64298 -0.54645,-3.64298c0,0 -2.36794,-0.91075 -2.36794,-0.91075c0,0 -2.36794,0.7286 -2.36794,0.7286c0,0 -0.91075,1.27504 -0.91075,1.27504c0,0 -1.63934,-1.09289 -1.63934,-1.09289c0,0 -1.8215,-3.82514 -1.8215,-3.82514c0,0 -2.55009,-2.55009 -2.55009,-2.55009c0,0 -2.00364,-1.63934 -2.55009,-1.63934c-0.54645,0 -2.91439,0.72859 -2.91439,0.72859c0,0 -1.27504,2.5501 -1.27504,2.5501c0,0 -1.8215,2.36794 -1.8215,2.36794c0,0 -2.36794,0 -2.36794,0c0,0 -1.09289,-2.73224 -1.09289,-2.73224c0,0 -1.63935,-3.27869 -1.63935,-3.27869c0,0 0,-1.82149 0,-1.82149c0,0 0.7286,-1.4572 0.7286,-1.4572c0,0 0.18215,-2.00364 0.18215,-2.00364c0,0 4.91803,-1.0929 4.91803,-1.0929c0,0 2.18579,-1.82149 2.18579,-1.82149c0,0 2.1858,1.45719 2.1858,1.45719c0,0 1.45719,-0.91074 2.36794,-0.91074z" />
                        <title>S. Miguel</title>
                        </path>
                     </a>
                  </g>
                  <g>
                     <a xlink:href="freguesias/vila_franca_do_campo/ribeira_das_tainhas.php">
                        <path class="vila_franca_campo" id="svg_7" d="m109.01288,33.76252c0,-0.14306 4.00572,-0.85837 4.29184,-0.85837c0.28613,0 2.57511,-0.28612 2.57511,-0.28612c0,0 -1.28755,4.14878 -1.28755,4.14878c0,0 3.43347,2.43205 3.43347,2.57511c0,0.14306 -1.71673,4.29184 -1.71673,4.29184c0,0 -1.1445,7.29614 -1.1445,7.4392c0,0.14306 0,15.45065 0,15.45065c0,0 1.00143,3.86266 1.00143,3.86266c0,0 3.29042,0.28612 3.57654,0.42918c0.28613,0.14306 2.14593,2.14593 2.14593,2.14593c0,0 -0.14307,2.14592 -0.14307,2.28898c0,0.14306 2.14593,2.71817 2.43205,3.29041c0.28612,0.57225 0.28612,7.29614 0.14306,7.29614c-0.14306,0 -0.42918,2.28899 -0.42918,3.00429c0,0.71531 1.28755,3.29042 1.28755,3.29042c0,0 -2.00286,4.14878 -2.00286,4.14878c0,0 2.86123,0.85837 2.86123,0.85837c0,0 -0.57225,2.86123 -0.57225,3.14736c0,0.28612 -2.28898,3.86266 -2.28898,4.00572c0,0.14306 -3.14735,4.29184 -3.29042,4.72103c-0.14306,0.42918 -0.57224,4.43491 -0.57224,4.43491c0,0 -8.72675,-0.42919 -9.01288,-0.14307c-0.28612,0.28613 -3.57654,2.28899 -3.57654,2.28899c0,0 -3.86266,-0.28612 -3.86266,-0.42919c0,-0.14306 -0.14306,-2.00286 -0.14306,-2.5751c0,-0.57225 -1.8598,-4.14879 -1.8598,-4.29185c0,-0.14306 1.14449,-1.14449 1.28756,-1.14449c0.14306,0 7.29613,-1.71674 7.29613,-1.71674c0,0 1.71674,-2.86123 1.71674,-2.86123c0,0 1.14449,-5.43634 1.14449,-5.5794c0,-0.14306 1.8598,-7.72532 1.8598,-7.72532c0,0 0,-3.14735 0,-3.29042c0,-0.14306 -1.43061,-3.14735 -1.43061,-3.29041c0,-0.14306 0.71531,-6.29471 0.71531,-6.29471c0,0 -1.57368,-4.14878 -1.57368,-4.14878c0,0 -2.00286,-5.00716 -2.00286,-5.00716c0,0 0.28612,-5.43633 0.28612,-5.43633c0,0 -6.29471,-1.1445 -6.29471,-1.1445c0,0 -2.5751,-0.42918 -2.5751,-0.42918c0,0 -1.00143,-2.86123 -1.00143,-2.86123c0,0 -2.28899,2.57511 -2.28899,2.57511c0,0 -2.43204,-1.43062 -2.43204,-1.43062c0,0 -2.57511,-0.71531 -2.57511,-0.71531c0,0 -2.00286,-1.43061 -2.00286,-1.43061c0,0 0.57224,-9.44206 0.57224,-9.44206c0,0 2.00286,-2.28899 2.00286,-2.28899c0,0 -0.57224,-5.00715 -0.57224,-5.00715c0,0 -1.00143,-2.57511 -1.00143,-2.57511c0,0 1.8598,-3.29041 1.8598,-3.29041c0,0 6.00858,-0.28612 6.00858,-0.28612c0,0 6.15165,0.28612 6.43777,0.14306c0.28612,-0.14306 2.71817,0.28612 2.71817,0.14306z" />
                        <title>Ribeira das Tainhas</title>
                        </path>
                     </a>
                  </g>
                  <g>
                     <a xlink:href="freguesias/vila_franca_do_campo/ponta_garca.php">
                        <path class="vila_franca_campo" id="svg_9" d="m116.02289,31.90272c0,0 9.01288,-1.00143 9.01288,-1.00143c0,0 1.14449,1.57367 1.14449,1.57367c0,0 -3.43348,1.8598 -3.43348,1.8598c0,0 1.28756,2.00287 1.28756,2.00287c0,0 2.28898,1.14449 2.71817,1.14449c0.42918,0 2.71817,-0.42919 2.71817,-0.42919c0,0 0.7153,-3.86266 0.7153,-3.86266c0,0 1.28756,0.85837 1.57368,1.00143c0.28612,0.14306 3.00429,2.71817 3.00429,3.0043c0,0.28612 0.57225,3.57653 0.57225,3.71959c0,0.14307 0,2.28899 0,2.28899c0,0 6.43777,-1.00143 6.43777,-1.00143c0,0 -0.14306,-2.71817 -0.14306,-2.86123c0,-0.14306 -2.14593,-2.57511 -2.14593,-2.57511c0,0 1.14449,-1.43061 1.14449,-1.43061c0,0 1.8598,0.14306 1.8598,0.14306c0,0 0.71531,-1.71674 0.71531,-1.71674c0,0 1.00143,-2.00286 1.00143,-2.00286c0,0 2.14593,0.57224 2.43205,0.7153c0.28612,0.14307 2.28898,6.58083 2.28898,6.58083c0,0 0.14306,3.43348 0.14306,3.43348c0,0 0.71531,1.14449 1.00144,1.14449c0.28612,0 3.29041,-0.85837 3.29041,-0.85837c0,0 0.57225,-1.8598 0.57225,-1.8598c0,0 0.7153,0.14307 1.00143,0.42919c0.28612,0.28612 0.57224,1.57368 0.57224,1.57368c0,0 -1.71674,1.43061 -1.71674,1.43061c0,0 -4.00572,1.71674 -4.00572,1.71674c0,0 0.28613,2.43205 0.28613,2.43205c0,0 3.43347,1.57367 3.43347,1.57367c0,0 4.72103,0.85837 4.72103,0.85837c0,0 1.71674,2.00286 1.71674,2.00286c0,0 -4.29185,0.28613 -4.29185,0.28613c0,0 0.42919,1.8598 0.42919,2.14592c0,0.28612 3.14735,2.00286 3.14735,2.00286c0,0 3.7196,-1.14449 3.7196,-1.14449c0,0 1.43062,-0.42919 1.43062,-0.42919c0,0 3.00429,0.85837 3.00429,1.00143c0,0.14306 -1.71674,6.29471 -1.71674,6.29471c0,0 2.43205,0.71531 2.71817,0.85837c0.28612,0.14306 -0.57225,2.86123 -0.57225,2.86123c0,0 2.71817,2.28898 2.86123,2.28898c0.14307,0 3.29042,-0.42918 3.86267,0c0.57224,0.42919 2.71816,2.86123 2.71816,2.86123c0,0 2.28899,0.71531 2.28899,0.85837c0,0.14307 1.43061,3.14736 1.28755,3.29042c-0.14306,0.14306 -5.00715,0.57224 -5.00715,0.57224c0,0 -2.57511,1.57368 -2.28899,1.8598c0.28613,0.28613 0.28613,2.86123 0.28613,2.86123c0,0 3.14735,0.85837 3.14735,0.85837c0,0 2.71817,-1.00143 2.86123,-0.85837c0.14306,0.14307 2.00286,1.00144 2.00286,1.1445c0,0.14306 4.86409,17.31044 4.86409,17.31044c0,0 -3.43347,0 -3.43347,0c0,0 -3.57654,-0.57224 -3.57654,-0.57224c0,0 -1.8598,0.85836 -2.00286,0.85836c-0.14306,0 -0.42919,1.1445 -0.42919,1.1445c0,0 -4.57796,0.14306 -4.57796,0.14306c0,0 -5.5794,3.00429 -5.5794,3.00429c0,0 -6.7239,6.29471 -6.7239,6.43777c0,0.14306 -1.14449,1.00143 -1.14449,1.00143c0,0 -3.00429,3.29041 -3.00429,3.43348c0,0.14306 -3.00429,0.7153 -3.00429,0.7153c0,0 -3.14735,0.28613 -3.14735,0.28613c0,0 -2.00287,-1.28756 -2.00287,-1.28756c0,0 -4.14878,-0.71531 -4.14878,-0.71531c0,0 -4.29185,-1.28755 -4.43491,-1.28755c-0.14306,0 -5.29327,-0.57225 -5.29327,-0.57225c0,0 -3.57654,0 -3.57654,0c0,0 -5.43634,0.14307 -5.43634,0.14307c0,0 -2.86123,1.14449 -2.86123,1.14449c0,0 -1.71674,-0.42919 -1.71674,-0.42919c0,0 0,-3.00429 0,-3.00429c0,0 1.71674,-3.00429 2.00286,-3.14735c0.28613,-0.14306 1.8598,-2.14592 1.8598,-2.14592c0,0 1.00143,-2.43205 1.00143,-2.43205c0,0 0.85837,-3.14735 0.85837,-3.14735c0,0 0.57225,-2.57511 0.57225,-2.57511c0,0 -1.28755,-1.71674 -1.28755,-1.71674c0,0 -1.43062,0.42919 -1.43062,0.42919c0,0 1.71674,-3.43348 1.71674,-3.43348c0,0 -1.14449,-2.71817 -1.14449,-2.71817c0,0 0.57224,-4.00572 0.57224,-4.00572c0,0 0,-4.57797 0,-4.57797c0,0 -0.14306,-2.86123 -0.14306,-2.86123c0,0 -3.29041,-3.00429 -3.29041,-3.00429c0,0 0,-4.43491 0,-4.43491c0,0 -3.29042,-1.28755 -3.29042,-1.28755c0,0 -1.8598,-2.00287 -1.8598,-2.00287c0,0 -0.57225,-3.14735 -0.57225,-3.29041c0,-0.14306 0.28613,-5.86552 0.28613,-5.86552c0,0 0,-8.29757 0,-8.29757c0,0 1.00143,-6.15165 1.00143,-6.15165c0,0 1.71674,-4.4349 1.71674,-4.4349c0,0 -3.57654,-2.57511 -3.57654,-2.57511c0,0 0.42918,-4.72103 0.42918,-4.72103z" />
                        <title>Ponta da Graça</title>
                        </path>
                     </a>
                  </g>
               </svg>
               <div id="intro">
                  <h1>Factos</h1>
                  Vila Franca do Campo é uma vila portuguesa na ilha de São Miguel, Região Autónoma dos Açores, sede de um município com 78,00 km² de área e 11 150 habitantes, subdividido em 6 freguesias. O município é limitado a norte pelo município da Ribeira Grande, a leste pela Povoação, a oeste por Lagoa e a sul tem litoral no oceano Atlântico.
                  Localiza-se à latitude de 37.71667 (37°41') Norte e longitude de 2.433 (25°26') Oeste. Frente a Vila Franca do Campo, a cerca de 1.200 metros do porto do Tagarete, localiza-se o ilhéu de Vila Franca, um cone litoral de tufos palagoníticos fortemente litificados, que contém no seu interior uma caldeira inundada de forma quase perfeitamente circular. O Ilhéu de Vila Franca é desde 1993 uma reserva natural, constituindo ainda um importante local de veraneio.
               <div id="intro">
                  <p>
                  </p>
               </div>
            </section>
            <section id="content2">
               
                  
                      
	<a src="../js_css/images/azores_images/cidades/vila_franca_do_campo/ilheu_vila_franca.png" title="The Cleaner"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a>
               </div>
            </section>
            <section id="content3">
               <h1>História</h1>
               <div id="intro">
                  <p></p>
                  Vila Franca do Campo foi, durante o primeiro século de povoamento, a mais importante povoação da ilha, nela se fixando Gonçalo Vaz Botelho, o capitão do donatário, e as principais instituições oficiais, como a Alfândega e a Ouvidoria, de onde o epíteto de "primeira capital micaelense". Foi elevada a vila em 1472, a segunda no arquipélago.
                  <p></p>
                  É testemunho de seu desenvolvimento o fato de contar com hospital em época anterior à da fundação da Santa Casa da Misericórdia de Lisboa (1498), por efeito de disposição testamentária de D. Isabel Gonçalves que, em 1483, legou os seus haveres para a sua instituição.
                  <p></p>
                  <h1>Terramoto de 1522</h1>
                  Na noite de 21 para 22 de Outubro de 1522, a vila sofreu um violento terramoto - a chamada "subversão de Vila Franca" - que causou um grande escorregamento de terras nas encostas sobranceiras à vila, causando um lahar que soterrou a maior parte do povoado. Como consequência estima-se que pereceram milhares de pessoas, não apenas em Vila Franca, mas também em muitas outras povoações da ilha, tendo se registado ainda grandes escorregamentos de terras na Maia e região circunvizinha, e em Ponta Garça. 
                  <p></p>
                  A tragédia inspirou diversos escritos e, pelo menos, um romance de raiz oral intitulado "Romance que se fez d'algumas mágoas, e perdas que causou o tremor de Vila Franca do Campo", editado por Teófilo Braga. Com o intuito de reedificar a vila, o capitão donatário Rui Gonçalves da Câmara e a câmara da dita vila mandaram cortar nas florestas do Vale das Furnas um grande número de cedros que aí abundavam, a fim de serem distribuídos gratuitamente pelas famílias pobres na construção de novas habitações.
                  <p></p>
                  Apesar da destruição, Vila Franca manteve importância regional até ao século XVIII, apenas atrás de Ponta Delgada, quando foi suplantada pela Ribeira Grande. O cronista Gaspar Frutuoso, assim a refere:
                  <p></p>
                  <dd>"...a antiga e nobre Vila Franca do Campo com seus ricos pomares de muitas frutas, de que está rodeada, chamada Franca porque, segundo dizem, logo no princípio, tirando os dízimos que somente se pagam a El-Rei, era franca de todas as mais coisas e direitos, para melhor ser povoada esta ilha e chamou-se do campo por ser situada em um formoso campo."</dd>
                  <p></p>
                  e acrecenta, sobre o seu crescimento:
                  <p></p>
                  <dd>"...tanto em edifícios e comércio que parecia uma pequena corte, com seus ilustres capitães e fidalguia de gente nobre, que governava com prudência e zêlo."(in Saudades da Terra). </dd>
                  <p></p>
                  <h1>Batalhas e eventos importantes</h1>
                  Em Vila Franca tiveram lugar alguns dos mais importantes eventos das lutas entre os partidários de D. António I de Portugal e de Filipe II de Espanha, que culminaram na batalha naval de Vila Franca, travada ao longo do litoral sul da ilha de São Miguel a 26 de Julho de 1582.
                  <p></p>
                  Após a batalha, D. Álvaro de Bazán, marquês de Santa Cruz de Mudela, desembarcou na vila, aqui estabelecendo o seu quartel general e fazendo supliciar por enforcamento cerca de 800 prisioneiros franceses e portugueses, no maior e mais brutal massacre jamais ocorrido nos Açores.
                  <p></p>
                  Em Julho de 1562 nasceu nesta povoação Bento de Góis, que empreendeu na Ásia Central, entre 1602 e 1606, a maior viagem de exploração terrestre portuguesa e uma das maiores de sempre da história da humanidade.
                  <p></p>
                  Aqui está sepultada a primeira freira micaelense, Petronilha da Mota, filha de Jorge da Mota. e que, com o nome de Madre Maria de Jesus, foi a primeira abadessa do Convento de Santo André.
               </div>
               <br>
               <br>
            </section>
            <section id="content4">
                
                
                
            </section>
         </main>
         <h1>Freguesias</h1>
         <div class="newspaper">
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/agua_de_alto.php">Água de Alto</a>
            </dd>
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/ponta_garca.php">Ponta Garça</a>
            </dd>
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/ribeira_das_teinhas.php">Ribeira das Tainhas</a>
            </dd>
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/ribeira_seca.php">Ribeira Seca</a>
            </dd>
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/sao_miguel.php">São Miguel (Vila Franca do Campo)</a>
            </dd>
            <dd>
               <a class="linkgeneral" href="freguesias/vila_franca_campo/sao_pedro.php">São Pedro (Vila Franca do Campo)</a>
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
                  <img src="comentarios_vila_franca_do_campo/LoaderIcon.gif" id="loader" />
               </div>
            </form>
            <?php
               include_once 'db.php';
               
               
               $sql_sel = "SELECT * FROM tbl_user_comments_vila_franca_do_campo ORDER BY id DESC";
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
         
         
         
            if(confirm("Are you sure you want to delete this comment?")) {
         
                 $.ajax({
                 url: "comentarios_vila_franca_do_campo/comment-delete.php",
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
                 		$(".error").text(("Oops! 🙁 Parece que ainda não pode comentar.. \nPara comentar faça login ou, caso esteja com conta iniciada, escreva algo na caixa."));
                 }
                 if(name == "" && message !== ""){
                 		$('#name-info').addClass("error");
                 		$(".error").text(alert("Oops! 🙁 Algo ocorreu, possíveis causas: \n      \t->Ainda não fez login,\n   \t->Ainda não tem conta,\n   \t->Problema de conexão,\nA página irá recarregar.",window.location.reload()));
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
                      url: 'comentarios_vila_franca_do_campo/comment-add.php',
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
      <script>
      $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
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