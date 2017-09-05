@extends('layouts.admin')

@section('title', 'Invitation')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><i class="fa fa-envelope"></i> Inviter un utilisateur</h2>
            <div class="col-md-5">
                <div class="col-lg-12">
                    <label>Email du candidat :</label>
                    <br/>
                    <input type="email"/>
                </div>
                <div class="col-md-12">
                    <label class="col-md-7">Questionnaire obligatoire:</label>

                    <input class="col-md-5" type="email"/>
                </div>
                <div class="col-md-12">

                    <label class="col-md-7">Questionnaire optionnel 1:</label>
                    <input  class="col-md-5" type="email"/>
                </div>
                <div class="col-md-12">
                    <label class="col-md-7">Questionnaire optionnel 2:</label>
                    <input class="col-md-5" type="email"/>
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
                            <input type="number"/>
                        </div>
            </div>
            <div class="col-lg-7">
                <div class="col-md-12">
                    <textarea class="col-xs-12 col-md-12" placeholder="Message pour l'utilisateur" rows="12"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-lg btn-extia btn-block"> Envoyer</button>
            </div>

        </div>
    </div>

@endsection