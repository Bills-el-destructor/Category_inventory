@extends('layouts.app')

@section('title')
    Lista de Categorías
@endsection

@if($categories -> isEmpty())
    <p>No hay categorias</p>
@else
    @section('content')
    <h1>Categorías</h1>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $categories as $category)
                    <tr>
                        <td>{{ $category -> id }}</td>
                        <td>{{ $category -> name }}</td>
                        <td>
                            <a href="{{ route('categories.show', ['category' => $category->id]) }}">Ver más</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
@endif