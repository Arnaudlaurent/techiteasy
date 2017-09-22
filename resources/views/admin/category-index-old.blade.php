@extends('layouts.admin')

@section('title', 'Gestion des catégories')

@section('page', $page)

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="login-panel panel panel-default">
				<h1 class="page-header"><i class="fa fa-bookmark"></i> Catégories</h1>
				<ol class="breadcrumb">
					<li><a href="{!! route('dashboard') !!}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
					<li><a href="{!! route('admin.category.create') !!}"><i class="fa fa-plus-square"></i> Ajouter une catégorie</a></li>
				</ol>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nom</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
				@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td id="category-name-{{ $category->id }}">{{ $category->name }}</td>
							<td>
								<a href="{!! route('admin.category.edit', $category->id) !!}" class="question-badge edition-badge" title="Éditer la catégorie"><i class="fa fa-pencil-square-o"></i></a>
								<a class="btn-delete-category" data-toggle="modal" data-target="#categoryDeleteModal" title="Supprimer la catégorie" data-id="{{ $category->id }}" data-urldelete="{!! route('admin.category.destroy', $category->id) !!}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
				@endforeach
					</tbody>
				</table>
		</div>
	</div>

@endsection