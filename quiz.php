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

  <script type="text/javascript" src="js/quiz.js"></script>

  <style>
.ContainerQuiz {
  margin-left: 0px;
  padding-left:0px;
  padding-top: 1.5em;
  font-family: 'Open Sans', sans-serif;
}
.quiz {
  margin-top: 1em;
  min-height: 60vh;
 background: #fff;
  box-shadow: -2px 0px 21px -2px rgba(0, 0, 0, 0.4);
}
.text-center {
  text-align: center;
}
.quiz .question img {
  display: block;
  margin: 0 auto;
}
.quiz button {
  margin-top: 2em;
  user-select: none;
  outline: 0!important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}
.quiz .btn {
  font-size: 1.6rem;
  height: 3.2em;
  transition: all 0.25s ease;
}
.quiz .btn-primary,
.quiz .btn-success {
  opacity: 0.9;
  background: #4c9cff;
  border-radius: 0;
  border: 0;
  padding: 0.5em 1em;
  text-align: center;
  color: #fff;
}
.quiz .btn-primary:hover {
  opacity: 1;
  background: #4c9cff;
  color: #fff;
}
.quiz .btn-success {
  background: #51a351;
}
.quiz .btn-success:hover,
.quiz .btn-success:active {
  background: #4a9e4a;
}
.quiz .btn-primary:disabled,
.quiz .btn-primary:disabled:hover {
  background: #ccc;
}
.quiz .conteudo {
  color: #222;
  padding: 0.25em 3em 2em 3em;
  margin-bottom: 1em;
}
.quiz .intro {
  margin-top: 2em;
}
.quiz .intro p {
  font-size: 2rem;
}
.quiz aside {
  color: #777;
  font-size: 1.5rem;
  padding-top: 0.25em;
}
.quiz .question {
  margin-top: 2em;
  position: relative;
}
.quiz .question img {
  box-shadow: -2px 0px 21px -2px rgba(0, 0, 0, 0.4);
}
.quiz .question p,
.quiz .intro p {
  font-size: 1.8rem;
  line-height: 1.5;
  margin: 1em 0;
}
.quiz .intro p:last-of-type {
  padding-bottom: 0;
}
.quiz .question-content {
  min-height: 50px;
}
.quiz .question-options {
  margin-left: 1.5rem;
}
.quiz .feedback {
  padding-bottom: 0.75em;
  margin: -0.5em 1em 0 2em;
  animation: 0.75s roll-in ease;
}
.quiz .progress {
  position: relative;
  margin-bottom: 0;
  background: #b5b5b5;
  border-radius: 0;
  width: 100%;
}
.quiz .progress-bar {
  background: #4c9cff;
  height: 100%;
  transition: width 0.4s ease;
}
.quiz .progress .counter {
  position: absolute;
  right: 5px;
  top: 0;
  font-weight: normal;
  color: #fff;
}
.quiz .get-my-results {
  font-size: 2.4rem;
  margin-bottom: 1em;
}
.quiz button .fa {
  margin-right: 0.5em;
}
.quiz .start-over {
  margin-top: 20%;
}
.quiz .results {
  padding: 3em;
  margin-top: 2em;
  color: #fff;
  background: #2b9eda;
}
.quiz .results h1 {
  font-size: 2.8rem;
  text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.1);
}
.quiz .results h2 {
  font-size: 2.4rem;
  text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.1);
}
.quiz .dim {
  opacity: 0.5;
}
.quiz .dim [type="radio"]:checked + label,
.quiz .dim [type="radio"]:not(:checked) + label {
  cursor: initial;
}
@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.loader,
.loader:before,
.loader:after {
  border-radius: 50%;
}
.loader:before,
.loader:after {
  position: absolute;
  content: '';
}
.loader:before {
  width: 5.2em;
  height: 10.2em;
  background: #0dc5c1;
  border-radius: 10.2em 0 0 10.2em;
  top: -0.1em;
  left: -0.1em;
  -webkit-transform-origin: 5.2em 5.1em;
  transform-origin: 5.2em 5.1em;
  -webkit-animation: load2 2s infinite ease 1.5s;
  animation: load2 2s infinite ease 1.5s;
}
.loader {
  font-size: 11px;
  text-indent: -99999em;
  margin: 55px auto;
  margin-top: 15em;
  position: relative;
  width: 10em;
  height: 10em;
  box-shadow: inset 0 0 0 1em #ffffff;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.loader:after {
  width: 5.2em;
  height: 10.2em;
  background: #0dc5c1;
  border-radius: 0 10.2em 10.2em 0;
  top: -0.1em;
  left: 5.1em;
  -webkit-transform-origin: 0px 5.1em;
  transform-origin: 0px 5.1em;
  -webkit-animation: load2 2s infinite ease;
  animation: load2 2s infinite ease;
}
.quiz .loading {
  margin-top: 10em;
}
/* custom radio controls */
.quiz .option {
  margin-bottom: 0.75em;
  transition: all 0.25s ease;
}
.quiz [type="radio"]:checked,
.quiz [type="radio"]:not(:checked) {
  position: absolute;
  left: -9999px;
}
.quiz [type="radio"]:checked + label,
.quiz [type="radio"]:not(:checked) + label {
  position: relative;
  font-weight: normal;
  padding-left: 28px;
  cursor: pointer;
  line-height: 20px;
  display: inline-block;
  color: #666;
}
.quiz [type="radio"]:checked + label:before,
.quiz [type="radio"]:not(:checked) + label:before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  border: 1px solid #ddd;
  border-radius: 100%;
  background: #fff;
}
.quiz .correct [type="radio"] + label::before,
.quiz .wrong [type="radio"] + label::before {
  border: 0;
  font-size: 1.2rem;
  animation: 0.25s roll-in ease;
}
.quiz .correct [type="radio"] + label::after,
.quiz .wrong [type="radio"] + label::after {
  display: none;
}
.quiz .correct [type="radio"] + label:before {
  content: '\f00C';
  font-family: "FontAwesome" !important;
  color: #09b39c;
}
.quiz .wrong [type="radio"] + label:before {
  content: '\f00d';
  font-family: "FontAwesome" !important;
  color: #b05747;
}
.quiz [type="radio"]:checked + label:after,
.quiz [type="radio"]:not(:checked) + label:after {
  content: '';
  width: 12px;
  height: 12px;
  background: #ea7373;
  position: absolute;
  top: 4px;
  left: 4px;
  border-radius: 100%;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.quiz [type="radio"]:not(:checked) + label:after {
  opacity: 0;
  -webkit-transform: scale(0);
  transform: scale(0);
}
.quiz [type="radio"]:checked + label:after {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}
@keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }
  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.pulse {
  -webkit-animation-name: pulse;
  animation: pulse 1s infinite;
}
.fade-in {
  animation: fade 0.75s ease;
}
.question-animate {
  animation: fade 0.7s ease;
}
.loader,
.loader:before,
.loader:after {
  border-radius: 50%;
}
.loader:before,
.loader:after {
  position: absolute;
  content: '';
}
.loader:before {
  width: 5.2em;
  height: 10.2em;
  background: #0dc5c1;
  border-radius: 10.2em 0 0 10.2em;
  top: -0.1em;
  left: -0.1em;
  -webkit-transform-origin: 5.2em 5.1em;
  transform-origin: 5.2em 5.1em;
  -webkit-animation: load2 2s infinite ease 1.5s;
  animation: load2 2s infinite ease 1.5s;
}
.loader {
  font-size: 11px;
  text-indent: -99999em;
  margin: 55px auto;
  position: relative;
  width: 10em;
  height: 10em;
  box-shadow: inset 0 0 0 1em #ffffff;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.loader:after {
  width: 5.2em;
  height: 10.2em;
  background: #0dc5c1;
  border-radius: 0 10.2em 10.2em 0;
  top: -0.1em;
  left: 5.1em;
  -webkit-transform-origin: 0px 5.1em;
  transform-origin: 0px 5.1em;
  -webkit-animation: load2 2s infinite ease;
  animation: load2 2s infinite ease;
}
@keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes roll-in {
  0% {
    top: 10px;
    opacity: 0;
  }
  100% {
    top: 0;
    opacity: 1;
  }
}

h1 {
padding-left:20px;
font-weight: bold;

}

.telaInicial {

  padding-left:560px;

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


 
  <br>

  <section id="SobreFilme" class="SobreFilme">
        <p id="espc2">‎</p>
</section>
  <div class="ContainerQuiz">
  <section ng-app="ngQuiz" ng-controller="ngQuizController" class="quiz">
    <image-preload></image-preload>
    <div class="progress" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
      <span ng-cloak class="counter">Question {{quizProgress.currentQuestionFriendly}} of {{quizProgress.lastQuestion}}</span>
      <div class="progress-bar" progress-bar></div>
    </div>
    <div class="content">
      <!-- intro -->
      <section ng-cloak class="intro fade-in" ng-if="!quizProgress.loading && !quizProgress.inProgress && !quizProgress.finished">
        <div ng-cloak class="row">
          <div class="col-xs-6">
            <h1>{{::quizMetadata.title}}</h1>
            <p>{{::quizMetadata.intro}}</p><br><br>
          </div>
          <div class="col-xs-6">
            <br>
            <img class="telaInicial" ng-src="{{quizMetadata.introImg}}" />
            <!--<aside class="figure-caption text-xs-right" ng-if="quizMetadata.introImgCredit">Photo credit: {{::quizMetadata.introImgCredit}}</aside> -->
          </div>
        </div>
        <div class="row">
          <button class="pull-right btn btn-success" ng-click="startQuiz()">Start Quiz</button>
        </div>
      </section>

      <!-- question list -->
      <section ng-cloak class="fade-in question" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
        <div animate-progression>
          <div class="text-center">
            <img class="img-responsive" ng-src="{{quizQuestions[quizProgress.currentQuestion].questionImg}}" />
          </div>

          <p class="question-content">{{quizQuestions[quizProgress.currentQuestion].question}}</p>
          <div class="question-options">
            <div ng-repeat="option in quizQuestions[quizProgress.currentQuestion].options | orderBy: '-'">
              <div class="option" ng-class="{'wrong': quizQuestions[quizProgress.currentQuestion].answerChecked && option.selected && !option.correct, 'correct': option.correct && quizQuestions[quizProgress.currentQuestion].answerChecked, 'dim': quizQuestions[quizProgress.currentQuestion].answerChecked}">
                <input type="radio" name="option" id="{{$index}}" ng-click="answerQuestion({selected: option.name})" ng-disabled="quizQuestions[quizProgress.currentQuestion].answerChecked">
                <label for="{{$index}}">{{option.name}}</label>
              </div>
              <div class="row feedback" ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && option.correct">
                <span ng-bind-html="quizQuestions[quizProgress.currentQuestion].feedback"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <button ng-if="quizProgress.currentQuestion === -1" class="btn btn-primary" ng-click="startQuiz()">Start Quiz</button>
            <button ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && quizProgress.currentQuestionFriendly !== quizProgress.lastQuestion" class="btn btn-primary pull-right" ng-click="nextQuestion()">Next Question <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            <button ng-if="!quizQuestions[quizProgress.currentQuestion].answerChecked" ng-disabled="!quizQuestions[quizProgress.currentQuestion].answered" class="btn btn-primary pull-right" ng-click="checkAnswer()">Check Answer</button>
          </div>
        </div>

        <div class="get-my-results text-center" ng-if="quizProgress.currentQuestionFriendly === quizProgress.lastQuestion && quizQuestions[quizProgress.currentQuestion].answerChecked">
          <button class="pulse btn btn-primary" ng-click="getScore()">Get My Results</button>
        </div>
      </section>

      <section class="loading" ng-if="quizProgress.loading || quizProgress.calculatingScore">
        <div class="loader"></div>
      </section>

      <section class="fade-in" ng-if="!quizProgress.calculatingScore && !quizProgress.inProgress && quizProgress.currentQuestionFriendly === quizProgress.lastQuestion">
        <div class="results">
          <div class="text-center">
            <h1>Your Score</h1>
            <h2>{{score}}</h2>
          </div>
        </div>

        <div class="text-center">
          <button class="start-over btn btn-success" ng-click="startOver()"><i class="fa fa-repeat" aria-hidden="true"></i>Try Again</button>
        </div>
      </section>



      <section id="SobreFilme" class="SobreFilme">
        <p class="espc">‎</p>
</section>

  </section><br><br>
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
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
</html>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
 


<!--Conectando ao Framwork Angular-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-sanitize.min.js'></script><script  src="js/quiz.js"></script>
  
  
</body>

</html>