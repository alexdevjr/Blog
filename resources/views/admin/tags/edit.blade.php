@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
    <div class="card">

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary formulario-editar']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('editar') == 'ok' )
        <script>
            Swal.fire(
                '!Actualizado!',
                'La etiqueta se actualizó con éxito',
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

@endsection