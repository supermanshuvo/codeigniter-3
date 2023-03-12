<?php $this->load->view('header'); ?>
<nav class="navbar navbar-expand-lg navbar-dark text-black fixed-top" style="background-image: linear-gradient(to bottom, rgba(8, 23, 68, 0.9), rgba(8, 23, 68, 0.9))">
	<div class="container">
		<a class="navbar-brand" href="#"><i class="fas fa-phone"></i> Brand</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#technology">Technology</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<section id="home">
	<div style="background-image: linear-gradient(to bottom, rgba(8, 23, 68, 0.9), rgba(8, 23, 68, 0.9))">
		<div class="container text-white py-4">
			<div class="row py-5 mb-4">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-4 pb-sm-4 pb-md-0 pb-lg-0 pb-xl-0 lh-lg">
					<div class="text">
						<p class="fw-normal">F&nbsp; R&nbsp; I&nbsp; E&nbsp; N&nbsp; D&nbsp; S&nbsp; &nbsp; A&nbsp; P&nbsp; P&nbsp; </p>
						<h1 class="fw-bold fs-2 mb-5">
							<span>This app will improve your life</span>
							<br />
							<span>​free of charge!</span></span>
						</h1>
						<p class="fw-normal">Start by downloading our app and see what your friends and family are doing right now.</p>
					</div>
					<div class="form mt-5">
						<div class="mt-5 pt-4 mb-4 col-7">
							<label for="formFile" class="form-label">Email * </label>
							<input class="form-control border-white bg-transparent text-white" type="text" id="formFile">
						</div>
						<div class="pt-2 mb-4">
							<button type="button" class="btn btn-light text-danger">GET MY APP</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-4 pb-sm-4 pb-md-0 pb-lg-0 pb-xl-0">
					<div class="text-center">
						<img src="<?php echo base_url().'assets/img/mobile1.jpg'?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="technology" class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 py-5">
				<div class="card text-center">
					<div class="card-body">
						<i class="fas fa-clock fa-5x text-danger mb-3"></i>
						<h5 class="card-title fw-bold">Quick development</h5>
						<p class="card-text fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 py-5">
				<div class="card text-center">
					<div class="card-body">
						<i class="fas fa-desktop fa-5x text-danger mb-3"></i>
						<h5 class="card-title fw-bold">Advanced technologies</h5>
						<p class="card-text fw-light">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 py-5">
				<div class="card text-center">
					<div class="card-body">
						<i class="fas fa-user fa-5x text-danger mb-3"></i>
						<h5 class="card-title fw-bold">Instant deployment</h5>
						<p class="card-text fw-light">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-danger ">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 py-5">
					<div class="text-white">
						<h2 class="fw-bold">Find more people!</h2>
						<p class="pt-4 fw-normal fs-5">Start by downloading our app and see what your friends and family are doing right now.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-center">
					<div class="text-center">
						<div class="pt-2 mb-4">
							<button type="button" class="btn btn-light text-danger btn-lg ml-2 mr-2">GET MY APP</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about">
	<div class="container d-flex justify-content-center align-items-center vh-100">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-center align-items-center">
				<img src="<?php echo base_url().'assets/img/menwithphone.jpg'?>" style="width: 255px; height: 446px;">
			</div>
			<div class="col-md-6 d-flex justify-content-center align-items-center">
				<p class="text-center fw-normal">Start by downloading our app and see what your friends and family are doing right now.</p>
			</div>
		</div>
	</div>
</section>
<section id="contact">
	<div style="background-image: linear-gradient(to bottom, rgba(8, 23, 68, 0.9), rgba(8, 23, 68, 0.9))">
		<div class="container text-white d-flex justify-content-center align-items-center vh-100">
			<div class="row">
				<div class="col-md-6">
					<div class="text">
						<h1 class="fw-bold fs-2 mb-5">
							<span>This app will improve your life</span>
							<br />
							<span>​free of charge!</span></span>
						</h1>
						<p class="fw-normal">Start by downloading our app and see what your friends and family are doing right now.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form">
						<div class="mb-4 col-9">
							<label for="formFile" class="form-label">Name * </label>
							<input class="form-control border-white bg-transparent text-white" type="text" id="name">
						</div>
						<div class="mb-4 col-9">
							<label for="formFile" class="form-label">Email * </label>
							<input class="form-control border-white bg-transparent text-white" type="email" id="email">
						</div>
						<div class="mb-4 col-9">
							<label for="formFile" class="form-label">Text * </label>
							<textarea class="form-control border-white bg-transparent text-white" type="email" id="email"></textarea>
						</div>
						<div class="pt-2 mb-4">
							<button type="button" class="btn btn-light text-danger">GET MY APP</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('footer'); ?>
