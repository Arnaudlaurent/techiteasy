@extends('layouts.admin')

@section('title', 'Gestion des catégories')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="login-panel panel panel-default admin-content">
                <h1 class="page-header"><i class="fa fa-bookmark"></i> Catégories</h1>
                <ol class="breadcrumb">
                    <li><a href="{!! route('dashboard') !!}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                </ol>
                <table id="adri" class="table table-striped ">
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
                                <a href="{!! route('admin.category.edit', $category->id) !!}"
                                   class="question-badge edition-badge" title="Éditer la catégorie"><i
                                            class="fa fa-pencil-square-o"></i></a>
                                <a class="btn-delete-category" data-toggle="modal" data-target="#categoryDeleteModal"
                                   title="Supprimer la catégorie" data-id="{{ $category->id }}"
                                   data-urldelete="{!! route('admin.category.destroy', $category->id) !!}"><i
                                            class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $categories->render() !!}
                <div id="categoryDeleteModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {!! Form::open(array('url' => URL::route('admin.category.destroy', 0), 'method' => 'DELETE', 'id' => 'category-delete-form')) !!}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Supprimer la catégorie "<span id="category-name-delete"></span>"
                                </h4>
                            </div>
                            <div class="modal-body">
                                <p>Attention en supprimant cette catégorie toute les questions liées n'y seront plus
                                    attribuées. Êtes vous certain de de vouloir supprimer cette catégorie ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-extia">Supprimer</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 ">
            <div class="login-panel panel panel-default admin-content nomargintop">
                <div class="col-md-12">
                    <h2 class="page-header">Ajouter une catégorie</h2>
                    {!! Form::open(array('url' => URL::route('admin.category.store'),'method' => 'POST','id' => '')) !!}
                    <div class="form-group">
                        <label>Nom</label>
                        {!! Form::text('name', $category->name, array('class' => 'form-control', 'placeholder' => 'Nom', '	')) !!}
                    </div>
                    <button type="submit" class="btn btn-lg btn-extia btn-block">Ajouter <i class="fa fa-plus"></i>
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="login-panel panel panel-default admin-content 2 nomargintop">
                <div class="col-md-12">
                    <h2 class="page-header">Modifier une catégorie </h2>
                </div>
                <div class="form-group">
                    <label class="col-md-8">Nom de la catégorie à modifier : </label>
                    <select class="col-md-4">
                        @foreach($categories as $category)
                            <option>{{$category->name}}</option>{{ $newcatid = $category->id}}
                        @endforeach
                    </select>
                    {!! Form::open(array('url' => URL::route('admin.category.update',$newcatid),'method' => 'PUT'))!!}

                    {!! Form::text('name', $category->name, array('class' => 'form-control', 'placeholder' => 'Nom', '	')) !!}
                </div>
                <button type="submit" class="btn btn-lg btn-extia btn-block"> Modifier <i class="fa fa-check"></i>
                </button>
                {!! Form::close() !!}
            </div>
        </div>
        {!! $categories->render() !!}
        <div id="categoryDeleteModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::open(array('url' => URL::route('admin.category.destroy', 0), 'method' => 'DELETE', 'id' => 'category-delete-form')) !!}

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Supprimer la catégorie "<span id="category-name-delete"></span>"</h4>
                    </div>
                    <div class="modal-body">
                        <p>Attention en supprimant cette catégorie toute les questions liées n'y seront plus attribuées. Êtes vous certain de de vouloir supprimer cette catégorie ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-extia">Supprimer</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection