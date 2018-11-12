@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbdepartamentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tbdepartamentos, ['route' => ['tbdepartamentos.update', $tbdepartamentos->id], 'method' => 'patch']) !!}

                        @include('tbdepartamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection