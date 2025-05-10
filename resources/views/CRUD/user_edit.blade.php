@extends('master')

@section('content')
<h2>Hello User test</h2>
    <form action="{{ route('users.update', ["user" => $user->id]) }}" method="post" >
        @method('put')
        @csrf
        <label for="firstname">Nome</label><br>
        <input class="form-control" id="firstname" type="text" name="firstname" required value="{{ $user->firstname }}" />

        <label for="lastname">Sobrenome</label><br>
        <input class="form-control" id="lastname" type="text" name="lastname" required value="{{ $user->lastname }}" />

        <label for="email">E-mail</label><br>
        <input class="form-control" id="email" type="email" name="email" required value="{{ $user->email }}" />

        <label for="city">Cidade</label><br>
        <input class="form-control" id="city" type="text" name="city" required value="{{ $user->city }}" />

        <label for="state">Estado</label><br>
        <input class="form-control" id="state" type="text" name="state" required value="{{ $user->state }}" />

        <label for="address">Endereço</label><br>
        <input class="form-control" id="address" type="text" name="address" required value="{{ $user->address }}" />

        <br>
        <input type="submit" value="Atualizar dados de {{ $user->firstname }}" />
    </form>

@endsection
