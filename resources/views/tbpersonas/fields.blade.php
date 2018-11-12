<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudades Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudades_id', 'Ciudades Id:') !!}
    {!! Form::text('ciudades_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipodocumentos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipodocumentos_id', 'Tipodocumentos Id:') !!}
    {!! Form::text('tipodocumentos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ndocumento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ndocumento', 'Ndocumento:') !!}
    {!! Form::text('ndocumento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tbpersonas.index') !!}" class="btn btn-default">Cancel</a>
</div>
