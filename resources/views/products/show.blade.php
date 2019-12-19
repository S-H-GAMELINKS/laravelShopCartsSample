{{ $product->name }}

{{ $product->description }}

{{ $product->price }}

<form method="post" action="/carts">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="qty" value="1">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <input type="hidden" name="weight" value="0">
    <input type="submit">
</form>