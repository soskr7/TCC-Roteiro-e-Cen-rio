<!DOCTYPE html>
<html>

<?php
session_start();
?>
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
<script src="js/characters_object.js"></script>	

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
</head>
  <style>
      .container{
  padding: 1em 0;
  /*float: left;*/
 /* width: 50%;*/
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/*
@media screen and (max-width: 640px){
  .container{
    display: block;
    width: 100%;
  }
}

@media screen and (min-width: 900px){
  .container{
    width: 33.33333%;
  }
}
*/
.container .title{
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}

.content {
  position: relative;
  /*width: 90%;*/
  /*max-width: 400px; */
  max-width: 720px;
  margin: auto;
 overflow: hidden;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
/*  height: 99%;*/
 /* width: 100%;*/
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  /*width: 100%; */
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
 /* width: 100%;*/
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
 /* font-size: 0.8em;*/
 font-size: 1.2em;
}

.fadeIn-bottom{
  top: 80%;
}

.fadeIn-top{
  top: 20%;
}

.fadeIn-left{
  left: 20%;
}

.fadeIn-right{
  left: 80%;
}

  h3 {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bold;
      color: white;

  }
  h5 {
  color: white;
}

h2 {
  color:white;

}

  
</style>



<body>


<!--Botão hamburguer de Navegação-->
<section class="navArea">
  <button class="hamburger hamburger--stand" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
  <nav>
    <section class="navContainer"><a href="index.php" ><img class="logo" src="img/geral/logo.png" alt="Logo" /></a>
      <ul class="hamUL">
       <div class="container">
          <li><a   href="roteiro.php" >
            <h5 class="mediaNav font-bold gtm__nav" data-nav="goto_Media">Roteiro</h5>
          </a></li>
          <a  ><a id="ativo" href="cenario.php"><li>
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
	  


      </ul>     
	

			
		
    </section>

  </nav>
</section>
  

    <script type="text/javascript">

    </script>

  
         

          
             
        

  </div>

<!--
<section id="SobreCenario" class="SobreCenario">
  
    <br><br><br><br>
      <h3>
        <center>Os cenários que iremos replicar</center>
      </h3>
    </div>

</br>


    <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
   
						<a class="checkAgeGate" href="img/Cenario/0.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/1.jpg" alt="Praia" /></a>
            <h3 class="font-bold"></h3>
				
            </section>

            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
   
						<a class="" href="img/Cenario/1.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/1.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
            <h3 class="font-bold"></h3>
					
            </section>


            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
   
						<a class="" href="img/Cenario/2.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/2.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
            </section>


            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
    
						<a class="" href="img/Cenario/3.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/3.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
          
            </section>


            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
    
						<a class="" href="img/Cenario/4.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/4.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>

            <h3 class="font-bold">titulo</h3>
						<p>texto</p>
            </section>


            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
    
						<a class="" href="img/Cenario/5.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/5.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
            <h3 class="font-bold">Rydell High School</h3>
						<p>O cenário visto na prévia do musical. No Cenario original, o Cenario alterna entre dois cenários diferentes do colégio. 
              Para a nossa adaptação, seguimos o modelo similar a imagem da direita, com o elenco inteiro em cena</p>
            </section>


            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
    
						<a class="" href="img/Cenario/6.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/6.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
            <h3 class="font-bold">quarto da Frenchy</h3>
						<p> O segundo cenário do musical. Um quarto pequeno, porém é muito colorido e feminino. 
              A nossa adaptação será inspirada na imagem a direita.</p>
            </section>

            <div class="SobreCenarioSiema">
				<section class="smallSobreCenarioGroup" id="red1">
					<div>
    
						<a class="" href="img/Cenario/7.jpg" data-fancybox="SobreCenario"><img class="gtm__SobreCenarioImg" data-sobreCenario="SobreCenarioSS1" src="img/Cenario/7.jpg" alt="um quarto pequeno, rosa com as personagens femininas principais" /></a>
            <h3 class="font-bold">oficina</h3>
						<p> O terceiro cenário. Uma oficina que conta com um carro cinematográfico onde o elenco principal dos personagens 
              masculinos fará outra cena musical</p>
            </section>

</section>-->
<br><br><br><br>           
 

    <div class="container">
      <div class="content">
        <a href="img/Cenario/1.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/1.jpg" alt=" O cenário visto na prévia do musical. No Cenario original, o Cenario alterna entre dois cenários diferentes do colégio. Para a nossa adaptação, seguimos o modelo similar a imagem da direita, com o elenco inteiro em cena" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Rydell High School</h3>
            <p> O cenário visto na prévia do musical. No Cenario original, o Cenario alterna entre dois cenários diferentes do colégio. Para a nossa adaptação, seguimos o modelo similar a imagem da direita, com o elenco inteiro em cena</p>
          </div>
        </a>
      </div><br>

      <div class="content">
        <a href="img/Cenario/9.png" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/9.png" alt="O segundo cenário do musical. Um quarto pequeno, porém cheio, colorido e feminino. A nossa adaptação será inspirada na imagem a direita." style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Praia na Australia</h3>
            <p>A primeira cena do filme e do musical.  </p>
          </div></div><br>
        </a>


      <div class="content">
        <a href="img/Cenario/2.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/2.jpg" alt="O segundo cenário do musical. Um quarto pequeno, porém cheio, colorido e feminino. A nossa adaptação será inspirada na imagem a direita." style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Quarto da Festa do Pijama</h3>
            <p> O segundo cenário do musical. Um quarto pequeno, porém cheio, colorido e feminino. A nossa adaptação será inspirada na imagem a direita. </p>
          </div></div><br>
        </a>

        <div class="content">
        <a href="img/Cenario/3.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/3.jpg" alt="O terceiro cenário. Uma oficina que conta com um carro cinematográfico onde o elenco principal dos personagens masculinos fará outra cena musical" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Oficina</h3>
            <p> O terceiro cenário. Uma oficina que conta com um carro cinematográfico onde o elenco principal dos personagens masculinos fará outra cena musical</p>
          </div></div><br>
        </a>

        <div class="content">
        <a href="img/Cenario/4.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/4.jpg" alt="Uma lanchonete com temática de inverno. Local onde o elenco inteiro de personagens se reunirá novamente. Contará com diversas mesas, além de muitos itens de comida cenográficos" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Lanchonete/Sorveteria "Frosty Palace"</h3>
            <p>Uma lanchonete com temática de inverno. Local onde o elenco inteiro de personagens se reunirá novamente. Contará com diversas mesas, além de muitos itens de comida cenográficos</p>
          </div></div><br>
        </a>

        <div class="content">
        <a href="img/Cenario/5.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/5.jpg" alt="" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Raia de Corrida</h3>
            <p> Uma raia de corrida do colégio Rydell. Como a adaptação conta com um espaço limitado, o palco terá diversos obstáculos em linha reta, que o personagem principal, Danny, terá que ultrapassar, assim como no Cenario</p>
          </div></div><br>
        </a>

        <div class="content">
        <a href="img/Cenario/6.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/6.jpg" alt="" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Ginásio durante o Baile</h3>
            <p>Um ginásio decorado ao espírito de festa. Um local onde não só o elenco principal, mas também figurantes, como alunos de Rydell, deverão dançar e propositalmente bagunçar</p>
          </div></div><br>

        <div class="content">
        <a href="img/Cenario/7.jpg" target="_blank">
          <div class="content-overlay"></div>
          <img class="content-image" src="img/Cenario/7.jpg" alt="" style="border: 4px solid #555; height: 420px; width: auto;">
          <div class="content-details fadeIn-top">
            <h3>Feira de Fim de Ano</h3>
            <p> O último cenário é a quadra que contém a raia de corrida, porém decorada de forma festiva para a festa de despedida dos alunos de Rydell no fim do ano</p>
          </div></div><br>
        </a>

      </div>

    </div>

  </section

  </div>
  <!--
  <div class="column">
  <h3>Adaptação: </h3>
  <img src=/Cenario/Cen1.jpg" alt="Primeiro Cenário. Refeitório" style="width:100%;  border: 2px solid #555;">
    
  </div>
</div> 


<div class="rowft">
  <div class="column">
  <img src=/Cenario/Cen1.jpg" alt="Primeiro Cenário. Refeitório" style="width:100%;">
    <h3>Referência: </h3>
  </div>
  <div class="column">
    <img src="/slide4.jpg" alt="Forest" style="width:100%;">
    <h3>Adaptação: </h3>
  </div>
</div>



<div class="rowft">
  <div class="column">
    <img src="/slide4.jpg" alt="Snow" style="width:100%;">
    <h3>Referência: </h3>
  </div>
  <div class="column">
    <img src="/slide4.jpg" alt="Forest" style="width:100%;">
    <h3>Adaptação: </h3>
  </div>
</div>
    -->
  </section>
  <!-- end how section -->
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
			  <img src="images/location.png" width="18px" alt="" />
			</div>
			<p>
			  <a href="https://www.google.com/maps/uv?pb=!1s0x94cee6d2c047d017%3A0x32f661385dff2f49!3m1!7e115!4s%2Fmaps%2Fplace%2Fetec%2Bde%2Bfrancisco%2Bmorato%2F%40-23.2891911%2C-46.7464608%2C3a%2C75y%2C212.98h%2C90t%2Fdata%3D*213m4*211e1*213m2*211smR8dR6eHvvOqtQeg3W8nfA*212e0*214m2*213m1*211s0x94cee6d2c047d017%3A0x32f661385dff2f49%3Fsa%3DX!5setec%20de%20francisco%20morato%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e2!2smR8dR6eHvvOqtQeg3W8nfA&hl=pt-BR&sa=X&ved=2ahUKEwjuvL-grdL_AhWtpZUCHaInACkQpx96BAhaEA0" target="_blank" id="mapescola"><img src="images/geral/location.png" width="18px" alt="">
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





</body>
</html>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
	window.VLibras.WidgetPosition = 'left';
  </script>
