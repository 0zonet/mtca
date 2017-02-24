@extends('layouts.frontend')


@section('content')
		<nav class='desktop' id='navigation'>
			<div class='nav-wrapper container'>
				<a class='brand-logo' href='#'>Metalurgica JV</a>
				<a class='button-collapse' data-activates='mobile-demo' href='#'>
					<i class='fa fa-navicon'></i>
				</a>
				<ul class='right hide-on-med-and-down desktop'>
					<li>
						<a href='#landing' class="smooth">Inicio</a>
					</li>
					<li>
						<a href='#nosotros' class="smooth">Sobre nosotros</a>
					</li>
					<li>
						<a href='#products' class="smooth">Productos</a>
					</li>
					<!--li>
						<a href='#' class="smooth">Contacto</a>
					</li-->
				</ul>
				<ul class='side-nav' id='mobile-demo'>
					<li>
						<a href='#landing' class="smooth">Inicio</a>
					</li>
					<li>
						<a href='#aboutus' class="smooth">Sobre nosotros</a>
					</li>
					<li>
						<a href='#products' class="smooth">Productos</a>
					</li>
					<!--li>
						<a href='#' class="smooth">Contacto</a>
					</li-->
				</ul>
			</div>
		</nav>
		<div class='flex-container full-height' id='landing'>
			<div class="logo">
				<img src="{{asset('asset/frontend/imgs/metalurgicajv.png')}}">
			</div>
		</div>
		<section id="nosotros"></section>
		<div class='top-space x2' id='aboutus'>
			<div class='container'>
				<div class='row around-xs'>
					<div class='col-md-4 full-height bottom-line normal-padding' id='information'>
						<div class='box full-height'>
							<h2 class='slim title'>Sobre nosotros</h2>
							<p class='no-margin'>
								Metalurgicajv está orientada al rubro de los remolques, donde nuestra especialización son las partes, piezas y subconjuntos de productos, para quienes se dedican al rodado y sus derivados, como ramplas, acoplados, tolvas, etc. <br>
Somos la única empresa en chile, en fabricar acomuladores de aire, para el sistema de freno de los rodados o alargues de chasis, trabajamos desde los 5lts hasta los 60lts y con diversos espesores, según las necesidades del fabricante.
							</p>
							<div class='row'>
								<div class='col-xs-12'>
									<h3 class='slim title'>Cotiza tus proyectos a:</h3>
									<p>
										<i class='fa fa-envelope-o amber-text lighten-2'></i>
										manuel.jara@retrans.cl
									</p>
									<p>
										<i class='fa fa-phone amber-text lighten-2'></i>
										8-2280418 – 022 6212728
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='col-md-4 col-xs-12 full-height left bottom-line first-xs last-md'>
						<div class='box full-height' id='img-about' style=''></div>
					</div>
				</div>
			</div>
		</div>


		<section class='top-space' id='products'>
			<div class='container'>
					<div class='row'>
						<div class='col-xs-12 normal-padding'>
							<h2 class='slim title no-padding'>Nuestros productos</h2>
						</div>
					</div>

						
					@foreach($categories as $category)
								@if(!$category->products->isEmpty())
									<div class='row'>
											<div class='col-xs-12'>
												<div class='box'>
													<h3 class='slim title bottom-line'>{{$category->name}}</h3>
												</div>
											</div>
									</div>

									<article class='row around-between-xs'>
										@foreach($category->products as $product)
											<section class='col-md-4 col-sm-6 col-xs-12'>
												<div class='card slim'>
														<div class='card-image' style='background-image: url({{ asset('asset/imgs/products/' . $product->image->path) }})' alt="{{ $product->title }}" title="{{ $product->title }}"></div>
														<div class='card-content'>
															<h4 class='title no-margin slim'>
																{{ $product->title }}
															</h4>
															<p class='slim'>
																{!! $product->body !!}
															</p>
														</div>
												</div>
											</section>
										@endforeach
									</article>			

								@endif
					@endforeach
			 	
			</div>
		</section>


@include('partials.frontfooter')

@endsection
