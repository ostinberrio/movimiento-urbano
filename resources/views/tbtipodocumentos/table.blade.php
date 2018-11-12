<table class="table table-responsive" id="tbtipodocumentos-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tbtipodocumentos as $tbtipodocumento)
        <tr>
            <td>{!! $tbtipodocumento->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tbtipodocumentos.destroy', $tbtipodocumento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tbtipodocumentos.show', [$tbtipodocumento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tbtipodocumentos.edit', [$tbtipodocumento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>