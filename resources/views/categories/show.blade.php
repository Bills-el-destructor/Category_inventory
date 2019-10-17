
@extends ('layouts.app')
@section('content')
    <div class="class row">
        <div class="mx-auto">
            <h1> {{ $category->name }}
                    <small>
                        Categoría creada el día {{ $category->created_at->format('d-m-Y') }}
                    </small>    
            </h1>

            @if($category->image)
                <a href=" {{ asset($category->image) }}" class="thumbnail" target="blank"> <!-- la classe thumbnail abre en una nueva pestaña en blanko -->
                    <img src="{{ asset($category->image) }}">
                </a>
            @endif
        </div>
    </div>
@endsection