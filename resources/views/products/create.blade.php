<form method="post" action="/products">
    @csrf
    <input type="text" name="name">
    <textarea name="description"></textarea>
    <input type="number" name="price">
    <input type="submit" value="Add">
</form>