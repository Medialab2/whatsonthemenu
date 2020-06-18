<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Drinken;

class DrinkenController extends Controller
{

    //TODO: Add EDIT / Delete / Show ?
    //TODO: (filteren op genre)

    public function index()
    {
        if (Auth::check()) {
        $drinken = Drinken::all()->where('user_id', auth()->id());
        return view('menu.index', compact('drinken'));
    }
    else {
        return view('auth.login');
    }
    }

    public function create()
    {
        return view('menu.create');
    }



    public function store(Request $request)
    {
    	$request->validate([
            'name'=>'required',
            'price' =>'required',
            'ingredients' =>'required',    
        ]);
        
        $drinken = new Drinken([
            'user_id' => auth()->user()->id,
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'ingredients' => $request->get('ingredients')
        ]);

        $drinken->save();
        return redirect('/dashboard')->with('success', 'feature added!');
    }

}
