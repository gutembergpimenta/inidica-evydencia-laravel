@extends('template.index')

@section('title', 'Admin Login')

@section('links')
    <a href="{{ route('admin.create.audio') }}">Add Audio</a>
    <a href="{{ route('admin.create.image') }}">Add Image</a>
    <a href="{{ route('admin.create.text') }}">Add Texto</a>
    <a href="{{ route('admin.create.video') }}">Add Video</a>
@endsection


@section('content')
    Olá {{ $connection->name }} seja bem vindo ao painel administrativo.
@endsection
