<!-- Nombredepartamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombredepartamento', 'Nombredepartamento:') !!}
    {!! Form::text('nombredepartamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais_id', 'Pais Id:') !!}
    {!! Form::text('pais_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tbdepartamentos.index') !!}" class="btn btn-default">Cancel</a>
</div>
