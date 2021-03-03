@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}
                
                @include('admin.roles.partials.form')

                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary formulario-crear']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('crear') == 'ok' )
        <script>
            Swal.fire(
                '!Exito!',
                'El rol se creó con éxito',
                'success'
            )
        </script>
    @endif

    <script>

        $('.formulario-crear').submit(function(e){
            e.preventDefault();

            this.submit();
        });
    </script>
@stop