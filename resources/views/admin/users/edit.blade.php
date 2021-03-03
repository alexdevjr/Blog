@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>

            <h2 class="h5">Listado de Roles</h2>

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Roles', ['class' => 'btn btn-primary mt-2 formulario-editar']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('editar') == 'ok' )
        <script>
            Swal.fire(
                '!Actualizado!',
                'Se asignó los roles correctamente',
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