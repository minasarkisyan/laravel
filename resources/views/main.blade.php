<h1>Ты попал на эту старницу методом GET</h1>

<h3></h3>
<h1>Данные из БД</h1>
@foreach ($users as $user)
    <p>This is first_name {{ $user->first_name }}</p>
    <p>This is second_name {{ $user->second_name }}</p>
@endforeach
  
