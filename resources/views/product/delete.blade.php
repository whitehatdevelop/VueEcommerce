<form action="{{route('products.destroy', $product->id)}}" method="post" onSubmit="return confirm(mensaje)">
@csrf
@method('delete')

    <input type="submit" value="Eliminar" class="btn btn-danger" onclick="mensaje = '¿Desea eliminar este producto?'">
</form>