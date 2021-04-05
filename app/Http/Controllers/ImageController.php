<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
        return view('image');
    }

    public function store(Request $request){
        $form = new Image();

        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->email = $request->input('email');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $form->image = $filename;
        } else {
            return $request;
            $form->image = '';
        }

        $form->save();
        return view('image')->with('image',$form);
    }
}
