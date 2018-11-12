<table class="table table-responsive" id="tbpais-table">
    <thead>
        <th>Nombrepais</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tbpais as $tbpais)
        <tr>
            <td>{!! $tbpais->nombrepais !!}</td>
            <td>
                {!! Form::open(['route' => ['tbpais.destroy', $tbpais->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tbpais.show', [$tbpais->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tbpais.edit', [$tbpais->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>