@extends('layouts.admin')

@section('title', 'Invitation')

@section('content')
    <div class="row">
        {!! Form::open(array('url' => URL::route('createInvitation'),'method' => 'post')) !!}
        {{ csrf_field() }}
        <div class="form-group">
            <h2 class="page-header"><i class="fa fa-envelope"></i> Inviter un candidat</h2>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <label> Prénom du candidat :</label>
                            {!! Form::text('first_name', '' , array('class' => 'form-control', 'placeholder' => 'Prénom', 'required' => 'required')) !!}
                        </div>
                    </div>
                    <br/>
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <label for="name"> Nom du candidat :</label>
                            {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Nom', 'required' => 'required')) !!}
                        </div>
                    </div>
                    <br/>
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <label>Email du candidat :</label>
                            {!! Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'email@domain.fr', 'required' => 'required')) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br/>
                        <label class="col-md-6">Questionnaire obligatoire:</label>
                        <select class="col-md-6" name="q0">
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
                        <select class="col-md-6" name="q1">
                            @foreach($questionnaires as $questionnaire)
                                <option>{{ $questionnaire->title }}
                                    @foreach($questionnaire->categories as $category)
                                        {{ $category->name }}
                                </option>
                            @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="col-md-6">Questionnaire optionnel 2:</label>
                        <select class="col-md-6" name="q2">
                            @foreach($questionnaires as $questionnaire)
                                <option>{{ $questionnaire->title }}
                                    @foreach($questionnaire->categories as $category)
                                        {{ $category->name }} </option>
                            @endforeach
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <div class="tpsInvit">
                        <div class="col-md-12">
                            <br/>
                            <label class="col-md-6">Option de temps :</label><input name="option_tps" type="time" class="col-md-6 timer"/><br/>
                            <div class="col-md-12">
                                <input type="radio" name="ch"/>
                                <label>Par question </label>
                            </div>
                            <div class="col-md-12">
                                <input type="radio" name="ch"/>
                                <label>Pour tout le questionnaire </label>
                            </div>
                            <div class="col-md-12">
                                <input type="radio" name="ch" data-tps="noTime"/>
                                <label>Pas de temps</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="col-xs-12 col-md-12" placeholder="Message pour l'utilisateur" rows="19"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="col-md-12 btn btn-lg btn-extia btn-block "> Envoyer</button>
    {!! Form::close() !!}


@endsection

@section('script')
    @if (count($errors) > 0)

        new Noty({
        type: 'error',
        layout: 'topRight',
        theme: 'mint',
        text: '{{ $errors->first() }}',
        timeout: 2500,
        progressBar: true,
        closeWith: ['click', 'button'],
        animation: {
        open: 'noty_effects_open',
        close: 'noty_effects_close'
        },
        id: false,
        force: false,
        killer: false,
        queue: 'global',
        container: false,
        buttons: [],
        sounds: {
        sources: [],
        volume: 1,
        conditions: []
        },
        titleCount: {
        conditions: []
        },
        modal: false
        }).show()
    @endif
    @if (session('success'))

        new Noty({
        type: 'success',
        layout: 'topRight',
        theme: 'mint',
        text: '{{ session('success') }}',
        timeout: 2500,
        progressBar: true,
        closeWith: ['click', 'button'],
        animation: {
        open: 'noty_effects_open',
        close: 'noty_effects_close'
        },
        id: false,
        force: false,
        killer: false,
        queue: 'global',
        container: false,
        buttons: [],
        sounds: {
        sources: [],
        volume: 1,
        conditions: []
        },
        titleCount: {
        conditions: []
        },
        modal: false
        }).show()
    @endif
@stop