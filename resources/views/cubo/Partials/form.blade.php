<div class="form-group">
    {{ Form::label('T', 'T, Testcases') }}
    {{ Form::text('T', null, ['class'=>'form-control', 'id'=>'T']) }}
</div>

<div class="form-group">
    {{ Form::label('N', 'N, Tamaño de la Matriz ') }}
    {{ Form::text('N', null, ['class'=>'form-control', 'id'=>'N']) }}
</div>

<div class="form-group">
    {{ Form::label('M', 'M, Numero de Queris') }}
    {{ Form::text('M', null, ['class'=>'form-control', 'id'=>'M']) }}
</div>

<div class="form-group">
    {{ Form::label('W', 'W, Valor para actualizar LA COORDEDENADA V') }}
    {{ Form::text('W', null, ['class'=>'form-control', 'id'=>'W']) }}
</div>

<div class="form-group">
    {{ Form::label('V1', 'V, Coordenada a ser actualizada') }}
    {{ Form::text('V1', null, ['class'=>'form-control', 'id'=>'V1']) }}
</div>

<div class="form-group">
    {{ Form::submit('INGRESAR', ['Class'=>'btn btn-sm btn-primary']) }}
    <a href="{{ route('funcionar') }}"  class="btn btn-sm btn-primary">FUNCIONAR</a>
</div>

<center><a href="{{ route('reset') }}"  class="btn btn-danger">TODO A 0</a></center>