@extends('adminlte::page')

@section('title', 'Devs Code JR')

@section('content_header')
    <h1>Crear Nueva Categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoría', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Crear Categoría', ['class' => 'btn btn-primary formulario-crear']) !!}

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
                '!Actualizado!',
                'La categoría se actualizó con éxito',
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