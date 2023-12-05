<div class="container">
    <nav class="#00695c teal darken-3">
        <div class="nav-wrapper">
            <a href="{{ route('index') }}" class="brand-logo">
                <i class="large material-icons">book</i>
                Libro de Visitas Digital
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('guests.index') }}">Día</a></li>
                <li><a href="{{ route('guests.index', ['all' => true]) }}">Historico</a></li>

            </ul>
        </div>
    </nav>
</div>
