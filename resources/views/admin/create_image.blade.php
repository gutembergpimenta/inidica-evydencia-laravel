@extends('template.index')

@section('title', 'Admin - Add Imagem')

@section('links')
    <a href="{{ route('admin.create.audio') }}">Add Audio</a>
    <a href="{{ route('admin.create.image') }}">Add Image</a>
    <a href="{{ route('admin.create.text') }}">Add Texto</a>
    <a href="{{ route('admin.create.video') }}">Add Video</a>
@endsection


@section('content')

    <form action="{{ route('admin.store.image') }}" method="post">
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
        <label for="image">Link da Imagem:</label>
        <input name="image" type="text" id="image" placeholder="O campo tem que ser um link." required>

        <label for="caption">Legenda anexada na imagem (opcional):</label>
        <input name="caption" type="text" id="caption" placeholder="Digite alguma descrição a ser anexada na imagem (opcional).">

        <button>Adicionar</button>
    </form>
@endsection
