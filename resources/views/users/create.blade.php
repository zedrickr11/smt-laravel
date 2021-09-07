<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Nombre: </label>
    <input type="text" name="name">

    <br>

    <label for="email">Email: </label>
    <input type="email" name="email">

    <br>

    <label for="password">Password: </label>
    <input type="password" name="password">

    <br>

    <button>Guardar</button>
</form>