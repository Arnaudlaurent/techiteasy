@extends('layouts.master')

@section('title', 'Administration')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bonjour,</h3>
                </div>
                <div class="panel-body">
                    <p class="text-center">
                        Vous avez été invité(e) à passer une évaluation technique.<br/>
                        <br/>
                        Vous devrez effectuer cette évaluation sans l’aide d’une tierce personne ; cependant, vous pouvez (et nous vous le conseillons vivement) utiliser toutes les ressources dont vous pourriez avoir besoin (Internet, livres...), ainsi que votre environnement de développement favori pour préparer vos réponses.<br/>
                        <br/>
                        Un tutoriel et une aide sont à votre disposition pour vous permettre de vous familiariser avec l'application dans les meilleures conditions.<br/>
                        <br/>
                        Vous devrez ensuite réaliser nôtre questionnaire.
                        <br/>
                        Puis si vous le souhaitez vous pourrez en effectuer d'autre.
                    </p>
                </div>
                <div class="panel-body">
                    <a type="submit" class="btn btn-lg btn-extia btn-block" href="{{ route('bis') }}">C'est parti ! <i class="fa fa-rocket"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection