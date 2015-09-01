@extends('store.account.index')

@section('data')

    <h3>Dados de Entrega</h3>

    <div class="col-lg-9">
        @if (session('address_exist'))
            <div class="alert alert-danger">
                {{ session('address_exist') }}
            </div>
        @endif

            {!! Form::open(['route'=>['account_perfil_update', $user->id], 'method'=>'put']) !!}

            <div class="form-group">

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::text('password', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">

                {!! Form::submit('Atualizar Perfil', ['class'=>'btn btn-primary']) !!}

            </div>

            {!! Form::close() !!}

    </div>
@stop