@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbpais
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tbpais, ['route' => ['tbpais.update', $tbpais->id], 'method' => 'patch']) !!}

                        @include('tbpais.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection