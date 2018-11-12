@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbtipodocumento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tbtipodocumento, ['route' => ['tbtipodocumentos.update', $tbtipodocumento->id], 'method' => 'patch']) !!}

                        @include('tbtipodocumentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection