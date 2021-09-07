<button> <a href="{{ route('users.create') }}">Crear</a></button>
<table style="width: 100%;" border="1">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Fecha de creación</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
            <td>
                <button>
                    <a href="{{ route('users.edit', $user) }}">Editar</a>
                </button>
                <form action="{{ route('users.destroy', $user) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>