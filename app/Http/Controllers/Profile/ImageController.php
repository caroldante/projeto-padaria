<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    public function update(UpdateImageRequest $request)
    {   
        $path = $request->file('image')->store('image_profile', 'public');
        // dd($path);
        auth()->user()->update(['image' => "/$path"]);
        
        return redirect(route('profile.edit'))->with('message', 'Imagem de Perfil atualizada!');


        // return back()->with(['message' => 'Foto de perfil atualizada']);
    }
}
