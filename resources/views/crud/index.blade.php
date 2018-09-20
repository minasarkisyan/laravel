<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container">
<br/>
<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Price$</th>
    <th scope="col">Created</th>
    <th scope="col">Updated</th>
  </tr>
</thead>
<tbody>

  @foreach($products as $product)
  <tr>
    <td>{{$product['id']}}</td>
    <td>{{$product['title']}}</td>
    <td>{{$product['description']}}</td>
    <td>{{$product['image']}}</td>
    <td>{{$product['price']}}</td>
    <td>{{$product['created_at']}}</td>
    <td>{{$product['updated_at']}}</td>

    <form action="{{ route('product.show', $product['id'])}}" method="get">
      @csrf
      <a href="{{ route('product.show', $product['id'])}}" class="btn btn-info">Посмотреть</a></td>
    </form>
    <td>
    <td><a href="" class="btn btn-warning">Редактировать</a></td>
    <td>
      <form action="{{route('product.destroy', $product['id'])}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Удалить</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>

</table>
<button class="btn btn-success" type="submit"><a href="{{route('product.create')}}">Добавить товар</a></button>
</div>
