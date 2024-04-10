<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request){
        $file = $request->file('image');
        $request->image->storeAs('/', $file->getClientOriginalName());
    }
}
