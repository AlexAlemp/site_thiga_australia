
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Thiga Academy - Formation Product Manager</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include('head-global.php'); ?>

        <meta property="og:title" content="" />
 		<meta property="og:description" content="" />
  		<meta property="og:url" content="https://thiga.com.au/training" />
  		<meta property="og:image" content="https://thiga.com.au/img/training/training-pm.jpg" />
    </head>

    <body>
        <?php include('gtm-body.php'); ?>
        <?php include('navigation.php'); ?>
        <?php include('variables.php'); ?>
		

		<?php 
			//Read JSON file to have next trainings dates
			$url = 'data/content.json'; 
			$file = file_get_contents($url);
			$data = json_decode($file);
			$date1 = $data->pageFormationPM->dateNext1;
			$date2 = $data->pageFormationPM->dateNext2;
			$date3 = $data->pageFormationPM->dateNext3;
		?>	

		<div class="main-container">
			
		<section class="side-image text-heavy clearfix">
				<div class="image-container col-md-5 col-sm-3 pull-left">
					<div class="background-image-holder">
						<img class="background-image" alt="Background Image" src="/img/training/training-pm.jpg">
					</div>
				</div>

				<div class="container">

					<div class="row">

						<div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 content clearfix">
							<h1 style="margin-top: 30px"><b>Product Manager</b> Training</h1>

							<div class="date-next-trainings">
								<br><p class="next-formation text-white">Training Schedule:</p>
								<div class="row">
									<div class="col-sm-4">
										<strike><div class="date-next-formation text-white"><?php echo "<a href=\"".$lien_formulaire_inscription."\" target=\"_blank\" >"; ?><?php echo $date1 ?></a></div></strike>
									</div>

									<div class="col-sm-4">
										<div class="date-next-formation text-white"><?php echo "<a href=\"".$lien_formulaire_inscription."\" target=\"_blank\" >"; ?><?php echo $date2 ?></a></div>
									</div>

									<div class="col-sm-4">	
										<div class="date-next-formation text-white"><?php echo "<a href=\"".$lien_formulaire_inscription."\" target=\"_blank\" >"; ?><?php echo $date3 ?></a></div>
									</div>
								</div>
							</div>

							<p class="formation">This training is for digital professionals who want to discover Product Management</p>
							<p class="formation">
								After an introduction to<strong> Design Thinking</strong> and <strong>Lean Startup</strong>, you will learn how to build the initial vision of a product and then continue to <strong>user testing techniques </strong> and <strong>rapid prototyping</strong>.
							</p>
							<p class="formation">
								In a second sted, you will determine the scope of your<strong> MVP</strong> and continue to measure its performance using<strong>the AARRR framework</strong>.
							</p>

							<div>
								<p class="lead2"><img class="icon-image-ab" src="/img/time-min.png"><b>1 day</b><img class="icon-image-ab2" src="/img/price3-min.png"><b>$800</b></p>
							</div>

							<div>
								<a href="/pdf/Thiga-formation-product-manager.pdf" target="_blank" class="btn btn-primary9" style="margin-bottom: 10px;">Detailed description</a>&nbsp;&nbsp;&nbsp;
								<a id="inscription_pm" href="https://thigatraining.typeform.com/to/wncRmP" target="_blank" class="btn btn-primary9 btn-filled" style="margin-bottom: 10px;">Interested? We will contact you</a><br>
							</div>

						</div>

					</div>

				</div>
			</section>

			<section class="duplicatable-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h2 class="space-bottom-large">Detailed program</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<h5>Introduction</h5>
								<p>Discover Design Thinking<br>Understanding Lean Startup<br>Distinguish project culture and Product culture<br>Understand Product Team roles</p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="feature">
								<h5>Establish and challenge the product vision</h5>
								<p>Define an initial Product vision<br>Validation the problem and the target<br>Brainstorm and prototype<br>Validate solutions<br>Define the MVP</p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="feature">
								<h5>Improve your Product</h5>
								<p>Discover the AARRR framework<br>Frame your funnel<br>Choosing the right KPIs<br>Identify optimisation levers</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="skill-bars">

				<div class="container">


					<div class="row">


						<div class="col-md-offset-2 col-sm-10 col-sm-offset-1 text-center col-md-3">
							<h2>Topics discussed</h2>
							
						</div><div class="col-md-6 col-sm-12">
							<div class="skills-right skills">

								<ul class="skills-ul">
									<li>
										<span>Lean Startup</span>
										<div class="skill-bar-holder">
											<div class="skill-capacity col-xs-11"></div>
										</div>
									</li>

									<li>
										<span>Design Thinking</span>
										<div class="skill-bar-holder">
											<div class="skill-capacity col-xs-9"></div>
										</div>
									</li>

									<li>
										<span>Agile</span>
										<div class="skill-bar-holder">
											<div class="skill-capacity col-xs-5"></div>
										</div>
									</li>
									<li>
										<span>Analytics</span>
										<div class="skill-bar-holder">
											<div class="skill-capacity col-xs-6"></div>
										</div>
									</li>


								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
      
		</div>

		<?php include('footer.php'); ?>
</html>
