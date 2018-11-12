<table class="table table-responsive" id="tbdepartamentos-table">
    <thead>
        <th>Nombredepartamento</th>
        <th>Pais Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tbdepartamentos as $tbdepartamentos)
        <tr>
            <td>{!! $tbdepartamentos->nombredepartamento !!}</td>
            <td>{!! $tbdepartamentos->pais_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tbdepartamentos.destroy', $tbdepartamentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tbdepartamentos.show', [$tbdepartamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tbdepartamentos.edit', [$tbdepartamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>