@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')
    <div class="card">

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

        <div class="card-body">

            {!! Form::open(['route' => 'admin.tags.store']) !!}
                
                @include('admin.tags.partials.form')

                {!! Form::submit('Crear Etiqueta', ['class' => 'btn btn-primary formulario-crear']) !!}

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

    @if (session('crear') == 'ok' )
        <script>
            Swal.fire(
                '!Exito!',
                'La etiqueta se creó con éxito',
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

@endsection