@extends('app')

@section('content')
    <div class="container">
        <h1>Edit Categories: {{ $category->name }}</h1>

        @if($errors->any())

            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li style="margin-left: 20px">{{ $error }}</li>
                @endforeach
            </ul>

        @endif

        {!! Form::model($category, ['route'=>['categories.update', $category->id], 'method'=>'put']) !!}

        @include('categories._form')

        <div class="form-group">

            {!! Form::submit('Save Category', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>
@endsection