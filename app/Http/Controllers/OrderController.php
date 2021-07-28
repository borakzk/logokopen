<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class OrderController extends Controller
{
    public function formCreate()
    {
        return view('order.start');
    }
    public function formSave(Request $request)
    {
        $validated = $request->validate([
            'logo_name' => 'required|max:255',
            'website' => 'required',
            'informations' => 'required',
            'name' => 'required',
            'email' => 'required'
        ],[
            'logo_name.required' => 'Please enter logo name',
            'website.required' => 'Please enter website address',
            'informations.required' => 'Please enter logo informations',
            'name.required' => 'Please enter name',
            'email.required' => 'Please enter email'
        ]);

        

        $post = new Post;
        $post->logo_name = $request->logo_name;
        $post->website = $request->website;
        $post->informations = $request->informations;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->save();
        return redirect('order.confirm')->with('status', 'Blog Post Form Data Has Been inserted');

    }
}

        