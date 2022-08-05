@extends('template.index')

@section('title', 'Home')

@section('content')
  <form action="" method="post">
    @csrf

    @method('PUT')
    
    <input type="number" name="qt_contact" placeholder="Escolha a qtd. de contatos a ser indicado.">
    <h6>Escolha as mensagem a ser enviadas:</h6>
    <div class="div-box">
        <input type="checkbox" name="template1" value="1" id="1">
        <label for="1">MSG</label>
    </div>
    <div class="div-box">
        <input type="checkbox" name="template2" value="2" id="2">
        <label for="2">IMG</label>
    </div>
    <div class="div-box">
        <input type="checkbox" name="template3" value="3" id="3">
        <label for="3">AUDIO</label>
    </div>
    <div class="div-box">
        <input type="checkbox" name="template4" value="4" id="4">
        <label for="4">VIDEO</label>
    </div>
    <button>ENVIAR</button>
  </form>
@endsection