<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container">
  <div class="row">
    <div class="col-4">
      <form action="{{ route('product.update', $id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputEmail1">Редактирование товара</label>
          <input type="text" name="title" class="form-control" value="{{$product->title}}"  placeholder="Title">
          <small id="emailHelp" class="form-text text-muted">Введите новое название товара</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Редактирование описания товара</label>
          <textarea type="text" name="description" class="form-control" value="{{ $product->description }}" placeholder="" ></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Редактирование пути к файлу изображения</label>
          <input type="text" name="image" class="form-control" value="{{ $product->image }}" >
          <small id="emailHelp" class="form-text text-muted">Полный путь к картинке</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Редактирование цены</label>
          <input type="text" name="price" class="form-control" value="{{ $product->price }}" >
          <small id="emailHelp" class="form-text text-muted">Введите новую цену товара</small>
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
      </form>
    </div>
  </div>
</div>
