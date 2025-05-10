@extends('master')

@section('content')
<h2>Hello User test</h2>
    <form action="{{ route('users.store') }}" method="post" >
        @csrf
        <label for="firstname">Nome</label><br>
        <input class="form-control" id="firstname" type="text" name="firstname" required value="" placeholder="First Name" />

        <label for="lastname">Sobrenome</label><br>
        <input class="form-control" id="lastname" type="text" name="lastname" required value="" placeholder="Last Name" />

        <label for="email">E-mail</label><br>
        <input class="form-control" id="email" type="email" name="email" required value="" placeholder="E-mail" />

        <label for="city">Cidade</label><br>
        <input class="form-control" id="city" type="text" name="city" required value="" placeholder="City" />

        <label for="state">Estado</label><br>
        <input class="form-control" id="state" type="text" name="state" required value="" placeholder="State"/>

        <label for="address">Endereço</label><br>
        <input class="form-control" id="address" type="text" name="address" required value="" placeholder="Address" />

        <label for="phone">Phone Number</label><br>
        <input class="form-control" id="phone" type="text" name="phone" required value="" placeholder="PhoneNumber" />

        <label for="cpf">CPF</label><br>
        <input class="form-control" id="cpf" type="text" name="cpf" required value="" placeholder="CPF" />

        <label for="birthdate">Birth Date</label><br>
        <input class="form-control" id="birthdate" type="date" name="birthdate" required value="" placeholder="Birth Date" />

        <label for="password">Password</label><br>
        <input class="form-control" id="password" type="password" name="password" required value="" placeholder="Password" />

        <br>
        <input type="submit" value="Criar Novo Usuário" />
    </form>

@endsection
