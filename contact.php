
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Thiga - Contact </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <?php include('head-global.php'); ?>

    </head>

    <body>
    	<?php include('gtm-body.php'); ?>
		<?php include('navigation.php'); ?>
		<div class="main-container">
			<section class="contact-photo">
                
                <div class="background-image-holder">
                    <img class="background-image" alt="Background Image" src="/img/backgrounds/hero6.jpg">
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                            <h1 class="text-white">Envie de nous confier une mission ou tout simplement de parler de Product Management ?&nbsp;</h1>
                        </div>
                    </div>
                    
                    <div class="photo-form-wrapper clearfix">
                        <form class="email-form">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
                                    <input class="form-name validate-required" type="text" placeholder="Votre nom" name="name">
                                </div>
                            
                                <div class="col-md-3 col-sm-4">
                                    <input class="form-email validate-required validate-email" type="text" placeholder="Votre mail" name="email">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
                                    <textarea class="form-message validate-required" rows="7" name="message" placeholder="Votre message"></textarea>
                                    <button type="button" class="btn btn-primary9 btn-filled" onclick="postDataToWebhook()" value="Send Form">Envoyer</button>
                                    <div class="form-success">
                                        <span class="text-white">Message envoyé !</span>
                                    </div>
                                    <div class="form-error">
                                        <span class="text-white">Merci de remplir tous les champs</span>
                                    </div>
                                </div>  
                            </div>
                        </form>
                        
                    </div>
                    
                    <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                                <ul class="social-icons">
                                    <li>
                                        <a target="_blank" href="https://twitter.com/innothiga">
                                            <i class="icon social_twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/company-beta/4998677/">
                                            <i class="icon social_linkedin"></i>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/thigaconsulting/">
                                            <i class="icon social_facebook"></i>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/thigafr/">
                                            <i class="icon social_instagram"></i>
                                        </a>
                                    </li>

                                </ul><br>
                            
                            </div>
                        </div>
        
                </div>
            
            </section>
            <section class="contact-thirds">
				<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center">
								<h2>Nos bureaux<br><br>
								</h2>
							</div>
					</div>
					
					<div class="row">
						<div class="col-sm-6 text-center">
							<h5>Paris</h5>
							<p class="lead">
								+ 6 17 51 77 87<br>
								contact@thiga.fr<br>
								<br>
								156 bd Haussmann<br>
								75008 Paris
							</p>
						</div>
						<div class="col-sm-6 text-center">
							<h5>Sydney</h5>
							<p class="lead">
								<br>
								contact@thiga.com.au<br>
								<br>
								1/575 Darling Street, Rozelle<br>
								Sydney, NSW 2039
							</p>
						</div>
						
					</div>
				</div>
			</section>
		</div>
		
<?php include('footer-alternate.php'); ?>

<script>                        
var postDataToWebhook = function(){    
  //url to your webhook
  var webHookUrl="https://hooks.slack.com/services/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"; 
  var contact = $('.form-name').val();
  var email = $('.form-email').val(); 
  var message = $('.form-message').val();
    
  if(!contact){$('.form-error').show();return;}
  
  //https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
  var oReq = new XMLHttpRequest();
  var payload={text:'Nouvelle prise de contact sur thiga.fr',attachments: [
        {title:"Message de "+contact+" ("+email+")", text:message||'pas de message'}]};
  
//register method called after data has been sent method is executed
  oReq.open("POST", webHookUrl,true);
  oReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  oReq.send(JSON.stringify(payload));
  $('.form-success').show();
    $('.form-error').hide();
};
     </script>

</html>

