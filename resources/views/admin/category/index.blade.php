@extends('layouts.admin')
@section('title','mi ventana home')

<!-- @section('incrustar')
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Panel Administración</a></li>
              <li class="breadcrumb-item active">Categorias</li>
            </ol>
@endsection -->



@section('subtitulo','SistemaMarket')


@section('cuadros_opciones')
     <a href="{{route('categories.create')}}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Crear nueva categoria">
       <i class="bi bi-file-earmark-plus-fill btn btn-icon text-primary"></i>
     </a>                                
@endsection

	

@section('indices')
<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item ti ti-home"> <a href="#">Panel administrador</a></li>
				<li class="breadcrumb-item active" aria-current="page"> Categorias</li>
			</ol>
		</nav>
@endsection

<!-- Aqui se coloca el contenido ------------------------------------------------>
@section('content')

	<div class="page-header">
		<h3 class="page-litle">
			Categorias
		</h3>

	
	</div>
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					
<!-- 					<div class="d-flex justify-content-between">
						<h4 class="card-title">Categorias</h4>
						<div class="btn-group">
							<h4 class="card-title">
									<a href="#"><i class="bi bi-download"></i>
										Exportar	</a>
																	
							</h4>
						</div>					
					</div> -->

					<div class="table-responsive">
						<table id="order-listing" class="table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($categories as $category)
								<tr>
								<th scope="row">{{$category->id}}</th>
								<td> <a href="{{route('categories.show',$category)}}">{{$category->name}}</a> </td>
								
								<th>{{$category->description}}</th>
								
								<td style="width:50px;">
									{!! Form::open(['route'=>['categories.destroy',$category],'method'=>'DELETE'])!!}


									<a class="jsgrid-button jsgrid-edit-button" href="{{route('categories.edit',$category)}}" title="Editar">
										<i class="bi bi-pencil-fill"></i>
									</a>

									<a class="jsgrid-button jsgrid-destroy-button" href="{{route('categories.destroy',$category)}}" type="submit" title="Eliminar">
									<i class="bi bi-trash3-fill"></i>
									
									</a>



									{!! Form::close() !!}
								</td>
							
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
<!-- Aqui termina el contenido------------------------------------------- -->


