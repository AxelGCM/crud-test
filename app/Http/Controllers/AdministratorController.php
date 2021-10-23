<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrators = Administrator::all();
        return view('administrators.index')->with('administrators',$administrators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = $request ->file('icon');
        $nombre= time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('static/images/users');
        $request->icon->move($destino,$nombre);
        $status = 0;
        if($request->status == 'Activo'){
            $status = 1;
        }
        Administrator::create([
            'names'=>$request->names,
            'icon'=> $nombre,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'area' => $request->area,
            'status' => $status
        ]);
        return redirect('/administrators');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrator = Administrator::find($id);
        return view('administrators.show')->with('administrator',$administrator);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrator = Administrador::find($id);
        return view('administrators.edit')->with('administrator',$administrator);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $administrator = Administrator::find($id);
        $input = $request->all;
        $administrator->update($input);
        return redirect()->route('administrators.index')
            ->with('success','Administrator actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Administrator::destroy($id);
        return redirect()->route('Administrators.index')
            ->with('succcess','Administrator eliminado satisfactoriamente');
    }
}
