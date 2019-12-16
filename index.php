<!DOCTYPE html>
<html>
	<head>
		<title>HARCH TEMPLATE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<!--Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container-fluid">
			<header>
				<nav class="navbar navbar-expand-lg navbar-light header-content">
					<a class="navbar-brand logo" href="#"><img src="img/logo.png"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">historique</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">structure</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">action</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">galerie</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">contact</a>
							</li>
						</ul>
					</div>
			  </nav>
			</header>
			<section class="carousel-section">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/img4.jpg" alt="First slide">
							  <div class="carousel-caption d-none d-md-block">
									<h5>PAR CE QUE VOUS EN AVEZ BESOIN, NOUS VOUS AIDONS</h5>
								</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/img5.jpg" alt="Second slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>PAR CE QUE VOUS EN AVEZ BESOIN, NOUS VOUS AIDONS</h5>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/img6.jpg" alt="Third slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>PAR CE QUE VOUS EN AVEZ BESOIN, NOUS VOUS AIDONS</h5>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</section>
		</div>
		<!-- Script -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>