<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>

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

        <!--Productos -->
    <main class="container py-5 contenfor">

        <h2 class="text-center my-5">Nuevos Productos</h2>
		
        <div class="row g-0 pt-5 producto mb-4 ">
            <div class="col-md-8">  
                <img src="{{asset('/img/tienda/productos_1.jpg')}}" alt="imagen producto" class="img-fluid">
            </div>
            <div class="col-md-4 btn-primary text-center p-5 text-white d-flex flex-column justify-content-center ">
                <h3>Producto 1</h3>   
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                <p class="fs-1 fw-bold">$300.000.00</p>
                <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3">Agregar al Carrito</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 ">
                <div class="card">
                    <img class="card-img-top img-cartas" src="{{asset('/img/tienda/productos_2.jpeg')}}" alt="imagen producto">

                    <div class="card-body text-center btn-primary text-white p-4 ">
                        <h3>Producto 2</h3>   
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                        <p class="fs-1 fw-bold">$1000.000.00</p>
                        <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3 d-block">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('/img/tienda/productos_4.png')}}" alt="imagen producto">

                    <div class="card-body text-center btn-primary text-white p-4 ">
                        <h3>Producto 3</h3>   
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                        <p class="fs-1 fw-bold">$500.000.00</p>
                        <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3 d-block boton-es">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4 mb-4">
                
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/img/tienda/productos_4.png')}}" alt="imagen producto">
    
                        <div class="card-body text-center btn-primary text-white p-4 ">
                            <h3>Producto 4</h3>   
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                            <p class="fs-1 fw-bold">$200.000.00</p>
                            <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3 d-block">Agregar al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/img/tienda/productos_5.jpg')}}" alt="imagen producto">
    
                        <div class="card-body text-center btn-primary text-white p-4 ">
                            <h3>Producto 5</h3>   
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                            <p class="fs-1 fw-bold">$1.000.000.00</p>
                            <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3 d-block">Agregar al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/img/tienda/productos_6.jpg')}}" alt="imagen producto">
    
                        <div class="card-body text-center btn-primary text-white p-4 ">
                            <h3>Producto 6</h3>   
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus earum magnam necessitatibus ex doloremque eligendi repudiandae soluta corporis.</p>
                            <p class="fs-1 fw-bold">$1,100.000.00</p>
                            <a href="#" class="btn btn-success fs-3 fw-bold text-uppercase py-3 d-block">Agregar al Carrito</a>
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

        <script	src="{{asset('/js/ico.js')}}"	crossorigin="anonymous"></script>
</body>
</html>