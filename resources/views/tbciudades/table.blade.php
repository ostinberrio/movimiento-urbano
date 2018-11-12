<table class="table table-responsive" id="tbciudades-table">
    <thead>
        <th>Nombreciudad</th>
        <th>Departamentos Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tbciudades as $tbciudades)
        <tr>
            <td>{!! $tbciudades->nombreciudad !!}</td>
            <td>{!! $tbciudades->departamentos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tbciudades.destroy', $tbciudades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tbciudades.show', [$tbciudades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tbciudades.edit', [$tbciudades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>