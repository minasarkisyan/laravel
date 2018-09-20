<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text">{{ $description }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $price }}</li>
      <li class="list-group-item">{{ $image }}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>

</div>
