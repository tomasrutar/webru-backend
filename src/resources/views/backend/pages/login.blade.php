@extends('WebruBackendViews::layouts.simple')

@section('title', 'Login')

@section('__page')
    <div class="box-middle">
        <div class="login">
            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Přihlášení') !!}
                {!! Form::text('name', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'e-mail')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Heslo') !!}
                {!! Form::password('password', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'login')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Přihlásit!',
                  array('class'=>'btn btn-app')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection