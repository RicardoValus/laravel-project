@foreach ($flights as $flight)
<div>
    <p>{{ $flight->name }}</p>
</div>
@endforeach
<form action="/flight/store" method="POST">
    @method('POST')
    @csrf
    <button type="submit">Cadastrar Usuário</button>
</form>
