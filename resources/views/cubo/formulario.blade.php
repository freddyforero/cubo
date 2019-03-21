@extends('layouts.app')

@section('content')
<div class="container">
        @if (session('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
        @endif
        @iF (count($errors))
            <div class= "alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                {{ $error  }} <br>
            @endforeach
            </ul>
            </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Cube Summation</center></div>
                <div class="card-body">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'ingresar', 'files' =>true]) !!}
                            @include('cubo.Partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
