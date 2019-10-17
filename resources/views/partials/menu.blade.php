    <!-- Hacemos el Menú -->
    
<nav class="navbar navbar-default navbar-static-stop">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brands" href="{{  url('/') }}"> Blog </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse"></div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('categories.index') }}">categorias</a>
                </li>
                <li>
                    <a href="{{ route('categories.create') }}">Nueva categoria</a>
                </li>
                
            </ul>
    </nav>