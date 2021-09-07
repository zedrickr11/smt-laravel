<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nombre: </label>
    <input type="text" name="name" value="{{ $user->name }}">

    <br>

    <label for="email">Email: </label>
    <input type="email" name="email" value="{{ $user->email }}">

    <br>

    <button>Actualizar</button>
</form>