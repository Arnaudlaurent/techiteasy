@extends('layouts.admin')

@section('title', 'Invitation')

@section('page', $page)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><i class="fa fa-envelope"></i> Inviter un utilisateur</h2>
            <div>
                <div class="col-lg-12">
                    <label>Email de l'utilisateur</label>
                    <br/>
                    <input type="email"/>
                </div>
            </div>
            <br/>
            <div>
                <div class="col-md-4">
                    <label>Questionnaire obligatoire</label>
                    <br/>
                    <select>

                    </select>
                </div>
                <div class="col-md-4">
                    <label>Questionnaire optionnel 1</label>
                    <br/>
                    <input type="email"/>
                </div>
                <div class="col-md-4">
                    <label>Questionnaire optionnel 2</label>
                    <br/>
                    <input type="email"/>
                </div>
            </div>
            <div>

                        <label class="col-md-12">Option de temps :</label><br/>
                        <div class="col-md-12">
                            <input type="radio"/>
                            <label>Par question </label>
                        </div>
                        <div class="col-md-4">
                            <input type="radio"/>
                            <label>Pour tout le questionnaire </label>
                        </div>
                        <div class="col-md-6">
                            <input type="number"/>
                        </div>
                        <div class="col-md-12">
                            <input type="radio"/>
                            <label>Pas de temps</label>
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Message pour l'utilisateur"></textarea>
                        </div>
                        <div>
                           <button type="submit" class="btn btn-lg btn-extia btn-block"> Envoyer</button>
                        </div>
            </div>

        </div>
    </div>

@endsection