@extends('layouts.app')
@section('title','Editar Producto')
@include('partials.nav')

@section('content')
		<section class="panel panel-default">
			<div class="panel-heading">
				<article class="container">
				<div class="row">
				<div class="col-xs-12">	
					<h4 class="slim blue-text">Editar Producto</h4>
				</div>
				</div>
				</article>
			</div>
			<div class="panel-body">
			<article class="container">
			<div class="row">
			<div class="col-xs-12">
					{!! Form::open(['url' => ['product',$product],'method' => 'PUT','files' => true]) !!}
					 	<div class="form-group">
					 		{!! Form::label('title', 'Nombre del producto'); !!}
					 		{!! Form::text('title',$product->title,['class' => 'form-control','placeholder' => 'Ejemplo... Cajas de camion', 'required']) !!}		
					 	</div>

					 	<div class="form-group">
					 		{!! Form::label('image', 'Imagen del producto'); !!}
					 		{!! Form::file('image',null,['class' => 'form-control file_input','placeholder' => 'Ejemplo... Cajas de camion']) !!}
					 		<p class="help-block">Imagenes de 600x600px</p>
					 	</div>


						<div class="form-group">
					 		{!! Form::label('category_id', 'Categoria') !!}
					 		{!! Form::select('category_id', $categories, $product->category->id ,['class' => 'form-control', 'required', 'placeholder' => 'Categoria']) !!}
					 	</div>


					 	<div class="form-group">
					 		{!! Form::label('body', 'Texto del producto'); !!}
					 		{!! Form::textarea('body',$product->body,['class' => 'form-control trumbowyg-demo','placeholder' => 'Toda la información del producto aquí...'], 'required') !!}	
					 	</div>

					 	<div class="form-group">
					 		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
					 	</div>
					{!! Form::close() !!}
			</div>
			</div>
			</article>
			</div>
		</section>
@endsection
