<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros['clientes']=Cliente::paginate(20);
        return view('cliente.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'documento'=>'required|numeric|min:5',
            'nombre'=>'required|string|min:3|max:30',
            'apellido'=>'required|string|min:3|max:30',
            'foto'=>'required|mimes:jpg,jpge,png|max:1500',
            'telefono'=>'required|numeric|min:7',
            'direccion'=>'required|string|min:10|max:80',
            'correo'=>'required|string|min:10|max:50',
            'Pas'=>'required|string|min:10'
        ];

        $this->validate($request,$campos);

        // $datosCliente=request()->all();
        // return response()->json($datosCliente);   //muestra json en pagina
        $datosCliente=request()->except('_token');
        
        if ($request->hasFile('foto')) {
            # code...
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        }

        Cliente::insert($datosCliente);
        return redirect('cliente')->with('msn','Cliente registrado con exito');
        //return response()->json($datosCliente); //muestra los datos en forato jason en la pagina
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return view('cliente.edit');
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'documento'=>'required|numeric|min:5',
            'nombre'=>'required|string|min:3|max:30',
            'apellido'=>'required|string|min:3|max:30',
            'telefono'=>'required|numeric|min:7',
            'direccion'=>'required|string|min:10|max:80',
            'correo'=>'required|string|min:10|max:50',
            'Pas'=>'required|string|min:10'
        ];

        if ($request->hasFile('foto')) {
            $campos=[
                'foto'=>'required|mimes:jpg,jpge,png|max:1500'
            ];
        }

        $this->validate($request,$campos);

        $datosCliente=request()->except(['_token','_method']);

        if ($request->hasFile('foto')) {
            $cliente=Cliente::findOrFail($id);
            Storage::delete('public/'.$cliente->foto);
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        }

        Cliente::where('id','=',$id)->update($datosCliente);
        return redirect('cliente')->with('msn','Los datos se han actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $cliente->delete();
        // return redirect('cliente')->with('msn','Los datos se han eliminado con exito');

        
        $cliente=Cliente::findOrFail($id);
        if (Storage::delete('public/'.$cliente->foto)) {
            Cliente::destroy($id);
            # code...
        }
        //Cliente::destroy($id);
        return redirect('cliente')->with('msn','Los datos se han eliminado con exito');
    }
}
