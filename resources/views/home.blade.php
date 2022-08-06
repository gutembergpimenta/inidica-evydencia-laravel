@extends('template.index')

@section('title', 'Home')

@section('content')
  <form action="" method="post">
    @csrf
    <input type="number" name="qt_contact" placeholder="Escolha a qtd. de contatos a ser indicado.">

		<h6>Escolha as mensagem a ser enviadas:</h6>

    @if ($texts)
        @foreach ($texts as $text)
            <div class="div-box">
                <input type="checkbox" name="template_text_{{ $text->id }}" value="{{ $text->id }}" id="template_text_{{ $text->id }}">
                <label for="template_text_{{ $text->id }}">{{ $text->text }}</label>
            </div>
        @endforeach
    @endif

    @if ($images)
        @foreach ($images as $images)
            <div class="div-box">
                <input type="checkbox" name="template_image_1" value="1" id="template_image_1">
                <label for="template_image_1">IMG</label>
            </div>
        @endforeach
    @endif

    @if ($audios)
        @foreach ($audios as $audios)
            <div class="div-box">
                <input type="checkbox" name="template_audio_1" value="1" id="template_audio_1">
                <label for="template_audio_1">AUDIO</label>
            </div>
        @endforeach
    @endif

    @if ($videos)
        @foreach ($videos as $videos)
            <div class="div-box">
                <input type="checkbox" name="template_video_1" value="1" id="template_video_1">
                <label for="template_video_1">VIDEO</label>
            </div>
        @endforeach
    @endif

    <button>ENVIAR</button>
	</form>
@endsection
