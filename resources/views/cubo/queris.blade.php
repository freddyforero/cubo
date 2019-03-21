@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>INFORMACIÓN INGRESADA</center></div>
                <div class="card-body">
                    <div class="panel-body">
                        <ul>
                            <li>TestCase: <b>{{ $T }} </b></li>
                            <li>Mayor Dimension de la matriz: <b>{{ $N }} </b></li>
                            <li>Numero de QUERIS: <b>{{ $M }} </b></li>
                            <li>Valor ingresado en la coordenada: <b>{{ $W }} </b></li>
                            <li>Coordenada de la Matriz que fue actualizada: <b>{{ $V1 }} </b></li>
                        </ul>
                    </div>
                </div>
                @if($M == 1)
                    <div class="card-header"><center>QUERY 1</center></div>
                    <div class="card-body">
                    <div class="panel-body">
                        <ul>
                            <li> {{ $T }} </li>
                            <li> {{ $N }} </li>
                            <li> {{ $M }} </li>
                            <li> {{ $W }} </li>
                        </ul>
                    </div>
                </div>
                @elseif($M == 2)
                    <div class="card-header"><center>QUERY 1</center></div>
                        <div class="card-body">
                        <div class="panel-body">

                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 2</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                           
                        </div>
                    </div>
                @elseif($M == 3)
                    <div class="card-header"><center>QUERY 1</center></div>
                        <div class="card-body">
                        <div class="panel-body">

                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 2</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                           
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 3</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                @elseif($M == 4)
                    <div class="card-header"><center>QUERY 1</center></div>
                        <div class="card-body">
                        <div class="panel-body">

                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 2</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                           
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 3</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 4</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                @elseif($M == 5)
                    <div class="card-header"><center>QUERY 1</center></div>
                        <div class="card-body">
                        <div class="panel-body">

                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 2</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                           
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 3</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 4</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <div class="card-header"><center>QUERY 5</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                           
                        </div>
                    </div>
                @else
                    <div class="card-header"><center>QUERY:</center></div>
                    <div class="card-body">
                        <div class="panel-body">
                            NO HAY DATOS INGRESADOS
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
