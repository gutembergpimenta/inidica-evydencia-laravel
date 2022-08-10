@extends('template.index')

@section('title', 'Admin - Add Imagem')

@section('links')
    <a href="{{ route('admin.create.audio') }}">Add Audio</a>
    <a href="{{ route('admin.create.image') }}">Add Image</a>
    <a href="{{ route('admin.create.text') }}">Add Texto</a>
    <a href="{{ route('admin.create.video') }}">Add Video</a>
@endsection


@section('content')

    <form action="{{ route('admin.store.video') }}" method="post">
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
        <label for="video">Link do Video:</label>
        <input name="video" type="text" id="video" placeholder="O campo tem que ser um link." required>

        <label for="caption">Legenda anexada no video (opcional):</label>
        <input name="caption" type="text" id="caption" placeholder="Digite alguma descrição a ser anexada no video (opcional).">

        <button>Adicionar</button>
    </form>
@endsection
