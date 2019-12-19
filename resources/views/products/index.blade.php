<div class="row">
    @foreach($products as $product)
    <div class="card col-4 p-3">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</hh5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">{{ $product->price }}</p>
            <a href="#" class="btn btn-primary">Show Product</a>
        </div>
    </div>
    @endforeach
</div>

<a href="/products/create" class="btn btn-primary">New Products</a>