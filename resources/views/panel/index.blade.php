@extends('layouts.app')

@section('title','Panel')



@section('content')
@include('partials.nav')
	
	<!--SHOW IF THERE IS A FLASH MESSAGE-->

	<div class="container">
	<div class="row">
		<section class="col-xs-12 no-margin no-padding">
			@if (session()->has('flash_notification.message'))
			    <div class="top-space alert alert-{{ session('flash_notification.level') }}">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

			        {!! session('flash_notification.message') !!}
			    </div>
			@endif
		</section>
	</div>
	</div>


					<!--SHOW PRODUCTS LIST-->
					<section class="product-list">
						<header>
							<div class="container">
								<span class="slim">Productos</span>
								<a href="{{route('product.create')}}" class="btn btn-default pull-right">Agregar producto <i class="fa fa-plus slim"></i></a>
							</div>
						</header>
						@foreach($products as $product)
							 <article class="item-list">
							 <div class="container">
							 	 <p class="title"><span class="fa fa-circle light-blue-text"></span> {{$product->title}}</p>
								 <div class="actions">
									 <a href="{{ route('product.edit', $product->id)}}" class="btn btn-link blue-text"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
									 <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-link blue-text"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
								 </div>
							 </div>
							 </article>
						@endforeach
					</section>

	
	
	<!--SHOW A PAGE BUTTONS-->
	<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center no-margin no-padding">
			{{ $products->links() }}
		</div>
	</div>
	</div>
@endsection