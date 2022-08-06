<?php

namespace App\Http\Controllers;

use App\Models\TemplateText;
use Illuminate\Http\Request;
use App\Models\TemplateAudio;
use App\Models\TemplateImage;
use App\Models\TemplateVideo;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('home', [
            'texts'  => TemplateText::where('status', 1)->get(),
            'images' => TemplateImage::where('status', 1)->get(),
            'audios' => TemplateAudio::where('status', 1)->get(),
            'videos' => TemplateVideo::where('status', 1)->get(),
        ]);
    }

    public function confirmed_indication(Request $request)
    {
        $key_array_post = preg_grep('/^(template_text_)[0-9]+$/i', array_keys($request->post()));
        $templates_array = array_intersect_key($request->post(), array_flip($key_array_post));
        $templates_text = implode(',', $templates_array);

        $key_array_post = preg_grep('/^(template_image_)[0-9]+$/i', array_keys($request->post()));
        $templates_array = array_intersect_key($request->post(), array_flip($key_array_post));
        $template_image = implode(',', $templates_array);

        $key_array_post = preg_grep('/^(template_audio_)[0-9]+$/i', array_keys($request->post()));
        $templates_array = array_intersect_key($request->post(), array_flip($key_array_post));
        $template_audio = implode(',', $templates_array);

        $key_array_post = preg_grep('/^(template_video_)[0-9]+$/i', array_keys($request->post()));
        $templates_array = array_intersect_key($request->post(), array_flip($key_array_post));
        $template_video = implode(',', $templates_array);

        if(!$templates_text AND !$template_audio AND !$template_image AND !$template_video){
            return redirect()->route('home');
        }

        dd($templates_text, $template_image, $template_audio, $template_video);
    }

}
