<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Profile\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    public function update(UpdateImageRequest $request)
    {   
        $path = Storage::disk('pubic')->put('avatars', $request->file('avatar'));
        // $path = $request->file('image')->store('image_profile', 'public');
        
        if ($oldImage = $request->user()->image) {
            Storage::disk('public')->delete($oldAvatar);
        }

        auth()->user()->update(['image' => "/$path"]);
        
        return redirect(route('profile.edit'))->with('message', 'Imagem de Perfil atualizada!');

        // return back()->with(['message' => 'Foto de perfil atualizada']);
    }
}
