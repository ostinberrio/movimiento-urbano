<table class="table table-responsive" id="tbpersonas-table">
    <thead>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Ciudades Id</th>
        <th>Tipodocumentos Id</th>
        <th>Ndocumento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tbpersonas as $tbpersonas)
        <tr>
            <td>{!! $tbpersonas->nombre !!}</td>
            <td>{!! $tbpersonas->apellidos !!}</td>
            <td>{!! $tbpersonas->telefono !!}</td>
            <td>{!! $tbpersonas->email !!}</td>
            <td>{!! $tbpersonas->sexo !!}</td>
            <td>{!! $tbpersonas->ciudades_id !!}</td>
            <td>{!! $tbpersonas->tipodocumentos_id !!}</td>
            <td>{!! $tbpersonas->ndocumento !!}</td>
            <td>
                {!! Form::open(['route' => ['tbpersonas.destroy', $tbpersonas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tbpersonas.show', [$tbpersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tbpersonas.edit', [$tbpersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>