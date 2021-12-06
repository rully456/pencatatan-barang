<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(10);
        return view('listItem', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insertItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item();
        $item->item_code = $request->item_code;
        $item->name = $request->name;
        $item->number_register = $request->number_register;
        $item->brand = $request->brand;
        $item->size = $request->size;
        $item->material = $request->material;
        $item->purchased = $request->purchased;
        $item->no_factory = $request->no_factory;
        $item->no_frame = $request->no_frame;
        $item->no_machine = $request->no_machine;
        $item->no_police = $request->no_police;
        $item->no_bpkb = $request->no_bpkb;
        $item->origin = $request->origin;
        $item->price = $request->price;
        $item->description = $request->description;
        if (Item::exists()) {
            $lastItem = Item::select('id')->latest('created_at')->first();
            $lastId = $lastItem->id + 1;
            $item->qrcode = '127.0.0.1:8000/showItem/' . strval($lastId);
        } else {
            $item->qrcode = '127.0.0.1:8000/showItem/1';
        }
        $item->save();

        return view('insertItem');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('showItem', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->item_code = $request->item_code;
        $item->name = $request->name;
        $item->number_register = $request->number_register;
        $item->brand = $request->brand;
        $item->size = $request->size;
        $item->material = $request->material;
        $item->purchased = $request->purchased;
        $item->no_factory = $request->no_factory;
        $item->no_frame = $request->no_frame;
        $item->no_machine = $request->no_machine;
        $item->no_police = $request->no_police;
        $item->no_bpkb = $request->no_bpkb;
        $item->origin = $request->origin;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();
        return view('showItem', compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return back();
    }
    public function search(Request $request)
    {
        if (request('search')) {
            $items = Item::where('name', 'like', "%{$request->search}%")->orWhere('item_code', 'like', "%{$request->search}%")->paginate(10)->withQueryString();
        }
        return view('listItem', compact('items'));
    }
}
