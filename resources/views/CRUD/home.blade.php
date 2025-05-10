@extends('master')

@section('content')
<h2>Hello User test</h2>

<table class="table table-striped" style="border:1px solid #000; padding:5px; margin:3px;">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">BirthDate</th>
            <th scope="col">City</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td scope="row">{{ $loop->index + 1 }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{  $user->birthdate }}</td>
                <td>{{ $user->city }}</td>
                <td><a href="{{  route('users.edit', ['user' => $user->id]) }}">Edit User</a></td>
                <td><a href="{{ route('users.destroy',['user' => $user->id]) }}">Delete User</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
