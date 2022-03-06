<?php include_once('./header.php'); ?>

	<main id="primary" class="site-main">

		<section class="sobre py-4 d-flex justify-content-center align-items-center flex-wrap">
			<img src="./assets/images/marina.png" alt="Marina Almeida" class="img-fluid">
			<section class="d-flex flex-wrap ps-5 col-sm-4">
				<h3>Dra Marina Almeida</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
			</section>
		</section>
		<button type="button" class="btn btn-danger btn-sm rounded-pill align-items-center d-flex col-sm-8 mx-auto justify-content-evenly p-4 container">
			<section class="btn-text text-start">
				<h4>Agende sua consulta</h4>
				<p>Clique e agende agora sua consulta</p>
			</section>
			<img src="./assets/images/calendar.png" class="img-fluid">
		</button>
		<section class="carrossel-convenios">
			<h1 class="pb-5">Convênios</h1>
			
			<section class="carrossel-wrap mx-auto">
				
				<section id="banner_hero" class="owl-carousel owl-theme">
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Component-1.png" alt="Unimed" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Component-2.png" alt="Bradesco Saúde" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Frame.png" alt="Sul América" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Grupo-119.png" alt="Porto Seguro" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Grupo-119.png" alt="Porto Seguro" class="img-fluid">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="item_banner">
							<a href="#">
								<img src="./assets/images/Grupo-119.png" alt="Porto Seguro" class="img-fluid">
							</a>
						</div>
					</div>
				</section>
			</section>
		</section>

		<section class="blog container">
			<h1 class="py-5">Blog</h1>
			<div class="row justify-content-lg-evenly text-center pb-5">
			<!--blog wp-->
			<section class="px-5 blog-post col-sm">
				<a href="#" title="">
					<img src="./assets/images/blog-01.png" alt="" class="img-fluid">
					<p class="pt-4"><strong>Previna-se do Cancer de Mama,você pode aumentar suas chances</strong>
					<br>
					As chances de tratamento do câncer de mama são de 95%, quando descoberto em seus estágios iniciais.
					</p>
				</a>	
			</section>
			<section class="px-5 blog-post col-sm">
				<a href="#" title="">
					<img src="./assets/images/blog-02.png" alt="" class="img-fluid">
					<p class="pt-4"><strong>Previna-se do Cancer de Mama,você pode aumentar suas chances</strong>
					<br>
					As chances de tratamento do câncer de mama são de 95%, quando descoberto em seus estágios iniciais.
					</p>
				</a>	
			</section>
			<section class="px-5 blog-post col-sm">
				<a href="#" title="">
					<img src="./assets/images/blog-03.png" alt="" class="img-fluid">
					<p class="pt-4"><strong>Previna-se do Cancer de Mama,você pode aumentar suas chances</strong>
					<br>
					As chances de tratamento do câncer de mama são de 95%, quando descoberto em seus estágios iniciais.
					</p>
				</a>	
			</section>
			</div>
		</section><!--blog-->

		<!--form que repete na página "sobre" também-->
		
			<section class="input-group chama">
				<div class="container">
					<section class="row">

							<section class="col-sm-5 text-start">
								<h2 class="mb-0">Chama a gente!</h2>
								<p>Deixe seu telefone e entraremos em contato</p>
							</section>
							<section class="col-sm-7 d-flex align-items-center">
								<input type="text" aria-label="Nome" class="nome form-control rounded-pill py-3 me-3" placeholder="Nome">
								<input type="tel" aria-label="Telefone" class="form-control rounded-pill py-3 me-2" placeholder="Telefone">
								<button class="btn btn-danger rounded-pill p-3" type="button">Ok</button>
							</section>
						
					</section>
				</div>
			</section>
		
	</main>

<?php include_once('./footer.php'); ?>
