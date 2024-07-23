<div class="card-list">
    @foreach($products as $product)
        <div class="card">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <button class="add-to-cart" data-product-id="{{ $product->id }}">Add to Cart</button>
        </div>
    @endforeach
</div>