<button type="button" class="familia-tarjeta" data-family="{{ $slug }}">
    <div class="tarjeta">
        <img src="{{ $imagen }}" alt="{{ $titulo }}">
        <h3>{{ $titulo }}</h3>
        @if(isset($descripcion))
            <p>{{ $descripcion }}</p>
        @endif
    </div>
</button>
