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
        return redirect('/menu')->with('success', 'feature added!');
    }

    public function edit($id)
    {
        $drinken = Drinken::find($id);
        return view('menu.edit', compact('drinken'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'ingredients'=>'required'
        ]);

        $drinken = Drinken::find($id);
        $drinken->name =  $request->get('name');
        $drinken->price = $request->get('price');
        $drinken->ingredients = $request->get('ingredients');
        $drinken->save();

        return redirect('/menu')->with('success', 'Menu updated!');
    }

    public function destroy($id)
    {
        $drinken = Drinken::find($id);
        $drinken->delete();

        return redirect('/menu')->with('success', 'item deleted!');
    
    }



}
