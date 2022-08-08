@extends('template.index')

@section('title', 'Admin Login')

@section('links')
@endsection


@section('content')
    <form action="{{ route('admin.auth') }}" method="post">
        @csrf
        <label for="email">Email:</label>
        <input name="email" type="email" id="email" required>

        <label for="password">Senha:</label>
        <input name="password" type="password" required>

        <button>Entrar</button>
    </form>
@endsection
