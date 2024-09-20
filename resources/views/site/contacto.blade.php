<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ===== CSS ===== -->
		<link href="{{ url('../../../../css/style.css') }}" rel="stylesheet">
		<link href="{{ url('../../../../css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

		<!-- ===== favicon ===== -->
		<link href="{{ asset('../../../../icon/image-removebg-preview.png') }}" rel="stylesheet">

		<!-- ===== Explorador de iconos CSS ===== -->
		<link href="{{ url('../../../../css/line.css') }}" rel="stylesheet">

</head>
<body>
    <header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">123-456-7890</span>
						</div>
					</div>

					<div class="container-logo">
						<a href="{{ url('/') }}">
						<h1 class="logo"><img src="{{asset('/icon/image-removebg-preview (1).png')}}"  alt="logo principal"></h1>
						</a>
					</div>

					<div class="container-user">
						<a href="{{ url('/login') }}">
						
							<i class="fa-solid fa-user"  > </i>
						</a>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="{{ url('/') }}">Inicio</a></li>
						<li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
						<li><a href="{{ url('/tienda') }}">Tienda</a></li>
						<li><a href="{{ url('/contacto') }}">Contacto</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
	</header>

	<main class="container-xl py-5">

		<h2 class="text-center my-5"> Contacto </h2>

		<div class="row justify-content-center">

			<form action="" class="col-md-8">
				<fieldset>
					<legend class="btn-primary text-center text-dark fs-3 ">Tus Datos</legend>

					<div class="mb-3">
						<label for="nombre" class="form-label">Nombre:</label>
						<input type="text" class="form-control" id="nombre" placeholder="Tu Nombre">
					</div>
					<div class="mb-3">
						<label for="asunto" class="form-label">Asunto: </label>
						<input type="text" class="form-control" id="asunto" placeholder="Tu Asunto">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Tu Email">
					</div>
					<div class="mb-3">
						<label for="tel" class="form-label">Teléfono: </label>
						<input type="tel" class="form-control" id="tel" placeholder="Tu Teléfono">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Mensaje: </label>
						<textarea class="form-control" rows="10"></textarea>
					</div> 
				</fieldset>
				<fieldset>

					<legend class="btn-primary text-center text-dark fs-2">País</legend>
					<div class="mb-3">
						<label for="país" class="form-label"> País:</label>
						<select class="form-control" id="pais">
							<option value="CO">Colombia</option>
							<option value="PR">Perú</option>
							<option value="MX">México</option>
							<option value="AR">Argentina</option>
							<option value="ES">España</option>
						</select>
					</div>

				</fieldset>
				<fieldset>
					<legend class="btn-primary text-center text-dark fs-2">Informacion Extra</legend>
					<div class="mb-3">
						<label for="Cliente" class="form-label">Cliente: </label>
						<input type="radio" class="form-check-input" id="cliente">
					</div>
					<div class="mb-3">
						<label for="Proveedor" class="form-label">Proveedor: </label>
						<input name="tipo" type="radio" class="form-check-input" id="proveedor">
					</div>

				</fieldset>
					<input type="submit" class="btn btn-primary fs-2 px-5" value="Enviar Formulario">
			</form>

		</div>
	</main>

    <footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: 71 Pennington Lane Vernon Rockville, CT
								06066
							</li>
							<li>Teléfono: 123-456-7890</li>
							<li>Fax: 55555300</li>
							<li>EmaiL: baristas@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">Información Delivery</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Términos y condiciones</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Historial de ordenes</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por Programación para el mundo &copy; 2022
					</p>

					<img src="img/payment.png" alt="Pagos">
				</div>
			</div>
	</footer>

	<script	src="{{asset('/js/ico.js')}}"	crossorigin="anonymous"></script>
</body>
</html>