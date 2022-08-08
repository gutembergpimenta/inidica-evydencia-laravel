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
        @foreach ($images as $image)
            <div class="div-box">
                <input type="checkbox" name="template_image_{{ $image->id }}" value="{{ $image->id }}" id="template_image_{{ $image->id }}">

                <label for="template_image_{{ $image->id }}">
                    <img src="{{ $image->image }}" alt="" srcset="">
                </label>

                <label for="template_image_{{ $image->id }}">{{ $image->caption }}</label>
            </div>
        @endforeach
    @endif

    @if ($audios)
        @foreach ($audios as $audio)
            <div class="div-box">
                <input type="checkbox" name="template_audio_{{ $audio->id }}" value="{{ $audio->id }}" id="template_audio_{{ $audio->id }}">
                <label for="template_audio_{{ $audio->id }}"></label>
                <audio controls>
                    <source src="{{ $audio->audio }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        @endforeach
    @endif

    @if ($videos)
        @foreach ($videos as $video)
            <div class="div-box">
                <input type="checkbox" name="template_video_1" value="1" id="template_video_1">
                <label for="template_video_1">VIDEO</label>
            </div>
        @endforeach
    @endif

    <button>ENVIAR</button>
	</form>
@endsection
