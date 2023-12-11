<div class="watch-grid">
    @foreach ($products as $product)
        @if(!empty($product->model_number))
        <div class="watch">
            <img src="{{ asset('products/' . $product->model_number . '.png') }}" alt="{{ $product->large_title }}">
            <h2>{{ $product->large_title }}</h2>
            <p>{{ $product->description }}</p>
        </div>
        @endif
    @endforeach
</div>
