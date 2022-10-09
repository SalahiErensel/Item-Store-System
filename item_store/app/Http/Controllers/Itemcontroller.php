<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\item;

class Itemcontroller extends Controller

{
    function insert(Request $request)
    
    {
        $name = $request->get('name');

        $price = $request->get('price');

        $image = $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images') , $image);

        $product = new item();

        $product -> name = $name;

        $product -> price = $price;

        $product -> image = $image;

        $product -> save();

        return redirect('/');

    }

    function read()
    
    {
        $item_data = item::all(); 

        return view('InsertRead' , ['data' => $item_data]);
    }

    function updateordelete(Request $request)
    
    {
        $id = $request->get('id');

        $name = $request->get('name');

        $price = $request->get('price');

        if($request->get('update') == 'update')
        
        {
            return view('update',['id'=>$id, 'name' => $name , 'price'=>$price]);
        }

        else
        {
            $product = item::find($id);

            $product ->delete();
        }

        return redirect('/');
    }

    function update(Request $request)
    
    {
        $id = $request->get('id');

        $name = $request->get('name');

        $price = $request ->get('price');

        $product = item::find($id);

        $product->name = $name;

        $product -> price = $price;

        $product ->save();

        return redirect('/');

    }
}
