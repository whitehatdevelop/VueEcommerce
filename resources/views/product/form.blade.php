<form action="{{ route($product->url(), $product->id) }}" method="post" class="app-form" >
@method( $product->method() )
@csrf
<div>
    <label for="title">Título del producto</label>
    <input value="{{ $product->title }}" name="title" type="text" class="form-control">
</div>

<div>
    <label for="description">Descripción del producto</label>
    <textarea name="description" class="form-control">{{ $product->description }}</textarea>
</div>

<div>
    <label for="price">Precio del producto</label>
    <input value="{{ $product->price }}" name="price" type="number" value="0" class="form-control">
</div>

<div>
    <input type="submit" class="btn btn-primary" value="Guardar">
</div>
    
</form>