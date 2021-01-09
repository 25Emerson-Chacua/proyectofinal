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
            return view('cliente.listado',['clientes'=>$clientes]);
        
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
    public function formularioAct($id){
        $clientes = Cliente::findOrFail($id);
        return view('cliente.form_actualiza', compact('clientes'));
    }

    public function actualizar(Request $request, $id){
        $clie = Cliente::findOrFail($id);
        $clie->nombreCliente = $request->input('nombrecli');
        $clie->cedulaCliente = $request->input('cedula');
        $clie->DireccionCliente = $request->input('direccion');
        $clie->telefonoCliente = $request->input('telefono');
        $clie->estado = '1';
        $clie->generoCliente = $request->input('genero');
        $clie->save();
        return redirect()->route('listadoClientes');
    }
    public function eliminar($id){
        $clie = Cliente::findOrFail($id);
        $clie->estado = '0';
        $clie->save();
        return redirect()->route('listadoClientes');
    }
    public function activar($id){
        $clie = Cliente::findOrFail($id);
        $clie->estado = '1';
        $clie->save();
        return redirect()->route('listadoClientes');
    }

    public function form_consulta(){
        return view('cliente.form_consultar');
     }
 
     public function consultar(Request $request){
        $nombre = $request->input('busqueda');
        $producto = Cliente::where('cedulaCliente', 'like',$nombre)->first();
        if($producto)
        return view('cliente.resultado', compact('producto'));
         else
         return view('cliente.mensaje');
 
     }
}
