<?php

namespace App\Http\Controllers;

use App\Models\M_Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }
    public function read()
    {
        $data = M_Crud::all();
        return view('product.read')->with(
            [
                'data' => $data,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        M_Crud::insert($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = M_Crud::findOrFail($id);
        return view('product.edit')->with([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = M_Crud::findOrFail($id);
        $data->name = $request->name;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = M_Crud::findOrFail($id);
        $data->delete();
    }
}