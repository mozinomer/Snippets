<!DOCTYPE html>
<html>
<head>
	<title><?php get_bloginfo( 'tagline' );?></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<?php wp_head();?>
<body data-aos="fade-up" data-aos-duration="3000">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col logo-img-container">
				<?php 
					   $custom_logo_id = get_theme_mod( 'custom_logo' );
					   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<img src="<?php echo $image[0]; ?>" alt="">
				<div class="sub-menu-lgo-container">
					<div class="row">
						<div class="col-md-6 col">
							<label>web desgin services</label>
							<div class="sub-menu-logo">
								<?php wp_nav_menu(array('theme_location' => 'web-des'));?>
							</div>
						</div>
						<div class="col-md-6 col">
							<label>social media services</label>
							<div class="sub-menu-logo">
								<?php wp_nav_menu(array('theme_location' => 'sm-ser'));?>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-6 col">
							<label>Web Development services</label>
							<div class="sub-menu-logo">
								<?php wp_nav_menu(array('theme_location' => 'web-dev-ser'));?>
							</div>
						</div>
						<div class="col-md-6 col">
							<label>digital marketing services</label>
							<div class="sub-menu-logo">
								<?php wp_nav_menu(array('theme_location' => 'digital-ser'));?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7 col main-menu_header dis-flex">
				<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
			</div>
			<div class="col-md-2 col dis-flex header_button">
				<a href="#" class="proposal_but"><?php echo get_option('header_button_text');?></a>
			</div>
		</div>
	</div>
</header>

<div class="modal_pop_up" >
	<div class="container">
		<div class="row asdqwe">
			<div class="container" data-aos="zoom-in"   data-aos-easing="linear"data-aos-duration="1500">
				<div class="row heading_form">
					Get a Quate
					<span></span>
				</div>
				<div class="row sub_heaidng_form">
					MOBILE AND E-COMMERCE ARE MORE THAN A NECESSITY, THEY'RE YOUR LIFE FORCE, YOUR HEART.
									AND ALTHOUGH WE ARE A FULL-SERVICE WEB DEVELOPMENT
				</div>
				<div class="row">
					<form class="pop">
						<div class="row">
							<div class="col-md-4">
								<input type="text" name="name" placeholder="name">
							</div>
							<div class="col-md-4">
								<input type="email" name="name" placeholder="email">
							</div>
							<div class="col-md-4">
								<input type="number" name="name" placeholder="phone no.">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<input type="text" name="name" placeholder="company">
							</div>
							<div class="col-md-4">
								<input type="file" name="name">
							</div>
							<div class="col-md-4">
								<select>
									<option>
										categories
									</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<textarea></textarea>
							</div>
							<div class="row"></div>
							<button>send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>