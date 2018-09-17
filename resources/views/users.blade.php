<a href="form"></a>

<table>
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
    </tr>
    @endforeach
</table>

<a href="{{ route('form') }}">НАЗАД</a>

<div class="container">
  @yield('form')
</div>
