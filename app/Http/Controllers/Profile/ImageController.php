<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function update(Request $request){
        $request->validate([
            'image' => 'required|image'
        ]);
        dd($request->all());
        // store avatar

        // return back()->with(['message' => 'Foto de perfil atualizada']);
        return redirect(route('profile.edit'));
    }
}
