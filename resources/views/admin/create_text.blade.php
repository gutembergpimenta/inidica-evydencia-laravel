@extends('template.index')

@section('title', 'Admin - Add Imagem')

@section('links')
    <a href="{{ route('admin.create.audio') }}">Add Audio</a>
    <a href="{{ route('admin.create.image') }}">Add Image</a>
    <a href="{{ route('admin.create.text') }}">Add Texto</a>
    <a href="{{ route('admin.create.video') }}">Add Video</a>
@endsection


@section('content')

    <form action="{{ route('admin.store.text') }}" method="post">
        @if (session('status'))
            {{ session('status') }}
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <label for="text">Texto:</label>
        <input name="text" type="text" id="text" placeholder="Escreva uma texto para envio." required>

        <button>Adicionar</button>
    </form>
@endsection
