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

<style>

  #form-feed {
     padding-left:auto;
  }

  #espaco{
    padding-top:500px;
  }

  #espaco-cima{
    padding-top:200px;
  }

  </style>

</head>

<?php 
session_start();
if(!empty($_SESSION['login'])) {
    ?>

<body>






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
		  <li><a  href="feedback.php" id="ativo">
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
 
  <!-- how section -->
  
  <section id="espaco-cima">
	
	</section>









	<section id="espaco">
	
	</section>

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
	<p class="copy">© 2023 - 3º Info - Todos os direitos reservados</p>
	
</footer>

</body>

<?php
}else{
    header('location:login.php');
}
?>

