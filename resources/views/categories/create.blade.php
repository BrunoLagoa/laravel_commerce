@extends('app')

@section('content')
    <div class="container">
        <h1>Create Categories</h1>

        {!! Form::open() !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            <br />
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Add Category', ['class'=>'btn btn-primary form-control']) !!}

        </div>

        {!! Form::close() !!}

    </div>
@endsection