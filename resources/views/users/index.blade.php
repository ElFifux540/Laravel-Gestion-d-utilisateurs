<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Modifier</a>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
</form>

<form method="GET" action="{{ route('users.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher un utilisateur...">
    <button type="submit">Rechercher</button>
</form>

@extends('layouts.app')

@section('content')
    <h1>Liste des Utilisateurs</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Modifier</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $users->links() }} <!-- Affichage de la pagination -->
@endsection
