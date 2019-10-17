@extends('layouts.app')

@section('title')
    Crear Categoría
@endsection

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Nueva Categoría</h1>
                <form action=" {{ route('categories.store') }}" method="POST" enctype="multipart/form-data"> <!-- Agrega multipart para poder enviar archivos -->
                    {{ csrf_field() }} <!-- Manda el token por seguridad de laravel -->


                    <div class="form-group {{ $errors -> has('name') ? 'has-error':'' }} "> <!-- Si tiene errore en la pila con el name del input -->
                        <label for="name">Nombre de la Categoría</label> <!-- usa el id del input -->
                        <input class="form-control" type="text" name="name" id="name" 
                        placeholder="Nombre" value=" {{ old('name') }}"> <!-- old(name) para resguardar el valor asignado -->

                        @if($errors -> has('name'))
                            <span class="help-block">
                                <strong> {{ $errors -> first('name') }} </strong> <!-- de la pila de errores traer el primer error -->
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors -> has('image') ? 'has-error':'' }} ">
                        <label for="image">Imagen</label>
                        <input type="file" name="image" id="image"> <br>

                        @if($errors -> has('image'))
                            <span class="help-block">
                                <strong> {{ $errors -> first('image') }} </strong>
                            </span>
                        @endif
                    </div>

                    <button class="btn btn-primary" type="submit">Guardar</button>
                    
            </form>
            </div>
        </div>
    </div>

@endsection