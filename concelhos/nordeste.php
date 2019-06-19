<?php 
    include_once('../multi_login/functions.php');
    
    //esconder os erros
    error_reporting(0);
    ini_set('display_errors', 0);
    
    ?>
<!DOCTYPE html>  
<head>
    <title>Nordeste</title>
    <link rel="icon" href ="../js_css/images/iconesite.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../js_css/images/iconesite.ico" type="image/x-icon" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="../js_css/labels.css" rel="stylesheet" type="text/css"/>
    <script src="comentarios_nordeste/jquery-3.2.1.min.js"></script>
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
    <!--Meter fotos da região própria-->
    <div id="corpo">
        
          <button class="button" onclick="goBack()"><i class="material-icons">chevron_left</i></button><h1>Nordeste</h1>
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
            <section id="content1">
                <h1>Mapa Nordeste</h1>
                <img align="right" src="../js_css/images/azores_images/concelhos/nordeste_flag.png" alt="Bandeira de Lagoa"/>
                <!-- Nordeste -->
                <div id="concelhosmap">
                    <svg  width="auto" height="330px" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <a xlink:href="#">
                                <path  class="nordeste" id="svg_2" d="m-0.5,55c0,0 17,3 16.5,3c0.5,0 4.5,-4 6.5,-4c2,0 12,9 15,14c3,5 8,13 8,15c0,2 -1,19 -1.5,19c0.5,0 5.5,17 6.5,17c1,0 -4,18 -4.5,18c0.5,0 -0.5,19 -0.5,21c0,2 -4,13 -4,16c0,3 9,29 8.5,29c0.5,0 10.5,6 11.5,8c1,2 5,24 4.5,24c0.5,0 0.5,21 1.5,24c1,3 30,10 34,15c4,5 12,28 11.5,28c0.5,0 27.5,12 27.5,13c0,1 -11,6 -13,7c-2,1 -19,2 -19.5,2c0.5,0 -6.5,5 -7,5c0.5,0 -9.5,-3 -10,-3c0.5,0 0.5,-14 0,-14c0.5,0 -19.5,-28 -20,-28c0.5,0 -12.5,4 -13,4c0.5,0 -16.5,-5 -17,-5c0.5,0 -10.5,-24 -11,-24c0.5,0 -4.5,-16 -4.5,-16c0,0 7,-12 6.5,-12c0.5,0 -11.5,-8 -11.5,-10c0,-2 0,-25 0,-25c0,0 9,-23 9,-23c0,0 3,-23 2.5,-23c0.5,0 -10.5,-21 -11,-21c0.5,0 -8.5,-6 -8.5,-6c0,0 1,-23 0.5,-23c0.5,0 2.5,-16 2.5,-16c0,0 -17,-18 -16.5,-18c-0.5,0 0.5,-11 0.5,-11z" stroke-width="1"/>
                                <title>Salga</title>
                            </a>
                        </g>
                        <g >
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_3" d="m139.5,312c0,0 12,-8 11.5,-8c0.5,0 22.5,-5 22.5,-5c0,0 12,-3 12,-4c0,-1 -23,-50 -23.5,-50c0.5,0 -17.5,-1 -18,-1c0.5,0 -14.5,-47 -15,-47c0.5,0 -10.5,-26 -11,-26c0.5,0 -4.5,-13 -5,-13c0.5,0 1.5,-26 1.5,-26c0,0 4,-21 3.5,-21c0.5,0 -11.5,-14 -12,-14c0.5,0 3.5,-17 4.5,-17c1,0 4,-36 3.5,-36c0.5,0 -11.5,-4 -12,-4c0.5,0 -13.5,12 -14,12c0.5,0 -9.5,-2 -10.5,-2c-1,0 -13,10 -13.5,10c0.5,0 -9.5,4 -10,4c0.5,0 -1.5,-8 -4.5,-8c-3,0 -10,7 -10,7c0,0 10,19 9.5,19c0.5,0 -0.5,23 -1,23c0.5,0 8.5,13 9.5,15c1,2 -7,21 -7,21c0,0 -1,19 -1.5,19c0.5,0 -5.5,13 -6,13c0.5,0 12.5,30 12,30c0.5,0 12.5,9 12.5,10c0,1 2,39 4,39c2,0 34,22 35,23c1,1 4,21 9,23c5,2 24,14 24,14z" stroke-width="1.5" stroke="#000"/>
                                <title>Achadinha</title>
                            </a>
                        </g>
                        <g >
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_4" d="m116.5,48c0,0 39,-13 38,-13c-1,0 5,13 7,14c2,1 -9,17 -9.5,17c0.5,0 20.5,53 21.5,55c1,2 0,43 -0.5,43c0.5,0 19.5,29 19,29c0.5,0 -0.5,26 -1,26c0.5,0 11.5,14 11.5,16c0,2 -1,20 -1.5,20c0.5,0 3.5,11 5.5,13c2,2 18,28 17.5,28c0.5,0 -10.5,-1 -11,-1c0.5,0 -21.5,-3 -23.5,-5c-2,-2 -24,-46 -24.5,-46c0.5,0 -14.5,-4 -15,-4c0.5,0 -11.5,-32 -11.5,-32c-6,1 -1,-17 -1,-17c-5,4 -19,-30 -19.5,-30c0.5,0 -0.5,-46 0.5,-47c1,-1 -7,-16 -7.5,-16c0.5,0 4.5,-31 4,-31c0.5,0 3.5,-12 3,-12c0.5,0 -1.5,-7 -1.5,-7z" stroke-width="1.5" stroke="#000"/>
                                <title>Achada</title>
                            </a>
                        </g>
                        <g >
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_6" d="m165.5,50c0,0 9,0 10,1c1,1 9,13 12,13c3,0 19,-1 20,-1c1,0 7,21 7,23c0,2 18,19 17.5,19c0.5,0 -2.5,8 -3.5,13c-1,5 14,25 14,27c0,2 -10,34 -11,37c-1,3 -10,13 -10,18c0,5 5,34 6,34c1,0 25,35 25,37c0,2 -11,1 -11.5,1c0.5,0 -7.5,19 -8,19c0.5,0 -16.5,-19 -17,-19c0.5,0 -8.5,-15 -8.5,-18c0,-3 1,-23 0.5,-23c0.5,0 -12.5,-13 -12.5,-13c0,0 6,-26 5.5,-26c0.5,0 -20.5,-30 -20.5,-30c0,0 -5,-47 -5.5,-47c0.5,0 -16.5,-48 -17,-48c0.5,0 7.5,-17 7.5,-17z" stroke-width="1.5" stroke="#000"/>
                                <title>Sanatana</title>
                            </a>
                        </g>
                        <g >
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_7" d="m213.5,67c0,0 47,-1 46.5,-1c0.5,0 29.5,-8 30.5,-8c1,0 49,-13 49,-13c0,0 36,-7 35.5,-7c0.5,0 35.5,11 45.5,11c10,0 20,-7 19.5,-7c0.5,0 11.5,9 11.5,9c0,0 -21,21 -22,22c-1,1 4,49 3,54c-1,5 -20,22 -21,23c-1,1 -22,26 -23,34c-1,8 -4,29 -4.5,29c0.5,0 -21.5,-3 -24.5,0c-3,3 -17,16 -18,17c-1,1 -34,11 -36,13c-2,2 -29,13 -30,14c-1,1 -20,12 -20,11c0,-1 -23,-29 -23,-34c0,-5 -7,-26 -6,-32c1,-6 15,-24 16,-26c1,-2 4,-31 4,-31c0,0 -14,-25 -14.5,-25c0.5,0 5.5,-15 5,-15c0.5,0 -15.5,-15 -16,-15c0.5,0 -7.5,-23 -7.5,-23z" stroke-width="1.5" stroke="#000"/>
                                <title>Nordestino</title>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_8" d="m454.5,54c0,0 18,-3 17.5,-3c0.5,0 -0.5,3 6.5,6c7,3 1,-2 11,4c10,6 20,15 23,15c3,0 12,-4 14,1c2,5 -3,22 -3.5,22c0.5,0 -18.5,11 -18.5,15c0,4 -8,20 -8.5,20c0.5,0 4.5,20 1.5,23c-3,3 -30,31 -30.5,31c0.5,0 -1.5,22 -2,22c0.5,0 -21.5,17 -21.5,17c0,0 -27,36 -28,37c-1,1 -10,20 -10.5,20c0.5,0 -19.5,-4 -19.5,-4c0,0 -37,12 -38,12c-1,0 -21,23 -21.5,23c0.5,0 2.5,-25 2,-25c0.5,0 -2.5,-14 -3.5,-15c-1,-1 -2,-27 -2.5,-27c0.5,0 -10.5,-3 -11,-3c0.5,0 40.5,-18 40,-18c0.5,0 12.5,-14 12,-14c0.5,0 25.5,2 25,2c0.5,0 5.5,-37 5,-37c0.5,0 33.5,-42 36.5,-44c3,-2 8,-60 8,-60c0,0 17,-20 17,-20z" stroke-width="1.5" stroke="#000"/>
                                <title>Lomba da Fazenda</title>
                            </a>
                        </g>
                        <g>
                            <a xlink:href="#">
                                <path class="nordeste" id="svg_9" d="m333.5,315c0,0 35,31 34.5,31c0.5,0 43.5,-23 45.5,-23c2,0 20,15 20,16c0,1 -3,14 0,17c3,3 27,19 36,23c9,4 55,-3 58,0c3,3 14,12 13.5,12c0.5,0 13.5,0 14.5,0c1,0 3,-41 2.5,-41c0.5,0 -9.5,-5 -9.5,-6c0,-1 -2,-45 -2,-46c0,-1 18,-42 17.5,-42c0.5,0 7.5,-7 7.5,-7c0,0 -7,-23 -7.5,-23c0.5,0 -4.5,-27 -4.5,-27c0,0 8,-19 7.5,-19c0.5,0 -8.5,-4 -9,-4c0.5,0 -11.5,-28 -12,-28c0.5,0 -11.5,-37 -12,-37c0.5,0 -4.5,-14 -5,-14c0.5,0 -16.5,20 -17,20c0.5,0 -8.5,16 -9,16c0.5,0 -0.5,21 -1.5,23c-1,2 -32,36 -32.5,36c0.5,0 0.5,19 -0.5,21c-1,2 -19,11 -22,15c-3,4 -29,36 -29,38c0,2 -3,8 -4,11c-1,3 -6,10 -6,10c0,0 -18,-4 -18.5,-4c0.5,0 -26.5,8 -27,8c0.5,0 -28.5,24 -28.5,24z" stroke-width="1.5" stroke="#000"/>
                                <title>Nordeste</title>
                            </a>
                        </g>
                    </svg>
                </div>
                <div id="intro">
                    <p></p>
                    <h1>Factos</h1>
                    Nordeste é uma vila e um município português na Ilha de São Miguel, Região Autónoma dos Açores, com 101,51 km² de área e 5.254 habitantes (2004), subdividido em 9 freguesias. O município é limitado a sul pelo município da Povoação e a oeste pela Ribeira Grande e tem costa no oceano Atlântico a norte e leste.
                   
                    </div>
                    <br>
            </section>
            <section id="content2">
                <h1>Pontos turísticos</h1>
                <div id="intro">
                    No Nordeste existem muitos pontos turísticos como a Miradouro da Ponta do Sossego, Miradouro da Ponta da Madrugada, Serra da Tronqueira, Farol do Arnel, Parque Natural dos Caldeirões, entre outros miradouros que permitem avistar paisagens panorâmicas para o mar. O Nordeste é muito conhecido pela sua vegetação e pelas lindas flores como as hortências ou as azaléias que enfeitam as estradas do concelho.
                    <p></p>
                    <h1>Natureza</h1>
                    Aqui se localiza o Pico da Vara, ponto mais alto da ilha de São Miguel, com cerca de 1.100 metros de altitude. O seu relevo é de carácter montanhoso, recortado por ribeiras que deslizam por entre a vegetação. Com uma extensão aproximada de 1982 hectares, incorpora uma grande quantidade de vegetação endémica, assim como todo um conjunto de flora rara e de grande valor. O Priolo, ave endémica da ilha, encontra aqui o seu habitat.
                    Neste miradouro natural, daqui se consegue ter uma impressionante panorâmica sobre grande parte da ilha, com destaque para o Planalto dos Graminhais, o Pico Verde e a serra da Tronqueira, a sul, e as encostas da caldeira das Furnas e as serras de Água do Pau e Devassa, a oeste.
                    </div>
            </section>
            <section id="content3">
                <h1>Farol do Arnel</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!4v1549848543584!6m8!1m7!1sCAoSLEFGMVFpcE1oSlpRUmRzN19FY21iY2Jlc25DeE1pbnhVT0U2blNCXzhXTTZO!2m2!1d37.824131!2d-25.135868!3f131.70731699732798!4f-9.68218509747723!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div id="intro">
                    Visite o Farol do Arnel o que porporcionará uma vista única.
                    Situado na zona oriental da Ilha de S. Miguel, o farol do Arnel foi o primeiro a ser instalado no arquipélago dos Açores, tendo começado a funcionar em 26 de novembro de 1876. De acordo com a documentação existente, o equipamento completo do farol custou cerca de 21 mil reis.
<p></p>
A sua caraterística torre octogonal, foi construída sobre o edifício da mesma forma destinado a alojamento dos faroleiros.
                </div>
                <br>
                <div align="center">
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
    </div>
    <h1>Freguesias</h1>
    <div class="newspaper">
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/achada.php">Achada</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/achadinha.php">Achadinha</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/algarvia.php">Algarvia</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/lomba_da_fazenda.php">Lomba da Fazenda</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/nordeste.php">Nordeste</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/salga.php">Salga</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/santana.php">Santana</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/santo_antonio_nordestino.php">Santo António de Nordestinho</a>
        </dd>
        <dd>
            <a class="linkgeneral" href="freguesias/nordeste/sao_pedro.php">São Pedro</a>
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
                <label for="mesg"><a>Comentário : </a> <span id="message-info"></span></label>
                <textarea class="form-field" id="message" name="message" rows="4"></textarea>
            </div>
            <div class="row">
                <input type="hidden" name="add" value="post" />
                <button type="submit" name="submit" id="submit" class="btn-add-comment">Adicionar Comentário</button>
                <img src="comentarios_nordeste/LoaderIcon.gif" id="loader" />
            </div>
        </form>
        <?php
            include_once 'db.php';
            
            $sql_sel = "SELECT * FROM tbl_user_comments_nordeste ORDER BY id DESC";
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
                    id="delete-<?php echo $row['id']; ?>" onclick="deletecomment(<?php echo $row['id'];?>)"><?php echo $row['created_at_timestamp'] ?>Apagar</div>
            </div>
            <?php 
                }
                }
                ?>
        </div></div>
    </div>
    </div>
    </div>
    <script type="text/javascript"></script>
    <script>
        function deletecomment(id) {
        
        
        
           if(confirm("Tem a certeza que quer eliminar este comentário?")) {
        
                $.ajax({
                url: "comentarios_nordeste/comment-delete.php",
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
                     url: 'comentarios_nordeste/comment-add.php',
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