<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
            $crud = Crud::all();
            return view('crud.index', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
         return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $crud = Crud::create([
            'nama' => $request->nama,
            'barang' => $request->barang,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $crud = Crud::findOrFail($id);
        return view('crud.show',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $crud = Crud::findOrFail($id);
        return view('crud.edit',compact('crud'));
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
        $crud = Crud::findOrFail($id);
        $crud->update([
            'nama' => $request->nama,
            'barang' => $request->barang,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Crud::findOrFail($id)->delete();
        return redirect(route('crud.index'));
    }
}
