@extends('layouts.admin')
@section('title','edición de categoria')


@section('subtitulo','SistemaMarket')


@section('indices')
<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"> <a href="#">Panel administrador</a></li>
				<li class="breadcrumb-item"> <a href="{{route('categories.index')}}">Categorias</a></li>

				<li class="breadcrumb-item active" aria-current="page">Editar</li>
			</ol>
		</nav>
@endsection

<!-- Aqui se coloca el contenido ------------------------------------------------>
@section('content')

	<div class="page-header">
		<h3 class="page-litle">
			Edición de Categoría
		</h3>

	</div>
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<!-- ------------------------ -->
					{!! Form::model($category,['route'=>['categories.update',$category],'method'=>'PUT']) !!}
					<div class="d-flex justify-content-between">
						<h4 class="card-title">Registro de categorias</h4>
					</div>

						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Nombre..." required>

							<label for="description">Descripción</label>
							<textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>

						</div>


						<button type="submit" class="btn btn-primary mr-2">Actualizar</button>

						<a href="{{route('categories.index')}}" class="btn btn-light">Cancelar</a>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection
<!-- Aqui termina el contenido------------------------------------------- -->


