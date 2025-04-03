<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nom :</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

    <label for="email">Email :</label>
    <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

    <button type="submit">Mettre à jour</button>
</form>
