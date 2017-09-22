@extends('layouts.admin')

@section('title', 'Invitation')

@section('content')
<div class="row">
    <div class="col-md-12">

        <table id="adri" class="table table-striped ">
            <thead>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date d'envoi d'invitation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->id }}</td>
                    <td id="candidat-name-{{ $candidat->id }}">{{ $candidat->first_name }}</td>
                    <td>{{ $candidat->name }}</td>
                    <td>{{ $candidat->email }}</td>
                    <td>{{ $candidat->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a class="btn-delete-candidat" data-toggle="modal" data-target="#candidatDeleteModal" title="Supprimer un candidat"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <div class="col-md-12">

    </div>

</div>



@endsection