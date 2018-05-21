<!--Get Header-->
<!--Reference https://developer.wordpress.org/themes/basics/linking-theme-files-directories/ -->
<?php get_header(); ?>

<body>
    <div class="container">
	  <div class="row">
		<div class="col-12" id="title">Australian Ferret Carer<br>Victorian Ferret Society</div>
		</div>
		
		<!--NavBar-->
		<div class="row" id="nav">
		1
<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
		<!-- End NavBar -->
		
		<div class="row">
		<div class="col-12" id="fhome">Give a Ferret a Home!<br>Adopt One Today!</div>
		</div>
		<div class="row" id="images">
		<div class="col-4"><img src="<?php echo get_template_directory_uri().'/img/ferret1.png';?>"></div>
		<div class="col-4"><img src="<?php echo get_template_directory_uri().'/img/ferret3.png';?>"></div>
		<div class="col-4"><img src="<?php echo get_template_directory_uri().'/img/ferret2.png';?>"></div>
		</div>
		
		
		<div class="row">
			<div class="col-6 ls"><b id="fas">Ferret Adoption Fees</b><br>Adult Ferrets (6+months - under 4 years):<br>Males $200 each Females $230 each<br>Some pairs may be discounted; usually due to age, etc
			<br>Kit Ferrets (16 weeks - 6 Months):<br>Socialised and Vaccinated - $100 each<br>*Desexing and microchipping is an additional<br>
cost that the adopter will have to pay.<br>Kits are vaccinated at 12 and 16 weeks old.<br>
Kits must be around 16 weeeks old before we can adopt them out.<br>*Gumtree breeders DO NOT vaccinate.<br>
			Older Ferrets (4+ Years):<br>Desexed, Vaccinated and Microchipped -<br> 
Price varies depending on individuals involved.<br>You may have to bring the selected ferret back for follow-up vaccinations, if not completed.
			
			
			</div>
		<div class="col-6 sf"><b id="fb">Ferret Boarding</b><br><p>If you are going away and need someone to look after your<br>
little fuzzies, we will happily look after them whilst you are away.<br>Conditions do apply, please feel free to email me if you have any questions.<br><b>Single ferrets</b> - $10/Day<br><b>Two Ferrets</b> - $20/Day<br><b>3rd + Ferret</b>-$6/Day<br><br><b id="volun">Volunteers</b><br>We welcome all volunteers who wish to help. Volunteers will clean
cages while interacting with the various ferret personalities we have.<br>We will make sure to let you know which ferrets not to handle if its
neccessary.</p></div>

<!--Get Footer-->
<!--Reference https://developer.wordpress.org/themes/basics/linking-theme-files-directories/ -->
<?php get_footer(); ?>


