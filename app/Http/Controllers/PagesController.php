<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show(Request $request) {
      $requests=request()->validate([
        'firstname'=>'required|max:15',
        'lastname'=>'required|max:20',
        'email'=>'required|email'
      ]);
      return view('result', compact('requests'));
    }
}
