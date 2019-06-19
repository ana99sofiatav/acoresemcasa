<!DOCTYPE html>

<html>



<head>

    <title>Açores em Casa</title>

    <link rel="icon" href="js_css/images/iconesite.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="js_css/images/iconesite.ico" type="image/x-icon" />

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

    <link href="js_css/style.css" rel="stylesheet" type="text/css" />
    
    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="js_css/galeria.js"></script>
</head>



<body>

    <div class="divmenu">

        <ul class="menu">

            <li class="menuli">

                <a id="letramenu" href="index.php">Home</a>

            </li>

            <li class="dropdown">

                <a id="letramenu" href="freguesias.php" class="dropbtn">Concelhos</a>

                <div class="dropdown-content">

                    <a id="letramenudrop" href="freguesias.php">Todos os concelhos</a>

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

            <li class="menuli"><a id="letramenu" href='multi_login/login.php'>Login</a></li>

        </ul>

    </div>
    
          <button class="button" onclick="goBack()"><i class="material-icons">chevron_left</i></button><h1 id="ilhash1"️>Igreja De São Miguel</h1>

    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz_2.png">

    

    <div id="corpo">
    
    <!-- MODAL 1 -->
    <div id="ex1" class="modal">
      <div id="intro">
          <h1>Igreja do Santo Cristo</h1>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_cristo.png">
            A Igreja do Santo Cristo, ou de Nossa Senhora da Esperança , encontra-se integrada no conjunto conventual da Esperança, no coração da deslumbrante cidade de Ponta Delgada, na maravilhosa Ilha de São Miguel, no Arquipélago dos Açores. 
            <p></p>
            O Convento e a Igreja datam do século XVI, tendo sofrido alterações posteriores nos séculos XVII e XVIII, albergando a famosa Imagem do Senhor Santo Cristo dos Milagres, apresentando um fabuloso conjunto de adereços em ouro e pedras preciosas do século XVIII, e associada à maior festividade da cidade. 
            Diz-se que as primeiras freiras que habitaram o Convento trouxeram esta imagem, que terá sido ofertada pelo Papa Paulo III às freiras que foram a Roma solicitar a bula de instituição do Convento de Vale de Cabaços, cerca de 1530. 
            A Igreja apresenta um rico interior, profusamente decorado de talha dourada, pinturas de Manuel Pinheiro Moreira e azulejaria do século XVIII e outra mais recente. 
            <p></p>
            O Convento da Esperança é também conhecido por ter sido no muro exterior da sua cerca, num banco de jardim assinalado por uma âncora, que em 1891 se suicidou o poeta Antero de Quental. 
      </div>
      <a href="#" rel="modal:close">Fechar</a>
    </div>
    
    <!-- MODAL 2 -->
    <div id="ex2" class="modal">
      <div id="intro">
              <h1>Igreja Do Colégio Dos Jesuítas</h1>
        <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas.png">
            No século XVI a Companhia de Jesus expandiu-se aos Açores, fundando as suas Residências e os seus Colégios em várias Ilhas deste Arquipélago, nomeadamente em S. Miguel, na cidade de Ponta Delgada, a partir do ano de 1591. A primitiva Igreja do Colégio dos Jesuítas de Ponta Delgada, de invocação a Todos os Santos, por ter sido lançada a primeira pedra em 1 de Novembro de 1592, deu lugar a um monumento ímpar de criação barroca, com exuberantes elementos decorativos na sua fachada, de pedra vulcânica, na talha do retábulo do altar-mor e nos painéis de azulejos setecentistas.
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_2.png">
            <p></p>
            Pormenor Com a expulsão dos Jesuítas, por ordem do Marquês de Pombal, em 1760, esta igreja salão, de nave única, que possuía um vasto e valioso espólio artístico, ficou destituída de grande parte dos seus bens e alfaias religiosas, desaparecidos ou integrados noutros templos da Ilha, principalmente a partir de 1800, ano em que se interrompeu o culto.
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas_3.png">
            <p></p>
            Em 1834, a igreja foi adquirida ao Estado, por Nicolau Maria Raposo de Amaral, proprietário do Colégio dos Jesuítas, por herança paterna. Passados 139 anos, seus descendentes e herdeiros doaram a Igreja de Todos os Santos, com o respectivo espólio, à Câmara Municipal de Ponta Delgada, que deliberou ceder o espaço ao Governo Regional dos Açores, em 1977, para instalação do Núcleo de Arte Sacra do Museu Carlos Machado, tendo sido o projecto museológico aprovado em 2004.
      </div>
      <a id="button" href="#" rel="modal:close">Fechar</a>
    </div>
    
    <!-- MODAL 3 -->
    <div id="ex3" class="modal">
      <div id="intro">
              <h1>Igreja Matriz de São Sebastião</h1>
        <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png">
            A bela e imponente Igreja de São Sebastião, ou Igreja Matriz de Ponta Delgada, situa-se na bela capital da Ilha de São Miguel e do maravilhoso Arquipélago dos Açores. No local onde outrora existia uma pequena ermida em honra a São Sebastião, teve início a construção do actual templo, no ano de 1531, tendo sido finalizada no ano de 1547. A Igreja foi construída com o esforço da população, ao apelar ao Santo protector dos enfermos, um milagre de modo a pôr um fim na Peste que assolou a cidade entre 1523 e 1531.
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz_2.png">
            <p></p>
            A Igreja de São Sebastião apresenta uma bonita fachada em estilo Manuelino, onde estão presentes as armas reais e o escudo com as setas do martírio do Santo, tendo contudo sofrido algumas alterações no século XVIII com elementos Barrocos, como são exemplo os dois portais que ladeiam o central, quatro janelas e um óculo. O interior é rico em talha dourada e diversas e ricas madeiras locais, como o mobiliário em jacarandá do século XVII, e uma rica colecção de paramentos bordados a ouro.
      </div>
      <a id="button" href="#" rel="modal:close">Fechar</a>
    </div>

    
    <!-- MODAL 4 -->
    <div id="ex4" class="modal">
      <div id="intro">
              <h1>Igreja de São José</h1>
        <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/sao_jose_1.png">
            A Igreja terá sido edificada no lugar onde outrora existiu uma pequena Ermida, transformada com a chegada dos Frades Franciscanos à cidade, cerca de 1525, que decidem aqui construir o seu Convento. As obras da Igreja, contudo, iniciaram-se apenas em 1709, apresentando-se hoje orgulhosa no seu conjunto em estilo Maneirista e Barroco. 
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/sao_jose.png">
            <p></p>
            A Igreja de São Sebastião apresenta uma bonita fachada em estilo Manuelino, onde estão presentes as armas reais e o escudo com as setas do martírio do Santo, tendo contudo sofrido algumas alterações no século XVIII com elementos Barrocos, como são exemplo os dois portais que ladeiam o central, quatro janelas e um óculo. O interior é rico em talha dourada e diversas e ricas madeiras locais, como o mobiliário em jacarandá do século XVII, e uma rica colecção de paramentos bordados a ouro.
      </div>
      <a id="button" href="#" rel="modal:close">Fechar</a>
    </div>



    
    <!-- MODAL 5 -->
    <div id="ex5" class="modal">
      <div id="intro">
              <h1>Igreja de Santo André</h1>
        <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_andre.png">
            O edifício sede do Museu Carlos Machado está instalado no antigo Convento de Santo André, primeiro padroeiro da cidade de Ponta Delgada.
<p><br></p>
A história deste imóvel remonta ao século XVI, tendo sido fundado em 1567, por Diogo Vaz Carreiro e sua mulher Beatriz Rodrigues Camelo, e entregue definitivamente à ordem feminina de S. Francisco, em 1577. Foi o segundo convento de clarissas a ser erigido em Ponta Delgada, depois do de Nossa Senhora da Esperança.
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_andre_2.png">
            <p></p>
           Este edifício é um dos belos exemplares de arquitectura conventual de Ponta Delgada, tendo sofrido várias alterações ao longo dos séculos, até ser adaptado a Museu em 1930.
            <p></p>
    <img style="width:100%; height:300px;object-fit:cover" src="concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_andre_3.png">
           <p></p>
           Na visita a este imóvel pode valorizar-se o circuito conventual, de clausura, destacando-se a portaria antiga, os parlatórios, o coro alto, o coro baixo e a sua Igreja, cuja fachada apresenta a magnífica decoração em pedra vulcânica, ao gosto dos séculos XVIII e XIX, sobressaindo as janelas setecentistas. No seu interior, de nave única, as paredes laterais e o tecto abobadado apresentam pinturas a fresco, executadas em 1820, sendo da mesma época os altares e o púlpito de talha dourada.
           <p><br></p>
      </div>
      <a id="button" href="#" rel="modal:close">Fechar</a>
    </div>




<!-- Link to open the modal -->




            <h1>Igrejas de Ponta Delgada</h1>

        <div class="container">
        	<div class="cards">
        		<a href="#ex1" rel="modal:open" class="card">
        			<span class="card-header" style="background-image: url(concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_cristo.png);">
        				<span class="card-title">
        					<h3>Igreja do Santo Cristo</h3>
        				</span>
        			</span>
        			<span class="card-summary">
            			 A Igreja do Santo Cristo, ou de Nossa Senhora da Esperança , encontra-se integrada no conjunto conventual da Esperança, no coração da deslumbrante cidade de Pon... 
        			</span>
        			<span class="card-meta">
        				Local: Ponta Delgada
        			</span>
        		</a>
        		
        		<a href="#ex2" rel="modal:open" class="card">
        			<span class="card-header" style="background-image: url(concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/jesuitas.png);">
        				<span class="card-title">
        					<h3>Igreja Do Colégio Dos Jesuítas</h3>
        				</span>
        			</span>
        			<span class="card-summary">
            			A primitiva Igreja do Colégio dos Jesuítas de Ponta Delgada, de invocação a Todos os Santos, por ter sido lançada a primeira pedra em 1 de Novembro de 1592, deu lugar a um monumento ímpar...
        			</span>
        			<span class="card-meta">
        				Local: Ponta Delgada
        			</span>
        		</a>
        		
        		<a href="#ex3" rel="modal:open" class="card">
        			<span class="card-header" style="background-image: url(concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/igreja_matriz.png);">
        				<span class="card-title">
        					<h3>Igreja Matriz de São Sebastião</h3>
        				</span>
        			</span>
        			<span class="card-summary">
            			A bela e imponente Igreja de São Sebastião, ou Igreja Matriz de Ponta Delgada, situa-se na bela capital da Ilha de São Miguel e do maravilhoso Arquipélago dos Açores. 
        			</span>
        			<span class="card-meta">
        				Local: Ponta Delgada
        			</span>
        		</a>
        		
        		<a href="#ex4" rel="modal:open"  class="card" href="#">
        			<span class="card-header" style="background-image: url(concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/sao_jose_2.png);">
        				<span class="card-title">
        					<h3>Igreja de São José</h3>
        				</span>
        			</span>
        			<span class="card-summary">
            			Situada na maravilhosa cidade de Ponta Delgada, na Ilha de São Miguel, Arquipélago dos Açores, a Igreja de São José era a jóia do extinto Convento de São Francisco, datado dos séculos XVII e XVIII...
        			</span>
        			<span class="card-meta">
        				Local: Ponta Delgada
        			</span>
        		</a>
        		
        		<a href="#ex5" rel="modal:open"  class="card" href="#">
        			<span class="card-header" style="background-image: url(concelhos/freguesias/imgens/ponta_delgada/ponta_delgada/santo_andre.png);">
        				<span class="card-title">
        					<h3>Convento e Igreja de Santo André</h3>
        				</span>
        			</span>
        			<span class="card-summary">
            			O edifício sede do Museu Carlos Machado está instalado no antigo Convento de Santo André, primeiro padroeiro da cidade de Ponta Delgada...
        			</span>
        			<span class="card-meta">
        				Local: Ponta Delgada
        			</span>
        		</a>
        		
        	</div>
        </div>


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

