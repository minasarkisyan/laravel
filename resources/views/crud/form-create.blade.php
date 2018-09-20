<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container">
  <div class="row">
    <div class="col-4">
      <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Название товара</label>
          <input type="text" name="title" class="form-control"  placeholder="Title">
          <small id="emailHelp" class="form-text text-muted">Введите название товара</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Описание товара</label>
          <textarea type="text" name="description" class="form-control"  placeholder="Description"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Путь к изображению</label>
          <input type="text" name="image" class="form-control" >
          <small id="emailHelp" class="form-text text-muted">Полный путь к картинке</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Цена</label>
          <input type="text" name="price" class="form-control" >
          <small id="emailHelp" class="form-text text-muted">Введите цену товара</small>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
    </div>
  </div>
</div>
