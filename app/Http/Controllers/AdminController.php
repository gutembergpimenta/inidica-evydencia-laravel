<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TemplateText;
use Illuminate\Http\Request;
use App\Models\TemplateAudio;
use App\Models\TemplateImage;
use App\Models\TemplateVideo;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function main(Request $request)
    {
        return view('admin.home',[
            'user' => Auth::user(),
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->name('admin.index');
        }
    }

    public function createAudio(Request $request)
    {
        return view('admin.create_audio');
    }

    public function storeAudio(Request $request)
    {
        $request->validate([
            'audio' => 'required|url',
        ]);

        $saveAudio = TemplateAudio::create([
            'audio' => $request->post('audio')
        ]);

        if($saveAudio){
            $request->session()->flash('status', 'Áudio adicionado com sucesso.');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Erro ao cadastrar áudio no banco de dados');
        return redirect()->back();

    }

    public function createImage(Request $request)
    {
        return view('admin.create_image');
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|url',
            'caption' => 'string|nullable'
        ]);

        $saveImage = TemplateImage::create([
            'image' => $request->post('image'),
            'caption' => $request->post('caption'),
        ]);

        if($saveImage){
            $request->session()->flash('status', 'Imagem adicionado com sucesso.');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Erro ao adicionar imagem no banco de dados.');
        return redirect()->back();

    }

    public function createText(Request $request)
    {
        return view('admin.create_text');
    }

    public function storeText(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $saveImage = TemplateText::create([
            'text' => $request->post('text'),
        ]);

        if($saveImage){
            $request->session()->flash('status', 'Texto adicionado com sucesso.');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Erro ao adicionar texto no banco de dados.');
        return redirect()->back();

    }

    public function createVideo(Request $request)
    {
        return view('admin.create_video');
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'video' => 'required|url',
            'caption' => 'string|nullable',
        ]);

        $saveImage = TemplateVideo::create([
            'video' => $request->post('video'),
            'caption' => $request->post('caption'),
        ]);

        if($saveImage){
            $request->session()->flash('status', 'Video adicionado com sucesso.');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Erro ao adicionar Video no banco de dados.');
        return redirect()->back();

    }
}
