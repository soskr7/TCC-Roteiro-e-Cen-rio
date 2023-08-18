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
.footer {
        min-height: 100%;
        display: grid;
        grid-template-rows: 1fr auto; /* Make the last row auto to push the footer to the bottom */
    }

    h1 {
  padding: 10px 0;
  
  }
 
  hr {
  color: #a9a9a9;
  opacity: 0.3;
  }
  .main-block {
  max-width: 340px; 
  min-height: 370px; 
  padding: 10px 0;
  margin: auto;
  border-radius: 5px; 
  border: solid 1px #ccc;
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  background: #ebebeb; 
  }
  form {
  margin: 0 30px;
  }
  .account-type, .gender {
  margin: 15px 0;
  }
  input[type=radio] {
  display: none;
  }
  label#icon {
  margin: 0;
  border-radius: 5px 0 0 5px;
  }
  label.radio {
  position: relative;
  display: inline-block;
  padding-top: 4px;
  margin-right: 20px;
  text-indent: 30px;
  overflow: visible;
  cursor: pointer;
  }
  label.radio:before {
  content: "";
  position: absolute;
  top: 2px;
  left: 0;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #1c87c9;
  }
  label.radio:after {
  content: "";
  position: absolute;
  width: 9px;
  height: 4px;
  top: 8px;
  left: 4px;
  border: 3px solid #fff;
  border-top: none;
  border-right: none;
  transform: rotate(-45deg);
  opacity: 0;
  }
  input[type=radio]:checked + label:after {
  opacity: 1;
  }
  input[type=text], input[type=password] {
  width: calc(100% - 57px);
  height: 36px;
  margin: 13px 0 0 -5px;
  padding-left: 10px; 
  border-radius: 0 5px 5px 0;
  border: solid 1px #cbc9c9; 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  background: #fff; 
  }
  input[type=password] {
  margin-bottom: 15px;
  }
  #icon {
  display: inline-block;
  padding: 9.3px 15px;
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  background: #1c87c9;
  color: #fff;
  text-align: center;
  }
  .btn-block {
  margin-top: 10px;
  text-align: center;
  }
  button {
  width: 100%;
  padding: 10px 0;
  margin: 10px auto;
  border-radius: 5px; 
  border: none;
  background: #fb2c3e; 
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  }

  #espaco{
    padding-top:140px;
  }

  #espaco-cima{
    padding-top:200px;
  }



</style>
</head>

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
		  <li><a  href="feedback.php">
            <h5 class="characterNav font-bold gtm__nav" data-nav="goto_Preorder">Feedback</h5>
          </a></li>
		  <a  href="login.php" id="ativo"><li>
            <h5 class="characterNav font-bold gtm__nav" data-nav="goto_Preorder">Login</h5>
          </a></li>
        </div>
	  
        
		

</section>
  </div>
  </section>
  <section id="espaco-cima">
	
</section>
  <!-- how section -->
  <section class="SecaoLogin">
    
    
    <div class="main-block">
      <center><h2>Login</h1></center>
      <!--
   <form method="post" action="request.php">
        <hr>
        
        <hr>
        <label id="icon" for="usuario"><i class="fas fa-envelope"></i></label>
        <input type="text" name="usuario" id="usuario" placeholder="usuario" required/>
        <label id="icon" for="senha"><i class="fas fa-user"></i></label>
        
        <input type="password" name="senha" id="senha" placeholder="Senha" required/>
        <hr>
        <a href="cadastro.php" id="ntconta">Não tem uma conta? Clique aqui e cadastre-se!<a>
        <hr>
        <div class="btn-block">
          
          <input type="submit">Fazer Login</button>
        </div>
      </form>
  -->


  <div class="main-block">

  <form method="post" action="request.php">
        <hr>
        
        <hr>
        <center>
        <input type="text" name="usuario" id="usuario" placeholder="Digite o nome de usuário:" required/>
        
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" required/>
        <hr>
        </center>
        <p><a href="cadastro.php" id="ntconta"><font color="#1c87c9">Não tem uma conta? Clique aqui e cadastre-se!</font><a>
        <hr></p>

        <div class="btn-block">
          
          <button type="submit">Fazer Login</button>
        </div>
      </form>
      
<?php

if(isset($_GET['erro'])){?>

<div class="error-msg">
  <p id=sla>
  <font color="#1c87c9">Usuario e/ou senha invalidos!</font>
</p>
 </div>

<?php
}
?>
    </div>



 


  </section>
  <section id="espaco">
	
</section>
 <br><br>

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
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
</html>