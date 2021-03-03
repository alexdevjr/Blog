@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
                @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary formulario-editar']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('editar') == 'ok' )
        <script>
            Swal.fire(
                '!Actualizado!',
                'El rol se actualizó con éxito',
                'success'
            )
        </script>
    @endif

    <script>

        $('.formulario-editar').submit(function(e){
            e.preventDefault();

            this.submit();
        });
    </script>
@stop