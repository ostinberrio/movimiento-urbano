
<li class="{{ Request::is('tbpais*') ? 'active' : '' }}">
    <a href="{!! route('tbpais.index') !!}"><i class="fa fa-edit"></i><span>tbpais</span></a>
</li>

<li class="{{ Request::is('tbtipodocumentos*') ? 'active' : '' }}">
    <a href="{!! route('tbtipodocumentos.index') !!}"><i class="fa fa-edit"></i><span>tbtipodocumentos</span></a>
</li>

<li class="{{ Request::is('tbdepartamentos*') ? 'active' : '' }}">
    <a href="{!! route('tbdepartamentos.index') !!}"><i class="fa fa-edit"></i><span>tbdepartamentos</span></a>
</li>

<li class="{{ Request::is('tbciudades*') ? 'active' : '' }}">
    <a href="{!! route('tbciudades.index') !!}"><i class="fa fa-edit"></i><span>tbciudades</span></a>
</li>

<li class="{{ Request::is('tbpersonas*') ? 'active' : '' }}">
    <a href="{!! route('tbpersonas.index') !!}"><i class="fa fa-edit"></i><span>tbpersonas</span></a>
</li>

