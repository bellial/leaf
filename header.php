<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- google fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/ngn4xws.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">

	<!-- style -->
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
	
	<header id="masthead" class="site-header mb-3">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				
				<section class="container">

					<!--Custom wp logo-->
					<a href="#" class="navbar-brand">
						<img src="./assets/images/logo.png" alt="Marina Almeida Logo">
					</a>
					
					<section class="menu-icon">
							<span class="menu-icon__line menu-icon__line-left"></span>
							<span class="menu-icon__line"></span>
							<span class="menu-icon__line menu-icon__line-right"></span>
					</section>
					
					<section class="navbar-collapse show flex-grow-0">
						<section class="boxNav_main">
							<nav class="nav-main">
								<ul class="navbar-nav flex-nowrap">
									<li class="nav-item"><a href="./sobre.php" class="nav-link px-2 link-dark">Sobre</a></li>
									<li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Dúvidas</a></li>
									<li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Agendar</a></li>
									<li class="nav-item"><a href="./contato.php" class="nav-link px-2 link-dark">Contato</a></li>
								</ul>
							</nav>
							<span class="close_menu">
								<svg xmlns="http://www.w3.org/2000/svg" width="18.033" height="18.033" viewBox="0 0 18.033 18.033">
									<g id="Grupo_1596" data-name="Grupo 1596" transform="translate(-591.089 -3163.775) rotate(45)">
										<path id="Caminho_703" data-name="Caminho 703" d="M2702.96,1828.15v-17.971a1.883,1.883,0,0,1,1.883-1.883h0a1.883,1.883,0,0,1,1.883,1.883v17.971a1.883,1.883,0,0,1-1.883,1.883h0A1.883,1.883,0,0,1,2702.96,1828.15Z" transform="translate(-37.002)" fill="#585e7c"/>
										<path id="Caminho_704" data-name="Caminho 704" d="M2658.856,1854.283h17.971a1.883,1.883,0,0,1,1.883,1.883h0a1.883,1.883,0,0,1-1.883,1.883h-17.971a1.883,1.883,0,0,1-1.883-1.883h0A1.883,1.883,0,0,1,2658.856,1854.283Z" transform="translate(0 -37.001)" fill="#585e7c"/>
									</g>
								</svg>
							</span>
						</section>

						<section class="input-group justify-content-end pe-2">
							<form>	
									<label class="input-group-append">
										<input class="form-control rounded-pill" type="search" aria-label="Buscar">
									</label>
							</form>
						</section>
						
						<section class="social-icons d-flex">
						<a href="https://www.facebook.com/" class="mx-1">
							<img src="./assets/images/ico-fb.svg" alt="Facebook">
						</a>
						<a href="https://www.instagram.com/" class="mx-1">
							<img src="./assets/images/ico-insta.svg" alt="Instagram">
						</a>
						</section>
					</section>
				</section>
			</nav>
		</div>
		<section id="carrossel-header" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carrossel-header" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carrossel-header" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carrossel-header" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="#">
						<img src="./assets/images/banner1.png" alt="" class="d-block w-100">
					</a>
				</div>
				<div class="carousel-item ">
					<a href="#">
						<img src="./assets/images/banner1.png" alt="" class="d-block w-100">
					</a>
				</div>
				<div class="carousel-item ">
					<a href="#">
						<img src="./assets/images/banner1.png" alt="" class="d-block w-100">
					</a>
				</div>
			</div>
			
		</section>
	</header>
