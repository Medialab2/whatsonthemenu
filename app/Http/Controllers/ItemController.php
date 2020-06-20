<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Item;

class ItemController extends Controller
{

    //TODO: (filteren op genre)

    public function index()
    {
        if (Auth::check()) {
        $items = Item::all()->where('user_id', auth()->id());
        return view('menu.index', compact('items'));
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
        
        $item = new Item([
            'user_id' => auth()->user()->id,
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'ingredients' => $request->get('ingredients')
        ]);

        $item->save();
        return redirect('/menu')->with('success', 'item added!');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('menu.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'ingredients'=>'required'
        ]);

        $item = Item::find($id);
        $item->name =  $request->get('name');
        $item->price = $request->get('price');
        $item->ingredients = $request->get('ingredients');
        $item->save();

        return redirect('/menu')->with('success', 'Menu updated!');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/menu')->with('success', 'item deleted!');
    
    }



}
