<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ItemControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
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
        $item->number_register = $request->register;
        $item->size = $request->size;
        $item->material = $request->material;
        $item->price = $request->price;
        $item->purchased = $request->purchased;
        $item->origin = $request->origin;
        $item->brand = $request->brand;
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
        $Item = Item::findOrFail($id);
        return view('showItem', compact('Item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    // public function logout()
    // {
    //     $user = Auth::user();
    //     $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
    // }
}
