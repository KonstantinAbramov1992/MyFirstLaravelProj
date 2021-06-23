<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

//Здесь по заданию надо только показывать товар, так что все функции, кроме show, ведут в магазин.
//show показывает товар по отдельности

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->paginate(2);
        return view('shop.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('shop.index')->with('items', $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('shop.index')->with('items', $items);
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
        return view('shop.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('shop.index')->with('items', $items);
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
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('shop.index')->with('items', $items);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('shop.index')->with('items', $items);
    }
}
