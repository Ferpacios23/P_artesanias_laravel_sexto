
<!DOCTYPE php>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Esencia Chocoana</title>
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
						<h1 class="logo">
							<a href="{{ url('/') }}">
							<img src="{{asset('/icon/image-removebg-preview (1).png')}}" alt="logo principal">
							</a>
						</h1>
					</div>

					<div class="container-user">
						<a href="{{ url('/login') }}"><i class="fa-solid fa-user"  > </i>	</a>

						<a href="{{ url('/pago') }}"><i class="fa-solid fa-basket-shopping"></i></a>

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

		<main>
			<div class="container-pincipal">
				<div class="container2">
					<div class="forms">
						<div class="form login">
							<span class="title">Iniciar sesion</span>

							


								<form method="POST" action="verificar_login.php">
									<div class="input-field">
										<input type="text" name="ini_correo" placeholder="Correo electronico" required>
										<i class="fa-solid fa-envelope"></i>
									</div>
									<div class="input-field">
										<input type="password" name="ini_password" class="password" placeholder="Ingresa tu contraseña" required minlength="7">
										<i class="fa-regular fa-lock"></i>
									</div>
									<div class="checkbox-text">
										<div class="checkbox-content">
											<input type="checkbox" id="logCheck">
											<label for="logCheck" class="text"></label>
										</div>
										
										<a href="#" class="text">Olvido su contraseña?</a>
									</div>
									<div class="input-field button">
										<input name="ingresar" type="submit" value="Iniciar sesion">
									</div>
								</form>

								
							<div class="login-signup">
								<span class="text">¿No es miembro?
									<a href="#" class="text registro">Regístrese ahora</a>
								</span>
							</div>
						</div>
						<!-- Formulario de inscripción -->
						<div class="form signup">
							<span class="title">Registro</span>
							<form method="POST" action="guardar_post.php">	
								<div class="input-field">
									<input type="text" name="nombre" placeholder="Nombre" required>
									<i class="fa-solid fa-user"></i>
									
								</div>
								<div class="input-field">
									<input type="text" name="telefono" placeholder="Telefono" required>
									<i class="fa-solid fa-phone"></i>
								</div>
								<div class="input-field">
									<input type="email" name="correo" placeholder="Correo electronico" required>
									<i class="fa-solid fa-envelope"></i>
								</div>
								<div class="input-field">
									<input type="password" name="contrasenia" class="password" placeholder="Crea una contraseña" required minlength="7">
									<i class="fa-solid fa-lock"></i>
								</div>
								<!-- <div class="input-field">
									<input type="password" name="confirmar-contrasenia" class="confirmar-password" placeholder="Confirmar contraseña" required>
									<i class="uil uil-lock icon"></i>
								</div> -->
								
								<div class="checkbox-text">
									<div class="checkbox-content">
										<input type="checkbox" id="termCon" required>
										<label for="termCon" class="text">Acepté todos los términos y condiciones</label>
									</div>
								</div>
								<div class="input-field button">
									<input type="submit" name="enviar" value="Registrarse">
								</div>
							</form>
							<div class="login-signup">
								<span class="text">¿Ya eres miembro?
									<a href="#" class="text inicio-de-sesión">Iniciar sesión ahora</a>
								</span>
							</div>
						</div>
					</div>
				</div>			
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

		<script type="module" src="{{asset('/js/ico.js')}}"></script>
		<script type="module" src="{{asset('/js/login.js')}}"></script>
	</body>
</html>
