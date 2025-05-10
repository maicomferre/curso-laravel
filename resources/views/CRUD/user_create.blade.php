@extends('master')

@section('content')
<h2>Hello User test</h2>
    <form action="{{ route('users.create', ["user" => $user->id]) }}" method="post" >
        @csrf
        <label for="firstname">Nome</label><br>
        <input class="form-control" id="firstname" type="text" name="firstname" required value="" />

        <label for="lastname">Sobrenome</label><br>
        <input class="form-control" id="lastname" type="text" name="lastname" required value="" />

        <label for="email">E-mail</label><br>
        <input class="form-control" id="email" type="email" name="email" required value="" />

        <label for="city">Cidade</label><br>
        <input class="form-control" id="city" type="text" name="city" required value="" />

        <label for="state">Estado</label><br>
        <input class="form-control" id="state" type="text" name="state" required value="" />

        <label for="address">Endereço</label><br>
        <input class="form-control" id="address" type="text" name="address" required value="" />

        <br>
        <input type="submit" value="Criar Novo Usuário" />
    </form>

@endsection
