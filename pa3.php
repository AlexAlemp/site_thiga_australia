<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Thiga Academy - Product Academy 3</title>
        <meta name="description" content="Le guide sur les organisations produit : comment scaler sa product team. Feature teams, component teams">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <?php include('head-global.php'); ?>

    </head>

    <body>
    	<?php include('gtm-body.php'); ?>
		<?php include('navigation.php'); ?>
		<div class="main-container">
			<header class="signup"> 
					<div class="background-image-holder parallax-background">
						<img class="background-image" alt="Background Image" src="/img/backgrounds/wallform-min.png">
					</div>
					
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
								<h1 class="text-white">Ce livre n'est pas encore disponible !<br>Inscrivez-vous sur la liste d'attente pour le recevoir<br></h1>
							</div>
						</div>
						
						<div class="row text-center">
						<a href="#form" class="btn btn-primary9">Formulaire d'Inscription</a>
								
							</div>
						
						</div>
						<iframe class="mail-list-form" srcdoc="">
						</iframe>
						
					</div>	
			</header>
		</div>
		<script>                        
var postDataToWebhook = function(){    
  //url to your webhook
  var webHookUrl="https://hooks.slack.com/services/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"; 
  var contact = $('.form-email').val(); 
  var message = $('.form-message').val();
    
  if(!contact){$('.form-error').show();return;}
  
  //https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
  var oReq = new XMLHttpRequest();
  var payload={text:'',attachments: [
        {title:contact, text:"PA3 : "+message||'pas de message'}]};
  
//register method called after data has been sent method is executed
  oReq.open("POST", webHookUrl,true);
  oReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  oReq.send(JSON.stringify(payload));
  $('.form-success').show();
    $('.form-error').hide();
};
     </script>
        
      <section id="form" class="contact-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
              <h1>Recevoir mon exemplaire<br>Product Academy 3</h1>
              <p class="lead">
                Inscrivez vous pour recevoir votre exemplaire en avant première</p>
            </div>
          </div>
          
    <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
              <div class="form-wrapper clearfix">
                <form class="form-contact email-form">
                  <div class="inputs-wrapper">                    
                    <input class="form-email validate-required" type="text" name="email" placeholder="Votre email ou numéro de téléphone">
                    <textarea class="form-message validate-required" name="message" placeholder="Votre message (optionnel)"></textarea>
                  </div>
                  <button type="button" class="btn btn-primary9" onclick="postDataToWebhook()" value="Send Form">Envoyer</button>
                  <div class="form-success">
                    <span class="text-white">Votre message a été envoyé</span>
                  </div>
                  <div class="form-error">
                    <span class="text-white">Merci de remplir le champ "mail ou téléphone"</span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
		</div>
      
			<?php include('footer-alternate.php'); ?>
</html>
				