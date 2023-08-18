<!DOCTYPE html>
<html>
<head>
	


<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<title>Roteiro e Cenário | Grease</title>
<link rel="icon" href="img/common/fav-icon.png">
	
<!-- CSS -->
<link rel="stylesheet" href="https://use.typekit.net/cbm3qay.css">
<link href="css/hamburgers.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">	
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">



	
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>	

<script src="js/siema.min.js"></script>	


<script src="js/geral.js"></script>	
	

<script type="text/javascript" src="js/app.js"></script>
<script src="js/ajax_calls.js" type="text/javascript"></script>





	
</script>

<script>

	</script>
	<style>
		#espaco{
    padding-top:140px;
  }

  #espaco-cima{
    padding-top:200px;
  }

	</style>
</head>
<?php
session_start();
?>
<body id="home">
	
<section class="loader">
	<div class="loadingImageGroup">
		<img class="part1" src="img/loader/bus.png" alt="" />
		<img class="part2" src="img/loader/wheel.png" alt=""/>
		<img class="part3" src="img/loader/wheel.png" alt=""/>
	</div>
</section>	
	
<div id="universalToolbar" data-ratede="false"></div>
	
	
<!--Botão hamburguer de Navegação-->
<section class="navArea">
  <button class="hamburger hamburger--stand" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
  <nav>
    <section class="navContainer"><a href="index.php" ><img class="logo" src="img/geral/logo.png" alt="Logo" /></a>
      <ul class="hamUL">
       <div class="container">
          <li><a  href="roteiro.php" >
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
<!--	HERO Start-->
<section id="hero">
	<video class="heroVideo" autoplay loop muted playsinline>
		<source src="img/video/bgVideo.mp4" onerror="fallback(parentNode)">
		<img class="heroImg" src="img/hero/bg_video_desktop.png" alt="" />
	</video>
	
	<div class="heroGroup">
		<img class="heroLogo" src="img/geral/logo.png" alt="logo do grupo. A silhueta de um carro vermelha com o nome" />
		<!--<h4 class="availableDate">available <br class="hideBreak"/>february 23, 2021</h4> -->

		<h4 class="availableDate">Veja os detalhes da nossa parte da produção do musical do fim do ano</h4>
		
</section>

<!--	MEDIA Start-->
<section id="media" class="media">
	<div class="innerContainer mediaGroup">
		<h2 class="mediaTitle">Nosso Projeto</h2>
		<br>
		
		<p class="mediaMainText">O nosso objetivo é de mostrar para os usuários todo processo de formação de cenário e roteiro que estamos fazendo ao decorrer do ano para o músical, abrangendo todos detalhes, evoluções e adaptações</p>
		<br>
		<div class="trailerContainer">
			
			<div class="trailerSiema" id="Siema">
				<section class="trailerCarousel">	
					<a class="launchTrailer checkAgeGate setAutoplay" href="https://youtu.be/dtpTsVKusUc?autoplay=0" data-fancybox>
						<img class="playButton checkAgeGate gtm__mediaCarousel" data-mediacarousel="launchTrailer" src="img/media/playbutton.png" alt="aperte para dar play" />
						<video 
							data-mediacarousel="launchTrailer"   
							class="carouselVideo playTrailer gtm__mediaCarousel" 
							autoplay loop muted playsinline
							poster="img/media/announce_trailer.jpg"
							src="img/video/previaVideo.mp4"
							id="ss2"   
						></video>
				
					</a>
				</section>
				<section class="trailerCarousel">	
					<a class="actionTrailer checkAgeGate setAutoplay" href="https://www.youtube.com/watch?v=FG93ty5MBZQ?autoplay=0" data-fancybox>
						<img class="playButton checkAgeGate gtm__mediaCarousel" data-mediacarousel="actionTrailer" src="img/media/playbutton.png" alt="aperte para dar play" />
						<video 
							data-mediacarousel="actionTrailer"   
							class="carouselVideo playTrailer gtm__mediaCarousel" 
							autoplay loop muted playsinline
							poster="img/media/action_trailer.jpg"
							src="img/video/filmeTrailer.mp4"
							id="ss2"   
						></video>

					</a>
				</section>				
			</div>
			
		</div>		
	</div>
</section>
<section id="SobreFilme" class="SobreFilme">
	<div class="innerContainer SobreFilmeGroup">
		<section class="mainSobreFilmeGroup">
			<h2 class="SobreFilmeTitle">O Filme</h2>
			<a class="checkAgeGate" href="img/index/capturafilme.jpg" data-fancybox><img class="showSmallSobreFilme gtm_SobreFilmeImg" data-SobreFilme="mainImage" src="img/index/capturafilme.jpg" alt="uma imagem do filme. Os protagonistas lado a lado" /></a>
			<div class="mainSobreFilmeText">

				<p class="mainSobreFilmeDesc">Na Califórnia de 1959, a boa moça Sandy e o bad-boy Danny se apaixonam e aproveitam um verão inesquecível na praia. Quando voltam às aulas, eles descobrem que frequentam a mesma escola. Danny lidera a gangue dos T-Birds, um grupo que gosta de jaquetas de couro e muito gel no cabelo, e Sandy passa tempo com as Pink Ladies, lideradas pela firme e sarcástica Rizzo. Quando os dois se reúnem, Sandy percebe que Danny não é o mesmo por quem se apaixonou, e ambos precisam mudar caso queiram ficar juntos.
</p>
			</div>
			<a class="checkAgeGate" href="img/index/capturafilme.jpg" data-fancybox><img class="showLargeSobreFilme gtm__SobreFilmeImg" data-SobreFilme="mainImage" src="img/index/capturafilme.jpg" alt="uma imagem do filme. Os protagonistas lado a lado" /></a>
		</section>
		<div class="smallSobreFilmeContainer">
			
			<div class="SobreFilmeSiema">
				<section class="smallSobreFilmeGroup" id="red1">
					<div>
						<h3 class="font-bold">quando foi lançado?</h3>
						<p>O musical teve seu lançamento em 13 de Junho de 1978. em Nova Iorque, Estados Unidos.</p>
						<a class="checkAgeGate" href="img/index/captura2.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-sobrefilme="SobreFilmeSS1" src="img/index/captura2.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
					</div>	
				</section>
				<section class="smallSobreFilmeGroup" id="red2">
					<div>
						<h3 class="font-bold">Premiações</h3>
						<p>Apesar de ser considerado um marco dos musicais Hollywoodianos, Grease só recebeu uma indicação ao Oscar, na categoria Melhor Canção Original pela música "Hopelessly Devoted to You". O longa, contudo, não ganhou o prêmio.</p>
						<a class="checkAgeGate" href="img/index/captura3.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-Cenário="SobreFilmeSS2" src="img/index/captura3.jpg" alt="uma lanchonete onde todos os personagens estão reunidos" /></a>
					</div>	
				</section>
				<section class="smallSobreFilmeGroup" id="red3">
					<div>
						<h3 class="font-bold">Bilheteria:</h3>
						<p>Pelo enorme sucesso nos cinemas, Grease alcançou a marca de maior bilheteria de filme musical do século XX. Foram US$ 396 milhões arrecadados contra apenas US$ 6 milhões de orçamento.</p>
						<a class="checkAgeGate" href="img/index/captura4.jpg" data-fancybox="SobreFilme"><img class="gtm__SobreFilmeImg" data-sobrefilme="SobreFilmeSS3" src="img/index/captura4.jpg" alt="os personagens masculinos do filme em uma oficina, num carro vermelho" /></a>
					</div>	
				</section>					
				
	</div>
</section>


<!--	Seção InfoNós-->


<footer>
<!--	Rodapé -->
	<div class="whiteBoxBGNonContainer"></div>
	<div class="topBarFooter">
		<div class="whiteBoxBG">
			<p class="font-bold connect">Nossas redes sociais</p>
		</div>
		<div class="socialGroup innerContainer">		
			<ul class="socialIcons">
				<li><a href="https://www.youtube.com/@Grease3informatica" target="_blank"><img class="gtm__social" data-social="youtube" src="img/footer/youtube_icon.png" alt="logo do youtube"/></a></li>
				<li><a href="https://www.instagram.com/3_info_t/" target="_blank"><img class="gtm__social" data-social="instagram" src="img/footer/instagram_icon.png" alt=" logo do instagram"/></a></li>		
			</ul>		
		</div>	
		<div>
			
			<p>
			  <a href="https://www.google.com/maps/uv?pb=!1s0x94cee6d2c047d017%3A0x32f661385dff2f49!3m1!7e115!4s%2Fmaps%2Fplace%2Fetec%2Bde%2Bfrancisco%2Bmorato%2F%40-23.2891911%2C-46.7464608%2C3a%2C75y%2C212.98h%2C90t%2Fdata%3D*213m4*211e1*213m2*211smR8dR6eHvvOqtQeg3W8nfA*212e0*214m2*213m1*211s0x94cee6d2c047d017%3A0x32f661385dff2f49%3Fsa%3DX!5setec%20de%20francisco%20morato%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e2!2smR8dR6eHvvOqtQeg3W8nfA&hl=pt-BR&sa=X&ved=2ahUKEwjuvL-grdL_AhWtpZUCHaInACkQpx96BAhaEA0" target="_blank" id="mapescola"><img src="img/geral/location.png" width="18px" >
			  R. Tupinambás, 572 - Jardim Nova Belem, Francisco Morato</a>
			</p>
		  </div>
	</div>	
	<div class="logosGroup">
	<a href="https://www.etecfranciscomorato.com.br/" target="_blank"><img class="Logo" src="img/geral/fatec_logo.png" alt="Logo da ETEC" width="20%"height="auto"/> </a>
		
	</div>
	<p class="direitos">© 2023 - 3º Info - Todos os direitos reservados</p>
	
</footer>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-bottom-wrapper"></div>
    </div>
  </div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
	window.VLibras.WidgetPosition = 'left';
  </script>


<script>

function toggleDropdown() {
            var dropdown = document.getElementById("dropdownContent");
            dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
        }

 function changeTextSize(option) {
            // Get all elements with the 'body' tag
            var elements = document.getElementsByTagName('body');
            var currentSize;
            
            // Get the current font size of the body
            if (elements.length > 0) {
                currentSize = parseInt(window.getComputedStyle(elements[0]).fontSize);
            } else {
                return;
            }
            
            // Increase or decrease the font size based on the option
            if (option === 'increase') {
                currentSize += 2;
            } else if (option === 'decrease') {
                currentSize -= 2;
            }
            
            // Set the new font size to all elements with the 'body' tag
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.fontSize = currentSize + 'px';
            }
        }


		
		
</script>

</body>
</html>