<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <!-- Mobile Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Roteiro e Cenário | Grease</title>
<link rel="icon" href="img/common/fav-icon.png">
	
<!-- CSS -->
<link rel="stylesheet" href="https://use.typekit.net/cbm3qay.css">
<link href="css/hamburgers.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">	
<link href="css/style.css" rel="stylesheet" type="text/css">



	
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>	
<script src="js/js.cookie.js" type="text/javascript"></script>	
<script src="js/siema.min.js"></script>		
<script src="js/purchaselinks_object.js"></script>	
<script src="js/personagens_object.js"></script>	

<script type="text/javascript" src="js/app.js"></script>
<script src="js/ajax_calls.js" type="text/javascript"></script>
<script type="text/javascript"> 
	(function(e, s, t) { 
		t = t || {}, t.id = e, 
		versaTagObj = { 
			$: [],
			onready: function(e) { 
				this.$.push(e) 
			} 
		}; 
		var n = s.getElementsByTagName("script")[0], 
			r = s.createElement("script"); 
		r.options = t,
		r.async = !0, 
		r.src = "https://secure-ds.serving-sys.com/SemiCachedScripts/ebOneTag.js?id=" + e, 

//		r.src = "https://protect-us.mimecast.com/s/GjdtCR6Dk3Sg7jYiORbvT?domain=secure-ds.serving-sys.com" + e, 
		r.options = t,
		r.id = "liquid",	
		n.parentNode.insertBefore(r, n) 
	})("1073745572", document, { dataLayer:"SizmekDataLayer" });
	//This is for dynamically created buttons. Need to make sure you are targeting the correct button, in this case the <a> tag. Also need to make sure that the script has the correct ID number as it changes per project.
	jQuery(document).on('click', '.purchaseButton', function() {
		if($('html').find('script[src="https://secure-ds.serving-sys.com/SemiCachedScripts/ebOneTag.js"]').length >= 1){
			var hrefURL = jQuery(this).attr('href');
			var details = jQuery(this).attr('data-purchase');
			versaTagObj.generateRequest(hrefURL+' - '+details);		
		}
	});
</script>

<style>
h5 {
  color: white;
}

img.Grupo {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  height:10%;
  

}

.Titulos {
  font-weight: bold;
 

}

.btn-box {
  background-color: #ffcd0d;
    border: 2px solid #000;
    color: #000;
    cursor: pointer;
    
    padding: 4px 10px;
    text-transform: uppercase;
    white-space: nowrap;
    color:black;
   
  
  text-align:center;

}

#espaco{
		padding-top:140px;
	  }
	
	  #espaco-cima{
		padding-top:200px;
	  }


  </style>
<?php
session_start();
?>
<body>

<!--Botão hamburguer de Navegação-->
<section class="navArea">
  <button class="hamburger hamburger--stand" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
  <nav>
    <section class="navContainer"><a href="index.php" ><img class="logo" src="img/geral/logo.png" alt="Logo" /></a>
      <ul class="hamUL">
       <div class="container">
          <li><a id="ativo"  href="roteiro.php" >
            <h5 class="mediaNav font-bold gtm__nav" data-nav="goto_Media">Roteiro</h5>
          </a></li>
          <a   href="cenario.php"><li>
            <h5 class="featureNav font-bold gtm__nav" data-nav="goto_Features">Cenário</h5>
          </a></li>
          <li><a  href="quiz.php">
            <h5 class="characterNav font-bold gtm__nav" data-nav="goto_Characters">Quiz</h5>
          </a></li>
		  <li><a  href="feedback.php">
            <h5 class="characterNav font-bold gtm__nav" data-nav="goto_Preorder">Feedback</h5>
          </a></li>
		  

		  <?php
            if(isset($_SESSION['login'])){?>
		  <li>
            <h5 class="characterNav font-bold gtm__nav" data-nav="goto_Preorder"><a  href="logout.php">SAIR</a></h5>
          </li>
     <?php } else {?>

<a  href="login.php"><li>
<h5 class="characterNav font-bold gtm__nav" data-nav="goto_Preorder">Login</h5>
</a></li>

	<?php } ?>

		 </ul>
        </div>
</section>
  

    <script type="text/javascript">

    </script>

  
         

          
             
        

  </div>
  <br>  <br>
  <br>
  <br>

  <!--	Elenco -->
<section id="personagens" class="personagens">
	<div class="innerContainer personagensGroup">
		<section class="mainpersonagensGroup">
			<h2 class="">Conheça nosso elenco</h2>
			<ul class="personagensSelector">
     <li><img class="personagensThumb personagemAtivo gtm__personagens"  id="danny" onclick="selecaoDanny()" src="img/roteiro/1.png" alt="Danny" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/2.png" id="doodie" alt="doodie" /></li>
				<li><img class="personagensThumb gtm__personagens" src="img/roteiro/3.png" id="kenickie" alt="kenickie" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/4.png" id="putzie" alt="putzie" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/5.png" id="sonny" alt="sonny" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/6.png" id="sandy" alt="sandy" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/7.png" id="rizzo" alt="rizzo" /></li>
				<li><img class="personagensThumb gtm__personagens" src="img/roteiro/8.png" id="frenchy" alt="frenchy" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/9.png" id="marty" alt="marty" /></li>
				<li><img class="personagensThumb gtm__personagens"  src="img/roteiro/10.png" id="jan" alt="jan" /></li>
			</ul>
			<br>
			<div class="personagensText">
				<h3 class="personagensName" id="nomes">Guilherme Dias - Danny</h3>
				<br>
				<p class="personagensDesc"  id="descricao">Danny é o líder dos T-Birds. É confiante, charmoso e popular, mas tem dificuldades em se expressar emocionalmente. Ele se apaixona por Sandy durante o verão, mas luta para  manter a relação quando ela começa a frequentar sua escola.                                                                                                    ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<br><br>
        ⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⠀⠀⠀
        </p>
			</div>
		</section>	
		<section class="personagensImageGroup">
			<a class="personagensFancyBoxImage" href="img/roteiro/.png" data-fancybox>
				<img id="imagem" src="img/roteiro/danny.jpg" alt="Imagem do Personagem" />
			</a>
			<img src="img/roteiro/blank.png" alt="" />
		</section>
	</div>
</section>

<br><BR>

<!-- REUTILIZANDO SECTION "SOBREFILME" DA INDEX PARA SECTION ROTEIRO PELA DE FORMATAÇÃO JÁ FEITA-->

<section id="SobreFilme" class="SobreFilme">
	<div class="innerContainer SobreFilmeGroup">
		<section class="mainSobreFilmeGroup">
			<h2 class="SobreFilmeTitle">Criação do Roteiro</h2>
			<a class="checkAgeGate" href="img/index/bg.png" data-fancybox><img class="showSmallSobreFilme gtm_SobreFilmeImg" data-SobreFilme="mainImage" src="img/roteiro/bg.png" alt="uma imagem do filme.Sandy e Danny numa praia. O Roteiro está sobreposto ao lado descrevendo a cena" /></a>
			<div class="mainSobreFilmeText">

				<p class="mainSobreFilmeDesc">Texto Placeholder</p>
			</div>
			<a class="checkAgeGate" href="img/roteiro/bg.png" data-fancybox><img class="showLargeSobreFilme gtm__SobreFilmeImg" data-SobreFilme="mainImage" src="img/roteiro/bg.png" alt="uma imagem do filme. Os protagonistas lado a lado" /></a>
		</section>
		<div class="smallSobreFilmeContainer">
			
			<div class="SobreFilmeSiema">
				<section class="smallSobreFilmeGroup" id="red1">
					<div>
						<h3 class="font-bold">titulo</h3>
						<p>texto</p>
						<a class="checkAgeGate" href="img/index/captura2.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-sobrefilme="SobreFilmeSS1" src="img/index/captura2.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
					</div>	
				</section>

				<section class="smallSobreFilmeGroup" id="red2">
					<div>
						<h3 class="font-bold">titulo2</h3>
						<p>texto p2</p>
						<a class="checkAgeGate" href="img/index/captura3.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-Cenário="SobreFilmeSS2" src="img/index/captura3.jpg" alt="uma lanchonete onde todos os personagens estão reunidos" /></a>
					</div>	
				</section>

				<section class="smallSobreFilmeGroup" id="red3">
					<div>
						<h3 class="font-bold">TITULO 3</h3>
						<p>texto p3</p>
						<a class="checkAgeGate" href="img/index/captura4.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-sobrefilme="SobreFilmeSS3" src="img/index/captura4.jpg" alt="os personagens masculinos do filme em uma oficina, num carro vermelho" /></a>
					</div>	
				</section>					
				
	</div>
</section>


<!--fim da section roteiro -->

<button class="droteiros"><a href="downloads/roteiro.pdf">Fazer download do roteiro</button></a>

<button class="droteiros"><a href="downloads/roteirospf.pdf">Fazer download do roteiro (Versão SPF)</button></a>

  <section id="espaco">
	
</section>
<br/>
<br/>
<br/>

  <!-- Prévia do roteiro (inicio)-->


  <!-- Fim Prévia do roteiro-->
 
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>


  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!-- end info_section -->

  <!--	Rodapé -->
  <footer>
	<div class="whiteBoxBGNonContainer"></div>
	<div class="topBarFooter">
		<div class="whiteBoxBG">
			<p class="font-bold connect">Nossas redes sociais</p>
		</div>
		<div class="socialGroup innerContainer">		
			<ul class="socialIcons">
				<li><a href="https://www.youtube.com/@Grease3informatica" target="_blank"><img class="gtm__social" data-social="youtube" src="img/footer/youtube_icon.png" alt="youtube"/></a></li>
				<li><a href="https://www.instagram.com/3_info_t/" target="_blank"><img class="gtm__social" data-social="instagram" src="img/footer/instagram_icon.png" alt="instagram"/></a></li>		
			</ul>		
		</div>	
		<div>
			<div class="img-box">
			  <img src="img/location.png" width="18px" alt="" />
			</div>
			<p>
			  <a href="https://www.google.com/maps/uv?pb=!1s0x94cee6d2c047d017%3A0x32f661385dff2f49!3m1!7e115!4s%2Fmaps%2Fplace%2Fetec%2Bde%2Bfrancisco%2Bmorato%2F%40-23.2891911%2C-46.7464608%2C3a%2C75y%2C212.98h%2C90t%2Fdata%3D*213m4*211e1*213m2*211smR8dR6eHvvOqtQeg3W8nfA*212e0*214m2*213m1*211s0x94cee6d2c047d017%3A0x32f661385dff2f49%3Fsa%3DX!5setec%20de%20francisco%20morato%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e2!2smR8dR6eHvvOqtQeg3W8nfA&hl=pt-BR&sa=X&ved=2ahUKEwjuvL-grdL_AhWtpZUCHaInACkQpx96BAhaEA0" target="_blank" id="mapescola"><img src="img/geral/location.png" width="18px" alt="">
			  R. Tupinambás, 572 - Jardim Nova Belem, Francisco Morato</a>
			</p>
		  </div>
	</div>	
	<div class="logosGroup">
	<a href="https://www.etecfranciscomorato.com.br/" target="_blank"><img class="Logo" src="img/geral/fatec_logo.png" alt="Logo da ETEC" width="20%"height="auto"/> </a>
		
	</div>
	<p class="direitos">© 2023 - 3º Info - Todos os direitos reservados</p>
	
</footer>


<!--Script do V-Libras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
<!--Script do V-Libras -->

  <script>

    //Ao clicar na foto do primeiro personagem (Danny), substituir elementos com estas informações
document.getElementById("danny").onclick = function() {selecaoDanny()};

function selecaoDanny() {
  document.getElementById("nomes").innerHTML = "Guilherme Dias - Danny";
  document.getElementById("descricao").innerHTML = "Danny é o líder dos T-Birds. É confiante, charmoso e popular, mas tem dificuldades em se expressar emocionalmente. Ele se apaixona por Sandy durante o verão, mas luta para  manter a relação quando ela começa a frequentar sua escola.                                                                                                    ";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do segundo personagem (Doodie), substituir elementos com estas informações

document.getElementById("doodie").onclick = function() {selecaoDoodie()};

function selecaoDoodie() {
  document.getElementById("nomes").innerHTML = "Matheus Martins - Doodie";
  document.getElementById("descricao").innerHTML = "Doody é um dos T-Birds. Ele é o mais novo do grupo e muitas vezes é tratado como o caçula. Ele se interessa por música e fica animado quando os T-Birds formam uma banda.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ";

  var imgs = document.getElementByClass("personagensThumb");
  imgs.classList.remove("personagemAtivo");


  var atual = document.getElementById("doodie");
  atual.classList.add("personagemAtivo");

  document.getElementById("imagem").innerHTML
}

//CARACTERES VAZIOS PARA EVITAR MUDANÇAS NO TAMANHO DA IMAGEM DE FUNDO

//Ao clicar na foto do terceiro personagem (Kenickie), substituir elementos com estas informações
document.getElementById("kenickie").onclick = function() {selecaoKenickie()};

function selecaoKenickie() {
  document.getElementById("nomes").innerHTML = "Pedro Gonçalves - Kenickie";
  document.getElementById("descricao").innerHTML = " Kenickie é um dos T-Birds e o melhor amigo de Danny. Ele é durão e às vezes impulsivo, mas se preocupa com  seus amigos. Ele tem um relacionamento com Rizzo.  ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  ";

  document.getElementById("imagem").innerHTML
}

//Ao clicar na foto do quarto personagem (Putzie), substituir elementos com estas informações
document.getElementById("putzie").onclick = function() {selecaoPutzie()};

function selecaoPutzie() {
  document.getElementById("nomes").innerHTML = "Guilherme Palhares - Putzie";
  document.getElementById("descricao").innerHTML = "Putsie é um dos T-Birds. Ele é baixinho e muitas vezes é o alvo de piadas dos outros. É o namorado de  Jan. ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do quinto personagem (Sonny), substituir elementos com estas informações
document.getElementById("sonny").onclick = function() {selecaoSonny()};

function selecaoSonny() {
  document.getElementById("nomes").innerHTML = "Vinicius Passos (Sonny)";
  document.getElementById("descricao").innerHTML =  "Sonny é um dos T-Birds. Ele é engraçado e às vezes desajeitado, mas tenta ser durão como os outros. Ele tem um interesse em Frenchy.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  ";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do sexto personagem (Sandy), substituir elementos com estas informações
document.getElementById("sandy").onclick = function() {selecaoSandy()};

function selecaoSandy() {
  document.getElementById("nomes").innerHTML = "Andressa Silva (Sandy)";
  document.getElementById("descricao").innerHTML =  "Sandy é doce, inocente e romântica. Ela se apaixona por Danny durante o verão, mas fica magoada quando ele não é tão afetuoso quando volta a escola. Ela passa a se reinventar para tentar conquistá-lo.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  ";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do sétimo personagem (Rizzo), substituir elementos com estas informações
document.getElementById("rizzo").onclick = function() {selecaoRizzo()};

function selecaoRizzo() {
  document.getElementById("nomes").innerHTML = "Milena Freitas (Betty Rizzo)";
  document.getElementById("descricao").innerHTML =  "Rizzo é a líder das Pink Ladies. Ela é forte,confiante e muitas vezes age como se não se importasse  com as opiniões dos outros. Ela tem um relacionamento complicado com Kenickie e fica grávida dele.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  ";

  document.getElementById("imagem").innerHTML
}



//Ao clicar na foto do oitavo personagem (Frenchy), substituir elementos com estas informações
document.getElementById("frenchy").onclick = function() {selecaoFrenchy()};

function selecaoFrenchy() {
  document.getElementById("nomes").innerHTML = "Nayla Assis (Frenchy)";
  document.getElementById("descricao").innerHTML =  "Frenchy é amigável e sonhadora, mas muitas vezes tem dificuldades em encontrar seu lugar na vida. Ela abandona a escola para se tornar uma cabeleireira, mas se arrepende e volta para terminar seus estudos.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  ";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do nono personagem (Marty), substituir elementos com estas informações
document.getElementById("marty").onclick = function() {selecaoMarty()};

function selecaoMarty() {
  document.getElementById("nomes").innerHTML = "Francielly Paulino (Marty)";
  document.getElementById("descricao").innerHTML =  "Marty é uma das Pink Ladies. Ela é elegante e sofisticada, mas também pode ser superficial e fofoqueira. Ela namora um homem mais velho, mas fica magoada quando ele não se compromete com ela.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀";

  document.getElementById("imagem").innerHTML
}


//Ao clicar na foto do décimo personagem (Jan), substituir elementos com estas informações
document.getElementById("jan").onclick = function() {selecaoJan()};


function selecaoJan() {
  document.getElementById("nomes").innerHTML = "Maria Vitória (Jan)";
  document.getElementById("descricao").innerHTML =  "Jan é uma das Pink Ladies. Ela é engraçada, espirituosa e adora comer. Ela namora Putzie.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀";

  document.getElementById("imagem").innerHTML
}





    </script>

</body>
</html>