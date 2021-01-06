<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function index(){
    
            $clientes = DB::table('clientes')->get();
            return view('cliente.clientes',['clientes'=>$clientes]);
        
    }
    public function formularioReg(){
        $clientes = Cliente::all();
        return view('cliente.form_registro',compact('clientes'));
    }

    public function registrar( Request $request){

        $cliente = new Cliente();
        $cliente->nombreCliente = $request->input('nombrecli');
        $cliente->cedulaCliente = $request->input('cedula');
        $cliente->DireccionCliente = $request->input('direccion');
        $cliente->telefonoCliente = $request->input('telefono');
        $cliente->generoCliente = $request->input('genero');
        $cliente->save();
        return redirect()->route('listadoClientes');
    }
}
