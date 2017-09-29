@extends('layouts.admin')

@section('title', 'Invitation')

@section('content')
    <div class="row">
        <div class="col-md-12 form-group">
            <h2 class="page-header"><i class="fa fa-envelope"></i> Inviter un candidat</h2>
            <div class="col-md-6">

                <div class="col-lg-12">
                    <label class="col-lg-6"> Prénom du candidat :</label>
                    <input type="text" class="col-lg-6" placeholder="Prénom"/>
                </div>
                <div class="col-lg-12">
                    <label class="col-lg-6"> Nom du candidat :</label>
                    <input type="text" class="col-lg-6" placeholder="Nom"/>
                </div>
                <br/>
                <div class="col-lg-12">
                    <label class="col-lg-6">Email du candidat :</label>
                    <input type="email" class="col-lg-6" placeholder="email@domaine.fr"/>
                </div>
                <div class="col-md-12">
                    <label class="col-md-6">Questionnaire obligatoire:</label>
                    <select class="col-md-6">
                    @foreach($questionnaires as $questionnaire)
                        <option>{{ $questionnaire->title }}
                        @foreach($questionnaire->categories as $category)
                            {{ $category->name }} </option>
                        @endforeach
                    @endforeach
                    </select>
                </div>
                <div class="col-md-12">

                    <label class="col-md-6">Questionnaire optionnel 1:</label>
                    <select class="col-md-6">
                        @foreach($questionnaires as $questionnaire)
                            <option>{{ $questionnaire->title }}
                                @foreach($questionnaire->categories as $category)
                                    {{ $category->name }} </option>
                        @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="col-md-6">Questionnaire optionnel 2:</label>
                    <select class="col-md-6">
                        @foreach($questionnaires as $questionnaire)
                            <option>{{ $questionnaire->title }}
                                @foreach($questionnaire->categories as $category)
                                    {{ $category->name }} </option>
                        @endforeach
                        @endforeach
                    </select>
                </div>
                <label class="col-md-12">Option de temps :</label><br/>
                <div class="col-md-12">
                    <input type="radio"/>
                    <label>Par question </label>
                </div>
                <div class="col-md-12">
                    <input type="radio"/>
                    <label>Pour tout le questionnaire </label>
                </div>
                <div class="col-md-12">
                    <input type="radio"/>
                    <label>Pas de temps</label>
                </div>
                <div class="col-md-6">
                    <input type="time"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-md-12">
                    <textarea class="col-xs-12 col-md-12" placeholder="Message pour l'utilisateur" rows="12"></textarea>
                </div>
            </div>
            <button type="submit" class="col-md-12 btn btn-lg btn-extia btn-block "> Envoyer</button>
        </div>
    </div>

@endsection